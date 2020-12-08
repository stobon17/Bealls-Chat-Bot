<?php
  include_once 'header.php';
?>
<!-- Styling -->    
<style>
    .signup-form{
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
button[type=submit]{
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
<section class="signup-form">
    <h2 style="text-align:center;">Sign Up</h2> <br/>
    <div class="signup-form-2">
        <form action="../res/signup_service.php" method="post" style="text-align:center;">
            <input type="text" name="name" placeholder="Full Name..."><br/>
            <input type="text" name="email" placeholder="Email..."><br/>
            <input type="text" name="username" placeholder="User Name..."><br/>
            <input type="password" name="pwd" placeholder="Password..."><br/>
            <input type="password" name="pwdrepeat" placeholder="Repeat password..."><br/> <br/>
            <button type="submit" name="submit">Sign Up</button><br/>
        </form>
    </div>
    <!-- Error/Success Messages -->
  <?php
    if(isset($_GET["error"]))
    {
      if ($_GET["error"] == "emptyinput")
      {
          echo "<p style='text-align:center;'>Please fill in all fields!</p>";
      }
      else if ($_GET["error"] == "badUser")
      {
        echo "<p style='text-align:center;'>Enter a valid username!</p>";
      }
      else if ($_GET["error"] == "badEmail")
      {
        echo "<p style='text-align:center;'>Enter a valid email!</p>";
      }
      else if ($_GET["error"] == "pwdnotmatch")
      {
        echo "<p style='text-align:center;'>Passwords do not match.</p>";
      }
      else if ($_GET["error"] == "usernametaken")
      {
        echo "<p style='text-align:center;'>That username is already in use, try again.</p>";
      }
      else if ($_GET["error"] == "stmtfailed")
      {
        echo "<p style='text-align:center;'>Something went wrong, try again.</p>";
      }
      else if ($_GET["error"] == "none")
      {
        echo "<p style='text-align:center;'>You have signed up successfully!</p>";
        header('Refresh: 3; URL=login.php');
      }
      
    }
  ?>    
</section>



<!-- Footer --> 
<?php
  include_once 'footer.php';
?>