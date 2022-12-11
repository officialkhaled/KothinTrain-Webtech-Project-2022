<?php

  session_start();
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



















//require_once '../models/userModel.php';

/*   session_start();


  $valid_username = $valid_password = "";
  $username_err = $password_err = "";

  $pattern = "/^[a-zA-Z_0-9]*$/";
  $patternPass = "/^[a-zA-Z_0-9]*$/";

  $x = 0;

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_REQUEST['submit'])) {
      $username = $_REQUEST['username'];
      $password = $_REQUEST['password'];

      if(empty($username)) {
        $username_err = "Please enter a username.";
      } else if(!empty($username) && !preg_match($pattern, $username)) {
        $username_err = "Only alpha-numeric letters and underscore allowed.";
      } else if(!empty($username) && strlen($username)<2) {
        $username_err = "Username must be at least 2 characters.";
      } else {
        $valid_username = $username;
        $x++;
      }

      if(empty($password)) {
        $password_err = "Please enter a password.";
      } else if(!empty($password) && !preg_match($pattern, $password)) {
        $password_err = "Only alpha-numeric letters and underscore allowed.";
      } else if(!empty($password) && strlen($password)<8) {
        $password_err = "Password must be at least 8 characters.";
      } else {
        $valid_password = $password;
        $x++;
      }
    }
  }

  echo "<script>alert($username_err)</script>";
  echo "<script>alert($password_err)</script>"; */

/*
  if($x == 2) {
    $con = getConnection();

    $login=$mydb->login($conn, "reg", $valid_username, $valid_password);
    if($login -> num_rows>0)
    {
      $_SESSION['username'] = $valid_username;
      header("location:../user_view/homepage.php");
    } else {
      $invalid_username="*invalid username or password";
    }
  }
*/

?>