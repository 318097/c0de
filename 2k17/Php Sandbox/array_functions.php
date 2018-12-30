<?php
	$numbers = array(1, 2, 3, 4, 5);
	print_r($numbers);
	echo "<br/><br/>";


	// removes an element from the start of an array & returns the element.
	$result = array_shift($numbers);
	echo $result . "<br/>";
	print_r($numbers);
	echo "<br/><br/>";

	// adds an element to the begining of the array & returns the count.
	$result = array_unshift($numbers, "first");
	echo $result . "<br/>";
	print_r($numbers);
	echo "<br/><br/>";

	echo "<hr/>";

	// removes an element from the end of an array & returns the element.
	$result = array_pop($numbers);
	echo $result . "<br/>";
	print_r($numbers);
	echo "<br/><br/>";

	// adds an element to the end of the array & returns the count.
	$result = array_push($numbers, "last");
	echo $result . "<br/>";
	print_r($numbers);
	echo "<br/><br/>";
?>