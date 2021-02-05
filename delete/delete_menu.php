<?php
include_once 'trial.php';
?>
<html>
    <head>
    </head>
	

    <body>
	<center>
<h2>Enter medicine name to delete</h2>
<form name="myform"  method ="post" >
ID 	 	 : <input type="text" name="id"/> <br><br>
<input type="submit" value="Submit">
</form>
	</center>
	<?php
$student_id = mysqli_real_escape_string($conn, $_POST['id']);
$sql = "DELETE FROM `medicine` WHERE `medicine`.`medicine_name` = '$student_id';";

mysqli_query($conn, $sql);



?>
<a href=" admin_view_medicine.php">view medicine detail</a>
		
	</body>
</html>
