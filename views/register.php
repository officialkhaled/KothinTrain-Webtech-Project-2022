

<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="../assets/style/style.css">
  <style>
    .input-field.valid {
      border: 1px solid green;
    }
    .input-field.invalid {
      border: 1px solid tomato;
    }

    .error-msg {
      color: tomato;
      font-size: 12px;
    }
  </style>
</head>
<body>
   
<div class="form-container">

   <form action="../controllers/registerCheck.php" method="post" > 
      <h3>Register</h3>

      <?php
        if(isset($error)){
          foreach($error as $error){
              echo '<span class="error-msg">'.$error.'</span>';
          };
        };
      ?>

      <input type="text" autocomplete="off" name="name" placeholder="Enter your name">
      <span id="nameErr" class=""></span>

      <input type="username" autocomplete="off" name="username" placeholder="Enter your username">
      <span id="unameErr" class=""></span>

      <input type="password" name="password" placeholder="Enter your password">
      <span id="passErr" class=""></span>

      <input type="password" name="cpassword" placeholder="Confirm your password">
      <span id="cpassErr" class=""></span>

      <select name="user_type">
         <option value="customer">Customer</option>
         <option value="admin">Admin</option>
      </select>
      <span id="typeErr" class=""></span>


      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Already have an account? <a id="link-color" href="login.php">Login</a></p>
   </form>

</div>

</body>
</html>