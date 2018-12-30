<?php
	$text = "hello world How are You";
	$text = explode(" ", $text);
	$result;
	foreach ($text as $words) {	
	ucfirst($words);		
	}
	$text = implode(" ", $text);
	echo $text;

?>