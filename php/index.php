<?php error_reporting(0); ?> 
<?php
session_start();

if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true) {
  header('Location: https://ratcult.repl.co/php/main.php');
  exit('You are already logged in, redirecting to main page.');
}

// The rest of your PHP code goes here...
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ratcult.repl.co/js/login.js"></script>
  <link rel="stylesheet" type="text/css" href="./css/login.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://ratcult.repl.co/js/app.js"></script>
</head>
<body>
	<section>
  <div class="form-box">
    <div class="form-value">
      <form id="loginForm" action="" method="post">
        <h2>Login</h2>
        <div class="inputbox">
          <ion-icon name="person-outline"></ion-icon>
          <input type="text" name="username" id="username" required>
          <label for="username">Username</label>
        </div>
        <div class="inputbox">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="password" name="password" id="password" required>
          <label for="password">Password</label>
        </div>
        <br>
        <button type="submit" name="submit">Log in</button>
        <br>
      </form>
      <br>
      <div id="errorMessage"></div>
      <div id="images"></div>
    </div>
  </div>
  </section>


  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
</body>
</html>