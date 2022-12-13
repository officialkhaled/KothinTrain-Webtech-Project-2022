<?php

  session_start();
  require_once '../models/databaseCon.php';


  //$station_id = $_POST['station_id'];

  $train_name = $_POST['train_name'];
  $train_route = $_POST['train_route'];
  $run_days = $_POST['run_days'];
  $departure_time = $_POST['departure_time'];
  $destination_time = $_POST['destination_time'];

  $timetable =['', 'train_name'=>$train_name, 'train_route'=>$train_route,'run_days'=>$run_days,'departure_time'=>$departure_time, 'destination_time'=>$destination_time];

  if($train_name == "" || $train_route == ""  || $run_days == "" || $departure_time == "" || $destination_time == ""  ){
    echo "<h2>Missing field(s) detected!</h2><br>";
  } else{
    $con = getConnection();
    
    // Check connection
    if($con === false){
      die("ERROR: Could not connect." . mysqli_connect_error());
    }

    $sql = "INSERT into train_schedule VALUES ( '', '{$train_name}', '{$train_route}', '{$run_days}' , '{$departure_time}', '{$destination_time}'  )";

    $status = mysqli_query($con, $sql);

    if($status) {
      echo "msg()";
      header('location: ../views/timetableAdmin.php');
    } else {
      echo "<h2>Database error!</h2>";
    }
    
  }

?>