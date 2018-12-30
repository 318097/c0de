<?php
	// Diwali Lights 1

	/* In celebration of Diwali, we at Skillenza bought three LED lights that are the three 
	primary colors: Red, Green and Blue.
	As you know, depending on how the lights are turned on and off, you can get several colors.
	To refresh your memory, here are the combinations:

	Red Green Blue Light Observed

	0 0 0 Black
	1 0 0 Red
	0 1 0 Green
	0 0 1 Blue
	1 1 0 Yellow
	0 1 1 Cyan
	1 0 1 Magenta
	1 1 1 White

	Here 0 represents a particular light to be OFF and 1 represents the light being on. 
	For example, if red, green and blue are all on (The combination 1 1 1), we see white light. Similarly for all the possible 8 combinations as outlined here.

	Suppose the red, green and blue lights are turned off and on for different intervals of time say, r, g and b respectively.
	What would be the color observed s seconds after the start of the experiment?
	Note that initially all lights are off

	Example

	Suppose that we want to know what the light color is 9 seconds after the start of the experiment. Also suppose that the time intervals for each light (Red, Green and Blue) are 2, 3 and 5.
	That is the red light is turned off for 2 seconds, then turned on for 2 seconds, then turned off and so on; 
	the green light turned off for 3, turned on for 3 and so on; the blue light turned off for 5, turned on for 5 and so on.
	After 9 seconds, the color observed would be cyan.

	Time Red Green Blue Observation
	0 0 0 0 black
	1 0 0 0 black
	2 1 0 0 red
	3 1 1 0 yellow
	4 0 1 0 green
	5 0 1 1 cyan
	6 1 0 1 magenta
	7 1 0 1 magenta
	8 0 0 1 blue
	9 0 1 1 cyan

	Input Format
	The first line of input contains an integer T which is the number of test cases. Then T lines follow containing 
	four space separated integers S R G B
	Here S is an integer denoting the time interval (in seconds) after the start of the experiment, R is an integer denoting the time interval that the red light is turned off and on in seconds, G is an integer denoting the time interval that the green light is turned off and on in seconds, and B is an integer denoting the time interval that the blue light is turned off and on in seconds.

	Output Format
	For each test case, output a single line containing a string that represents the observed color. 
	That is, if the observed color is red, output “red”, if it is green, output “green” and so on.

	Constraints
	0 < T < 100
	0 < S, R, B, G < 10000 */

	// ============================================================================
	// ============================================================================

	// fscanf(STDIN, "%d\n", $T);
	$T = 1;
	if($T > 0 && $T <100){
		for($counter = 0; $counter < $T; $counter++){

			// $input = fgets(STDIN);			
			$input = "3001 3021 8598 4125";

			$input = explode(' ', $input);
			$output = "";
			
			for($color = 0; $color < 3; $color++){
				if((int)$input[$color + 1] > (int)$input[0]){
					$output .= "0";
					continue;
				}
				for($i = (int)$input[0]; $i > 0; $i--){

					if($i % (int)$input[$color + 1] == 0){
						$mod = $i / (int)$input[$color + 1];
						if($mod % 2 == 0){
							$output .= "0";
							break;
						}else{
							$output .= "1";
							break;
						}
					}	

				}
			}

			switch($output){
				case '000':
					echo "black";
					break;
				case '100':
					echo "red";
					break;
				case '010':
					echo "green";
					break;
				case '001':
					echo "blue";
					break;
				case '110':
					echo "yellow";
					break;
				case '011':
					echo "cyan";
					break;
				case '101':
					echo "magenta";
					break;
				case '111':
					echo "white";
					break;
				default:
					echo $output;
			}
			echo "\n";
		}
	}
?>