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
  <h2>Hello <?php echo $_SESSION['username'] ?>, welcome to the Rat Cult website.</h2>
  <p>This is the main page for the Rat Cult.</p>
  <br>
  <b>Reference Links:</b>
  <br><br>
  <span class=reference>
    <b class="reference">Internal:</b>
    <a class="reference" href="members.php">Member List</a>
    <a class="reference" href="chatroom.php">Chatroom</a>
    <a class="reference" href="bible.php">Bible (from Google Doc)</a>
    <b class="reference">External:</b>
    <a class="reference" href="https://docs.google.com/document/d/1_GVHxKXUqkPKM8GyKK4CMuMZXkkHNF-TRpUocb_GAqA/edit">The Raticate (Main Google Doc)</a>
    <a class="reference" href="https://forms.gle/GSnqYtHa8aCBRt5u8">Rat Cult Form</a>
     <a class="reference" href="https://discord.gg/vz2M5akweJ">Discord Server</a>
    <a class="reference" href="https://forms.gle/RCyAuMMMgewVJEcV7">Rat Cultist Application</a>
  </span>  
  <br><br>
  <!-- this goes at the bottom -->
  <div class="images" id="images"></div>
</body>