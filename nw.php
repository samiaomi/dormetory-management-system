<?php
include_once 'trial.php';
?>
<html>
    <head>
        <title>Care and Cure Hospital</title>
        <link rel = "stylesheet" type = "text/css" href = "css/WelcomePage.css" />
        <link rel = "stylesheet" type = "text/css" href = "css/all.css"/>
    </head>
	
<?php
$sql="SELECT * from admin;";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);

if($resultcheck>0)
{
	while($row=mysqli_fetch_assoc($result)){
     echo $row['name'] . "<br>";
	}
	while($row=mysqli_fetch_assoc($result))
	{
		echo $row['pass'] . "<br>";
	}
}
?>

    </body>
</html>
