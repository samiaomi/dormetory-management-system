<?php
include_once 'trial.php';
?>
<html>
    <head>
    </head>
    <body>
	<center>
		deleted
		<a href=" admin_view.php">view database</a>
       
	</center>
<?php
$student_id = mysqli_real_escape_string($conn, $_POST['id']);
$sql = "DELETE FROM `student_detail` WHERE `student_detail`.`student_id` = '$student_id';";

mysqli_query($conn, $sql);



?>
    </body>
</html>
