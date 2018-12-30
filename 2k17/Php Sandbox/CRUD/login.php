<?php
if(isset($_POST['submit'])){
	//login submitted
	$un=$_POST['un'];
	$pw=$_POST['pw'];

	$connection=mysql_connect("localhost","root","");
	if(!$connection){
		exit("Error-Could nt connect to MySQL");
	}
							
	$db=mysql_select_db("my_db");
	if(!$db){
		exit("Error-Could not connect to the DB");
	}

	$query="SELECT * from users WHERE username='".$un."'";
	$result=mysql_query($query);
	
		while($row=mysql_fetch_array($result)){
			$db_password=$row['Password'] or "";
		}

		if(!empty($db_password) && $pw==$db_password){
			header('Location:index.php');
		}
		else{
		$message = "<p>Invalid password</p>";
		}
}
else{
	//first time loaded
	$un = "";
	$pw = "";
}
?>
		<html>
			<head><title>Login Page</title></head>
			<body>
				<p><?php echo $message ?></p>
				<form action="login.php" method="post">
					<p>
						<label for="username">Username:</label>
						<input type="text" name="un" id="un" value="<?php echo $un ?>"/>
					</p>

					<p>
						<label for="pass">Password:</label>
						<input type="password" name="pw" id="pw"/>
					</p>
					<p>
						<input type="submit" name="submit" value="Login"/>
					</p>
				</form>
			</body>
		</html>
