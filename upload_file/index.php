<!DOCTYPE html>
<?php session_start();?>

<html>
<title>OEdR Upload File</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
input[type=file] 
{ 
  background-color: #ffffff;
  width: 28%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 0px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 15%;
}
.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}


</style>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.10/angular-route.min.js"></script>
        <script src="app.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

<body  style="background: linear-gradient(to right,#d3d3d3, #d3d3d3);";>
    <body ng-app="myApp" ng-controller="myCtrl">

<div class="navbar" align="left">
    <div align="left">
    <a href="http://localhost/oder/index  .php">Log Out</a>
    <a href="http://localhost/oder/afterloging.php">Back</a> 
  </div>
</div>
  <h4 style="color:maroon"><strong>Hello, <?php echo htmlentities($_SESSION["username"],ENT_QUOTES, 'UTF-8'); ?> welcome to OEdR</h4></strong>
  
      <div class="row">
  <div class="col-md-5">
  </div>
  <div class="col-md-7">
    <br><br><br><br><br><br><br><br><br><br>
    <strong><h3 style="color:black">Select File To Upload</h3></strong><br>
            <input type="file" file-model="myFile"/><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" ng-click="uploadFile()">upload me</button>
        </div>
    </body>
</body>
 </html>