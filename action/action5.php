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
$id = mysqli_real_escape_string($conn ,$_POST['med']);
$room = mysqli_real_escape_string($conn, $_POST['name']);
$dept = mysqli_real_escape_string($conn ,$_POST['amount']);


$sql = "INSERT INTO `medicine` (`medicine_genre`, `medicine_name`, `amount`) VALUES ('$id', '$room',
'$dept');";
		
mysqli_query($conn, $sql);
?>


    </body>
</html>
