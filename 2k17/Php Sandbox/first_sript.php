<?php
	if(isset($_GET["submit"])){
		echo "Welcome" . $_GET["name"] . "<br>";
		echo "Your email address is:" . $_GET["email"] . "<br>";
	}else{
		echo '
			<html>
				<body>
					<form action="" method="get">
						Name: <input type="text" name="name"><br>
						E-mail: <input type="text" name="email"><br>
						<input type="submit" name="submit">
					</form>
				</body>
			</html>
		';
	}
?>
