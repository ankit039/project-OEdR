<?php
session_start();

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "oder";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
if(isset($_POST['submit']))
{
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
}

if(empty($uid) || empty($pwd))
{
		header("location: login.php?login=empty");
		exit();
	}
		else
		{

		$sql="SELECT * FROM logincheck WHERE username ='$uid'";
		$result= mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);

		if($resultcheck < 1)
		{
			header("location: login.php?login=error_wrong_username");
			exit();
		}
	
	else
	{
		$row = mysqli_fetch_assoc($result);
			if (count($row)) 
			{
				if($pwd === $row['password'])
				{ 
				header("location: afterloging.php");
				$_SESSION["username"] = "$uid";
				exit();
				}
				else
				{
						header("location: login.php?login=error_wrong_password");
						exit();
				}
			
	}
}
}
?>
