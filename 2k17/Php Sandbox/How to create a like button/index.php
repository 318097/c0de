<?php include 'init.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Articles</title>
		<style type="text/css">
			body{
				font-family: monospace;
			}
			ul{
				list-style: none;
				padding: 0;
			}
			.article{
				font-size: 18px;
			}
			.like{	
				background: #eee;		
				text-decoration: none;
				padding: 5px;
			}
		</style>
		<script type="text/javascript">
			function like_add(article, user){
				var xhr = false;
				if(window.XMLHttpRequest){
					xhr = new XMLHttpRequest();
				}
				if(xhr){					
					xhr.open("GET", "like_add.php?article_id=" + article + "&user_id=" + user);
					xhr.onreadystatechange = function(){
						if(xhr.status == 200 && xhr.readyState == 4){				
							alert(xhr.responseText);											
						}						
					}
					xhr.send(null);
				}
			}
		</script>
	</head>
	<body>
	<?php
		$articles = get_articles();
		if(count($articles) == 0){
			echo "Sorry, there are no articles";
		}else{
			echo "<ul>";
			foreach($articles as $article){
				echo "<li>";
				echo "<span class=\"article\">" . $article["article_title"] . "</span>";
				echo "<br/><a class=\"like\" href=\"#\" onclick=\"like_add({$article['article_id']}, {$_SESSION['user_id']})\">Like</a>";
				echo " <span id=\"article_" . $article["article_id"] . "_likes\">" . $article["article_likes"] . "</span> like this";
				echo "</li><br/>";
			}
			echo "</ul>";
		}
	?>
	</body>
</html>