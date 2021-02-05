<?php
include_once 'trial.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 20px 145px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 250px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 20px 30px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #999;}

.dropdown:hover .dropdown-content {
  display: block;
}
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
	margin:300px;
  background-color: #333;
  color: white;
}




</style>
</head>
<body>

<ul>
  
  <li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">View</a>
	<div class="dropdown-content">
      <a href="admin_view_room.php">View Room</a>
      <a href=" admin_view_menu.php">View Menu</a>
      
    </div>
  <li><a href="index.php">Home</a></li>
  <li><a href="policy.php">Policy</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Search</a>
    <div class="dropdown-content">
				<a href=" student_menu_search.php">search menu</a><br>
			    
				<a href="search_room_student.php">search room</a><br>
				<a href=" admin_search_employee.php">search employee</a>
    </div>
	
  </li>
</ul>


<center>
<h1>Welcome</h1>
</center>
<center>
<p id="demo"></p>
<script margin=300px>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
  var d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}

</script>
</center>
<a href="login.php" class="previous">&laquo; Previous</a>


</body>
</html>