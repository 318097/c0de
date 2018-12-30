<?php
	//path to the picture you're wanting the viewer to download
	$path = 'images/image_1.jpg';

	if(file_exists($path)){
	//split the extension and name from eachother
	$e = explode('.', $path);

	//get the name of the file
	$file_name = $e[0]; 

	//image extension
	$extension = $e[1];

	// Send a header saying we'll be displaying a picture
	header('Content-type: image/'. $extension);

	// Name the file
	header('Content-Disposition: attachment; filename="'. $file_name .'.'. $extension .'"');

	// Path to the picture you're wanting the user/viewer to download
	readfile($file_name .'.'. $extension);
	}else{
	echo 'The requested image does not exist.';
	}
?>