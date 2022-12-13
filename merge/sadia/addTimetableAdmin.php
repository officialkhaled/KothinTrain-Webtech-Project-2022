
<?php

include_once "../assets/header.php";
require_once '../Models/databaseCon.php';

  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Station</title>
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
      <form action="../controllers/addTimetableCheck.php" method="post" enctype="multipart/form-data" >
      <div class="container">
        <h2>Add Timetable Details</h2>
        <br>
        <table style:"width=400px;" >
          <tr>
            <td><label for="train_name">Train Name</label></td>
            <td><input type="text" autocomplete="off" name="train_name" value=""></td>
          </tr>
          <tr>
            <td><label for="train_route">Train Route</label></td>
            <td><input type="text" autocomplete="off" name="train_route" value=""></td>
          </tr>
          <tr>
            <td><label for="run_days">Run Days</label></td>
            <td><input type="text" autocomplete="off" name="run_days" value=""></td>
          </tr>
          <tr>
            <td><label for="departure_time">Departure Time</label></td>
            <td><input type="text" autocomplete="off" name="departure_time" value=""></td>
          </tr>
          <tr>
            <td><label for="destination_time">Destination Time</label></td>
            <td><input type="text" autocomplete="off" name="destination_time" value=""></td>
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

