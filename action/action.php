<?php
include_once 'trial.php';
?>
<html>
    <head>
    </head>
	

    <body>
	<center>

        <h1>Successfully Registered</h1>
		</center>
<?php
$student_id = mysqli_real_escape_string($conn ,$_POST['id']);
$student_name = mysqli_real_escape_string($conn, $_POST['name']);
$phone_no = mysqli_real_escape_string($conn ,$_POST['phone_no']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$permanent_address = mysqli_real_escape_string($conn, $_POST['address']);
$dept = mysqli_real_escape_string($conn, $_POST['dept']);


$sql = "INSERT INTO student_detail (student_id, student_name, phone_no,email,permanent_address,dept)
        VALUES ('$student_id', '$student_name', '$phone_no', '$email', '$permanent_address', '$dept');";
mysqli_query($conn, $sql);
?>


    </body>
</html>
