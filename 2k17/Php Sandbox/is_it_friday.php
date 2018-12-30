<?php	
	$today = date("l");
	if($today !== "friday"){
		echo "No, its not friday.<br/>";
		$remaining_days = 5 - intval(date("N"));
		if($remaining_days < 0){
			$remaining_days += 7;
		}
		echo $remaining_days . " days to go.";
	}else{
		echo "Yes, its friday.";
	}
?>