<html>
<head>
	<title>OEdR Signup</title>
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

</style>
</head>

<body id="index" style="background: linear-gradient(to right, #d3d3d3, #d3d3d3);";>
<br> <div align="center"><img src="we.jpg" height="100" width="400" ></div>
    
            <form action="sign_validation.php" method="POST"> 

          <div class="box black">
<div align="center">
  <br><br><br><br>
<h2 style="color:black">Sign-Up Form</h2>
    <div class="container">
      <input  type="text" name="fname" placeholder=" First name " required>
        <br>
        <input  type="text" name="lname" placeholder=" Last name " required>
        <br>
     <input  type="text" name="uid" placeholder=" User name " required>
        <br>
        <input  type="text" name="email" placeholder=" E-mail " required>
        <br>
      <input type="password" name="pwd" placeholder=" Password " required>
        <br><br>
        <button id="login" type="submit" name="submit" value="REGISTER"><strong>Register</strong></button>
      
    </div>
  </div>
</div>
</form>
</body> 
</html>
