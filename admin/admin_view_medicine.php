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
$sql = "SELECT * FROM medicine ;";
$res=mysqli_query($conn, $sql);
$check = mysqli_num_rows($res);

     if ($check > 0) {
       while($row = mysqli_fetch_assoc($res)) 
	   {?>
         <center>
		 <h1>Medicine Details</h1>
         <?php
		 echo "<table>
              <tr>
			  <th>Medicine Genre</th>
                  <th>Medicine Name</th>
                  <th>Amount</th>
				  
              </tr>";
          while($row = mysqli_fetch_array($res)) {
            echo "<tr>";
			echo "<td>" . $row['medicine_genre'] . "</td>";
			  
              echo "<td>" . $row['medicine_name'] . "</td>";
              echo "<td>" . $row['amount'] . "</td>";
			  
            echo "</tr>";
          }
       
         }
   }
    
       ?>
	   
</center>
   </body>
</html>
