<?php

  require_once "databaseCon.php";
  



  function insertUser($timetable){
    $con = getConnection();

    $sql = "INSERT INTO time_schedule VALUES( '{$timetable['train_number']}', '{$timetable['train_name']}', '{$timetable['train_route']}', '{$timetable['run_days']}', '{$timetable['departure_time']}', '{$timetable['destination_time']}')";

    $timing = mysqli_query($con, $sql);
    return $timing;
  }

  function getAllUser(){
    $con = getConnection();

    $sql = "SELECT * FROM time_schedule";

    $timing = mysqli_query($con, $sql);
    return $timing;
  }
  
  function editUser($timetable){
    $con = getConnection();

    $sql = "UPDATE time_schedule SET('{$timetable['train_number']}', '{$timetable['train_name']}', '{$timetable['train_route']}', '{$timetable['run_days']}', '{$timetable['departure_time']}', '{$timetable['destination_time']}')";

    $timing = mysqli_query($con, $sql);
    return $timing;
  }
  
  function deleteUser($timetable){
    $con = getConnection();

    $sql = "DELETE FROM time_schedule WHERE('{$timetable['train_number']}')";

    $timing = mysqli_query($con, $sql);
    return $timing;
  }
  
  function getUserByID($timetable){
    $con = getConnection();

    $sql = "SELECT * FROM time_schedule WHERE({$timetable['train_number']})";
    
    $timing = mysqli_query($con, $sql);
    return $timing;
  }

?>