<html>
<head>
<script type="text/javascript">
function validate() {
 var med = document.forms["myform"]["med"].value;
 if(med==""){
 alert("Please enter the medicine name");
 return false;
 }
 var name = document.forms["myform"]["name"].value;
 if(name==""){
 alert("Please enter the medicine name");
 return false;
 }
 var amount = document.forms["myform"]["amount"].value;
 if(amount==""){
 alert("Please enter the amount");
 return false;
 }
 
}

</script>
</head>
<body bgcolor=lightblue>
<center>
<h2>Sign Up Form for students</h2>
<form name="myform" action="action5.php" onsubmit="return validate()" method="post">
Medicine Genre	 	 : <input type="text" name="med"/><br><br>
Medicine Name 		: <input type="text" name="name"/><br><br>
Amount 	 : <input type="text" name="amount"/><br><br>
<input type="submit" value="Submit">
</form>
</center>
</body>
</html>