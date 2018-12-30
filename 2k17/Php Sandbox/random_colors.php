<!DOCTYPE html>
<html>
	<head>
		<title>Random Colors</title>
		<style type="text/css">
			div{
				margin: 0; padding: 0;
				width: 20px;
				height: 20px;	
				float: left;			
			}
		</style>
	</head>
	<body>
		<?php
			$color1 = array("#51497E", "#5314C1", "#5F6DD8", "#A2ACF7", "#2A2A2C", "#6E1EC8", "#B9B7BA", "#04365A", "#9125B9");
			$color2 = array("#CF2C22", "#FAF30C", "#5BA314", "#3AA0DF", "#7A23E1", "#7D368D", "#FA2A33", "#EFECEC", "#575252");
			$color_palette = rand(1, 2);
			if($color_palette == 1){
				$color_array = $color1;
			}else{
				$color_array = $color2;
			}

			$count = 5000;
			for ($i=0; $i < $count; $i++) { 
				echo "<div style=\"background:" . $color_array[rand(0, count($color_array)-1)] . "\";>";
				echo "</div>";
			}
		?>
	</body>
</html>