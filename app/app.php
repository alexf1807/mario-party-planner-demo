<?php
// $dbservername = "localhost";
// $dbusername = "root";
// $dbpassword = "password";
// $dbname = "marioplanner";


$host = "us-cdbr-east-03.cleardb.com";
$dbusername = "badf35be0e3563";
$dbpassword = "42e91478";
$dbname = "heroku_1586ac4149cf2a0";

// Create connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
// $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

// mysqli_set_charset($conn, 'utf8')
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully<br><br>";