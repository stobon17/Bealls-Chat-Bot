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
<!-- Styling -->    
<style>
    .reset-form{
width:360px;
margin:50px auto;
font:'Montserrat', sans-serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:70px; 
}
input[type=text], input[type=password]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
input[type=submit]{
width:100%;
background-color: #6b5b95;
color:#fff;
border:2px solid #6b5b95;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}
.adminbutton {
float: right;
background-color: #6b5b95;
color:#fff;
border:2px solid #6b5b95;
padding:10px;
padding-right: 2em;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}
    </style>
</head>
<html>  
    <h1 style="text-align: center; padding-top: .8em;"> Administrator Page: Password Recovery</h1>
    <body>
    <section class="reset-form">
        <h1 align="center" style="font-size:32px;">RESET PASSWORD</h1>
        <div class="reset-form-2">
            <form action="res/reset_service.php" method="post" style="text-align:center;">
                <input type="text" placeholder="Username/Email..." id="user" name="user"><br/>
                <input type="password" placeholder="New password to set..." id="pwd" name="pwd"><br/>
                <input type="password" placeholder="Repeat password..." id="pwdRepeat" name="pwdRepeat"><br/><br/>
                <input type="submit" value="Reset" name="submit">
            </form>
        <!-- Error/Success Messages -->
            <?php
                if(isset($_GET["error"]))
                {
                    if ($_GET["error"] == "emptyinput")
                    {
                        echo "<p style='text-align:center;'>Please fill in all fields!</p>";
                    }
                    else if ($_GET["error"] == "queryfailed")
                    {
                        echo "<p style='text-align:center;'>Something went wrong!</p>";
                    }
                    else if ($_GET["error"] == "none")
                    {
                        echo "<p style='text-align:center;'>Password successfully reset!</p>";
                    }
                    else if ($_GET["error"] == "pwdnotmatch")
                    {
                      echo "<p style='text-align:center;'>Passwords do not match.</p>";
                    }
                }
            ?>    
    </section>
    <button class="adminbutton" onclick="document.location='admininfo.php'">More User Info</button>       
    </body>
</html>
