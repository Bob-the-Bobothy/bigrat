<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('Location: index.php');
  exit('Error: You are not logged in, redirecting to login page.');
}

// The rest of your PHP code goes here...
?>
<!DOCTYPE html>
<html>
<head>
	<title>rats.</title>
   <link rel="stylesheet" type="text/css" href="https://ratcult.repl.co/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://ratcult.repl.co/js/chat.js"></script>
  <script src="https://ratcult.repl.co/js/app.js"></script>
  <script src="https://ratcult.repl.co/js/big_app.js"></script>
</head>
<body>
  <h2>Chatroom</h2>
  <div id="chatbox-container">
	<div id="chatbox"></div>
  </div>
  <br>
	<form>
		<input type="text" name="message" id="message" placeholder="Enter your message" class="normalbutton">
		<button type="button" class="normalbutton" id="send">Send</button>
	</form>
  <br>
  <span class=reference>
  <a class="reference" href="main.php">Back to Main Page</a>
  </span>
  <br><br>
  <div class="images" id="images"></div>
</body>
</html>