<?php
include_once 'trial.php';
?>
<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
  padding: 20px 80px;
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
  min-width: 260px;
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
  padding: 5px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
	margin:190px 30px;
  background-color: #333;
  color: white;
}




</style>
</head>
<body>

<ul>
   <li><a href="index.php">Home</a></li>
   <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">View</a>
	<div class="dropdown-content">
            <a href=" admin_view.php">view student database</a>
		    <a href=" admin_view_room.php">view room</a>
		    <a href=" admin_view_employee.php">view employee detail</a>
		    <a href=" admin_view_entry.php">view entry detail</a>
		    <a href=" admin_view_doctors.php">view doctor detail</a>
		    <a href=" admin_view_medicine.php">view medicine inventory</a>
		    <a href=" admin_view_menu.php">view menu detail</a>
			<a href=" admin_view_problem.php">view problems </a>
			<a href=" admin_view_bill.php">view billing detail</a>
			<a href=" admin_view_doctors.php">view doctor detail</a>
      <a href=" admin_view_medicine.php">view medicine detail</a><br>
    </div>
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Insert</a>
    <div class="dropdown-content">
					  <a href=" admin_insert_doctor.php">insert doctor</a>
					  <a href="admin_insert.php" >Insert Student</a>
					  <li class="dropdown">
					  </div>
					  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Search</a>
    <div class="dropdown-content">
				<a href=" admin_search.php">search student</a>
				<a href=" admin_search_employee.php">search employee</a>
		
    </div>
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Update</a>
    <div class="dropdown-content">
					  <a href=" update_employee.php">Employee</a>
					  <a href="update_student.php" >Insert Student</a>
					  <a href="update_mdicine.php" >Insert Student</a>
					  <a href="update_room.php" >Insert Student</a>
					  <a href="update_menu.php" >Menu</a>
					  <a href="update_hall_bill.php" >Hall Bill</a>
				</div>	  
  
	<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Delete</a>
    <div class="dropdown-content">
			<a href="admin_delete.php" >Delete Student</a>
		  <a href=" delete_employee.php">delete employee</a><br>
		  <a href=" delete_doctor.php">delete doctor </a>
		  <a href=" delete_medicine.php">delete medcine</a><br>
			    	
    </div>
	
  </li>
</ul>
         
<center><br>
<br><br><br>
<br><br><br>
<h1 >Welcome</h1>
<h2>
Choose Options
</h2>
	   

		  
		
</center>	
<a href="login.php" class="previous">&laquo; Previous</a>


</body>
</html>