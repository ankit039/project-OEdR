<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
	<title>OEdR</title>

<script async>(function(w, d) { w.CollectId = "5cbb707510976902428c3c0a"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>\


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script>
    if(window.history.forward(1) != null)
    window.history.forward(1);
  </script>

</head>
<style>
	 body {font-family: Arial, Helvetica, sans-serif;}
body {margin:0;}

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
<body style="background: linear-gradient(to right, #d3d3d3, #d3d3d3);";>

        <div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
    <br><br>
  <h4 style="color:maroon"><strong>Hello, <?php echo htmlentities($_SESSION["username"],ENT_QUOTES, 'UTF-8'); ?> welcome to OEdR</h4></strong>

  <img src="we.jpg" height="150" width="350" style="display: block;  margin-left: auto;  margin-right: auto;  width: 50%;">
</div></div>

  <div class="navbar" align="left">
    <div align="left">
    <a href="index.php">Log Out</a>
   <a href="aboutus.php">About us</a> 
    <a href="index.php">Home</a> 
  </div>
</div>

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">

  <h2 style="color:black"><strong>Available Books</strong></h2>
<marquee behavior="scroll" direction="right" scrolldelay="150" ><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://drive.google.com/file/d/1PoDUf-qiYPssVtZxUPTYIBz2GyItre59/view"><img src="https://tse4.mm.bing.net/th?id=OIP.uRwBRpZPshDEM8_KbgpHmQHaKN&pid=15.1&P=0&w=300&h=300" height="200" width="150"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://drive.google.com/file/d/17nxp55UuP46Vi98l213KrQl-c-wLOyMI/view?usp=sharing"><img src="https://tse2.mm.bing.net/th?id=OIP.mL9yv6m5Lli6Aqp6mLWfzgHaJK&pid=15.1&P=0&w=300&h=300" height="200" width="150"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://drive.google.com/file/d/1B5CjBTAv9mM9to47GhpSPCjIJQ9X_gHB/view?usp=sharing"><img src="https://tse1.mm.bing.net/th?id=OIP.-mr4zUfnjnFCrkvl0OAxeQAAAA&pid=15.1&P=0&w=300&h=300" height="200" width="150"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://drive.google.com/file/d/1aSQTnatx9qXb8fuodQlH1i1MqCn_UZ8L/view?usp=sharing"><img src="https://images-na.ssl-images-amazon.com/images/I/41khb7sczdL._SY291_BO1,204,203,200_QL40_.jpg" height="200" width="150"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://drive.google.com/file/d/1uthrDrIMa0cgxPS1tHpR3qdfBj9YPUKv/view?usp=sharing"><img src="https://tse4.mm.bing.net/th?id=OIP.QYyt7JrVpwbALELIinY5agAAAA&pid=15.1&P=0&w=300&h=300" height="200" width="150"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://drive.google.com/file/d/1YxMMLZFN1WNvUaDj9jwj_kg6wDowu-U0/view?usp=sharing"><img src="https://pictures.abebooks.com/isbn/9780070212343-us.jpg" height="200" width="150"></a>
</marquee>
<h2 style="color:black"><strong><br>For any queries and to reach us <a href="http://localhost/loginsystem/form.php">  Click here</a> </strong></h2>

<h2 style="color:black"><strong><br>To upload files <a href="http://localhost/upload_file/index.php">  Click here</a> </strong></h2>


</div></div>
</body>
</html>