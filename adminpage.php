<?php

    //Header (Nav Bar)
    require_once 'header.php';
    require_once 'res/dbconn.php';
    
    $query = "SELECT isAdmin from users WHERE username = ?; ";
    $statement = mysqli_stmt_init($conn);

    $username = $_SESSION["username"];
    $result;    

    if(!mysqli_stmt_prepare($statement, $query))    
        {echo "error"; exit();}

    mysqli_stmt_bind_param($statement, "s", $username);
    mysqli_stmt_execute($statement);
    $resultData = mysqli_stmt_get_result($statement);
    while ($row = mysqli_fetch_assoc($resultData))
    {
        $result = $row["isAdmin"];
    }
    mysqli_stmt_close($statement);
    
    //User is not an adminstrator, redirect to index
    if($result !== 1)
    {
        header("location: index.php");
        exit();
    }
?>

<html>
    
    <h1> Welcome to the admin page</h1>
    <?php echo "You are an administrator."; ?> 
</html>
