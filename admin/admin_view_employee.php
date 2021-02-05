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
    </head>
	</style>
    <body>
	
		<?php		
$sql = "SELECT * FROM employee_detail ;";
$res=mysqli_query($conn, $sql);
$check = mysqli_num_rows($res);

     if ($check > 0) {
       while($row = mysqli_fetch_assoc($res)) 
	   {?>
         <center>
		 <h1>Employee Details</h1>
         <?php
		 echo "<table>
              <tr>
			  <th>Employee ID</th>
                  <th>Employee Name</th>
                  <th>Phone No</th>
				   <th>Email</th> 
				    <th>Salary</th>
					  <th>Sector</th>
              </tr>";
          while($row = mysqli_fetch_array($res)) {
            echo "<tr>";
			echo "<td>" . $row['employee_id'] . "</td>";
			  
              echo "<td>" . $row['employee_name'] . "</td>";
              echo "<td>" . $row['phone_no'] . "</td>";
			  echo "<td>" . $row['email'] . "</td>";
			  echo "<td>" . $row['salary'] . "</td>";
			  echo "<td>" . $row['sector'] . "</td>";
			  
            echo "</tr>";
          }
       
         }
   }
    
       ?>
	   
</center>
   </body>
</html>
