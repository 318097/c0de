<?php require_once("db_connection.php"); ?>

<?php
	if(isset($_POST["submit"])){
		$un = $_POST["name"];
		$msg = $_POST["message"];
		$query = "INSERT INTO messages (name, message) VALUES ('{$un}', '{$msg}');";
		$result = mysqli_query($connection, $query);
		if($result){
			// add the message send sound
		}
	}	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Chat App</title>
		<style type="text/css">
			html{
				height: 100%;
				width: 100%;
				margin: 0;
				padding: 0;
			}
			body{
				font: 16px monospace;
				height: 100%;
				width: 100%;
				background: #eee;
			}
			#container{
				margin: 5px auto;
				display: block;
				width: 30%;
				height: 100%;
			}
			#chat_box{
				height: 80%;
				background: #F7ED4D;
				padding: 5px;
			}
			div.style1{
				background: #E3E5E9;
			}
			div.style2{
				background: #93959A;
			}
			#name{
				margin-left: 7px;
				font-weight: bold;				
			}
			#message{
				padding-left: 5px;
			}
			#date{

			}
			#controls{
				background: #3C66EA;
				padding: 5px;
			}
			input[type = 'text']{
				padding: 5px;
				border: none;
				width: 20%;
			}
			input[type = 'submit']{
				padding: 5px;
				border: none;
				width: 20%;
			}
			textarea{
				margin: 2px 0;
				position: relative;
				padding: 5px;
				display: block;
			}	
		</style>
		<script type="text/javascript">
			function ajax(){
				var XHR = false;
				if(window.XMLHttpRequest){
					XHR = new XMLHttpRequest();
				}
				if(XHR){
					XHR.open("GET", "message_database.php");
					XHR.onreadystatechange = function(){
						if(XHR.readyState == 4 && XHR.status == 200){
							document.getElementById("chat_box").innerHTML = XHR.responseText;
						}
					}
					XHR.send(null);
				}
			setInterval(ajax(), 1000);
			}
		</script>
	</head>
	<body onload="ajax();">
		<div id="container">
			<div id="chat_box">
						
			</div>
			<div id="controls">
				<form method="post" action="chat.php">
					<input type="text" name="name" placeholder="Name" />
					<br/>
					<textarea rows="2" cols="20" name="message">Enter message...</textarea>
					<input type="submit" name="submit" value="Send"/>
				</form>
			</div>			
		</div>
	</body>
</html>