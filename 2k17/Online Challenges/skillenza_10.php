<?php
	// fscanf(STDIN, "%s\n", $msg);
	// echo "msg is : " . $msg;

	// Skillenza : Intern Hunt - Number of cakes
	fscanf(STDIN, '%d\n', $T);
	// $T = 1;
	if($T >= 1 && $T <= 1000){
		for($x = 0; $x < $T; $x++){

			$M = fgets(STDIN);			
			fscanf(STDIN, '%d', $N);
			echo "M is : " . $M . "\n";
			echo "N is : " . $N . "\n";
			// $M = "3 7 4 1";
			// $N = 6;

			$M = explode(' ', $M);

			$flag = 0;
			for($j = 1; $j < sizeof($M)-2; $j++){
				for($i = $j; $i < sizeof($M)-1; $i++){
					echo (int)$M[$j] . " + " . (int)$M[$i+1] . " == " . (int)$N;
					echo "<br/>";
					if((int)$M[$j] + (int)$M[$i+1] == (int)$N){
						echo (int)$M[$j] . " + " . (int)$M[$i+1] . " == " . (int)$N . " -------<br/>";
						$flag = 1;
					}
				}
			}
			if($flag == 0)
				echo "NO\n";
			else
				echo "YES\n";
		}
	}	
?>