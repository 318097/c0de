<?php
	// Vacation Labs (Goa) - Hiring Challenge (Program 1/3) Angel.co
	// Frequency table
	// Given a list of numbers, calculate the no of frequency of each number & display it in ascending order of number.
	// Sample Input :
	// 3 -1 -3 5 5 1 3 -4 3 -5 4 2 -2 -3 -5 3 1 4 5 3

	// Sample Output :
	// -5  2
	// -4  1
	// -3  2
	// -2  1
	// -1  1
	//  1  2
	//  2  1
	//  3  5
	//  4  2
	//  5  3

	// $str = fgets(STDIN);
	$str = "3 -1 -3 5 5 1 3 -4 3 -5 4 2 -2 -3 -5 3 1 4 5 3";
	$input = explode(' ', $str);

	sort($input);
	print_r($input);
	$count = 0;
	$i = 0;
	while($i < count($input)){
		$ele = $input[$i];

		$j = $i + 1;
		$count = 1;
		while($j < count($input) && $ele == $input[$j]){
			$count++;
			$j++;
		}
		echo $ele . " " . $count . "\n";	
		$i = $i + $count;
	}
?>