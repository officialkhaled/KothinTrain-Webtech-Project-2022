<?php

  

?>

<html>
<head>
  
  <title>Login</title>
  <link rel="stylesheet" href="..\assets\style\loginStyle.css">
  <link rel="stylesheet" href="..\assets\style\styleKhaled.css">
  
  <style>
    form h3 {
      text-align: center;
      margin-top: 40px;
      color: #fff;
    }
  </style>
</head>
<body id="loginBody">

<!-- COMPLETE BODY [START] -->
<div class="wrap">

  <!-- HEADER -->
  <div class="header"><?php include_once '../assets/common/header.php'; ?></div> 
  <div class="nav"><?php include_once '../assets/common/publicNavbar.php'; ?></div>

  <!-- MAIN CONTENT [START]  -->
  <div class="container">

    <div class="right">
      <form id="loginForm" action="../controllers/loginCheck.php" method="post">
        <h2 id="h2-login">LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label class="label-login">Username</label>
        <input class="input-login" type="text" name="username" placeholder="Enter your username"><br>

        <label class="label-login">User Name</label>
        <input class="input-login" type="password" name="password" placeholder="Enter your password"><br>

        <button id="button-login" type="submit">Login</button>
      </form>
    </div>
    <div class="clear"></div>
  </div>
  <!-- MAIN CONTENT [END]  -->

  <!-- FOOTER -->
  <div class="footer">
    <footer>Copyright &copy; 2022</footer>
  </div>

</div>
<!-- COMPLETE BODY [END] -->

</body>
</html>
