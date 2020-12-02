<?php
//Header (Nav Bar)
require_once 'header.php';
require_once 'res/dbconn.php';


$sql = "SELECT * FROM users;";

$results = mysqli_query($conn, $sql);
echo "<html>";
echo "<h1 align='center' style='padding-top: 0.54em;'>User Info:</h1>";
echo "<hr>";
echo "<table align='center' style='padding-top: 25px;'>";
echo "<tr>";
            echo "<th scope='col'>User ID</th>";
            echo "<th scope='col'>Full Name</th>";
            echo "<th scope='col'>Email</th>";
            echo "<th scope='col'>Username</th>";
            echo "<th scope='col'>Hashed Password</th>";
            echo "<th scope='col'>isAdmin</th>";
        echo "</tr>"; 
    while ($row = mysqli_fetch_array($results))
    {
        echo "<tr>";
            echo "<td>" . $row["usersID"] . "</td>";
            echo "<td>" . $row["userFName"] . "</td>";
            echo "<td>" . $row["userEmail"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["userPwd"] . "</td>";
            echo "<td>" . $row["isAdmin"] . "</td>";
        echo "</tr>";
    }
echo "</table>";
echo "</html>";
?>