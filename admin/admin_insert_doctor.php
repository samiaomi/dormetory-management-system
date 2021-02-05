<html>
<head>
<style>
body{
	 font-family: Arial, Helvetica, sans-serif;
	  background-image: url("p.jpg");
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
  margin:110px 10px;
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
 

}

</script>
</head>
<body bgcolor=#f1f1f1>
<center>
<h2>Sign Up Form for doctors</h2>
<img src="doctor.jpg" alt="Avatar" class="avatar"><br><br>
<form name="myform" action="action3.php" onsubmit="return validate()" method="post">
 ID 	 	 : <input type="text" name="id"/><br><br>
 Name 	 : <input type="text" name="name"/><br><br>
Phone: <input type="text" name="phone_no"/><br><br>
Email 	 : <input type="text" name="email"/><br><br>
<input type="submit" value="Submit">
</form>
</center>
<a href="index.php" class="previous">&laquo; Previous</a>
</body>
</html>