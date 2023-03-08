<?php
error_reporting(0);
session_start();
include_once("db_connect.php");

if(isset($_POST['message'])) {
    $message = $_POST['message'];
    $username = $_SESSION['username'];
    $query = "INSERT INTO chat (username, message) VALUES ('$username', '$message')";
    mysqli_query($conn, $query);
}

$query = "SELECT * FROM (SELECT * FROM chat ORDER BY id DESC LIMIT 10) sub ORDER BY id ASC";
$result = mysqli_query($conn, $query);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($rows as $row) {
    $username = $row['username'];
    $message = $row['message'];
    $timestamp = date('H:i:s', strtotime($row['timestamp']));
    echo "<span>$username:</span> $message <span>($timestamp)</span><br>";
}
?>
