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
	<center>
	<h1 color="white">Details</h1>
	</center>
	<h1>Student Details</h1>
		<?php		
$sql = "SELECT * FROM student_detail ;";
$res=mysqli_query($conn, $sql);
$check = mysqli_num_rows($res);

     if ($check > 0) {
       while($row = mysqli_fetch_assoc($res)) {?>
         <center>
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
          while($row = mysqli_fetch_array($res)) {
            echo "<tr>";
              echo "<td>" . $row['student_id'] . "</td>";
              echo "<td>" . $row['student_name'] . "</td>";
              echo "<td>" . $row['phone_no'] . "</td>";
			  echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['permanent_address'] . "</td>";
			  echo "<td>" . $row['dept'] . "</td>";

            echo "</tr>";
          }
          
         }
   }
    
       ?>
	   
</center>
   </body>
</html>
