<?php
//start the session
session_start();

//connect to database`
$host = "mysql.apexhosting.gdn	";
$sqlusername = "apexMC1154731";
$sqlpassword = getenv('SQL_PASSWORD');
console.log($password);
$dbname = "apexMC1154731";
$conn = mysqli_connect($host, $sqlusername, $sqlpassword, $dbname);

//get the user's entered credentials
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

//validate the user's credentials
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

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
//mysqli_close($conn);
?>