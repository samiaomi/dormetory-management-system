<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
  
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<title>
Emporium Girls' Hostel
</title>
    </head>

<body>
<div>
<center>
<h1>
Welcome To Emporium Girls' Hostel
</h1>
</center>
<div class="sidenav">
		 <a href=" admin_login.php">Admin </a>
		 <a href="student_login.php">Student</a>
		 <a href="employee_login.php">Employee</a>
		 

</div>
</body>
</html>