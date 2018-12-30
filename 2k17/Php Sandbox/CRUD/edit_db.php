<?php
	$id=$_GET["id"];
	echo "$id";

	$connection=mysql_connect("localhost","root","");
	if(!$connection){
		exit("Error-Could nt connect to MySQL");
	}
				
	$db=mysql_select_db("my_db");
	if(!$db){
		exit("Error-Could not connect to the DB");
	}

	$query="SELECT * from info WHERE id=$id;";
	$result=mysql_query($query);
	if(!$result){
		exit("Error-Could not execute the query");
	}
	$row=mysql_fetch_array($result);
	echo '
		<form action="update_db.php" method="post">
		FName<input type="text" name="fname" value="'.$row['FName'].'"/><br/>
		LName<input type="text" name="lname" value="'.$row['LName'].'"/><br/>
		No<input type="text" name="tel" value="'.$row['No'].'"/><br/>
		Details<input type="text" name="det" value="'.$row['Details'].'"/><br/>
		<input type="submit" name="Update"/>
	';
?>