<?php

    session_start();
    require_once "../models/userModel.php";
    

    $train_number = $_POST['train_number'];
    $train_name = $_POST['train_name'];
    $train_route = $_POST['train_route'];
    $run_days = $_POST['run_days'];
    $departure_time = $_POST['departure_time'];
    $destination_time = $_POST['destination_time'];

    $timetable =['train_number'=>$train_number, 'train_name'=>$train_name, 'train_route'=>$train_route,'run_days'=>$run_days,'departure_time'=>$departure_time, 'destination_time'=>$destination_time];
    $timing = login($user);
