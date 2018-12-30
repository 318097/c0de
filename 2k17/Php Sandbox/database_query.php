<?php
	if(isset($_GET["submit"])){
		$connection=mysqli_connect("localhost","root","","mydb");
		if(mysqli_connect_errno()){
			die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" );
		}
		$query=$_GET["query"];
		trim($query);
		$query=stripslashes($query);
		
		print "<p><b>The query is:</b>".$query."</p>";
		$result=mysqli_query($connection, $query);
		//Tests for query error only
		if(!$result){
			die("Database query failed.");
		}
				
		while($row=mysqli_fetch_row($result)){
			for($i=0;$i<sizeof($row);$i++){
				print "$row[$i]";
			}		
			print "<br/>";
		}	
	}	
?>	
<html>
	<head>
		<title> Database Query</title>
	</head>
	
	<body>
		<p> Enter the query: </p>
		<form action="">
			<input type="textarea" rows="1" cols="80" name="query"/>
			<br/><br/>
			<input type="submit" name="submit" value="Submit request"/>
			<input type="reset" value="Reset form"/>
		</form>
	</body>
</html>