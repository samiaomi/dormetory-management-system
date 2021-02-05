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
$id = mysqli_real_escape_string($conn ,$_POST['date']);
$room = mysqli_real_escape_string($conn, $_POST['meal']);
$dept = mysqli_real_escape_string($conn ,$_POST['day']);
$phone = mysqli_real_escape_string($conn, $_POST['time']);
$bill = mysqli_real_escape_string($conn, $_POST['bill']);

$sql = "INSERT INTO `menu` (`date`, `meal`, `day`, `time` , `bill`) VALUES ('$id', '$room',
'$dept', '$phone' ,'$bill');";
		
mysqli_query($conn, $sql);
?>


    </body>
</html>
