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
$sql = "SELECT * FROM hal_doctors ;";
$res=mysqli_query($conn, $sql);
$check = mysqli_num_rows($res);

     if ($check > 0) {
       while($row = mysqli_fetch_assoc($res)) 
	   {?>
         <center>
		 <h1>Doctor Details</h1>
         <?php
		 echo "<table>
              <tr>
			  <th>Doctor ID</th>
                  <th>Doctor Name</th>
                  <th>Phone No</th>
				   <th>Email</th> 
				    
              </tr>";
          while($row = mysqli_fetch_array($res)) {
            echo "<tr>";
			echo "<td>" . $row['doctor_id'] . "</td>";
			  
              echo "<td>" . $row['doctor_name'] . "</td>";
              echo "<td>" . $row['phone_no'] . "</td>";
			  echo "<td>" . $row['email'] . "</td>";
			  
            echo "</tr>";
          }
       
       
         }
   }
    
       ?>
	   
</center>
   </body>
</html>
