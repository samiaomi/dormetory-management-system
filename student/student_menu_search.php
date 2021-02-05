<?php
include_once 'trial.php';
?>
<html>
    <head>
    </head>
	<style>
	.previous {
	margin:200px 50px;
  background-color: #333;
  color: white;
}
	</style>

    <body>
	<center>
<h2>Enter date to search</h2>
<form name="myform" action="menu_search.php" method ="post" >
Date 	 	 : <input type="text" name="date"/> <br><br>
<input type="submit" value="Submit">
</form>
	</center>
		<a href="employee_home.php" class="previous">&laquo; Previous</a>
	</body>
</html>
