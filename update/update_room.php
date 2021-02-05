<?php
include_once 'trial.php';

              //Update patient information
$student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
$status = mysqli_real_escape_string($conn, $_POST['status']);
$room_no = mysqli_real_escape_string($conn, $_POST['room']);


$sql = "UPDATE `room_detail` SET `student_id`='$student_id',`status`='$status' WHERE  room_no = '$room_no' ;";
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
  <h2>Enter room no to update </h2>
<form name="myform"  method ="post" >
Room No         : <input type="text" name="room"/> <br><br>
<h2>Enter info to update </h2>

Status	 	 : <input type="text" name="status"/> <br><br>
Student ID	 	 : <input type="text" name="student_id"/> <br><br>

<input type="submit" value="Submit">
</form>
</center>
    <div style="margin-top: 4%; margin-left:0%; margin-right:0%; font-size: 40px;font-weight: bold">
      <center>Updated Info</center></div>
      <?php
      $sql = "SELECT * FROM room_detail WHERE room_no = '$room_no';";

      $res = mysqli_query($conn,$sql);
      $check = mysqli_num_rows($res);

      if ($check > 0) {
        while($row = mysqli_fetch_assoc($res)) {?>
          <div style="margin-top: 8%; margin-left:35%; margin-right:35%; font-size: 30px;font-weight: bold">
          <?php
        echo  " Room No: " . $row["room_no"]. "<br>Status: "  . $row["status"]. "<br>Student ID:". $row["student_id"]. "<br>";
		
        ?>
		
      </div>
        <?php
      }
    }
       ?>

    </body>
</html>
