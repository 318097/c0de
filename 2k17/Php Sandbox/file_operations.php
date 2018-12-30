<?php
	// specifies the path from the current location
	// files folder is within the current folder
	$dir = "files/";
	$choice = 0;
	switch ($choice) {
		case '1':
			$file_r = fopen($dir . "hello.txt", "r");
			echo fgets($file_r);
			break;

		case '2':
			$file_w = fopen($dir . "hello2.txt", "w");
			fputs($file_w, "heeeeellllooo");
			break;

		case '3':
			// stat() returns an array of the stats of a file
			// therefore print_r() is used to display the array
			echo "<pre>";
				print_r(stat($dir . "hello.txt"));
			echo "</pre>";
			break;	
		case '4':
			// is_dir() checks if the path specified is a directory or not		
			if(is_dir($dir)){
				// opendir() returns a directory handle. files cannot be accessed directly
				$dh = opendir($dir);
				// readdir() returns a file name from the list of directory handle which was returned by opendir()
				// readdir() returns . and .. as the files
				while($file = readdir($dh)){
					// . and .. should be skipped			
					if($file !== "." && $file !== ".."){
						// these set of lines opens every file and prints its contents	
						$fh = fopen($dir . $file, "r");
						echo "$file Contents : <br/>";
						while ($data = fgets($fh)) {
							echo $data;
						}			
						echo "<br/>";
					}
				} 
			}
			break;
	}
	
	if(is_dir($dir)){
		$dh = opendir($dir);
		$i = 1;		
		while($file = readdir($dh)){
			if($file !== "." && $file !== ".."){
				// renames the files 	
				rename($dir . $file, $dir . "VIRUS_" . $i . ".txt");	
				$i++;			
			}
		} 
	}		
?>