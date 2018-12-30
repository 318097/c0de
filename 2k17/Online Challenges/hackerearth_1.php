<?php
	// Cogoport Developer Hiring Challenge
	// Odd Counts
	// You are given a binary string (containing only 0s and 1s) which contains 0's or 1's. 
	// Find the total number of sub-strings which has odd decimal representation of its bits.
	// Consider binary representation from left to right, means decimal value of 1101 is 11.
	// Here sub-string means continuous stream of character's from string.

	// Note: There can be trailing 0's on sub-string, means decimal value of 1101 and 11010 is consider equal.

	// Input Format:
	// First line will contain given Binary String.

	// Output Format:
	// Print the total number of sub-strings having odd decimal representation of their bits.

	// Sample Input:
	// 1101

	// Sample Output:
	// 8

	// Explanation
	// Valid sub-string are 1101 , 110, 101,11,10, 1,1,1 as there decimal representation 11, 3, 5, 3, 1, 1, 1, 1 respectively.

	$input = "1101";
	$substrings = array();
	// echo strlen($input) . "\n";
	$x = 1;
	while($x <= strlen($input)){

		for($i = 0; $i < strlen($input) - $x + 1; $i++){
			$temp = substr($input, $i, $x);
			// echo $temp . "\n";
			if(substr($temp, 0, 1) == 1 ){
				array_push($substrings, $temp);
			}
		}

		$x++;
	}


	// print_r($substrings);
	echo sizeof($substrings);
?>