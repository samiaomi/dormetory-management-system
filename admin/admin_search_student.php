<?php
include_once 'trial.php';

$s_id = mysqli_real_escape_string($conn, $_POST['id']);

$sql = "SELECT * FROM student_detail where student_id='$s_id';";


$res = mysqli_query($conn,$sql);
$check = mysqli_num_rows($res);

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
			
	.previous {
	margin:400px 60px;
	background-color: #f1f1f1;
	color: black;
	}
		body{
			background-image: url("dd.jpg");
		}
          div {
            background-color: white;
          }
		  table {
          width: 100%;
		  background:#f1f1f1;
        }

        table, td, th {
          border: 1px solid gray;
          padding: 10px;
          text-align: center;
        }

        th {text-align: center;}
	
        </style>
    </head>
    <body >
      	<a href="admin_search.php" class="previous">&laquo; Previous</a>
		<center>
        <?php

        if ($check > 0) {
          while($row = mysqli_fetch_assoc($res)) {?>
            <div style="margin-top: 8%; margin-left:5%; margin-right:5%; font-size: 30px;">
            <?php
			
          echo "<table>
              <tr>
                  <th>Student ID</th>
                  <th>Student Name</th>
                  <th>Phone No</th>
                  <th>Email</th>
				  <th>Permenent Address</th>
				  <th>Department</th>
				  
				  
              </tr>";
            echo "<tr>";
              echo "<td>" . $row['student_id'] . "</td>";
              echo "<td>" . $row['student_name'] . "</td>";
              echo "<td>" . $row['phone_no'] . "</td>";
			  echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['permanent_address'] . "</td>";
			  echo "<td>" . $row['dept'] . "</td>";

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
		<p> Searched Result</p>
		
      </body>
      </html>
