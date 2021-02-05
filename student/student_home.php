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

.next {
	margin:200px;
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
        <a href=" admin_view_room.php">View Room</a>
		 
		<a href=" admin_view_doctors.php">View Doctor Detail</a>
		  
		<a href=" admin_view_medicine.php">View Medicine Inventory</a>
		<a href=" admin_view_menu.php">View Menu Detail</a><br>
	    <a href=" admin_view_bill.php">View Billing Detail</a><br>
      
    </div>
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Insert</a>
    <div class="dropdown-content">
					  <a href=" insert_problem.php">Insert Problem</a>
					  <a href=" student_hall_entry_insert.php">Insert Entry</a>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Search</a>
    <div class="dropdown-content">
				<a href=" student_menu_search.php">Search Menu</a><br>
			    <a href=" student_search.php">Search Bill</a>
			
				<a href="search_room_student.php">Search Room</a>
		
    </div>
	
  </li>
</ul>
         
<center>
<h2 >Welcome</h2>
	   

<p id="demo"></p>

<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
  var d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>		  
		
</center>	
<a href="login.php" class="previous">&laquo; Previous</a>
<a href="#" class="next">Next &raquo;</a>

</body>
</html>