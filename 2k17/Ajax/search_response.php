<?php
	if(isset($_GET["q"])){
		$q = $_GET["q"];
	}
	$names = array("mehul", "harsh", "karan", "gagan", "hardik", "vishnu");
	$pattern = "/" . $q . "/";

	$i = 0;
	$output = "";
	while($i < count($names)){
		if(preg_match($pattern, $names[$i])){
			$output .= "<p>" . $names[$i] . "</p>";
		}
		$i++;
	}
	echo $output;
?>