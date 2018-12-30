<!DOCTYPE html>
<html>
	<head>
		<title>AJAX Search</title>
		<script type="text/javascript">
			function inputCharacter(event){
				var input = document.getElementById("search");
				console.log(event);
				if(input.value){
					getData("search_response.php?q=" + input.value);
				}				
			}
			function getData(url){				
				var xhr = false;
				if(window.XMLHttpRequest){
					xhr = new XMLHttpRequest();
				}
				if(xhr){					
					xhr.open("GET", url);
					xhr.onreadystatechange = function(){
						if(xhr.readyState == 4 && xhr.status == 200){											
							document.getElementById("target").innerHTML = xhr.responseText;
						}
					}
				xhr.send(null);
				}
			}
		</script>
	</head>
	<body>
		<div id="container">
			<div id="input">
				<label for="search">Search for: </label>
				<input type="text" name="search" id="search" onkeyup="inputCharacter(event);" />			
			</div>

			<div id="target">				
			</div>
		</div>
	</body>
</html>