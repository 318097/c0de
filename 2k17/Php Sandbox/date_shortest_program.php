<?php
	list($d1, $m1, $y1) = explode("/", "1/7/2015");	
	list($d2, $m2, $y2) = explode("/", "4/12/2015");
	$count = (find_days($m1) - $d1) + $d2;	
	$m1++;
	while($m1 != $m2 || $y1 != $y2){	
		if($m1 == 1 || $m1 == 3 || $m1 == 5 || $m1 == 7 || $m1 == 8 || $m1 == 10 || $m1 == 12)
			$count += 31;
		else if($m1 == 4 || $m1 == 6 || $m1 == 9 || $m1 == 11)
			$count += 30;
		else if($m1 == 2)
			$count += 28;	
		$m1++;	
		if($m1 > 12){
			$m1 = 1;
			$y1++;
		}	
	}
	echo $count;
?>