<?php

  require_once 'db.php';

  function validateLogin($username, $password) {
    $con = getConnection();

    $sql = "SELECT * FROM user WHERE username='{$username}' and password='{$password}'";

		$result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
      return true;
    } else {
      return false;
    }
    
  }

  
  function registration($name, $username, $password, $cpassword, $user_type) { 
    $con = getConnection();

    $sql = "INSERT INTO user VALUES('', '{$name}', '{$username}', '{$password}', '{$user_type}', '')";

    $result = mysqli_query($con, $sql);
    
    if($result){
      return true;
    }else{
      return false;
    }

  }

  function getProfile($id) {
    $con = getconnection();

    $sql = "SELECT * FROM user WHERE id='{$id}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count > 0){
      while($row = mysqli_fetch_assoc($result)){
        $args = array(
          "name" => $row['name'],
          "username" => $row['username'],
          "password" => $row['password'],
          "user_type" => $row['user_type'],
        );
      }
        return $args;
    } else {
      echo 'No Data Found!!!';
    }
  }
  
  function userList ($Fsearch) {
    $con = getconnection();

    //$sql = "SELECT * FROM users WHERE name='{$Fsearch}'";  //Error in SQL Syntax

    $sql = "SELECT * FROM users WHERE name LIKE %$Fsearch%";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count > 0){
      while($row = mysqli_fetch_assoc($result)){
        $args = array(
        "name" => $row['name'],
        "username" => $row['username'],
        "user_type" => $row['user_type'],
        );
      }
      return $args;
    } else {
      echo 'No Data Found!!!';
    }

  }

  function editProfile() {
    
  }

  function deleteUser($id){
    $con = getConnection();

    $sql = "DELETE FROM user WHERE id='{$id}'";
    $result = mysqli_query($con, $sql);

    return $result;
  }
  

?>