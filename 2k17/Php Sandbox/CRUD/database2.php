<?php
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$tel=$_POST['tel'];
	$det=$_POST['det'];
	
	$connection=mysql_connect("localhost","root","");
	if(!$connection){
		exit("Error-Could nt connect to MySQL");
	}
				
	$db=mysql_select_db("my_db");
	if(!$db){
		exit("Error-Could not connect to the DB");
	}

	$query_add="insert into info(FName,LName,No,Details) values('$fname','$lname','$tel','$det');";
	if(isset($fname) or isset($lname) or isset($tel) or isset($det)){
		$result=mysql_query($query_add);
		if(!$result){
			exit("Error-Could not execute the query");
		}
		else{
			header('Location:index.php');
		}
	}
?>