
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="..\assets\style\styleKhaled.css">
  <style>
    form h3 {
      text-align: center;
      margin-top: 40px;
      color: #fff;
    }
  </style>
</head>
<body>


<!-- COMPLETE BODY [START] -->
<div class="wrap">


  <!-- HEADER -->
  <div class="header"><?php include_once '../assets/common/header.php'; ?></div> 
  <div class="nav"><?php include_once '../assets/common/publicNavbar.php'; ?></div>

  <!-- MAIN CONTENT [START]  -->
  <div class="container">
    <div class="right">
      <form action="../controllers/loginCheck.php" method="post" enctype="multipart/form-data" onsubmit="">
        <h3>Register</h3>
        <div class="form-group">
          <div class="">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" autocomplete="off" placeholder="Enter username" >
          </div>
          <div class="">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" autocomplete="off" placeholder="Enter email" >
          </div>
          <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter password" >
          </div>
          <div>
            <label for="confirm-password">Confirm Password</label>
            <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm password" >
          </div>
          <div>
            <label for="userType">User Type</label>
            <select name="userType" id="userType" required>
              <option value="admin">Admin</option>
              <option value="customer">Customer</option>
            </select>
          </div>
          <div>
            <input type="submit" name="btn" value="Login">
          </div>

          <div class="register-link">
            <p>Already have an account? <a href="login.php">Login</a></p>
          </div>
        </div>

      </form>
    </div>
  </div>
  <!-- MAIN CONTENT [END]  -->


  <!-- FOOTER -->
  <div class="footer">
    <footer>Copyright &copy; 2022</footer>
  </div>

</div>
<!-- COMPLETE BODY [END] -->


<!-- JavaScript Validation -->
<script>

</script>

</body>
</html>



