<?php

/*   session_start();

  if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['userType'])) {
    function validate($user){
      $user = trim($user);
      $user = stripcslashes($user);
      $user = htmlspecialchars($user);
      return $user;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $userType = validate($_POST['userType']);

    if(empty($username)) {
      header('location: ../views/loginForm.php?error=Username is required');
      exit();
    } else if(empty($password)) {
      header('location: ../views/loginForm.php?error=Password is required');
      exit();
    } else if(empty($userType)) {
      header('location: ../views/loginForm.php?error=User Type is required');
      exit();
    } else {
      echo "Valid input!";
    }

  } else {
    header('location: ../views/loginForm.php');
    exit();
  }

 */

/**
 * ! Login Check
 */

  session_start(); 
  require_once "../models/userModel.php";

  if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
      header("Location: loginForm.php?error=Username is required");
        exit();
    }else if(empty($password)){
          header("Location: loginForm.php?error=Password is required");
        exit();
    }else{
      $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

      $result = mysqli_query($con, $sql);

      if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
          if ($row['username'] === $username && $row['password'] === $password) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: customerHome.php");
            exit();
          }else{
            header("Location: loginForm.php?error=Incorect User name or password");
            exit();
        }
      }else{
        header("Location: loginForm.php?error=Incorrect Username or Password");
        exit();
      }
    }
    
  }else{
    header("Location: loginForm.php");
    exit();
  }


  /*
  $username = $_POST['username'];
  $password = $_POST['password'];


  // USERNAME VALIDATION
  if($username == "" || $password == "" ){
      echo "<h2> Validation failed: Username or Password is missing! </h2>";
  }
  else if(strlen($username)<2){
      echo "<h2>Validation failed: Username must be at least 2 characters long! </h2>";
  }
  else if((substr_count($username,'@')>0) || (substr_count($username,'#')>0) || (substr_count($username,'$')>0) || (substr_count($username,'%')>0) || (substr_count($username,'/')>0) || (substr_count($username,'*')>0) || (substr_count($username,'+')>0) || (substr_count($username,'(')>0) || (substr_count($username,')')>0) || (substr_count($username,'!')>0) || (substr_count($username,'^')>0)){
      echo "<h2> Validation failed: Username can contain alpha numeric characters, period, dash or underscore only! </h2>";
  }

  // PASSWORD VALIDATION
  else if(strlen($password)<8){
      echo "<h2> Validation failed: Password must be at least 8 characters long! </h2>";
  }
  else if((substr_count($password,'@')<1) && (substr_count($password,'#')<1) && (substr_count($password,'$')<1) && (substr_count($password,'%')<1)){
      echo "<h2> Validation failed: Password must contain at least one special character (@, #, $, %) </h2>";
  }

  else{
      echo "<h1> Validation Successful!  </h1>";
  }

*/




?>