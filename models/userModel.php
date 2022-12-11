<?php

  require_once 'db.php';

  
  function validateUser($username, $password){
    $con = getConnection();

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
      if($row = mysqli_fetch_assoc($result)){
        $_SESSION['username'] = $row['username'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['usertype'] = $row['usertype'];
      }
      return true;
    }else{
      return false;
    }
  }
  

    /* if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);
      if ($row['username'] === $username && $row['password'] === $password) {
        $_SESSION['username'] = $row['username'];
        //$_SESSION['name'] = $row['name'];
        //$_SESSION['id'] = $row['id'];
        $_SESSION['usertype'] = $row['usertype'];

        return true;
      }else{
        header("Location: login.php");
      }
    }else{
      header("Location: login.php");
    } */
  

  function registration($name, $username, $password, $type) { 
    $con = getConnection();

    $sql = "insert into users values('', '{$user['name']}', '{$user['username']}', '{$user['password']}', '{$user['type']}')";

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