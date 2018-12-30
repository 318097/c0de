<!DOCTYPE html>
<html>
	<head>
		<title>Pagination</title>
		<style type="text/css">
			span{
				font-size: 18px;
				font-weight: bold;
				background: yellow;
				display: inline-block;
				padding: 5px;
			}
			.highlight{
				background: green;
				font-size: 20px;
				color: white;
			}
			a{
				padding:5px;
				text-decoration: none;
				color: black;
			}
		</style>
	</head>
	<body>
		<h3>Pagination</h3>
		<?php
			$db = mysqli_connect("localhost", "root", "", "my_db");

			$query = "SELECT count(name) FROM info;";
			$count = mysqli_fetch_row(mysqli_query($db, $query))[0];

			$page_limit = 3;
			$total_pages = ceil($count / $page_limit);
			$current_page = (isset($_GET["page"])) ? $_GET["page"] : 1 ;
			$start = ($current_page - 1) * $page_limit; 

			$query = "SELECT * FROM info LIMIT $start, $page_limit;";
			$result = mysqli_query($db, $query);
			while($row = mysqli_fetch_assoc($result)){
				echo "<span>" . $row["name"] . "</span><br/><br/>";
			}

			if($total_pages > 1 && $current_page <= $total_pages){
				for($x=1; $x<=$total_pages; $x++){
					echo "<a href=\"?page={$x}\" ";
						if($x == $current_page){
							echo "class=\"highlight\"";
						}
					echo ">" . $x . "</a> ";
				}
			}
		?>
	</body>
</html>