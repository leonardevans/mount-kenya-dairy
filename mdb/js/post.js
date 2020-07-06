$(document).ready(()=>{
    $("#show-details").click(()=>{
        if($("#details").css("display") == "block"){

            $("#details").hide();
        }
        else{
            $("#details").show();
        }
        $("#comments").hide();
      $("#show-comments").removeClass("active");
      $("#show-details").addClass("active");

    })

    $("#show-comments").click(() => {
      if ($("#comments").css("display") == "block") {
        $("#comments").hide();
      } else {
        $("#comments").show();
      }
      $("#details").hide();
      $("#show-details").removeClass("active");
      $("#show-comments").addClass("active");

    });
})