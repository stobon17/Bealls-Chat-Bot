<?php 
session_start();
$_SESSION['user']="simon";

echo "<html> <h1> Logged in as: " . $_SESSION['user'] . "</h1> </html>";
?>