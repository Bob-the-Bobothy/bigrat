<?php
$host = "mysql.apexhosting.gdn";
$sqlusername = "apexMC1154731";
$sqlpassword = getenv("SQL_PASSWORD");
$dbname = "apexMC1154731";
$conn = mysqli_connect($host, $sqlusername, $sqlpassword, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>