<?php

  $host = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "project_db";

  /* function getConnection(){
    global $host;
    global $dbuser;
    global $dbpass;
    global $dbname;
    $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    return  $con;
  } */

  $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);

  if(!$con){
    die("Connection failed: ".mysqli_connect_error());
  }


?>