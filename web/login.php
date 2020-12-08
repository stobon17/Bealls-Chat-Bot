<?php include_once 'header.php'; ?>

<!-- Styling -->    
    <style>
    .login-form{
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
<section class="login-form">
  <h1 align="center">Login</h1>
  <div class="login-form-2">
    <form action="res/login_service.php" method="post" style="text-align:center;">
      <input type="text" placeholder="Username/Email..." id="user" name="user"><br/><br/>
      <input type="password" placeholder="Password..." id="pass" name="pass"><br/><br/>
      <input type="submit" value="Login" name="submit"> 
    </form>

    <!-- Error/Success Messages -->
  <?php
    if(isset($_GET["error"]))
    {
      if ($_GET["error"] == "emptyinput")
      {
          echo "<p style='text-align:center;'>Please fill in all fields!</p>";
      }
      else if ($_GET["error"] == "wronglogin")
      {
        echo "<p style='text-align:center;'>Bad credentials!</p>";
      }
    }
  ?>    
</section>    
</body>
<?php include_once 'footer.php'?>
</html>