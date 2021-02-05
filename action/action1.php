<?php
include_once 'trial.php';
?>
<html>
    <head>
    </head>
	

    <body>
	<center>

        <h1>Successfully Entry Done</h1>
		</center>
<?php
$id = mysqli_real_escape_string($conn ,$_POST['student_id']);
$room = mysqli_real_escape_string($conn, $_POST['room_no']);
$dept = mysqli_real_escape_string($conn ,$_POST['dept']);
$phone = mysqli_real_escape_string($conn, $_POST['phone_no']);
$exit = mysqli_real_escape_string($conn, $_POST['exit_time']);
$entry = mysqli_real_escape_string($conn, $_POST['entry_time']);


$sql = "INSERT INTO `entry_list` (`student_id`, `room_no`, `dept`, `phone_no`, `exit_time`, `entry_time`) VALUES ('$id', '$room',
'$dept', '$phone', '$exit', '$entry');";
		
mysqli_query($conn, $sql);
?>


    </body>
</html>
