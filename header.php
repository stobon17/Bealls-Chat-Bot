<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="img/favicon.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CEN3031: Bealls-ChatBot</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
<div class="container-fluid">
  <a class="navbar-brand" href="index.php"><img src="img/bealls_logo_edited.png" style="width:150px;height:50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <?php 
            if (isset($_SESSION["usersID"]))
            {
                if($_SESSION["adminstatus"] === 1)
                {
                    echo "<li class='nav-item active'><a class='nav-link' href='res/logout.php'>LOG OUT</a></li>";
                    echo "<li class='nav-item active'><a class='nav-link' href='adminpage.php'>" . $_SESSION["username"] .  "</a></li>";
                }
                else 
                {
                    echo "<li class='nav-item active'><a class='nav-link' href='res/logout.php'>LOG OUT</a></li>";
                    echo "<li class='nav-item active'><a class='nav-link' href=''>" . $_SESSION["username"] . "</a></li>";
                }
            }
           
            else
            {
                echo "<li class='nav-item'>
                <a class='nav-link' href='signup.php'>SIGN UP</a>
             </li>";
                echo "<li class='nav-item'>
                <a class='nav-link' href='login.php'>LOG IN</a>
              </li>";
            }
          ?>
          <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="bed.php">BED</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="bath.php">BATH</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="women.php">WOMEN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="men.php">MEN</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="kids.php">KIDS</a>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="shoes.php">SHOES</a>
      </li>
      </ul>
  </div>

  </button>
</div>
</nav>