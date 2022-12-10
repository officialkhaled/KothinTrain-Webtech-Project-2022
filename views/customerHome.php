<?php

  if(!isset($_SESSION)) 
  { 
      session_start(); 
  }


  /* check usertype and send to dedicated home page */

  /* if(isset($_SESSION['username']) && isset($_SESSION['userType'])) {
    if($_SESSION['userType'] == 'admin') {
      header('location: /admin/adminHome.php');
    } else if($_SESSION['userType'] == 'customer') {
      header('location: customerHome.php');
    }
  } */
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Home | Customer</title>
  <link rel="stylesheet" href="../assets/style/styleKhaled.css">
</head>
<body>

<div class="wrap">
  <div class="header"><?php include_once '../assets/common/header.php'; ?></div> 
  <div class="nav"><?php include_once '../assets/common/navbar.php'; ?></div>

  <div class="container">
    <!-- <div class="left"></div> -->
    <div class="right">
      
    </div>
    <div class="clear"></div>
  </div>

  <div class="footer">
    <footer>Copyright &copy; 2022</footer>
  </div>

</div>
</body>
</html>


