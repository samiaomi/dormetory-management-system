<?php
include_once 'trial.php';
?>
<html>
    <head>
	<style>
body{
background-image: url("o.jpeg");
}
.previous {
	margin:105px 30px;
  background-color: #333;
  color: white;
}
</style> 
 </head>
	

    <body>
	<center>

        <h1>Successfully Entry Done</h1>
		</center>
<?php
$id = mysqli_real_escape_string($conn ,$_POST['id']);
$room = mysqli_real_escape_string($conn, $_POST['name']);
$dept = mysqli_real_escape_string($conn ,$_POST['phone_no']);
$phone = mysqli_real_escape_string($conn, $_POST['email']);

$sql = "INSERT INTO `hal_doctors` (`doctor_id`, `doctor_name`, `phone_no`, `email`) VALUES ('$id', '$room',
'$dept', '$phone');";
		
mysqli_query($conn, $sql);
?>

<a href="admin_insert_doctor.php" class="previous">&laquo; Previous</a>

    </body>
</html>
