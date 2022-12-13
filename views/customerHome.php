<?php

  session_start();

  if(!isset($_SESSION['status'])){
    header('location: ../login.php');
  }

?>

<html>
<head>
  
  <title>Home | Customer</title>
  <link rel="stylesheet" href="../assets/style/styleKhaled.css">

  <style>
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
    .pub-title {
      color: var(--clr-primary);
      font-size: 30px;
      font-weight: bold;
      display: flex;
      justify-content: center;
      align-items: center;

    }
    .pub-para {
      color: var(--clr-primary);
      font-size: 20px;
      font-weight: bold;
      margin: 40px 20px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    #buy-btn {
      background-color: var(--clr-primary);
      color: #fff;
      font-size: 20px;
      font-weight: bold;
      padding: 10px 20px;
      border-radius: 10px;
      border: none;
      cursor: pointer;
    }
    #buy-btn:hover {
      background-color: var(--clr-accent);
      color: #fff;
      font-size: 20px;
      font-weight: bold;
      padding: 10px 20px;
      border-radius: 10px;
      border: none;
      cursor: pointer;
    }
  </style>

</head>
<body>

<div class="wrap">
  <div class="header"><?php include_once '../assets/common/header.php'; ?></div> 
  <div class="nav"><?php include_once '../assets/common/customerNavbar.php'; ?></div>

  <div class="container">
    <!--  -->
    <table>
      <tr>
        <td><h2 class="pub-title">Welcome <?php echo $_SESSION['username']; ?>, to our Train Ticket System</h2></td>
      </tr>
      <tr>
        <td><p align=center class="pub-para">We are delighted to have you among us. On behalf of all the members and the management, we would like to extend our warmest welcome and good wishes! Trains are wonderful. To travel by train is to see nature and human beings, towns and churches, and rivers, in fact, to see life.”. Our goal is to make your life easier from traditional system. Kothin.com is a complete Rail project that can manage a whole system through online. Hopefully, you will have a great  experience through our system. <br></p></td>
      </tr>
      <tr>
        <td align=center><input type="button" id="buy-btn" value="Buy Tickets" name=""></td>
      </tr>
    </table>
    
    <!--  -->
  </div>

  <div class="footer">
    <footer>Copyright &copy; 2022</footer>
  </div>

</div>
</body>
</html>

