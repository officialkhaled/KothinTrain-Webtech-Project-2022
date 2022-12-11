<?php



?>

<html>
<head>
  
  <title>Login</title>
  <link rel="stylesheet" href="..\assets\style\styleKhaled.css">
  
  <style>
    form h3 {
      text-align: center;
      margin-top: 40px;
      color: #fff;
    }
  </style>
</head>
<body>


<!-- COMPLETE BODY [START] -->
<div class="wrap">

  <!-- HEADER -->
  <div class="header"><?php include_once '../assets/common/header.php'; ?></div> 
  <div class="nav"><?php include_once '../assets/common/publicNavbar.php'; ?></div>

  <!-- MAIN CONTENT [START]  -->
  <div class="container">

    <div class="right">
      <form action="../controllers/loginCheck.php" method="post" enctype="multipart/form-data">
      <h3>Login</h3>
        <div class="form-group">
          <div class="">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" autocomplete="off" placeholder="Enter your username" >
            <span class="msgUser err"></span>
          </div>
          <div class="">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" >
            <span class="msgPass err"></span>
          </div>
          <div class="">
            <label for="userType">User Type</label>
            <select name="userType" id="userType" >
              <option value="admin">Admin</option>
              <option value="customer">Customer</option>
            </select>
            <p class="msgType err"></p>
          </div>
          <div class="">
            <input type="submit" name="submit" value="Login">
          </div>

          <div class="register-link">
            <p>Don't have an account? <a href="register.php">Register</a></p>
          </div>
        </div>

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
