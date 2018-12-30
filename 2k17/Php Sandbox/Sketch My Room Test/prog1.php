<!DOCTYPE html>
<html>
	<head>
		<title>Results</title>
		<style	type="text/css">
			*{
				font-size:20px;
				font-weight:bold;
				font-family:monospace;
				background-color:#C9DCDF;
				margin:20px;
			}
			p.heading{
				font-size:30px;
			}
			span{
				margin:0;
				color:#A42D1A;
			}
			
		</style>
	</head>
	
	<body>
		<div>
			<p class="heading">
				Results:
			</p>
		</div>
		<div>		
			<?php
				$var1=$_POST["val1"];
				$var2=$_POST["val2"];
				$var3=$_POST["val3"];
				$var4=$_POST["val4"];
				$valsq=$var1*$var1;
				
				$var1=$var1."<span>".$valsq."</span>";
				$var2=$var2."<span>".$valsq."</span>";
				$var3=$var3."<span>".$valsq."</span>";
				$var4=$var4."<span>".$valsq."</span>";			
				
				echo"<p>";
				echo "$var1 <br/> $var2 <br/> $var3 <br/> $var4";
				echo "</p>";
			?>
		</div>
	</body>
</html>