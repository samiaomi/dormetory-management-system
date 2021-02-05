<?php
include_once 'trial.php';
?>
<html>
    <head>
    </head>
	<style>
	.avatar {
  vertical-align: middle;
  width: 150px;
  height: 150px;
  border-radius: 100%;
}
.previous {
	margin:300px 50px;
  background-color: #333;
  color: white;
}
	</style>

    <body>
	<center>
<h2>Enter student ID to search</h2>
<form name="myform" action="admin_search_student.php" method ="post" >
<img src="s.png" alt="Avatar" class="avatar"><br><br>
ID 	 	 : <input type="text" name="id"/> <br><br>
<input type="submit" value="Submit">
</form>
	</center>
<a href="admin_home.php" class="previous">&laquo; Previous</a>		
	</body>
</html>
