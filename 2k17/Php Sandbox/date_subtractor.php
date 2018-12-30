<?php
	// Date Calculator.	
	$final_date = date("d/m/Y");
	$engineering = "1/7/2015"; // Date when degree was supposed to get over.
	$year = "1/1/2016"; // New Year Date.

	$days_engineering = date_calculator($engineering, $final_date);
	$days_yearstart = date_calculator($year, $final_date);

	function date_calculator($init_date, $final_date){
		list($d1, $m1, $y1) = explode("/", $init_date);	
		list($d2, $m2, $y2) = explode("/", $final_date);

		if($y2 < $y1 || ($y2 == $y1 && $m2 < $m1)){
			$temp = $init_date;
			$init_date = $final_date;
			$final_date = $temp;
		}

		list($d1, $m1, $y1) = explode("/", $init_date);	
		list($d2, $m2, $y2) = explode("/", $final_date);

		$count = 0;

		$count += (find_days($m1) - $d1);	
		$count += $d2;
		$m1++;

		while($m1 != $m2 || $y1 != $y2){				
			$count += find_days($m1);	
			$m1++;	
			if($m1 > 12){
				$m1 = 1;
				$y1++;
			}	
		}
		return $count;		
	}

	function find_days($month){
		if($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12)
			return 31;
		else if($month == 4 || $month == 6 || $month == 9 || $month == 11)
			return 30;
		else if($month == 2)
			return 28;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Date Calculator</title>
	</head>
	<body>
	<h2>Days since degree : <?php echo $days_engineering; ?></h2>
	<h2>Days since year start : <?php echo $days_yearstart; ?></h2>
	</body>
</html>