<?php
include_once 'trial.php';

              //Update patient information
$day = mysqli_real_escape_string($conn, $_POST['day']);
$meal = mysqli_real_escape_string($conn, $_POST['meal']);
$time = mysqli_real_escape_string($conn, $_POST['time']);
$bill = mysqli_real_escape_string($conn, $_POST['bill']);

$sql = "UPDATE `menu` SET `meal`='$meal',`time`='$time',`bill`='$bill' WHERE  day = '$day' and `time`='$time';";
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
  <h2>Enter day to update </h2>
<form name="myform"  method ="post" >
Day          : <input type="text" name="day"/> <br><br>
Time	 	 : <input type="text" name="time"/> <br><br>
<h2>Enter info to update </h2>

Meal 	 	 : <input type="text" name="meal"/> <br><br>
Bill 	 	 : <input type="text" name="bill"/> <br><br>
<input type="submit" value="Submit">
</form>
</center>
    <div style="margin-top: 4%; margin-left:0%; margin-right:0%; font-size: 40px;font-weight: bold">
      <center>Updated meal</center></div>
      <?php
      $sql = "SELECT meal,day,time,bill FROM menu WHERE day = '$day';";

      $res = mysqli_query($conn,$sql);
      $check = mysqli_num_rows($res);

      if ($check > 0) {
        while($row = mysqli_fetch_assoc($res)) {?>
          <div style="margin-top: 8%; margin-left:35%; margin-right:35%; font-size: 30px;font-weight: bold">
          <?php
        echo  " Meal: " . $row["meal"]. "<br>Day: "  . $row["day"]. "<br>Time:". $row["time"]."<br >Bill: ".$row["bill"]. "<br>";
        ?>
      </div>
        <?php
      }
    }
       ?>

    </body>
</html>
