<?php

  $date = new DateTime('now', new DateTimeZone('Asia/Dhaka'));
  setcookie("Visit", $date->format("F jS - g:i a"), time()+3600*24*30, '/');

  session_start();

?>


<html>
<head>

  <title>Login</title>
  <link rel="stylesheet" href="../assets/style/style.css">
  <style>
    .input-field.valid {
      border: 1px solid green;
    }
    .input-field.invalid {
      border: 1px solid red;
    }

    .error-msg {
      color: red;
      font-size: 12px;
    }
  </style>
</head>
<body>
   
  <div class="form-container">

    <form action="../controllers/loginCheck.php" name="pForm" method="post" id="login-form" novalidate onsubmit="return isValid(this);">
      <h3>Login</h3>

      <input type="username" id="username" name="username" placeholder="Enter your username">
      <?php echo isset($_SESSION['unameMsg']) ? $_SESSION['unameMsg'] : ""; ?>
      <span id="unameMsg" class="">asdas</span>
      
      <input type="password" id="password" name="password" placeholder="Enter your password">
      <?php echo isset($_SESSION['passMsg']) ? $_SESSION['passMsg'] : ""; ?>
      <span id="passMsg" class="">asdasd</span>

      <?php echo isset($_SESSION['loginMsg']) ? $_SESSION['loginMsg'] : ""; ?>

      <input type="submit" name="submit" value="LOGIN" class="form-btn">
      <p>Don't have an account? <a href="register.php">Register now</a></p>
    </form>

  </div>

  <script src="../assets/js/loginValid.js"></script>

</body>
</html>