<?php
  session_start();
  if($_SESSION['loggedin'] !== true) {
    header('Location: index.html');
    exit('Error: You are not logged in, redirecting to login page.');
  }
  // The rest of your PHP code goes here...
?>

<head>
  <title>rats.</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="big_app.js"></script>
  <script src="app.js"></script>
</head>
<body>
  <div id="images"></div>
</body>