<!DOCTYPE html>
<?php
	function random_value($array){
		return $array[array_rand($array)];
	}
	$truth_array = array("How many kids would you like to have?",
		"If there was no such thing as money, what would you do with your life?",
		"What is your dream job?",
		"If you were trapped on an island for 3 days, what would you take with you?",
		"If you could change one thing on your body, what would it be?",
		"How was your first kiss?",
		"What country would like to live in if you had the chance?",
		"Do you believe in love at first sight?"
		);
	$truth = random_value($truth_array);

	$dare_array = array("Do nothing",
		"Do an impression of your favorite celebrity",
		"Make up a story about the item to your right",
		"Sing the alphabet without moving your mouth",
		"Say the alphabet backwards in 15 seconds",
		"Go up to someone random and ask for a hug",
		"Do an impression of someone until another player can guess who you are",
		"Use the letters of the name of another player to describe them (ex. SAM : S – Silly ; A – Attractive ; M – Merry)"
		);
	$dare = random_value($dare_array);
?>
<html>
	<head>
		<title>Truth Or Dare</title>
		<style type="text/css">
			div p{
				font-family: cursive;
				padding: 5px;
				font-size: 40px;
				font-weight: bold;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div>
			<p><?php echo $truth; ?></p>
			<br/>
			<p>Or</p>
			<br/>
			<p><?php echo $dare; ?></p>
		</div>
	</body>
</html>