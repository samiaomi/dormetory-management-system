<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;

 background-image: url("f.jpg");
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 30.3%;
  margin-bottom: 16px;
  padding: 10px 15px;
}

.card {
  box-shadow: 0 10px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 10px 10px;
  background-color:#f1f1f1;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
  background-color:#f1f1f1;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: black;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.previous {
	margin:105px 30px;
  background-color: #333;
  color: white;
}

</style>
</head>
<body>

<div class="about-section">
  <h1>Welcome to Emporium Girls' Hostel</h1>
  <p>We provide the best service and the best security.</p>
 
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="i.png" alt="Jane" ">
      <div class="container">
        <h2>MD Rahman</h2>
        <p class="title">Manager</p>
        <p>Phone No: 02837869.</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="imag.png" alt="Mike" ">
      <div class="container">
        <h2>Samia Ahmed</h2>
        <p class="title">Admin</p>
        <p>Phone NO:02975982</p>
        <p>samia@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images.png" alt="John" ">
      <div class="container">
        <h2>Mehrab Ahmed</h2>
        <p class="title">Admin</p>
        <p>Phone NO:908409u24</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<a href="index.php" class="previous">&laquo; Previous</a>
</body>
</html>
