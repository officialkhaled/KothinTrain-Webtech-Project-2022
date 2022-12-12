<!-- Public UI -->
<?php 

  include_once "../assets/header.php" 

?>

<!-- HTML -->
<html>
  <head>
    <title>Public Home</title>
    <link rel="stylesheet" href="../assets/style.css" />
  </head>

  <body>
    <form action="../controllers/loginCheck.php" method="post" enctype="multipart/form-data">

      <tr>
        <td style="padding-bottom: 100px">
          <h2 style="margin: 30px 65px">Welcome Home</h2>

          <p  style="margin: 30px 65px">
          We are delighted to have you among us. On behalf of all the members and the management, we would like to extend our warmest welcome and good wishes! Trains are wonderful. To travel by train is to see nature and human beings, towns and churches, and rivers, in fact, to see life.”. Our goal is to make your life easier from traditional system. Kothin.com is a complete Rail project that can manage a whole system through online. Hopefully, you will have a great  experience through our system. <br> <br> <br> 
        </p>

        <h2 style="margin: 30px 65px; color: red;">Login to buy tickets!</h2>

        <h2 style="margin: 30px 65px">Top Routes and Destinations</h2>

        <nav style="margin: 60px">
        <table style="margin: 40px">
          <tr>
            <td>
            <img src="../assets/img/album/train_1.jpg" alt="image_1" width="260px" height="180px">
            </td>
            <td>
            <img src="../assets/img/album/train_2.jpg" alt="image_2" width="260px" height="180px">
            </td>
            <td>
            <img src="../assets/img/album/train_3.jpg" alt="image_3" width="260px" height="180px">
            </td>
          </tr>
          <tr>
            <td>Rajdhani Express</td>
            <td>Satabdi Express</td>
            <td>Tejas Express</td>
          </tr>
          <tr>
            <td><strong>Dhaka to Kamalapur</strong></td>
            <td><strong>Chittagong to Sylhet</strong></td>
            <td><strong>Noakhali to Dhaka</strong></td>
          </tr>
        </table>
        <br>  
        <h2 style="margin: 30px">Train Station Management System</h2>

        <nav style="margin: 30px">
        <table style="margin: 30px">
        <tr>
            <td><h4>Search</h4></td>
            <td><h4>Select</h4></td>
            <td><h4>Checkout</h4></td>
          </tr>
          <tr>
            <td>
            <img src="../assets/img/icons/search.png" alt="search_icon" width="190px" height="190px" style="margin-right: 50px;">
            </td>
            <td>
            <img src="../assets/img/icons/select.png" alt="select_icon" width="190px" height="190px" style="margin-right: 50px;">
            </td>
            <td>
            <img src="../assets/img/icons/receipt.png" alt="receipt_icon" width="190px" height="190px" style="margin-right: 50px;">
            </td>
          </tr>
          
          <tr>
            <td>
              <p style="margin-top: 15px">Choose your origin, destination, journey dates and search for trains</p>
            </td>
            <td>
              <p>Select your desired trip and choose the class</p>
            </td>
            <td>
              <p>Receive your E-receipt and save it</p>
            </td>
          </tr>
        </table>
        <br>
        <table align="center">
          <tr>
          <nav style="margin: 30px;">
          <a href="refundPolicy.php">Refund Policy</a> |
          <a href="facilities.php">Facilities</a> |
          <a href="faq.php">FAQ</a>
          </nav>
          </tr>
        </table>
        </td>
      </tr>
      
      <tr align="center">
        <td>
          <nav>
          <a href="t&c.php">Terms & Conditions</a> |
            <a href="privacyPolicy.php">Privacy Policy</a> |
            <a href="aboutUs.php">About Us</a>
          </nav>
          <footer style="margin: 10px">Copyright &copy; 2022</footer>
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>
