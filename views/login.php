<?php

  session_start();

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
    $con = getConnection();

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){

          $_SESSION['admin_name'] = $row['name'];
          header('location:admin_page.php');

        }elseif($row['user_type'] == 'user'){

          $_SESSION['user_name'] = $row['name'];
          header('location:user_page.php');

        }
      
    }else{
        $error[] = 'incorrect email or password!';
    }

  }; */

?>


<html>
<head>

  <title>Login</title>
  <link rel="stylesheet" href="../assets/style/style.css">

</head>
<body>
   
  <div class="form-container">

    <form action="../controllers/loginCheck.php" method="post">
      <h3>Login</h3>
      <?php
      if(isset($error)){
        foreach($error as $error){
          echo '<span class="error-msg">'.$error.'</span>';
        };
      };
      ?>
      <input type="username" name="username" placeholder="Enter your username">
      <input type="password" name="password" placeholder="Enter your password">
      <input type="submit" name="submit" value="LOGIN" class="form-btn">
      <p>Don't have an account? <a href="register.php">Register now</a></p>
    </form>

  </div>

</body>
</html>