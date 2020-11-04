<?php include ("login_service.php"); ?>

<!DOCTYPE html>
<head>
<link rel="icon" href="img/favicon.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>Login Form</title>
    <link href="../style.css" rel="stylesheet">
    <style>
    .login{
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
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
<div class="container-fluid">
  <a class="navbar-brand" href="index.html"><img src="../img/bealls_logo_edited.png" style="width:150px;height:50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="login.php">LOG IN</a>
       </li>
          <li class="nav-item">
              <a class="nav-link" href="../index.html">HOME</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../home.html">FOR HOME</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../bnb.html">BED & BATH</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../women.html">WOMEN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../men.html">MEN</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="../kids.html">KIDS</a>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="../shoes.html">SHOES</a>
      </li>
      </ul>
  </div>

  </button>
</div>
</nav>
<div class="login">
    <h1 align="center">Login</h1>
   <form action="" method="post" style="text-align:center;">
   <input type="text" placeholder="Username" id="user" name="user"><br/><br/>
   <input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
   <input type="submit" value="Login" name="submit"> 

<!-- Error Message -->
<span> <?php echo $error; ?> </span>
</body>
</html>