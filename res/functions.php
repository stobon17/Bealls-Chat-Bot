<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat)
{
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat))
    {
        $result = true;
    }
    else{$result = false;}

    return $result;
}

function invalidUserName($username)
{
    $result;
    //Invalid characters
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username))
    {
        $result = true;
    }
    else{$result = false;}

    return $result;
}

function invalidEmail($email)
{
    $result;
    //Built-in PHP Function to Validate Emails
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $result = true;
    }
    else{$result = false;}

    return $result;
}

function pwdMatch($pwd, $pwdRepeat)
{
    $result;
    //Do Passwords match?
    if ($pwd !== $pwdRepeat)
    {
        $result = true;
    }
    else{$result = false;}

    return $result;
}

function takenUserName($conn, $username, $email)
{
    //Does the passed username already exist?
    $query = "SELECT * FROM users WHERE username = ? OR userEmail = ?;";

    //Protects Database integrity
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $query))
    {
        header("location: ../signup.php?error=statementFailed"); //Send to signup again
        exit();
    }

    mysqli_stmt_bind_param($statement, "ss", $username, $email);
    mysqli_stmt_execute($statement);

    //Grab the Data
    $resultData = mysqli_stmt_get_result($statement);
    if ($row = mysqli_fetch_assoc($resultData))
    {
        return $row;
    }
    else
    {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($statement);

}

function createUser($conn, $name, $email, $username, $pwd)
{
    //Insert Data
    $query = "INSERT INTO users (userFName, userEmail, username, userPwd) VALUES (?, ?, ?, ?);";

    //Protects Database integrity
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $query))
    {
        header("location: ../signup.php?error=statementFailed"); //Send to signup again
        exit();
    }
    //Encrypt (Hash) Passwords
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($statement, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);


    //After successful signup redirect user
    header("location: ../signup.php?error=none"); //Send to signup again
    exit();
}

//Login Functions
function emptyInputLogin($username, $pwd)
{
    $result;
    if (empty($username) || empty($pwd))
    {
        $result = true;
    }
    else{$result = false;}

    return $result;
}

function loginUser($conn, $username, $pwd)
{
    $userExists = takenUserName($conn, $username, $username);

    if ($userExists === false)
    {
        header("location: ../login.php?error=wronglogin"); //Wrong login
        exit();
    }

    //Get hashed password to verify
    $pwdhashed = $userExists["userPwd"];
    $checkPwd = password_verify($pwd, $pwdhashed);

    if ($checkPwd === false)
    {
        header("location: ../login.php?error=wronglogin"); //Wrong login
        exit();
    }
    else if ($checkPwd === true)
    {
        session_start();
        $_SESSION["usersID"] = $userExists["usersID"];
        $_SESSION["username"] = $userExists["username"];
        header("location: ../index.php"); 
        exit();
    }
}