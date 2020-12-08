<?php

if(isset($_POST["submit"]))
{
    $username = $_POST["user"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];

    require_once 'dbconn.php';
    require_once 'functions.php';

    //Error Handlers
    if (emptyReset($username, $pwd, $pwdRepeat) !== false)
    {
        header("location: ../adminpage.php?error=emptyinput");
        exit();
    }
    else if (pwdMatch($pwd, $pwdRepeat) !== false)
    {
        header("location: ../adminpage.php?error=pwdnotmatch");
        exit();
    }

    //Reset process
    resetUser($conn, $username, $pwd);
}
else
{
    header("location: ../adminpage.php");
    exit();
}