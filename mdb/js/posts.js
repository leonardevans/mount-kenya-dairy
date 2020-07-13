class Posts {
  static getPosts(start, limit) {
    $.ajax({
      url: "../php/posts.php",
      method: "post",
      dataType: "text",
      data: {
        key: "get_posts",
        start: start,
        limit: limit,
      },
      success: function (response) {

        if (response != "no_more") {
          $("#posts-tbody").append(response);
          start += limit;
          Posts.getPosts(start, limit);
        } else {
          $("#posts-table").DataTable();
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

  static deletePost(postid) {
    $("#delete-post-form").submit(function (e) {
      
      e.preventDefault();
      $.ajax({
        method:"post",
        url: "../php/deletepost.php",
        data: {
          key: "delete_post",
          postid: postid,
        },
        dataType: "text",
        success: function (response) {
          if (response == "post_deleted") {
            $("#deleteModal").modal("hide");
            $(".success-modal-text").text("Post deleted successfully");
            $("#successModal").modal("show");
            $("#posts-tbody").html("");
            Posts.getPosts(0, 10);
          } else {
            alert("Error while deleting post");
            console.log(response);
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
  Posts.getPosts(0, 10);
//   Posts.addPost();
//   Posts.deletePost();
});