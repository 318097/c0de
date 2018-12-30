<?php
$dir = "files/";
if(is_dir($dir)){
		$dh = opendir($dir);
		$i = 10;		
		while($file = readdir($dh)){
			if($file !== "." && $file !== ".."){
				// renames the files 	
				rename($dir . $file, $dir . "10" . $i . ".jpg");	
				$i++;			
			}
		} 
	}		
?>