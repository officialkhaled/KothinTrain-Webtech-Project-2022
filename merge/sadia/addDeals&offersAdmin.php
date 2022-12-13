
<?php

include_once "../assets/header.php";
require_once '../Models/databaseCon.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Deals and offers</title>
  <!-- <link rel="stylesheet" href="../assets/style.css" /> -->
  <link rel="stylesheet" href="../assets/headStyle.css" />
  <link rel="stylesheet" href="../assets/footerStyle.css" />

  <style>
  .main{
    background-color: Thistle;
    width: 200px;
    height: 40px;
    margin: 0 auto;
    text-align: center;
    transition: width 2s linear 1s;

  }

  .main:hover{
    width: 250px;
  }

  table{
    border: 2px solid black;
    border-collapse: collapse;
    width: 70%;
    margin: 0 auto;
  }

  th,td{
    border: 2px solid black;
    padding: 5px;

  }
  th{
    background-color: PowderBlue;
    color: black;
    height: 30px;
  }
  </style>

</head>
  <body>
    <form action="../controllers/addDeals&offersCheck.php" method="post" enctype="multipart/form-data" >
    <div class="container">
      <h2>Add deals and offers</h2>
      <br>
      <table style:"width=400px;" >
      <tr>
          <td><label for="deal_number">deal_number</label></td>
          <td><input type="text" autocomplete="off" name="deal_number" value=""></td>
        </tr>
        <tr>
          <td><label for="offer_startdate">offer_startdate</label></td>
          <td><input type="text" autocomplete="off" name="offer_startdate" value=""></td>
        </tr>
        <tr>
          <td><label for="offer_lastdate">Offfer last date</label></td>
          <td><input type="text" autocomplete="off" name="offer_lastdate" value=""></td>
        </tr>
        <tr>
          <td><label for="offer">Offer</label></td>
          <td><input type="text" autocomplete="off" name="offer" value=""></td>
        </tr>
        <tr>
          <td colspan="2">
            <center><input type="submit" name="btn" value="Insert"></center>
          </td>
        </tr>
      </table>
    </div>
    </form>

  </body>
</html>

