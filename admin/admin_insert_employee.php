<html>
<head>
<script type="text/javascript">
function validate() {
	var id = document.forms["myform"]["id"].value;
 if(id==""){
 alert("Please enter the ID");
 return false;
 }else{
 if(isNaN(id)){
 alert("ID number not valid");
 return false;
 }
 }
 var name = document.forms["myform"]["name"].value;
 if(name==""){
 alert("Please enter the name");
 return false;
 }
 var phone_no = document.forms["myform"]["phone_no"].value;
 if(phone_no==""){
 alert("Please enter the phone no");
 return false;
 }else{
 if(isNaN(mobile)){
 alert("Phone number not valid");
 return false;
 }
 } 
  
 var email = document.forms["myform"]["email"].value;
 if(email==""){
 alert("Please enter the email");
 return false;
 }else{
 var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
 var x=re.test(email);
 if(x){
 }else{
 alert("Email id not in correct format");
 return false;
 } 
 } 
 
 var salary = document.forms["myform"]["salary"].value;
 if(salary==""){
 alert("Please enter the salary");
 return false;
 }
 var sector = document.forms["myform"]["sector"].value;
 if(sector==""){
 alert("Please enter the sector");
 return false;
 }
}

</script>
</head>
<body bgcolor=lightblue>
<center>
<h2>Sign Up Form for students</h2>
<form name="myform" action="action2.php" onsubmit="return validate()" method="post">
Employee ID 	 	 : <input type="text" name="id"/><br><br>
Employee Name 	 : <input type="text" name="name"/><br><br>
Phone_no : <input type="text" name="phone_no"/><br><br>
Email 	 : <input type="text" name="email"/><br><br>
Salary : <textarea name="sector"></textarea><br><br>
Sector	 : <input type="text" name="salary"/><br><br>
<input type="submit" value="Submit">
</form>
</center>
</body>
</html>