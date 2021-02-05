<?php
include_once 'trial.php';
?>
<html>
    <head>
    </head>
	

    <body>
	<center>
<h2>Enter employee ID to search</h2>
<form name="myform"  method ="post" >
ID 	 	 : <input type="text" name="id"/> <br><br>
<input type="submit" value="Submit">
</form>
	</center>
		
	</body>
</html>
<?php
include_once 'trial.php';

$s_id = mysqli_real_escape_string($conn, $_POST['id']);

$sql = "SELECT * FROM employee_detail where employee_id='$s_id';";


$res = mysqli_query($conn,$sql);
$check = mysqli_num_rows($res);

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
		body
		{
			
		}
          div {
      background-image:url("im.jpg");
			color:white;
          }
		  table {
          width: 100%;
		  background:#f1f1f1;
        }

        table, td, th {
          border: 2px solid black;
          padding: 20px;
          text-align: center;
		 
        }

        th {text-align: center;}
        </style>
    </head>
    <body >
      <div style="margin-top: 4%; margin-left:0%; margin-right:0%; font-size: 40px;font-weight: bold">
        <center>Details.</center></div>
		<center>
        <?php

        if ($check > 0) {
          while($row = mysqli_fetch_assoc($res)) {?>
            <div style="margin-top: 8%;font-size: 30px;font-weight: bold">
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
          
            echo "<tr>";
              echo "<td>" . $row['employee_id'] . "</td>";
              echo "<td>" . $row['employee_name'] . "</td>";
              echo "<td>" . $row['phone_no'] . "</td>";
			  echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['salary'] . "</td>";
			  echo "<td>" . $row['sector'] . "</td>";

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
