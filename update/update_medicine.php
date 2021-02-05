<?php
include_once 'trial.php';

              //Update patient information
$medicine_name = mysqli_real_escape_string($conn, $_POST['name']);
$amount = mysqli_real_escape_string($conn, $_POST['amount']);


$sql = "UPDATE `medicine` SET `amount`='$amount' WHERE  medicine_name = '$medicine_name' ;";
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
  <h2>Enter medicine name to update </h2>
<form name="myform"  method ="post" >
Medicine Name         : <input type="text" name="name"/> <br><br>
<h2>Enter info to update </h2>

Amount	 	 : <input type="text" name="amount"/> <br><br>

<button onclick="myFunction()" value="Submit"> ckcli</button>
<script>
function myFunction() {
  var txt;
  if (confirm("Press a button!")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</form>
</center>
    <div style="margin-top: 4%; margin-left:0%; margin-right:0%; font-size: 40px;font-weight: bold">
      <center>Updated Info</center></div>
      <?php
      $sql = "SELECT * FROM medicine WHERE medicine_name = '$medicine_name';";

      $res = mysqli_query($conn,$sql);
      $check = mysqli_num_rows($res);

      if ($check > 0) {
        while($row = mysqli_fetch_assoc($res)) {?>
          <div style="margin-top: 8%; margin-left:35%; margin-right:35%; font-size: 30px;font-weight: bold">
          <?php
        echo  " Medicine_genre: " . $row["medicine_genre"]. "<br>Medicine_name: "  . $row["medicine_name"]. "<br>Amount:". $row["amount"]. "<br>";
        ?>
      </div>
        <?php
      }
    }
       ?>

    </body>
</html>
