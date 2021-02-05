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
 var problem = document.forms["myform"]["problem"].value;
 if(problem==""){
 alert("Please enter the problem");
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
  
 
}

</script>
</head>
<body bgcolor=#f1f1f1>
<center>
<h2>Enter Info</h2>
<form name="myform" action="action4.php" onsubmit="return validate()" method="post">
Student ID 	 	 : <input type="text" name="student_id"/><br><br>
Room no	 		: <input type="text" name="room_no"/><br><br>
Department 	 : <input type="text" name="dept"/><br><br>
Problem 	 : <input type="text" name="problem"/><br><br>
Phone_no : <input type="text" name="phone_no"/><br><br>
<input type="submit" value="Submit">
</form>
</center>
</body>
</html>