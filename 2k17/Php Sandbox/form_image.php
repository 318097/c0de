<!-- Display a image in a form and send the details of the image selected to the server -->
<!-- the script didnt work as images cant be used in the form for input. if a image occurs in the form the that image is used as the submit button -->
<!-- was trying to use the technique in the lakhanpal marketing suits page -->

<!DOCTYPE html>
<?php
	if(isset($_POST["submit"])){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		exit();
	}
?>
<html>
	<head>
		<title>Images as Form Input</title>
		<style type="text/css">
			.image{				
				width: 200px;
				height: 200px;
				margin: 5px;
			}
		</style>
	</head>
	<body>
		<div class="container">
		<?php
			for($i = 1; $i <=5; $i++){
				echo "<img class=\"image\" src=\"images/image_" . $i . ".jpg\" alt=\"image" . $i . "\" />";
			}
		?>
			
		</div>

		<form action="" method="post" id="form">	
			<input type="hidden" id="design" name="design" value="null"/>	
			<input type="submit" name="submit">
		</form>

		<script type="text/javascript">		
			document.querySelector(".container").addEventListener('click', function(e){
				var imgs = document.getElementsByClassName("image");
				for(var i=0; i<imgs.length; i++){
					imgs[i].style.border = "none";
				}	
				e.target.style.border = "5px solid black";				
				document.getElementById('design').value = e.target.alt;	
			}, false);
		</script>
	</body>
</html>