<?php
	$list = array("html", "css", "javascript", "sql", "php", "c", "java");
	$list_str = implode(" : ", $list);
	echo $list_str;
	echo "<br/>";

	// use this method to generate queries. it is fast and easy to modify
	$name = "Mehul Lakhanpal";
	$mobile = 7760279446;
	$telephone = 65719127;
	$email = "318097@gmail.com";

	$data = array(
		'name'		=>	$name,
		'mobile'	=>	$mobile,
		'telephone'	=>	$telephone,
		'email'		=>	$email
		);
	$query_fields = '`' . implode('`, `', array_keys($data)) . '`';
	$query_data = '\'' . implode('\', \'', $data) . '\'';

	$query = "INSERT INTO table ($query_fields) VALUES ($query_data)";
	echo $query;
	echo "<br/>";
?>