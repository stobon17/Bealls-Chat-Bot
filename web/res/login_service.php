<?php

if (isset($_POST["submit"]))
{
    $username = $_POST["user"];
    $pwd = $_POST["pass"];

    require_once 'dbconn.php';
    require_once 'functions.php';

    //Error Handlers
    if (emptyInputLogin($username, $pwd) !== false)
    {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}
else
{
    header("location: ../login.php");
    exit();
}

