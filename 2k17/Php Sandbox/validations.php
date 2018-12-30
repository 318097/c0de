<?php
	$string = "mehu.";

	function clean_input($variable){		
		return htmlspecialchars(trim($variable));		
	}	
	function validate_input($input){
		$pattern = '/^[a-zA-z0-9 ._]+$/';
		return preg_match($pattern, $input);
	}
	if(validate_input(clean_input($string))){
		echo "valid";
	}else{
		echo "Invalid";
	}
?>