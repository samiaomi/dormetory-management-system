<?php
include_once 'trial.php';
?>
<html>
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("img.png");
}

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 800px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: gray;
  transform: rotateY(180deg);
  color: white;
}
.button {
  background-color: #f1f1f1;
  border: none;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
  color: white;
}

.button:hover {
  background-color: #E5E7E9;

}

</style>
</head>
<body>
<?php
$sql = "SELECT * FROM admin WHERE user_name='admin1' ;";
$res=mysqli_query($conn, $sql);
$check = mysqli_num_rows($res);

     if ($check > 0) {
       while($row = mysqli_fetch_assoc($res)) 
	   {?>
         <center>
		  <?php
		 echo "Hello " . $row["name"]. " <br>";
		       }
   }
    
       ?>
	   
</center>
<p id="demo"></p>

<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
  var d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script>
<center>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="i.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1>Samia Ahmed</h1> 
      <p>Phone no: 018397537473</p> 
      <p>Email: samiefnk@gmail.com</p>
    </div>
  </div>
</div>
<br><br>

<button class="button">
          <a href="admin_bar.php" >Choose Option</a><br><br>
		  <a href="login.php" >&laquo; Previous</a>
</button>
         
</center>
</body>
</html>