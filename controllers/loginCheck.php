<?php

  session_start(); 
  require_once "../models/userModel.php";

  $username = $_POST['username'];
  $password = $_POST['password'];
  $usertype = $_POST['usertype'];

  $status = validateLogin($username, $password, $usertype);

  if($status) {
    $_SESSION['status'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['usertype'] = $usertype;

    setcookie('status', 'true', time()+3600, '/');

    /* Check usertype */ 
    if($usertype == 'admin') {
      header('location: ../views/admin/adminHome.php?username='.$username);
    } else if($usertype == 'customer') {
      header('location: ../views/customerHome.php');
    } else {
      header('location: ../views/login.php');
    }
  } else {
    echo "Invalid username or password!";
  }

  /*
  // USERNAME VALIDATION
  if($username == "" || $password == "" ){
    $error[] =  "Validation failed: Username or Password is missing!";
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

  else if(($user = validateUser($username, $password)) == true){
    //$status = validateUser($username, $password);
    $user = ['username' => $username, 'password' => $password, 'usertype' => $usertype];

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    setcookie("rememberUser", $_POST['username'], time() + (86400 * 100));
    setcookie("rememberPass", $_POST['password'], time() + (86400 * 100));
    header('location: ../views/admin/adminHome.php');

  }
  */


?>