<?php

  session_start();

?>


<html>
<head>

  <title>Login</title>
  <link rel="stylesheet" href="../assets/style/style.css">
  
  <style>
    .err-text{
      color: red;
      font-size: 16px;
    }
  </style>
</head>
<body>
   
  <div class="form-container">

    <form action="../controllers/loginCheck.php" name="myForm" method="post" id="login-form" onsubmit="return validateLoginForm()" >
      <h3>Login</h3>

      <input type="username" id="username" name="username" placeholder="Enter your username" class="text-field">
      <span id="unameMsg" class="err-text"></span>
      
      <input type="password" id="password" name="password" placeholder="Enter your password" class="text-field">
      <span id="passMsg" class="err-text"></span>

      <div id="showPass-card">
        <input type="checkbox" id="showPass" value="Show Password">
        <label for="showPass"> Show Password</label>
      </div>

      <input type="submit" name="submit" value="LOGIN" class="form-btn">
      <p>Don't have an account? <a id="link-color" href="register.php">Register now</a></p>
    </form>

  </div>

  <script src="../assets/js/formValidate.js"></script>

</body>
</html>