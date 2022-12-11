
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="../assets/style/loginStyle.css">
</head>
<body>
     <form action="../controllers/loginCheck.php" method="post">
     	<h2>LOGIN</h2>

     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<label>Username</label>
     	<input type="text" name="username" placeholder="Enter your username"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Enter your password"><br>
     	
      <label>Usertype</label>
     	<select name="usertype" id="usertype">
        <option value="admin">Admin</option>
        <option value="customer">Customer</option>
      </select>

     	<button type="submit">Login</button>
     </form>
</body>
</html>