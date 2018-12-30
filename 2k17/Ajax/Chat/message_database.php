<?php require_once("db_connection.php"); ?>
<?php 
	$query = "SELECT * FROM messages ORDER BY id ASC;";
	$message_set = mysqli_query($connection, $query);
	$i=0;
	while($message = mysqli_fetch_assoc($message_set)){
		echo "<div ";
		if($i % 2 == 0){
			echo "class=\"style1\"";
		}
		else{
			echo "class=\"style2\"";
		}
		echo ">";
		echo "<span id=\"name\">" . $message["name"] . ":</span>";
		echo "<span id=\"message\">" . $message["message"] ."</span>";
		echo "<span id=\"date\"></span>";
		echo "</div>";
		$i++;
	}
?>		