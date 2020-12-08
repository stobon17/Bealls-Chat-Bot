<?php

if (isset($_POST["submit"]))
{
    $username = $_POST["user"];
    $pwd = $_POST["pwd"];
    $newPwd = $_POST["newPwd"];
    $newPwdRepeat = $_POST["newPwdRepeat"];

    require_once 'dbconn.php';
    require_once 'functions.php';

    //Error Handlers
    if (u_emptyReset($username, $pwd, $newPwd, $newPwdRepeat) !== false)
    {
        header("location: ../pwdchange.php?error=emptyinput");
        exit();
    }
    else if (pwdMatch($newPwd, $newPwdRepeat) !== false)
    {
        header("location: ../pwdchange.php?error=pwdnotmatch");
        exit();
    }


    //Pwd change process
    updatePassword($conn, $username, $pwd, $newPwd);

}
else
{
    header("location: ../pwdchange.php");
    exit();
}