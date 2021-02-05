<html>
<head>
<script type="text/javascript">
function validate() {
 var student_id = document.forms["myform"]["student_id"].value;
 if(student_id==""){
 alert("Please enter the ID");
 return false;
 }
 var room_no = document.forms["myform"]["room_no"].value;
 if(room_no==""){
 alert("Please enter the room no");
 return false;
 }
 var dept = document.forms["myform"]["dept"].value;
 if(dept==""){
 alert("Please enter the dept");
 return false;
 }
 var phone_no = document.forms["myform"]["phone_no"].value;
 if(phone_no==""){
 alert("Please enter the mobile no");
 return false;
 }else{
 if(isNaN(mobile)){
 alert("Mobile number not valid");
 return false;
 }
 } 
  
 var exit_time = document.forms["myform"]["exit_time"].value;
 if(exit_time==""){
 alert("Please enter the exit time");
 return false;
 }
 var entry_time = document.forms["myform"]["entry_time"].value;
 if(entry_time==""){
 alert("Please enter the entry time");
 return false;
 }
}
.previous {
	margin:450px 30px;
  background-color: #333;
  color: white;
}

</script>
</head>
<body bgcolor=#f1f1f1>
<center>
<h2>Enter Info</h2>
<form name="myform" action="action1.php" onsubmit="return validate()" method="post">
Student ID 	 	 : <input type="text" name="student_id"placeholder="id"/><br><br>
Room no	 		: <input type="text" name="room_no"placeholder="room no"/><br><br>
Department 	 : <input type="text" name="dept"placeholder="dept"/><br><br>
Phone No : <input type="text" name="phone_no"placeholder="phone"/><br><br>
Exit time 	 : <input type="text" name="exit_time" placeholder="exit time"/><br><br>
Entry time 	 : <input type="text" name="entry_time"placeholder="entry time"/><br><br>
<input type="submit" value="Submit">
</form>
</center>
<a href="student_home.php" class="previous">&laquo; Previous</a>
</body>
</html>