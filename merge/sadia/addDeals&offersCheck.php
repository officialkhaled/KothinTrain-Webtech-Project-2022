<?php

  session_start();
  require_once '../models/databaseCon.php';


  
  $deal_number = $_POST['deal_number'];
  $offer_startdate = $_POST['offer_startdate'];
  $offer_lastdate = $_POST['offer_lastdate'];
  $offer = $_POST['offer'];

  $deals =['deal_number'=>$deal_number, 'offer_startdate'=>$offer_startdate, 'offer_lastdate'=>$offer_lastdate,'offer'=>$offer];

  if($deal_number == "" || $offer_startdate == "" || $offer_lastdate == "" || $offer == ""){
    echo "<h2>Missing field(s) detected!</h2><br>";
  } else{
    $con = getConnection();
    
    // Check connection
    if($con === false){
      die("ERROR: Could not connect." . mysqli_connect_error());
    }

    $sql = "INSERT INTO dealsoffers VALUES( '{$deals['deal_number']}', '{$deals['offer_startdate']}', '{$deals['offer_lastdate']}', '{$deals['offer']}')";

    $offers = mysqli_query($con, $sql);
    

    if($offer) {
      echo "msg()";
      header('location: ../views/deals&offersAdmin.php');
    } else {
      echo "<h2>Database error!</h2>";
    }
    
  }

?>