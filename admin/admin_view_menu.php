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
$sql = "SELECT * FROM menu ;";
$res=mysqli_query($conn, $sql);
$check = mysqli_num_rows($res);

     if ($check > 0) {
       while($row = mysqli_fetch_assoc($res)) 
	   {?>
         <center>
		 <h1>Menu Details</h1>
         <?php
		 echo "<table>
              <tr>
			  <th>Date</th>
                  <th>Meal</th>
                  <th>Day</th>
				  <th>Time</th>
				  <th>Bill</th>
                  
                  
              </tr>";
          while($row = mysqli_fetch_array($res)) {
            echo "<tr>";
			echo "<td>" . $row['date'] . "</td>";
			  
              echo "<td>" . $row['meal'] . "</td>";
              echo "<td>" . $row['day'] . "</td>";
			  echo "<td>" . $row['time'] . "</td>";
			  
              echo "<td>" . $row['bill'] . "</td>";
			  

            echo "</tr>";
          }
       
         }
   }
    
       ?>
	   
</center>
   </body>
</html>
