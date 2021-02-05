<?php
  include_once 'trial.php';

  session_start();

  $user = mysqli_real_escape_string($conn, $_POST['user']);
  $pass = mysqli_real_escape_string($conn, $_POST['pass']);
  
  $sql = "SELECT name,user_name,pass FROM admin WHERE user_name = '$user';";


  $res = mysqli_query($conn,$sql);
  $check = mysqli_num_rows($res);

if ($check > 0) {
  $get = mysqli_fetch_assoc($res);

;
  if($user === $get['user_name'] && $pass === $get['pass'])
  
  {
	  if($user==="admin1" && $pass==="101")
	  {	
      header("location: admin_home.php");
	   
  }
  else echo"enter valid pass";
  if($user==="admin2" && $pass==="102")
	  {	
      header("location: admin_home2.php");
	   
  }
  else echo"enter valid pass";
  
  }
  else {
    header("location: admin_login.php");
  }
}
else {
    header("location: admin_login.php");
}
 ?>
