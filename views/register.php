<?php

  

  if(isset($_GET['err'])){
    if($_GET['err'] == 'invalid_request'){
        echo "invalid request error..";
    }

    if($_GET['err'] == 'null'){
        echo "null username/password";
    }
  } 


  /*
  require_once '../models/userModel.php';
  
  if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'user already exist!';

    }else{

        if($pass != $cpass){
          $error[] = 'password not matched!';
        }else{
          $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
          mysqli_query($conn, $insert);
          header('location:login_form.php');
        }
    }

  }; */


?>


<html>
<head>

  <title>Register</title>
  <link rel="stylesheet" href="../assets/style/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Register</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" autocomplete="off" name="name" placeholder="Enter your name">
      <input type="username" autocomplete="off" name="username" placeholder="Enter your username">
      <input type="password" name="password" placeholder="Enter your password">
      <input type="password" name="cpassword" placeholder="Confirm your password">
      <select name="user_type">
         <option value="customer">Customer</option>
         <option value="admin">Admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Already have an account? <a href="login.php">Login</a></p>
   </form>

</div>

</body>
</html>