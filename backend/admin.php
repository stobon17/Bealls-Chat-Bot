<?php
session_start();
$user = $_SESSION['user'];

$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect, "admin");

$get = mysqli_query($connect, "SELECT * FROM users WHERE username='$user'");

while ($row = mysqli_fetch_assoc($get))
{
    $admin = $row['isAdmin'];
    $name = $row['username'];
}

if ($admin == 0)
    die("<html> <h1> You're not an administrator! User logged in (" . $name . ") </h1> </html>");


mysqli_close($connect);
?>