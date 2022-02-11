<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "oder";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (isset($_POST['submit'])) {
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
}
	//error handlers 
	//check for empty fields
	if (empty($uid)|| empty($pwd)) 
	{
		header("location: signup.php?signup=empty");
		exit();
	}
	else
	{
		if(!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)) 
		 	{
			header("location: signup.php?signup=invalid_firstname_or_lastname");
			exit();
			}
		else{
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)) 
			{
			header("location: signup.php?signup=notvalid_email");
			exit();
			}
				$sql = "SELECT * FROM logincheck WHERE username='$uid'";
				$result = mysqli_query($conn,$sql);
				$resultcheck = mysqli_num_rows($result);

				if($resultcheck > 0)
				{
					header("location: signup.php?signup=usertaken");
					exit();
				} 


           			$row = mysqli_fetch_assoc($result);
					$sql= "INSERT INTO logincheck (firstname,lastname,username,email, password) VALUES 
					('$fname','$lname','$uid','$email','$pwd');";
					mysqli_query($conn,$sql);
					
			if($fname && $lname && $uid && $email && $pwd) 
			{
            header('location: aftersignup.php');
            } 
			
							exit();
				
		}
	}
?>