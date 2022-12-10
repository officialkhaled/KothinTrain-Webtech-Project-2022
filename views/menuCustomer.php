<?php

  

?>

<html>
<head>
  
  <title>Menu | Customer</title>
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

  <div class="container">
    <?php include_once 'viewProfile.php'; ?>
  </div>

  <div class="footer">
    <footer>Copyright &copy; 2022</footer>
    <!-- <nav class="footer-links">
      <ul>
        <li><a href="t&c.php">Terms & Conditions</a></li>
        <li><a href="privacyPolicy.php">Privacy Policy</a></li>
        <li><a href="aboutUs.php">About Us</a></li>
      </ul>
    </nav> -->
  </div>

</div>
</body>
</html>


