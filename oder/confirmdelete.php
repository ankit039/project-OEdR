<!DOCTYPE html>
<html>
<head>
  <title>OEdR Login</title>
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
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 15%;
}

.alert {
  padding: 20px;
  background-color: #e71111;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

</style>
</head>

<body  style="background: linear-gradient(to right,#d3d3d3, #d3d3d3);";>

    <br> <div align="center"><img src="we.jpg" height="100" width="400" ></div>

<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Thank You!</strong> You have Sucessfully deleted the record.
</div>

<form action="connect.php" method="post">

<div class="box black">
<div align="center">
  <br>
<h2 style="color:black">User Login Form</h2>
    <div class="container">
      <input type="text" placeholder="Enter Username" name="uid" required>
        <br>
      <input type="password" placeholder="Enter Password" name="pwd" required>
        <br><br>
      <button type="submit" name="submit" ><strong>Login</strong></button><br><br>
      <label>
        <br>
        <input style="color:black" type="checkbox" unchecked="unchecked" name="remember"> Remember me
      </label>
    </div>
  </div>
</div>
</form>


<form action="signup.php" method="post">
 <div align="center">
  <br>
    <div class="container">
      <p style="color:black"><strong>don't have an account ?? </strong><br><button type="submit" href="signup.php"><strong>sign up</strong></button></p>
    </div>
  </div>
</form>

<form action="deleteform.php" method="post">
 <div align="center">
  <br>
    <div class="container">
      <p style="color:black"><strong>Want to delete record? click here..</strong><br><button type="submit" href="signup.php"><strong>Delete Record</strong></button></p>
    </div>
  </div>
</form>

</body>
</html>
