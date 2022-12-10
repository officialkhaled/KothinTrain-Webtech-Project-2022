<?php

  require_once 'db.php';

  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $type = $_POST['type'];

  $user = [
    'username' => $username,
    'password' => $password,
    'email' => $email,
    'gender' => $gender,
    'type' => $type
  ];


  function insertUser($username, $password, $email, $gender, $type) { 
    $con = getConnection();

    $sql = "insert into users values('', '{$user['username']}', '{$user['password']}', '{$user['email']}', '{$user['type']}')";

    $status = mysqli_query($con, $sql);
    return $status;

  }

  function getAllUser($user){
    $con = getConnection();
    
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
    $users = [];

    while($row = mysqli_fetch_assoc($result)){
      array_push($users, $row);
    }

    return $users;
  }

  function getUserById($id){
    $con = getConnection();

    $sql = "select * from users where id='{$id}'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    return $row;
  }


  function validateUser($username, $password){
    $con = getConnection();

    $sql = "select * from users where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if(count($row) > 0){
      return true;
    }else{
      return false;
    }
  }

  



?>