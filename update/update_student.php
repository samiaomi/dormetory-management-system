<?php
include_once 'trial.php';

              //Update patient information
$student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
$phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$permanent_address = mysqli_real_escape_string($conn, $_POST['permanent_address']);

$sql = "UPDATE `student_detail` SET `phone_no`='$phone_no',`email`='$email',`permanent_address`='$permanent_address' WHERE  student_id = '$student_id' ;";
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
  <center>
  <h2>Enter student id to update </h2>
<form name="myform"  method ="post" >
Student ID         : <input type="text" name="student_id"/> <br><br>
<h2>Enter info to update </h2>

Phone No	 	 : <input type="text" name="phone_no"/> <br><br>
Email	 	 : <input type="text" name="email"/> <br><br>
Permanent Address 	 : <input type="text" name="permanent_address"/> <br><br>

<input type="submit" value="Submit">
</form>
</center>
    <div style="margin-top: 4%; margin-left:0%; margin-right:0%; font-size: 40px;font-weight: bold">
      <center>Updated Info</center></div>
      <?php
      $sql = "SELECT * FROM student_detail WHERE student_id = '$student_id';";

      $res = mysqli_query($conn,$sql);
      $check = mysqli_num_rows($res);

      if ($check > 0) {
        while($row = mysqli_fetch_assoc($res)) {?>
          <div style="margin-top: 8%; margin-left:35%; margin-right:35%; font-size: 30px;font-weight: bold">
          <?php
        echo "Student ID: " . $row["student_id"]. " <br>Student name: " . $row["student_name"]. "<br>Phone no:". 
	   $row["phone_no"]."<br>Email:". $row["email"]."<br>Permenent Address: "
        . $row["permanent_address"]. "<br>Dept:". $row["dept"]."<br> ";
		
        ?>
		
      </div>
        <?php
      }
    }
       ?>

    </body>
</html>
