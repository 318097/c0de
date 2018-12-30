<?php
	if(isset($_GET["mehul"])){
		echo "set";
		setcookie("name", "mehul", time() + (60*60), "/");
	}
	echo "<pre>";
	echo print_r($_GET);
	echo "</pre>";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cookie</title>		
	</head>
	<body>
		<?php 
			if(isset($_COOKIE["name"]) && $_COOKIE["name"] == "mehul"){
				echo "Cookie :" . $_COOKIE["name"];
			}
		?>
	</body>
</html>