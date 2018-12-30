<?php
	// Vacation Labs (Goa) - Hiring Challenge (Program 2/3) Angel.co
	// Range combiner
	// A set of input ranges are provided.
	// Combine the ranges which overlap & merge them

	// Sample input :
	//  15   32
	//  29   51
	// -17   -8
	//   1   29
	//  31   46
	// -20  -19
	// -10   44
	// -42  -41
	//  -6   49
	//   0    4

	// Sample Output :
	// -42  -41
	// -20  -19
	// -17   51

	$status = [];
	for($i = 0; $i < 10; $i++){
		$arr[$i] = fgets(STDIN);
		$status[$i] = 0;
	}
	// sorting the data in ascending ranges
	for($x = 0; $x < count($arr); $x++){
		$lowElement = explode(' ', $arr[$x])[0];
		$lowIndex = $x;
		// echo "\nInitial low element :: " . $lowElement;
		for($y = $x + 1; $y < count($arr); $y++){
			$lowElement2 = explode(' ', $arr[$y])[0];
			// echo "\n=== Loop low element :: " . $lowElement2;
			if((int)$lowElement2 < (int)$lowElement){
				$lowElement = (int)$lowElement2;
				$lowIndex = $y;
			}
		}
		$lowNo = explode(' ', $arr[$lowIndex])[0];
		// echo "\nlowest no :: " . $lowNo;
		$temp = $arr[$x];
		$arr[$x] = $arr[$lowIndex];
		$arr[$lowIndex] = $temp;
	}

	// print_r($arr);

	for($i = 0; $i < count($arr); $i++){
		$init_min;
		$init_max;

		if($status[$i] == 0){
			$init_min = explode(' ', $arr[$i])[0];
			$init_max = explode(' ', $arr[$i])[1];

			$status[$i] = 1;
			for($j = $i + 1; $j < count($arr); $j++){
				$min = explode(' ', $arr[$j])[0];
				$max = explode(' ', $arr[$j])[1];
				if($status[$j] == 0){

					if((int)$min >= (int)$init_min && (int)$min <= (int)$init_max){ 
						// echo "\n" . $min . " is > than " . $init_min . " and " . $min . " is < than " . $init_max;
						// if the number is in range
						$init_min = min($min, $init_min);
						$init_max = max($max, $init_max);
						$status[$j] = 1;
						// echo "\n" . $init_min . " ::: " . $init_max;
					}else if((int)$max >= (int)$init_min && (int)$max <= (int)$init_max){
						// echo "\n" . $max . " is > than " . $init_min . " and " . $max . " is < than " . $init_max;
						// if the max number is in range
						$init_min = min($min, $init_min);
						$init_max = max($max, $init_max);
						$status[$j] = 1;
						// echo "\n" . $init_min . " ::: " . $init_max;
					}else{
						// echo "\nNo Loop match";
						// echo "\n" . $init_min . " ::: " . $init_max;
					}

				}
				// $output = $init_min . " ::: " . $init_max;
				// echo $output; 
			}
			echo "\n Result : " . $init_min . " to " . $init_max;
			// echo "\n" ."=============Looped=====================";
		}
	}
	// print_r($arr);
?>