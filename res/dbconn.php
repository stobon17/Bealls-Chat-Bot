<?php
// IF DEPLOYING VIA DOCKER COMPOSE, VARIABLES ARE SET IN
// /Bealls-Chat-Bot/.env
$serverName = "db"; //DO NOT CHANGE
$dbUsername = ""; // CHANGE TO MATCH MYSQL_USERNAME
$dbPass = ""; // CHANGE TO MATCH MYSQL_PASSWORD
$dbName = "admin";

$conn = mysqli_connect($serverName, $dbUsername, $dbPass, $dbName);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
