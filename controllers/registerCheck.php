<?php

  session_start();

  require_once '../models/userModel.php';


  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $user_type = $_POST['user_type'];

  /** 
   * *image upload code
   * */ 

  $status = registration($name, $username, $password, $cpassword, $user_type);

  if($status){

    //$_SESSION['status'] = true;
    /**
     * *image upload code
     */
    //setcookie('status', 'true', time()+3600, '/');
    header('location: ../views/login.php');
  } else {
    echo "Error";
  }
?>