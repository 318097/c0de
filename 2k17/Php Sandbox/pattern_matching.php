<?php
	// preg_match() return 1 if a match is found, 0 otherwise
	$str = "hello world, I love programming";
	$pattern = "/hello/";
	if(preg_match($pattern, $str)){
		echo "Match found";
	}else{
		echo "Match not found";
	}
	echo "<br/>";
	echo preg_match($pattern, $str);
?>