<!DOCTYPE html>
<html>
	<head>
		<title>Quiz</title>
		<style type="text/css">
			#score{
				width: 500px;
				height: 100px;
				background: green;				
			}
			#question{
				width: 500px;
				height: 500px;
				background: red;				
			}
		</style>
		<script type="text/javascript">
			function submit_answer(answer){
				var xhr = false;
				if(window.XMLHttpRequest){
					xhr = new XMLHttpRequest();
				}
				if(xhr){
					xhr.open('GET', "quiz_backend.php?answer=" + answer);
					xhr.onreadystatechange = function(){
						if(xhr.status == 200 && xhr.readyState == 4){
							document.getElementById("container").innerHTML = xhr.responseText;
						}
					}	
					xhr.send();
				}
			}
		</script>
	</head>
	<body onload="submit_answer('loading');">	
	<div id="container">		
	</div>
	</body>
</html>