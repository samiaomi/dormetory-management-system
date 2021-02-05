<?php
include_once 'trial.php';
?>
<html>
    <head>
	<style>
			body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("1.jpg");
}
        table {
          width: 100%;
		  background:#f1f1f1;
        }

        table, td, th {
          border: 1px solid black;
          padding: 10px;
          text-align: center;
        }

        th {text-align: center;}
    </style>
    </head>
    <body>
	
		<?php		
$sql = "SELECT * FROM room_detail ;";
$res=mysqli_query($conn, $sql);
$check = mysqli_num_rows($res);

     if ($check > 0) {
       while($row = mysqli_fetch_assoc($res)) {?>
         <center>
		 <h1>Room Details</h1>
         <?php
		 echo "<table>
              <tr>
                  <th>Room no</th>
                  <th>Status</th>
                  <th>Student ID</th>
                  
              </tr>";
          while($row = mysqli_fetch_array($res)) {
            echo "<tr>";
              echo "<td>" . $row['room_no'] . "</td>";
              echo "<td>" . $row['status'] . "</td>";
              echo "<td>" . $row['student_id'] . "</td>";
			  

            echo "</tr>";
          }
       
         }
   }
    
       ?>
	   
</center>
   </body>
</html>
