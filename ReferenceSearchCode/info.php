<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $string = "mysql:host=localhost;dbname = search_db";
    try{
        $con = new PDO($string, "root","");
    }
    catch(PDOException $e)
    {
        die($e->getMassage());
    }
    $id = (int)$id;
    $statement = $con->query("select * from search_db.users where id =  '$id' limit 1 ");   //read // it doesnt matter the start alphabet, if searching alphabet exist                                                                                             it will show th ersult 
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    //echo json_encode($result); // to send ->encode required [JSON Last Class]
                              //  to receive -> decode required
}
?>

<html>
    <head>
        <title> Information</title>
    </head>
    <body>
    <style>
            *{
                font-family: tahoma;
                font-size: 14px
            }
            .form{
                margin: auto;
                width: 300px;
                padding: 100px;
                margi-top= 30px;
                box-shadow: 0px 0px 10px #aaa;
                border-radious: 10px;
                border: solid thin #aaa;
            }
    </style>
        <div class="form">
        <?php if(isset($result) && is_array($result)):?>
           <b> <div>Station Name: </b>  <?=$result[0]['name']?> </div>  <br>
            <b> <div>Station Location: </b>  <?=$result[0]['location']?>  </div>

            <?php else: ?>
               
                <div> Sorry, Reecord Not Found</div>

            <?php endif; ?>
            </div>
    </body>
</html>