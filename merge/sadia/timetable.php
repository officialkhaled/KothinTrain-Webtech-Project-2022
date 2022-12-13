<?php

    session_start();
    require_once '../Models/timetableModel.php';

?>
<!-- HTML -->
<html>

<head>
    <title>View Fare</title>
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
            background-color: aqua;
            color: black;
            height: 30px;
        }
       
    </style>
</head>

<body>
    <table>
        <tr>
            <td style="padding: 80px">
                <form method="post" action="timetableCheck.php" enctype="">

                    <fieldset>
                        <legend>Train Schedule</legend>
                        <table>
                           <table>
                            
						   <tr>
						   <th>
							<center>  Train Number  </center><br>
							</th>
							<th>
							<center>  Train Name  </center><br>
							</th>
                            <th>
							<center>  Train Route  </center><br>
							</th>
                            <th> 
								<center> Run Days </center><br>
                            </th>
							<th> 
								<center> Departure time </center><br>
                            </th>
							<th> 
								<center> Destination time </center><br>
                            </th>
                            </tr>

                            <?php
                            
                            $con = getConnection();
                            $sql = "SELECT * FROM train_schedule";
                            $result = mysqli_query($con, $sql);

                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";

                                    echo "<td><center>{$row['train_number']}</center></td>";
                                    echo "<td><center>{$row['train_name']}</center></td>";
                                    echo "<td><center>{$row['train_route']}</center></td>";
                                    echo "<td><center>{$row['run_days']}</center></td>";
                                    echo "<td><center>{$row['departure_time']}</center></td>";
                                    echo "<td><center>{$row['destination_time']}</center></td>";

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

<?php



  /* search for name in database using php */
  if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $sql = "select * from user_data where username like '%$search%'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<th><center>{$row['username']}</center></th>";
        echo "<td><center>{$row['email']}</center></td>";
        echo "</tr>";
      }
    } else {
      echo "No results found";
    }
  }

?>