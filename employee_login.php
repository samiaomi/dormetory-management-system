<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <style>
     a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
	margin:300px 50px;
  background-color: #333;
  color: white;
}
   
.avatar {
  vertical-align: middle;
  width: 150px;
  height: 150px;
  border-radius: 100%;
}
</style>
  </head>
  <body text="BLACK" bgcolor ="#f9f9f9">
  <center>
<form name="myform" action="employee_log_handler.php" method ="post" >
<img src="i.png" alt="Avatar" class="avatar"><br><br>


Employee ID	         :		 <input type="text" name="id"/> <br><br>
Password	 : <input type="text" name="pass"/> <br><br>

<input type="submit" value="Submit">
</form>
</center>
<a href="login.php" class="previous">&laquo; Previous</a>
</body>
</html>