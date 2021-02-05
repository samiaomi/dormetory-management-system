<html>
<head>
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
 var name = document.forms["myform"]["name"].value;
 if(name==""){
 alert("Please enter the name");
 return false;
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
 var mobile = document.forms["myform"]["mobile"].value;
 if(mobile==""){
 alert("Please enter the mobile");
 return false;
 }else{
 if(isNaN(mobile)){
 alert("Mobile number not valid");
 return false;
 }
 } 
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
 var address = document.forms["myform"]["address"].value;
 if(address==""){
 alert("Please enter the address");
 return false;
 }
 var dept = document.forms["myform"]["dept"].value;
 if(dept==""){
 alert("Please enter the dept");
 return false;
 }
}

</script>
</head>
<body bgcolor=#f1f1f1>
<center>
<h2>Sign Up Form for students</h2>
<form name="myform" action="action.php" onsubmit="return validate()" method="post">
<img src="s.png" alt="Avatar" class="avatar"><br><br>

ID :<input type="text" name="id"/><br><br>
Name : <input type="text" name="name"/><br><br>
Phone : <input type="text" name="phone_no"/><br><br>
Email : <input type="text" name="email"/><br><br>
Address : <textarea name="address"></textarea><br><br>
Dept :<input type="text" name="dept"/><br><br>
<input type="submit" value="Submit">
</form>
</center>
<a href="index.php" class="previous">&laquo; Previous</a>
</body>
</html>