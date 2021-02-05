<?php
include_once 'trial.php';
?>
<html>
    <head>
    </head>
	

    <body>
	<center>
<h2>Enter doctor ID to delete</h2>
<form name="myform"  method ="post" >
Day          : <input type="text" name="id"/> <br><br>
Meal 	 	 : <input type="text" name="id"/> <br><br>
Time	 	 : <input type="text" name="id"/> <br><br>
Bill 	 	 : <input type="text" name="id"/> <br><br>
<input type="submit" value="Submit">
</form>
	</center>
	<?php
$student_id = mysqli_real_escape_string($conn, $_POST['id']);
$sql = "DELETE FROM `hal_doctors` WHERE `hal_doctors`.`doctor_id` = '$student_id';";

mysqli_query($conn, $sql);



?>
<a href=" admin_view_doctors.php">view doctor detail</a>
		
	</body>
</html>
