<?php

  session_start();

  if(!isset($_SESSION['userid'])){
    header('location: login.php');
  }

?>

<html>
<head>
  
  <title>Home | Customer</title>
  <link rel="stylesheet" href="../assets/style/styleKhaled.css">

  <style>
    .nav ul li a:focus {
      border-radius: 10px;
      outline: none;
      background: var(--clr-secondary);
      color: #fff;
    }
    .nav ul li a:active {
      border-radius: 10px;
      outline: none;
      background: var(--clr-secondary);
      color: #fff;
    }
  </style>

</head>
<body>

<div class="wrap">
  <div class="header"><?php include_once '../assets/common/header.php'; ?></div> 
  <div class="nav"><?php include_once '../assets/common/customerNavbar.php'; ?></div>
  
  <!--  -->

  <?php 

		if(isset($_COOKIE['Visit']))
		{
		$last = $_COOKIE['Visit'];
		echo "<p style=color:green;> You last loggedin on ". "<b>".$last."</b></p>" ;
		}		
	 ?>

  <!--  -->

  <div class="container">
    
  </div>

  <div class="footer">
    <footer>Copyright &copy; 2022</footer>
  </div>

</div>
</body>
</html>

