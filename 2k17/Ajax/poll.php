<!DOCTYPE html>
<html>
	<head>
		<title>Polling</title>
	</head>
	<body>
		<script type="text/javascript">
			function getVote(vote){
				var xhr = false;
				if(window.XMLHttpRequest){
					xhr	= new XMLHttpRequest();	
				}	
				if(xhr){
					xhr.open("GET", "poll_calculate.php?vote=" + vote);
					xhr.onreadystatechange = function(){
						if(xhr.status == 200 && xhr.readyState == 4){
							document.getElementById("poll").innerHTML = xhr.responseText;
						}
					}
					xhr.send();
				}	
			}
		</script>
		<div id="poll">
			<h3>Do you like AJAX?</h3>
			Yes:<input type="radio" name="vote" value="yes" onclick="getVote(this.value);" />
			<br/>
			No:<input type="radio" name="vote" value="no" onclick="getVote(this.value);" />
		</div>
	</body>
</html>