<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "loginsystem";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (isset($_POST['submit'])) {
	
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
}
	//error handlers 
	//check for empty fields
	if (empty($uid)) 
	{
		header("location: deleteform.php?signup=empty");
		exit();
	}
	else
	{
                    $sql="DELETE FROM detail WHERE username ='$uid'";
							if($conn->query($sql) === TRUE) 
										{
           								 header('location: confirmdelete.php');
            							} 
							exit();
				
		}


?>