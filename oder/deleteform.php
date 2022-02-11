<!DOCTYPE html>
<html>
<head>
  <title>OEdR Delete</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
input[type=text], input[type=password] 
{
  width: 15%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #e71111;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 15%;
}

</style>
</head>

<body  style="background: linear-gradient(to right,#d3d3d3, #d3d3d3);";>

    <br> <div align="center"><img src="we.jpg" height="100" width="400" ></div>


<form action="delete.php" method="post">

<div class="box black">
<div align="center">
  <br>
<h2 style="color:black">User Delete Form</h2>
    <div class="container">
      <input type="text" placeholder="Enter Username" name="uid">
        <br>
      <button type="submit" name="submit" ><strong>Delete it</strong></button><br><br>
    </div>
  </div>
</div>
</form>

</body>
</html>
