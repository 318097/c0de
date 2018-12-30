<?php
	
	$query_in=$_POST["sql_query"] or "";

	$connection=mysql_connect("localhost","root","");
	if(!$connection){
		exit("Error-Could nt connect to MySQL");
	}
				
	$db=mysql_select_db("my_db");
	if(!$db){
		exit("Error-Could not connect to the DB");
	}

	if(isset($query_in)){
		$result=mysql_query($query_in);
		if(!$result){
			exit("Error-Could not execute the query");
		}
		else{
			header('Location:index.php');
		}
	}
?>