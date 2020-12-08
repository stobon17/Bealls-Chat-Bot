<?php

    //Header (Nav Bar)
    require_once 'header.php';
    require_once 'res/dbconn.php';
    
?>
<!-- Styling -->    
<style>
    .change-pwd{
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
    </style>
</head>


<!-- Body -->
<body>
<section class="change-pwd">
  <h1 align="center">Reset User Password</h1>
  <div class="changepwd-form-2">
    <form action="res/pwdChange_service.php" method="post" style="text-align:center;">
      <input type="text" placeholder="Username/Email..." id="user" name="user"><br/><br/>
      <input type="password" placeholder="Password..." id="pwd" name="pwd"><br/><br/>
      <input type="password" placeholder="New Password..." id="newPwd" name="newPwd"><br/><br/>
      <input type="password" placeholder="Repeat New Password..." id="newPwdRepeat" name="newPwdRepeat"><br/><br/>
      <input type="submit" value="Reset Password" name="submit"> 
    </form>

    <!-- Error/Success Messages -->
<?php
    if(isset($_GET["error"]))
    {
      if ($_GET["error"] == "emptyinput")
      {
          echo "<p style='text-align:center;'>Please fill in all fields!</p>";
      }
      else if ($_GET["error"] == "pwdnotmatch")
      {
        echo "<p style='text-align:center;'>New passwords do not match. Try again!</p>";
      }
      else if ($_GET["error"] == "badcreds")
      {
          echo "<p style='text-align:center;'>Bad credentials, try again!</p>";
      }
      else if ($_GET["error"] == "none")
      {
        echo("<script>
        setTimeout(function(){
           window.location.href = 'login.php';
        }, 3000);
     </script>");
        echo "<p style='text-align:center;'>Password reset successful! Redirecting to login...</p>";
      }
    }
  ?>    
</section>    
</body>
<?php include_once 'footer.php'?>
</html>