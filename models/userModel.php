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

  
  function validateRegistration($name, $username, $password, $cpassword, $user_type) { 
    $con = getConnection();

    $sql = "INSERT INTO user VALUES('', '{$name}', '{$username}', '{$password}', '{$user_type}', '')";

    $result = mysqli_query($con, $sql);
    
    if($result){
      return true;
    }else{
      return false;
    }

  }

  function searchUser($search) {
    $con = getConnection();

    $sql = "SELECT * FROM user WHERE name like '%$search%' or username like '%$search%' or id like '%$search%'";

    $result = mysqli_query($con, $sql);

    if($result) {
      if(mysqli_num_rows($result) > 0) {
        echo "<tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>User Type</th>
              </tr>";
              while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['username']}</td>
                <td>{$row['usertype']}</td>
                </tr>";
              }
      } else {
        echo'<h2 class=text-danger>Data not found!</h2>';
      }
    }
  }

  function getProfile($username) {
    $con = getconnection();

    $sql = "SELECT * FROM user WHERE username='{$id}'";
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
  

  function editProfile() {
    
  }

  function deleteUser($id){
    $con = getConnection();

    $sql = "DELETE FROM user WHERE id='{$id}'";
    $result = mysqli_query($con, $sql);

    return $result;
  }
  

?>