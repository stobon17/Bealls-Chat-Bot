<?php

//Ensure the user got here by signing up not navigating to the document.
if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    //Error Handling

    require_once 'dbconn.php';
    require_once 'functions.php';

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false)
    {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUserName($username) !== false)
    {
        header("location: ../signup.php?error=badUser");
        exit();
    }
    if (invalidEmail($email) !== false)
    {
        header("location: ../signup.php?error=badEmail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false)
    {
        header("location: ../signup.php?error=pwdnotmatch");
        exit();
    }
    if (takenUserName($conn, $username, $email) !== false)
    {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    //Signup Function
    createUser($conn, $name, $email, $username, $pwd);

}
else
{
    header("location: ../signup.php"); //Send to signup again
    exit();
}

?>