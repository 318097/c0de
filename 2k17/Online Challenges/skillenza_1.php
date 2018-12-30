<?php
	fscanf(STDIN, "%d", $t);
	$loop = 0;
	while($loop < $t){
		fscanf(STDIN, "%d %d", $n, $R);
		
		$cString = fgets(STDIN);
		$c = explode(' ', $cString);
		
		$wString = fgets(STDIN);
		$w = explode(' ', $wString);

		$maxWeight = 0;

		for($i=0; $i<sizeof($c); $i++){
			
		}

		// echo "The input was :" . "\n";
		// echo $t . "\n";
		// echo $n . $R . "\n";
		// echo $c[0] . "\n";
		// echo print_r($w) . "\n";

		$loop++;
	}
?>