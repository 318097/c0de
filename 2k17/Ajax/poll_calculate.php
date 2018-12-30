<?php
	$vote = $_GET["vote"];
	$filename = "poll_result.txt";
	$content = file($filename);
	$array = explode("||", $content[0]);
	$yes = $array[0];
	$no = $array[1];	
	if($vote == "yes"){
		$yes++;
	}
	if($vote == "no"){
		$no++;
	}
	$insertvote = $yes . "||" . $no;
	$fp = fopen($filename, "w");
	fputs($fp, $insertvote);
	fclose($fp);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Result</title>
	</head>
	<body>
	<h2>Result:</h2>
	<table>
		<tr>
			<td>Yes:</td>
			<td>
			<span style="display:inline-block; background: green; height: 10px; width: <?php echo ($yes * 100)/($yes + $no) . "px"; ?>"></span><?php echo ($yes * 100)/($yes + $no) . "%"; ?>
			</td>
		</tr>

		<tr>
			<td>No:</td>
			<td>
			<span style="display:inline-block; background: green; height: 10px; width: <?php echo ($no * 100)/($yes + $no) . "px"; ?>"></span><?php echo ($no * 100)/($yes + $no) . "%"; ?>
			</td>
		</tr>
	</table>
	</body>
</html>