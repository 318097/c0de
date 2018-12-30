<?php
	// Deal or no Deal

	fscanf(STDIN, "%d", $t);
	if($t >=1 && $t <= 1000){
		for($loop = 0; $loop < $t; $loop++){
			fscanf(STDIN, "%d %d", $n, $c);
			if($n >= 1 && $n <= 1000000 && $c <= 100000 && $c >= 1){
				$prices = fgets(STDIN);
				$prices = explode(' ', $prices);
				$constraint = true;
				if($n != count($prices)){
					$constraint = false;
				}
				if($constraint){
					for($ab = 0; $ab < $n; $ab++){
						if((int)$prices[$ab] < 0 || (int)$prices[$ab] > 100000){
							$constraint = false;
							break;
						}
					}	
				}
				

				if($constraint){
					$maxProfit = 0;
					for($i = 0; $i< $n; $i++){
						$profit = 0;
						$flag = true;
						$j = $i;
						while( $j < $n && $flag){
							if((int)$prices[$j] <= $c){
								$profit += $c - (int)$prices[$j];	
							}else{
							    $flag = false;
							}
							$j++;
						}
						if($profit > $maxProfit){
							$maxProfit = $profit;
						}
					}
					echo $maxProfit . "\n";
				}				
			}
		}	
	}else{
		echo "Invalid";
	}
			
?>