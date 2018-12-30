<?php include 'init.php'; ?>

<?php 
	$user_id = $_GET["user_id"];
	$article_id = $_GET["article_id"];
	if(isset($user_id) && isset($article_id) && article_exists($article_id)){		
		if(user_like_status($user_id, $article_id) === "true"){
			if(add_like($article_id) && add_user_like($user_id, $article_id)){
				echo "success";
			}
		}else{
			echo "You have already liked this post";
		}		
	}
	function article_exists($article_id){
		global $db;
		$query = "SELECT count(article_id) FROM articles WHERE `article_id` = $article_id;";
		$result = mysqli_query($db, $query);
		return (mysqli_fetch_row($result)[0] == 0) ? "false" : "true";
	}
	function add_like($article_id){
		global $db;
		$query = "UPDATE articles SET `article_likes` = `article_likes` + 1 WHERE `article_id` = $article_id";	
		$result = mysqli_query($db, $query);
		if(!$result){
			echo "ERROR - Could not execute the query";
		}else{
			return true;
		}
	}
	function add_user_like($user_id, $article_id){
		global $db;
		$query = "INSERT into likes (`user_id`, `article_id`) VALUES ($user_id, $article_id)";	
		$result = mysqli_query($db, $query);
		if(!$result){
			echo "ERROR - Could not execute the query";
		}else{
			return true;
		}
	}
	function user_like_status($user_id, $article_id){
		global $db;
		$query = "SELECT count(`user_id`) FROM likes WHERE `user_id` = $user_id AND `article_id` = $article_id";
		$result = mysqli_query($db, $query);
		return (mysqli_fetch_row($result)[0] == 0) ? "true" : "false";
	}
?>