<?php
include_once 'trial.php';

              //Update patient information
$student_id = mysqli_real_escape_string($conn, $_POST['id']);
$due_bill = mysqli_real_escape_string($conn, $_POST['due']);
$total_bill = mysqli_real_escape_string($conn, $_POST['total']);

$sql = "UPDATE `hall_bill` SET `due_bill`='$due_bill',`total_bill`='$total_bill' WHERE  student_id = '$student_id' ;";
mysqli_query($conn, $sql);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update</title>
    <style>
      div {
        background-color: lightblue;
      }
    </style>
  </head>
  <body text="BLACK" bgcolor ="#8BF7C8">
  <center>
  <h2>Enter student id to update </h2>
<form name="myform"  method ="post" >
Student ID         : <input type="text" name="id"/> <br><br>
<h2>Enter info to update </h2>

Total Bill 	 	 : <input type="text" name="total"/> <br><br>
Due Bill 	 	 : <input type="text" name="due"/> <br><br>
<input type="submit" value="Submit">
</form>
</center>
    <div style="margin-top: 4%; margin-left:0%; margin-right:0%; font-size: 40px;font-weight: bold">
      <center>Updated Bill</center></div>
      <?php
      $sql = "SELECT * FROM hall_bill WHERE student_id = '$student_id';";

      $res = mysqli_query($conn,$sql);
      $check = mysqli_num_rows($res);

      if ($check > 0) {
        while($row = mysqli_fetch_assoc($res)) {?>
          <div style="margin-top: 8%; margin-left:35%; margin-right:35%; font-size: 30px;font-weight: bold">
          <?php
        echo  " Student ID: " . $row["student_id"]. "<br>Total Bill: "  . $row["total_bill"]. "<br>Due Bill:". $row["due_bill"]. "<br>";
        ?>
      </div>
        <?php
      }
    }
       ?>

    </body>
</html>
