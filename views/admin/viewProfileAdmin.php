<?php

  session_start();
  require_once '../../models/userModel.php';

  if(!isset($_SESSION['status'])){
    header('location: ../login.php');
  }
  
  $con = getConnection();
  $sql = "SELECT * FROM user WHERE username='{$_SESSION['username']}'";

  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);

?>

<html>
<head>
  
  <title>View Profile | Admin</title>
  <link rel="stylesheet" href="../../assets/style/styleKhaled.css">

  <style>
    :root {
      --clr-bg: #e7eeef;
      --clr-primary: #243c58;
      --clr-secondary: #5d7793;
      --clr-tertiary: #699cc5;
      --clr-quaternary: #696f6e;
      --clr-accent: rgb(255, 136, 0);
    }

    * {
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background-color: var(--clr-bg);
    }

    .heading {
      font-size: 22px;
      color: var(--clr-accent);
      font-weight: bold;
      margin: 10px 20px;
    }

    a {
      color: var(--clr-primary);
      text-decoration: none;
    }

    .left-section {
      background-color: var(--clr-secondary);
      height: 100%;
      padding: 10px;
      color: #fff;
    }

    .left-section ul {
      list-style-type: none;
      padding: 0;
    }

    .left-section ul li {
      margin: 14px 0;
    }

    .left-section ul li a {
      color: #fff;
      text-decoration: none;
      font-size: 20px;
      display: flex;
      flex-direction: column;
    }

    .left-section ul li a:hover {
      color: var(--clr-accent);
    }

    .right-section {
      background-color: #fff;
      height: 100%;
      padding: 10px;
    }

    .right-section a {
      color: var(--clr-primary);
      text-decoration: none;
      font-size: 18px;
    }

    .right-section a:hover {
      color: var(--clr-accent);
    }

    .right-section fieldset {
      width: 100%;
      height: 80%;
      border: 2px solid var(--clr-primary);
      border-radius: 10px;
      text-align: center;
      padding: 10px;
      align-items: center;
    }

    .right-section fieldset legend {
      color: var(--clr-primary);
      font-weight: bold;
    }

    .right-section fieldset table {
      width: 50%;
      height: 70%;
    }

    .img-box {
      padding-top: 20px;
    }

    label {
      font-size: 18px;
      font-weight: bold;
      color: #000;
    }

    .nav ul li a:focus {
      border-radius: 10px;
      outline: none;
      background: var(--clr-secondary);
      color: #fff;
    }

    .nav ul li a:active {
      border-radius: 10px;
      outline: none;
      background: var(--clr-secondary);
      color: #fff;
    }

    .table {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      border-collapse: collapse;
      width: 100%;
    }

    .table th, .table td {
      padding: 14px;
      text-align: left;
    }

    #update-btn {
      background-color: green;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 5px 10px;
      font-size: 18px;
      font-weight: bold;
    }

    #update-btn:hover {
      background-color: var(--clr-accent);
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 5px 10px;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
    }
    </style>
</head>
<body>

<div class="wrap">
  <div class="header">
    <div class="logo-img">
      <img src="..\..\assets\img\logo.png" alt="logo">
    </div>
    <div class="title">
      <center><h3 class="title">Kothin<span style="color: rgb(255, 136, 0);">Train</span></h3></center>
    </div>
  </div> 
  <div class="nav"><?php include_once '../../assets/common/adminNavbar.php'; ?></div>

  <div class="container">
    <!-- Admin UI -->
    <table
      align="center"
      width="100%"
      height="100%"
      style="border-collapse: collapse"
    >
      <tr>
        <td class="left-section" style="padding-bottom: 100px">
          <h4 class="heading">View Profile</h4>
          <hr style="margin: 0 10px" />
          <ul style="margin-left: 20px; margin-top: 20px">
            <li><a href="menuAdmin.php">Main Menu</a></li>
            <li><a href="viewProfileAdmin.php">View Profile</a></li>
            <li><a href="editProfileAdmin.php">Edit Profile</a></li>
            <li><a href="#">Change Profile Picture</a></li>
            <li><a href="#">Edit Album</a></li>
            <li><a href="viewUsers.php">User List</a></li>
          </ul>
        </td>
        <td class="right-section" style="padding: 80px">

          <fieldset>
            <legend>PROFILE</legend>
            <form
              action=""
              method="post"
              enctype="multipart/form-data">
              <table align="center" class="table">
                <tr>
                  <th>Name</th>
                  <td><?php echo $row['name']; ?></td>
                </tr>

                <tr>
                  <th>Username</th>
                  <td><?php echo $row['username'] ?></td>
                </tr>

                <tr>
                  <th>Password</th>
                  <td><?php echo $row['password'] ?></td>
                </tr>
                
                <tr>
                  <th>Profile Picture</th>
                  <td><?php echo $row['img_data'] ?></td>
                </tr>

                <tr>
                  <td colspan="2"><center><a href="editProfileAdmin.php?update=<?php echo $row['id']; ?>" id="update-btn">Update</a></center></td>
                </tr>

              </table>
            </form>
          </fieldset>

        </td>
      </tr>
    </table>
  </div>

  <div class="footer">
    <footer>Copyright &copy; 2022</footer>
  </div>

</div>
</body>
</html>


