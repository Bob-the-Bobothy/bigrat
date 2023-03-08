<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('Location: index.php');
  exit('Error: You are not logged in, redirecting to login page.');
}

// The rest of your PHP code goes here...
?>
<head>
  <title>rats.</title>
  <link rel="stylesheet" type="text/css" href="https://ratcult.repl.co/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://ratcult.repl.co/js/big_app.js"></script>
  <script src="https://ratcult.repl.co/js/app.js"></script>
  <script type="module" src="https://md-block.verou.me/md-block.js"></script>
</head>
<body>
  <md-block src="https://ratcult.repl.co/md/bible.md">Da Bible</md-block>
  <span class=reference>
  <a class="reference" href="main.php">Back to Main Page</a>
  </span>
  <br><br>
  <div class="images" id="images"></div>
</body>