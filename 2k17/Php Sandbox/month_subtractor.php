<?php
	// difference of months between two months.
	$init_date = "1/7/2015";	
	$final_date = "4/5/2017";
	// d - date; m - month; y - year;
	// $final_date = date("d/m/y"); 

	list($d1, $m1, $y1) = explode("/", $init_date);	
	list($d2, $m2, $y2) = explode("/", $final_date);

	$month_count = 0;

	while($m1 != $m2 || $y1 != $y2){
		$month_count++;	
		$m1++;	

		if($m1 > 12){
			$m1 = 1;
			$y1++;
		}	
		echo $m1, "  ", $y1, " : Count =>", $month_count, "<br/>";		
	}
	echo $month_count;
?>