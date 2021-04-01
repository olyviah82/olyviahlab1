$(document).ready(function() {                 
    $("#login_form").submit(function(e){
      e.preventDefault();
      $.ajax({
      url:'processlogin.php',
      type:'POST',
      data: {username:$("#inputEmail").val(), password:$("#inputPassword").val()},
      success: (resp) => {
          if (resp == "invalid") {
              $("#errorMsg").html("Invalid username and password!");
          } else {
              window.location.href =resp;
          }
      }
     });
  });
});