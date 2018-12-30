<?php
	include 'adverts/db.inc.php';
	if(isset($_GET["advert_id"])){
		$advert_id = (int)$_GET["advert_id"];

		$query = "UPDATE `adverts` ";
		$query .= "SET `clicks` = `clicks` + 1 ";
		$query .= "WHERE `advert_id` = $advert_id";

		mysqli_query($db, $query);

		$url_query = "SELECT `url` FROM `adverts` WHERE `advert_id` = $advert_id";
		$result = mysqli_query($db, $url_query);
		$url = mysqli_fetch_array($result)[0];

		header('Location:' . $url);
		die();
	}
?>