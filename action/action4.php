<?php
include_once 'trial.php';
?>
<html>
    <head>
	<style>
	body{
		background-color:#f1f1f1;
	}
	.previous {
	margin:190px 30px;
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
$id = mysqli_real_escape_string($conn ,$_POST['student_id']);
$room = mysqli_real_escape_string($conn, $_POST['room_no']);
$dept = mysqli_real_escape_string($conn ,$_POST['dept']);
$problem = mysqli_real_escape_string($conn ,$_POST['problem']);
$phone = mysqli_real_escape_string($conn, $_POST['phone_no']);


$sql = "INSERT INTO `problem` (`student_id`, `room_no`, `dept`, `problem`, `phone_no`) VALUES ('$id', '$room',
'$dept','$problem', '$phone');";
		
mysqli_query($conn, $sql);
?>

<a href="student_home.php" class="previous">&laquo; Previous</a>
    </body>
</html>
