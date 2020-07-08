class Users {
    static getUsers(start, limit){
        $.ajax({
          url: "../php/users.php",
          method: "post",
          dataType: "text",
          data: {
            key: "get_users",
            start: start,
            limit: limit,
          },
          success: function (response) {
              
            if (response != "no_more") {
              $("#users-tbody").append(response);
              start += limit;
              Users.getUsers(start, limit);
            } else {
              $("#users-table").DataTable();
            }
            
          },
          error: (XMLHttpRequest, textStatus, errorThrown) => {
            console.log(textStatus);

            if (XMLHttpRequest.readyState == 4) {
              // HTTP error (can be checked by XMLHttpRequest.status and XMLHttpRequest.statusText)
            } else if (XMLHttpRequest.readyState == 0) {
              // Network error (i.e. connection refused, access denied due to CORS, etc.)
              alert("Network Error!");
            } else {
              // something weird is happening
            }
          },
        });
    }

    static addUser(){
        $("#add-user-form").submit(function (e) {
          e.preventDefault();
        
        let admin = $("#admin").prop("checked") == true ? 1 : 0;
        $.ajax({
          url: "../php/users.php",
          method: "post",
          dataType: "text",
          data: {
            key: "add_user",
            firstname: $("#firstname").val(),
            lastname: $("#lastname").val(),
            email: $("#email").val(),
            username: $("#username").val(),
            admin: admin,
          },
          success: function (response) {
            if (response == "exist") {
              $(".add-user-error").text("Email or username exist");
              $(".add-user-error").css("display", "block");
            } else if (response == "user_added") {

                $(".success-modal-text").text("User added successfully");
              $("#addUserModal").modal('hide');
              $("#successModal").modal("show");
              $("#users-tbody").empty(); 
              $("#add-user-form").trigger("reset");
              Users.getUsers(0,10);
            } else {
              console.log(response);

              $(".add-user-error").text("Error while creating user");
              $(".add-user-error").css("display", "block");
            }
          },
          error: (XMLHttpRequest, textStatus, errorThrown) => {
            console.log(textStatus);

            if (XMLHttpRequest.readyState == 4) {
              // HTTP error (can be checked by XMLHttpRequest.status and XMLHttpRequest.statusText)
            } else if (XMLHttpRequest.readyState == 0) {
              // Network error (i.e. connection refused, access denied due to CORS, etc.)
              alert("Network Error!");
            } else {
              // something weird is happening
            }
          },
        });

    });
    }
}

window.addEventListener("DOMContentLoaded", () => {
  Users.getUsers(0,10);
  Users.addUser();
});
