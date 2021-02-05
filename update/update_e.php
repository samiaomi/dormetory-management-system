<?php
include_once 'trial.php';

              //Update patient information
$employee_id = mysqli_real_escape_string($conn, $_POST['employee_id']);
$phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$salary = mysqli_real_escape_string($conn, $_POST['salary']);

$sql = "UPDATE `employee_detail` SET `phone_no`='$phone_no',`email`='$email',`salary`='$salary' WHERE  employee_id = '$employee_id' ;";
mysqli_query($conn, $sql);
 ?>
 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update</title>
    <style>
      div {
        background-color: maroon;
      }
    </style>
  </head>
  <body text="BLACK" bgcolor ="#8BF7C8">
    <div style="margin-top: 4%; margin-left:0%; margin-right:0%; font-size: 40px;font-weight: bold">
      <center>Updated Info</center></div>
      <?php
      $sql = "SELECT * FROM employee_detail WHERE employee_id = '$employee_id';";

      $res = mysqli_query($conn,$sql);
      $check = mysqli_num_rows($res);

      if ($check > 0) {
        while($row = mysqli_fetch_assoc($res)) {?>
          <div style="margin-top: 8%; margin-left:35%; margin-right:35%; font-size: 30px;font-weight: bold">
          <?php
         echo "Employee ID: " . $row["employee_id"]. " <br>Employee name: " . $row["employee_name"]. "<br>Phone no:". 
	   $row["phone_no"]."<br>Email:". $row["email"]."<br>Salary: "
        . $row["salary"]. "<br>Sector:". $row["sector"]."<br> ";
		
        ?>
		
      </div>
        <?php
      }
    }
       ?>

    </body>
</html>
