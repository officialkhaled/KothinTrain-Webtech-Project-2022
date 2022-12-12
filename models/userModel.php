<?php

  require_once 'db.php';

  function validateLogin ($username, $password) {
    $con = getConnection();

    if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $stmt = mysqli_stmt_init($con);
    mysqli_stmt_prepare($stmt, "SELECT * FROM user WHERE username=? AND password=?");
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $count = mysqli_num_rows($result);
    return $count;
  }
  
  function search ($username) {
    $con = getConnection();

    if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $stmt = mysqli_stmt_init($con);
    mysqli_stmt_prepare($stmt, "SELECT * FROM user WHERE username LIKE ?");
    $username = "%".$username."%";
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    return $result;
  }
  


  function registration($name, $username, $password, $type) { 
    $con = getConnection();

    $sql = "insert into users values('', '{$user['name']}', '{$user['username']}', '{$user['password']}', '{$user['type']}')";

    $status = mysqli_query($con, $sql);
    return $status;

  }

  function getAllUser($user){
    $con = getConnection();
    
    $sql = "select * from user";
    $result = mysqli_query($con, $sql);
    $users = [];

    while($row = mysqli_fetch_assoc($result)){
      array_push($users, $row);
    }

    return $users;
  }


  function getUserById($id){
    $con = getConnection();

    $sql = "select * from user where id='{$id}'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    return $row;
  }

  function deleteUser($id){
    $con = getConnection();

    $sql = "DELETE FROM user WHERE id='{$id}'";
    $result = mysqli_query($con, $sql);

    return $result;
  }
  

  



?>