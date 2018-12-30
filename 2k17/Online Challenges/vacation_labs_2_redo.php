<?php
	// Vacation Labs (Goa) - Hiring Challenge (Program 2/3) Angel.co
	$status = [];
	for($i = 0; $i < 10; $i++){
		$arr[$i] = fgets(STDIN);
		$status[$i] = 0;
	}
	echo "==========start=============" . "\n";

	// for($i = 0; $i < count($arr); $i++){
	for($i = 0; $i < 1; $i++){
		$init_min;
		$init_max;

		if($status[$i] == 0){
			$init_min = explode(' ', $arr[$i])[0];
			$init_max = explode(' ', $arr[$i])[1];

			$status[$i] = 1;
			for($j = $i + 1; $j < count($arr) - 1; $j++){
				$min = explode(' ', $arr[$j])[0];
				$max = explode(' ', $arr[$j])[1];
				$loop = 0;
				if($status[$j] == 0){
					if($min <= $init_min && $max >= $init_min){ 
						// if the number is in lower range
						$init_min = $min;
						$init_max = max($max, $init_max);
						$status[$j] = 1;
						$loop = 1;
					}else if($max >= $init_max && $min <= $init_max){
						// if the number is in the higher range
						$init_min = min($min, $init_min);
						$init_max = $max;
						$status[$j] = 1;
						$loop = 2;
					}else if($min <= $init_min && $max >= $init_max){
						// if the numbers are in greater range
						$init_min = $min;
						$init_max = $max;
						$status[$j] = 1;
						$loop = 3;
					}
				}
				$output = "\n" . $init_min . " ::: " . $init_max . " :: " . $loop;
				echo $output; 
			}
			echo "\n Result : " . $init_min . " to " . $init_max;
			echo "\n" ."=============Looped=====================";
		}
	}
	// print_r($arr);
?>