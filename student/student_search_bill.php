<?php
include_once 'trial.php';

$s_id = mysqli_real_escape_string($conn, $_POST['id']);

$sql = "SELECT student_id, student_name, dept, total_bill, due_bill FROM hall_bill NATURAL JOIN student_detail where student_id='$s_id';";


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
            background-color: #f1f1f1;
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
    <body bgcolor='white'>
      <div style="margin-top: 4%; margin-left:0%; margin-right:0%; font-size: 40px;font-weight: bold">
        <center>details.</center></div>
		<center>
        <?php

        if ($check > 0) {
          while($row = mysqli_fetch_assoc($res)) {?>
            <div style="margin-top: 8%;  font-size: 30px;font-weight: bold">
            <?php
					echo "<table>
              <tr>
                  <th>Student ID</th>
                  <th>Student name</th>
                  <th>Department</th>
                  <th>Total Bill</th>
				  <th>Due Bill</th>
				  
				  				  
              </tr>";
          
            echo "<tr>";
              echo "<td>" . $row['student_id'] . "</td>";
              echo "<td>" . $row['student_name'] . "</td>";
              echo "<td>" . $row['dept'] . "</td>";
			  echo "<td>" . $row['total_bill'] . "</td>";
              echo "<td>" . $row['due_bill'] . "</td>";
			 
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

      </center>
<a href="student_home.php" class="previous">&laquo; Previous</a>
      </body>
      </html>
