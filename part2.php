<html>
<head>
</head>
<body>
<?php
include_once 'trial.php';

$s_id = mysqli_real_escape_string($conn, $_POST['id']);

$sql = "SELECT * FROM room_detail NATURAL JOIN student_detail where student_id='$s_id';";


$res = mysqli_query($conn,$sql);
$check = mysqli_num_rows($res);

 ?>


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
		body{
			background-image:url("lig.jpg");
		}
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
		previous {
	margin:190px 30px;
  background-color: #333;
  color: white;
}
		
        </style>
    </head>
    <body '>
      <div style="margin-top: 4%; margin-left:0%; margin-right:0%; font-size: 40px;font-weight: bold">
        <center>details.</center></div>
		<center>
        <?php

        if ($check > 0) {
          while($row = mysqli_fetch_assoc($res)) {?>
            <div style="margin-top: 8%; margin-left:0%; margin-right:0%; font-size: 50px;font-weight: bold">
            <?php
			echo "<table>
              <tr>
                  <th>Student ID</th>
                  <th>Student Name</th>
                  <th>Phone No</th>
                  <th>Email</th>
				  <th>Permanent Address</th>
				  <th>Department</th>
				  <th>Room No</th>
				  <th>Status</th>
				  				  
              </tr>";
          
            echo "<tr>";
              echo "<td>" . $row['student_id'] . "</td>";
              echo "<td>" . $row['student_name'] . "</td>";
              echo "<td>" . $row['phone_no'] . "</td>";
			  echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['permanent_address'] . "</td>";
			  echo "<td>" . $row['dept'] . "</td>";
				  echo "<td>" . $row['room_no'] . "</td>";
				    echo "<td>" . $row['status'] . "</td>";
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
</body>
</html>