<?php
	// script to upload a file 
	if(isset($_POST["submit"])){
		// $_FILES is a multidimensional array
		// it returns an associative array of the details of the uploaded files
		$file = $_FILES["file"];
		echo "<pre>";
		print_r($_FILES);
		echo "</pre>";

		
		echo $_SERVER["DOCUMENT_ROOT"]; // returns c:/xampp
		echo "<br/>";
		echo $_SERVER["PHP_SELF"]; // returns /myFiles/_Others/Php/file_upload.php
		echo "<br/>";
		$newPath = $_SERVER["DOCUMENT_ROOT"] . "/myFiles/_Others/Php/";

		// uploads file to the upload folder in the current directory
		move_uploaded_file($file["tmp_name"] , "uploads/" . $file["name"]);

		echo "Sucessfully Uploaded";
		echo "<br/>";
		exit();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>File Upload using PHP</title>
	</head>
	<body>
		<form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="file"/>
			<br/>
			<input type="submit" name="submit" value="Submit">
		</form>
	</body>
</html>