<?php
include_once 'trial.php';
?>
<html>
    <head>
	<style>
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
$sql = "SELECT * FROM entry_list ;";
$res=mysqli_query($conn, $sql);
$check = mysqli_num_rows($res);

     if ($check > 0) {
       while($row = mysqli_fetch_assoc($res)) 
	   {?>
         <center>
         <?php
		 echo "<table>
              <tr>
			  <th>Student ID</th>
                  <th>Room No</th>
                  <th>Department</th>
				  <th>Phone No</th>
				  <th>Entry Time</th>
				  <th>Exit Time</th>
              </tr>";
          while($row = mysqli_fetch_array($res)) {
            echo "<tr>";
			echo "<td>" . $row['student_id'] . "</td>";
			  
              echo "<td>" . $row['room_no'] . "</td>";
              echo "<td>" . $row['dept'] . "</td>";
			  echo "<td>" . $row['phone_no'] . "</td>";
			  echo "<td>" . $row['entry_time'] . "</td>";
			  echo "<td>" . $row['exit_time'] . "</td>";
			  
            echo "</tr>";
          }
       
         }
   }
    
       ?>
	   
</center>
   </body>
</html>
