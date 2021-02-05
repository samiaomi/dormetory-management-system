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
$id = mysqli_real_escape_string($conn ,$_POST['id']);
$room = mysqli_real_escape_string($conn, $_POST['name']);
$dept = mysqli_real_escape_string($conn ,$_POST['phone_no']);
$phone = mysqli_real_escape_string($conn, $_POST['email']);
$exit = mysqli_real_escape_string($conn, $_POST['salary']);
$entry = mysqli_real_escape_string($conn, $_POST['sector']);

$sql = "INSERT INTO `employee_detail` (`employee_id`, `employee_name`, `phone_no`, `email`, `salary`, `sector`) VALUES ('$id', '$room',
'$dept', '$phone', '$exit', '$entry');";
		
mysqli_query($conn, $sql);
?>


    </body>
</html>
