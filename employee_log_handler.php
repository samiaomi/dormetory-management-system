<?php
  include_once 'trial.php';

  session_start();

  $id = mysqli_real_escape_string($conn, $_POST['id']);
  $pass = mysqli_real_escape_string($conn, $_POST['pass']);
  
  $sql = "SELECT employee_id,employee_pass FROM login WHERE employee_id = '$id';";


  $res = mysqli_query($conn,$sql);
  $check = mysqli_num_rows($res);

if ($check > 0) {
  $get = mysqli_fetch_assoc($res);

;
  if($id === $get['employee_id'] && $pass === $get['employee_pass'])
  
  {
	  
      header("location: employee_home.php");
	   
  }
 
  else {
    header("location: employee_login.php");
  }
}
else {
    header("location: employee_login.php");
}
 ?>
