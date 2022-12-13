<?php

  require_once '../models/userModel.php';

  $json = $_POST['data'];
  $jsearch = json_decode($json);

  $Fsearch = $jsearch->search;

  $data = userList($Fsearch);

  $usernameSearch = $data['username'];
  $name = $data['name'];
  $username = $data['username'];
  $user_type = $data['user_type'];

  if($Fsearch == $usernameSearch) {
    echo "<table border=1>
            <tr>
              <td>Name</td>
              <td>Username</td>
              <td>Usertype</td>
            </tr>
            <tr>
              <td>$name</td>
              <td>$username</td>
              <td>$user_type</td>
            </tr>
          </table>";
  }

?>