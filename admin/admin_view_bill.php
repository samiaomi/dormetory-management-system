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
$sql = "SELECT * FROM hall_bill ;";
$res=mysqli_query($conn, $sql);
$check = mysqli_num_rows($res);

     if ($check > 0) {
       while($row = mysqli_fetch_assoc($res)) 
	   {?>
         <center>
		 <h1>Billing Details</h1>
         <?php
		 echo "<table>
              <tr>
			  <th>Student ID</th>
                  <th>Total Bill</th>
                  <th>Due Bill</th>
				   
              </tr>";
          while($row = mysqli_fetch_array($res)) {
            echo "<tr>";
			echo "<td>" . $row['student_id'] . "</td>";
			  
              echo "<td>" . $row['total_bill'] . "</td>";
              echo "<td>" . $row['due_bill'] . "</td>";
			  
			  
            echo "</tr>";
          }
       
       
         }
   }
    
       ?>
	   
</center>
   </body>
</html>
