<?php
include_once 'trial.php';
?>
<html>
    <head>
    </head>
	<style>
	.button {
  background-color: #333;
  border: none;
  color: black;
  padding: 30px 20px;
  text-align: center;
  text-decoration: italic;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;

}

.button:hover {
  background-color: #E5E7E9;

}
	</style>

    <body>
	<center>
<h2>Enter doctor ID to delete</h2>
<form name="myform"  method ="post" >
ID 	 	 : <input type="text" name="id"/> <br><br>
<input type="submit" value="delete">
</form>
	</center>
	<?php
$student_id = mysqli_real_escape_string($conn, $_POST['id']);
$sql = "DELETE FROM `hal_doctors` WHERE `hal_doctors`.`doctor_id` = '$student_id';";

mysqli_query($conn, $sql);



?>
<center>
<button>
<a href=" admin_view_doctors.php">view doctor detail</a>
		</button>
		</center>
	</body>
</html>
