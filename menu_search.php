<?php
include_once 'trial.php';

$date = mysqli_real_escape_string($conn, $_POST['date']);

$sql = "SELECT * FROM menu where date='$date';";


$res = mysqli_query($conn,$sql);
$check = mysqli_num_rows($res);

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
          div {
            background-image: url("f.jpg");
          }
		  table {
          width: 100%;
		  background:#EAF2F8  ;
        }

        table, td, th {
          border: 1.5px solid black;
          padding: 20px;
          text-align: center;
        }

        th {text-align: center;}
		 .previous {
	margin:190px 30px;
  background-color: #333;
  color: white;
}
        </style>
    </head>
    <body >
      <div style="margin-top: 4%; margin-left:0%; margin-right:0%; font-size: 40px;font-weight: bold">
        <center>details.</center></div>
		<center>
        <?php

        if ($check > 0) {
          while($row = mysqli_fetch_assoc($res)) {?>
            <div style="margin-top: 8%; font-size: 30px;font-weight: bold">
            <?php
					echo "<table>
              <tr>
                  <th>Date</th>
                  <th>Meal</th>
                  <th>Day</th>
                  <th>Time</th>
				  <th>Bill</th>
				  
				  				  
              </tr>";
          
            echo "<tr>";
              echo "<td>" . $row['date'] . "</td>";
              echo "<td>" . $row['meal'] . "</td>";
              echo "<td>" . $row['day'] . "</td>";
			  echo "<td>" . $row['time'] . "</td>";
              echo "<td>" . $row['bill'] . "</td>";
			 
            echo "</tr>";
          
          ?>
        </div>
          <?php
        }
	
      }
	
	  else{
	  	echo "not found";
	  }?>
      </center>
<a href="student_menu_search.php" class="previous">&laquo; Previous</a>
      </body>
      </html>
