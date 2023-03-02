$(document).ready(function() {
  //handle login form submission
  $("#loginForm").submit(function(event) {
    event.preventDefault(); //prevent default form submission behavior
    var username = $("#username").val();
    var password = $("#password").val();
    $.ajax({
      type: "POST",
      url: "login.php",
      data: {
        username: username,
        password: password
      },
      success: function(response) {
        if (response == "success") {
          //redirect to the dashboard page
          window.location.href = "https://ratcult.repl.co/main.php";
        } else {
          //display error message
          $("#errorMessage").html("Invalid username or password.");
        }
      }
    });
  });
});