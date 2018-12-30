<?php
	if(isset($_POST["submit"])){
		$un = $_POST["username"];
		$pw = $_POST["pass"];
		if($un == "Mehul" && $pw == "root"){
			header("Location: http://www.google.com");
		}else{
			$message = "<p>Invalid Username or Password</p>";
		}
	}
	else{
		$un = "";
		$pw = "";
		$message = "<p>Please Log In.</p>";
	}
?>		
<html>
	<head>
		<title>
			Login System
		</title>
		<style>
		</style>
		<script type="text/javascript">
		</script>
	</head>
			
	<body>
		<?php echo $message ?>
		<form action="login.php" method="post">
			<label for="username">Username:</label>
			<input type="text" name="username" id="username" value="<?php $un?>" />
			<br/>
			<label for="pass">Password:</label>
			<input type="password" name="pass" id="pass"/>
			<br/>
			<input type="submit" name="submit" value="submit"/>
		</form>
	</body>
</html>		

