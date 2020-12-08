<?php
$serverName = "db"; 
$dbUsername = "admin"; 
$dbPass = "admin123"; 
$dbName = "admin";

$conn = mysqli_connect($serverName, $dbUsername, $dbPass, $dbName);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
