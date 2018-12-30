<?php
	$path = 'uploads/upload.txt';

	if(file_exists($path)){
		$e = explode('.', $path);
	
		$file_name = $e[0]; 	
		$extension = $e[1];

		header('Content-type: plain/'. 'text');

		header('Content-Disposition: attachment; filename="'. $file_name .'.'. $extension .'"');

		readfile($file_name .'.'. $extension);
	}else{
		echo 'The requested file does not exist.';
	}
?>