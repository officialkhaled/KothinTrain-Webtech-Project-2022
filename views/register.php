<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="../assets/style/style.css">
  <style>
    .err-text{
      color: tomato;
      font-size: 16px;
    }
  </style>
</head>
<body>
   
<div class="form-container">

   <form action="../controllers/registerCheck.php" method="post" onsubmit="return validateRegistrationForm()" enctype="multipart/form-data"> 
      <h3>Register</h3>

      <input type="text" id="name" name="name" placeholder="Enter your name">
      <span id="nameErr" class="err-text"></span>

      <input type="username" id="username" name="username" placeholder="Enter your username">
      <span id="unameErr" class="err-text"></span>

      <input type="password" id="password" name="password" placeholder="Enter your password">
      <span id="passErr" class="err-text"></span>

      <input type="password" id="cpassword" name="cpassword" placeholder="Confirm your password">
      <span id="cpassErr" class="err-text"></span>

      <select name="user_type" id="user_type">
         <option value="customer">Customer</option>
         <option value="admin">Admin</option>
      </select>
      <span id="typeErr" class="err-text"></span>


      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Already have an account? <a id="link-color" href="login.php">Login</a></p>
   </form>

</div>

<script src="../assets/js/formValidate.js"></script>
</body>
</html>