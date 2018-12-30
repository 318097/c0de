<!DOCTYPE html>
<html>
	<head>
		<title>JS Scroll</title>
		<style type="text/css">
			section{
				height: 100vh;
				width: 100%;
				border: 2px solid black;
				margin: 5px;	
			}
			#one{
				background: lightgreen;				
			}
			#two{
				background: orange;
			}
			#three{
				background: red;
			}
			#four{
				background: yellow;
			}			
			.button{	
				display: none;		
				position: fixed;
				bottom: 5px;
				right: 5px;
				padding: 15px;
				background: #eee;
				transition: 5s;
			}
		</style>
		
	</head>
	<body>
		<div class="container">
			<section id="one">
				BOX 1
			</section>
			<section id="two">
				BOX 2
			</section>
			<section id="3">
				BOX 3
			</section>
			<section id="four">
				BOX 4
			</section>	
			
		</div>
	</body>
</html>