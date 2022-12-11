<?php

  require_once 'db.php';

  
  function validateUser($username, $password){
    $con = getConnection();

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      if ($row['username'] === $username && $row['password'] === $password) {
        $_SESSION['username'] = $row['username'];
        //$_SESSION['name'] = $row['name'];
        //$_SESSION['id'] = $row['id'];
        $_SESSION['usertype'] = $row['usertype'];

        return true;
      }else{
        header("Location: loginForm.php");
      }
    }else{
      header("Location: loginForm.php");
    }
  }

  function insertUser($username, $password, $email, $type) { 
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


  

  



?>