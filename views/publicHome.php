
<html>
<head>
  
  <title>Home | Public</title>
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
    .static-links {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 40px;
    }

    .static-links a {
      color: var(--clr-primary);
      font-size: 20px;
      font-weight: bold;
      margin: 0 20px;
      text-decoration: none;
    }

    .static-links a:hover {
      color: var(--clr-accent);
    }
  </style>
</head>
<body>

<div class="wrap">
  <div class="header"><?php include_once '../assets/common/header.php'; ?></div> 
  <div class="nav"><?php include_once '../assets/common/publicNavbar.php'; ?></div>

  <div class="container" align=center>
    <!--  -->
    <table>
      <tr>
        <td><h2 class="pub-title">Welcome To our Train Ticket System</h2></td>
      </tr>
      <tr>
        <td><p align=center class="pub-para">We are delighted to have you among us. On behalf of all the members and the management, we would like to extend our warmest welcome and good wishes! Trains are wonderful. To travel by train is to see nature and human beings, towns and churches, and rivers, in fact, to see life.”. Our goal is to make your life easier from traditional system. Kothin.com is a complete Rail project that can manage a whole system through online. Hopefully, you will have a great  experience through our system. <br></p></td>
      </tr>
      <tr>
        <td>
          <h2 class="pub-title" style="color: red;">Login to buy tickets!</h2>
        </td>
      </tr>
      <tr class="static-links">
        <td align=center><a href="t&c.php">Terms & Conditions</a></td>
      </tr>
      <tr class="static-links">
        <td align=center><a href="privacyPolicy.php">Privacy Policy</a></td>
      </tr>
      <tr class="static-links">
        <td align=center><a href="aboutUs.php">About Us</a></td>
      </tr>
    </table>
    
    <!--  -->
  </div>

  <div class="footer">
    <footer>Copyright &copy; 2022</footer>
    <!-- <nav class="footer-links">
      <ul>
        <li><a href="t&c.php">Terms & Conditions</a></li>
        <li><a href="privacyPolicy.php">Privacy Policy</a></li>
        <li><a href="aboutUs.php">About Us</a></li>
      </ul>
    </nav> -->
  </div>

</div>
</body>
</html>