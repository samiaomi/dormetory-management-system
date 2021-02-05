<html>
<head>
<script type="text/javascript">
function validate() {
 var date = document.forms["myform"]["date"].value;
 if(date==""){
 alert("Please enter the  date");
 return false;
 }
 var meal = document.forms["myform"]["meal"].value;
 if(meal==""){
 alert("Please enter the meal");
 return false;
 }
 var day = document.forms["myform"]["day"].value;
 if(day==""){
 alert("Please enter the day");
 return false;
 }
 var time = document.forms["myform"]["time"].value;
 if(time==""){
 alert("Please enter the time");
 return false;
 }
 var bill = document.forms["myform"]["bill"].value;
 if(bill==""){
 alert("Please enter the bill");
 return false;
 }
 
}

</script>
</head>
<body bgcolor=lightblue>
<center>
<h2>Meal</h2>
<form name="myform" action="action6.php" onsubmit="return validate()" method="post">
Date	 	 : <input type="text" name="date"/><br><br>
Meal 		: <input type="text" name="meal"/><br><br>
Day	 : <input type="text" name="day"/><br><br>
Time	 : <input type="text" name="time"/><br><br>
Bill	 : <input type="text" name="bill"/><br><br>
<input type="submit" value="Submit">
</form>
</center>
</body>
</html>