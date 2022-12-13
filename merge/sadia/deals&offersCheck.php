<?php

    session_start();
    require_once "../models/deals&offersModel.php";
    

    $deal_number = $_POST['deal_number'];
    $offer_startdate = $_POST['offer_startdate'];
    $offer_lastdate = $_POST['offer_lastdate'];
    $offer = $_POST['offer'];


    $deals =['deal_number'=>$deal_number, 'offer_startdate'=>$offer_startdate, 'offer_lastdate'=>$offer_lastdate,'offer'=>$offer];
    
    $offers= login($user);
