<?php
$error=''; 
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "admin");
 //sql query to fetch information of registered user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM users WHERE password='$pass' AND username='$user'");
while ($row = mysqli_fetch_assoc($query))
{
    $admin = $row['isAdmin'];
    $name = $row['username'];
}

 $rows = mysqli_num_rows($query);
 if($rows == 1 && $admin == 1){
 header("Location: adminpage.php"); // Redirecting to other page
 }
 elseif($rows == 1 && $admin == 0)
 {
header("Location: ../index.html");
 }
 else
 {
    $error = "Username or Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>