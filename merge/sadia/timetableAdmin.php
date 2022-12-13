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
       a{
        text-decoration: none;
       }
       a:hover{
        color: brown;
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
                            <th colspan = "2 " > 
                            <button><a href="addTimetableAdmin.php">ADD SCHEDULE</a></button>
                            
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
                                    
                                    echo "<td><center><a href=\"editTimetable.php\">Edit</a></center></td>";

                                    ?>
                                    <td><center><a href="timetableAdmin.php?delete=<?php echo $row['train_number']; ?>">Delete</a></center></td>
                                    <?php

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

  if(isset($_GET['delete'])) {
    $train_number = $_GET['delete'];
    $sql = "DELETE FROM train_schedule WHERE train_number = $train_number";
    $result = mysqli_query($con, $sql);

    if($result) {
      echo "<h2>Record deleted successfully</h2>";
      header('location: timetableAdmin.php');
    } else {
      echo "<h2>Error deleting record: </h2>" . mysqli_error($con);
    }

    mysqli_close($con);
  }


?>