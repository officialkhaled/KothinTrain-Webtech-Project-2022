<?php

  require_once "databaseCon.php";
  



  function insertUser($deals){
    $con = getConnection();

    $sql = "INSERT INTO dealsoffers VALUES( '{$deals['deal_number']}', '{$deals['offer_startdate']}', '{$deals['offer_lastdate']}', '{$deals['offer']}')";
    

    $offers = mysqli_query($con, $sql);
    return $offers;
  }

  function getAllUser(){
    $con = getConnection();

    $sql = "SELECT * FROM dealsoffers";

    $offers = mysqli_query($con, $sql);
    return $offers;
  }
  
  function editUser($deals){
    $con = getConnection();

    $sql = "UPDATE dealsoffers SET( '{$deals['deal_number']}', '{$deals['offer_startdate']}', '{$deals['offer_lastdate']}', '{$deals['offer']}')";

    $offers = mysqli_query($con, $sql);
    return $offers;
  }
  
  function deleteUser($deals){
    $con = getConnection();

    $sql = "DELETE FROM dealsoffers WHERE('{$deals['deal_number']}')";

    $offers = mysqli_query($con, $sql);
    return $offers;
  }
  
  function getUserByID($timetable){
    $con = getConnection();

    $sql = "SELECT * FROM dealsoffers WHERE('{$deals['deal_number']}')";
    
    $offers = mysqli_query($con, $sql);
    return $offers;
  }

?>
