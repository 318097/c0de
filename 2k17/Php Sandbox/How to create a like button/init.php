<?php
	session_start();
	$_SESSION['user_id'] = 1;
	$db = mysqli_connect("localhost", "root", "", "my_db");

	function get_articles(){
		global $db;
		$articles = array();
		$query = "SELECT * FROM `articles`";
		$result = mysqli_query($db, $query);
		while($row = mysqli_fetch_assoc($result)){ 
			$articles[] = array(
				"article_id" => $row["article_id"],
				"article_title" => $row["article_title"],
				"article_likes" => $row["article_likes"]
			);
		}
		return $articles;
	}
?>