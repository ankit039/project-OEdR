<?php session_start();
 $upload_dir = "images/"; 
if(isset($_FILES["file"]["type"]))
{ 
    $validextensions = array("jpeg", "jpg", "png", "gif");
    $temporary = explode(".", $_FILES["file"]["name"]);
    $file_extension = end($temporary);
    if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $validextensions)) {
        if ($_FILES["file"]["error"] > 0){
            echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
        } else {
            if (file_exists($upload_dir.$_FILES["file"]["name"])) {                
                echo 'File already exist';
            } else {
                $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
                $filename = $_FILES['file']['name'];
                $filen=$_SESSION["username"];
                $targetPath = $upload_dir.$filen.$filename; // Target path where file is to be stored
                move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
                echo 'success';
            }
        }
    } 
} ?>