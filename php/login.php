<?php
//start the session
session_start();
//connect to database`
include_once("db_connect.php");

//get the user's entered credentials
$username = $_POST['username'];
$password = $_POST['password'];

//validate the user's credentials using prepared statements
$sql = "SELECT * FROM users WHERE username=? AND password=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) == 1) {
  //user is authenticated, create session variables
  $_SESSION['loggedin'] = true;
  $_SESSION['username'] = $username;
  echo "success";
} else {
  //invalid credentials, display error message
  echo "error";
}

//close the database connection
mysqli_close($conn);
?>