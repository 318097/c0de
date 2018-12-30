<?php
	include 'db.inc.php';
	$query = "SELECT `advert_id`, `image` ";
	$query .= "FROM adverts ";
	$query .= "WHERE UNIX_TIMESTAMP() < `expires` AND `shown` = 0 ";
	$query .= "ORDER BY `advert_id` ASC LIMIT 1";
	$ads = mysqli_query($db, $query);

	$ads_row = mysqli_fetch_assoc($ads);
	$advert_id = $ads_row["advert_id"];
	$image = $ads_row["image"];

	echo '<a href="go.php?advert_id=' . $advert_id . '"><img src="' . $image . '"/></a>';

	$query = "UPDATE `adverts` ";
	$query .= "SET `shown` = 1, `impressions` = `impressions` + 1 ";
	$query .= "WHERE `advert_id` = $advert_id";
	mysqli_query($db, $query);

	$query = "SELECT count(`advert_id`) FROM adverts WHERE `shown` = 0";
	$result = mysqli_query($db, $query);
	$count = mysqli_fetch_array($result)[0];
	if($count == 0){
		$query = "UPDATE `adverts` SET `shown` = 0";
		mysqli_query($db, $query);
	}
?>