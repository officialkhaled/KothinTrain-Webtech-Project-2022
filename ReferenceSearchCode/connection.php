<?php
//$data = file_get_contents("php://input");
if(count($_POST)>0)
{
    $text = $_POST['text'];
    $string = "mysql:host=localhost;dbname = search_db";
    try{
        $con = new PDO($string, "root","");
    }
    catch(PDOException $e)
    {
        die($e->getMassage());
    }
    $text = addslashes($text);
    $statement = $con->query("select * from search_db.users where name like '%$text%' ");   //read // it doesnt matter the start alphabet, if searching alphabet exist                                                                                             it will show th ersult 
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result); // to send ->encode required [JSON Last Class]
                              //  to receive -> decode required
}

