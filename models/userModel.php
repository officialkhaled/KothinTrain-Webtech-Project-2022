<?php

  require_once 'db.php';

  function validateLogin($username, $password, $usertype) {
    $con = getConnection();

    $sql = "SELECT * FROM user WHERE username='{$username}' and password='{$password}' and usertype='{$usertype}'";

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

  function updateUser($id) {
    $con = getConnection();

    $sql = "SELECT * FROM user WHERE id='$id'";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($result);

    $name = $row['name'];
    $username = $row['username'];
    $password = $row['password'];

    if(isset($_POST['update'])) {
      $name = $_POST['name'];
      $username = $_POST['username'];
      $password = $_POST['password'];

      $sql = "UPDATE user SET name='$name', username='$username', password='$password' WHERE id='$id'";

      $result = mysqli_query($con, $sql);

      if($result) {
        header('location: viewUsers.php');
      } else {
        echo "Error";
      }
    }
  }

  function getProfile($username) {
    $con = getconnection();

    $sql = "SELECT * FROM user WHERE username='{$username}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count > 0){
      while($row = mysqli_fetch_assoc($result)){
        $args = array(
          "name" => $row['name'],
          "username" => $row['username'],
          "password" => $row['password'],
          "usertype" => $row['usertype'],
        );
      }
        return $args;
    } else {
      echo 'No Data Found!!!';
    }
  }
  

  function deleteUser($id){
    $con = getConnection();

    $sql = "DELETE FROM user WHERE id='{$id}'";
    $result = mysqli_query($con, $sql);

    return $result;
  }
  

?>