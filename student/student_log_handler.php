<?php
  include_once 'trial.php';

  session_start();

  $id = mysqli_real_escape_string($conn, $_POST['id']);
  $pass = mysqli_real_escape_string($conn, $_POST['pass']);
  
  $sql = "SELECT student_id,student_pass FROM login WHERE student_id = '$id';";


  $res = mysqli_query($conn,$sql);
  $check = mysqli_num_rows($res);

if ($check > 0) {
  $get = mysqli_fetch_assoc($res);

;
  if($id === $get['student_id'] && $pass === $get['student_pass'])
  
  {
	  
      header("location: student_home.php");
	   
  }
 
  else {
    header("location: student_login.php");
  }
}
else {
    header("location: student_login.php");
}
 ?>
