<?php

  session_start();

  if(isset($_POST['searchBtn'])) {

    $search = $_POST['searchBtn'];
    $sql = "SELECT * FROM users WHERE username LIKE '%$search%' OR email LIKE '%$search%' OR phone LIKE '%$search%' OR address LIKE '%$search %'";
    $result = mysqli_query($con, $sql);
    $users = [];

    while($row = mysqli_fetch_assoc($result)){
      array_push($users, $row);
    }

    return $users;

  }

?>


<!-- Admin -->
<nav>
  <ul>
    <li><input type="text" autocomplete="off" placeholder="Search user" name="search" id="search" value=""></li>
    <li><input type="submit" name=searchBtn value="Search"></li>
    <li><a href="../../views/admin/adminHome.php">Home</a></li>
    <li><a href="../../views/admin/menuAdmin.php">Menu</a></li>
    <li><a href="#">Stations</a></li>
    <li><a href="../../controllers/logout.php">Logout</a></li>
  </ul>
</nav>

