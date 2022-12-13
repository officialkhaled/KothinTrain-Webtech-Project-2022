<?php

    session_start();
    require_once '../Models/deals&offersModel.php';

?>
<!-- HTML -->
<html>

<head>
    <title>Deals and Offers</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Header File -->

    <style>
        table{
          border-collapse: collapse;
          width: 100%; 
        }
       th,td,tr table{
          border : 2px solid black; 
          padding: 5px; 
        }

        th{
            background-color: purple;
            color: black;
            height: 30px;
        }
       a{
        text-decoration: none;
       }
       a:hover{
        color: lightpink;
       }


    </style>
</head>

<body>
    <table>
        <tr>
            <td style="padding: 80px">
                <form method="post" action="deals&offersCheck.php" enctype="">

                    <fieldset>
                        <legend>Deals and Offers</legend>
                        <table>
                           <table>
                            
						   <tr>
						   <th>
							<center>  Deal Number  </center><br>
							</th>
							<th>
							<center>  Offer starting_date  </center><br>
							</th>
                            <th>
							<center>  Offer last_date  </center><br>
							</th>
                            <th> 
								<center> Offer </center><br>
                            </th>

                            
                            </tr>

                            <?php
                            
                            $con = getConnection();
                            $sql = "SELECT * FROM dealsoffers";
                            $result = mysqli_query($con, $sql);

                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";

                                    echo "<td><center>{$row['deal_number']}</center></td>";
                                    echo "<td><center>{$row['offer_startdate']}</center></td>";
                                    echo "<td><center>{$row['offer_lastdate']}</center></td>";
                                    echo "<td><center>{$row['offer']}</center></td>";


                                    echo "</tr>";
                                }
                            } else {
                                echo "<td colspan=\"6\">No data found</td>";
                            }


                            ?>

    </table>      
    </fieldset>
    </form>
    </td>
    </tr>
    </table>

</body>

</html>
