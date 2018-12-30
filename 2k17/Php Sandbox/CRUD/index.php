<html>	
	<head>
		<title> CRUD </title>
		<style type="text/css">
			table{
				margin:0 auto;
				width:80%;
				padding:5px;
				font-size:18px; 
			}
			td{
				color:white;
				padding:10px;
				background:#274861;
			}
			*{
				font-family:monospace;
			}
			a{
				color:white;
				text-decoration:none;
			}
		</style>
		<script type="text/javascript">
			function validateForm(){
				var fname=document.getElementById('fname').value;
				if(fname==null || fname==" "){
					alert("Enter a name");
					document.getElementById('error').innerHTML="Please Enter a Name";
					return false;
				}
				return true;
			}	
		</script>
	</head>
	
	<body>
		<div id="container">
			<div id="header">
				<p>Mehul Lakhanpal</p>	
			</div><!--header div end-->
		
			<div id="form">
				<form action="database1.php" method="post">
					<textarea name="sql_query" rows="5" cols="165">Enter the Query</textarea><br/>
					<input type="submit" name="submit"/>
				</form>
			</div><!--form div end-->
			<div id="db">
				<?php
					function connect_db(){
						$connection=mysql_connect("localhost","root","");
						if(!$connection){
							exit("Error-Could nt connect to MySQL");
						}
							
						$db=mysql_select_db("my_db");
						if(!$db){
							exit("Error-Could not connect to the DB");
						}
					}
					connect_db();

					if(isset($_GET['order'])){			
						$order_by=$_GET['order'];			
						$query="SELECT * from info ORDER BY $order_by;";			
					}
					else
						$query="SELECT * from info ORDER BY Id;";

						$result=mysql_query($query);
						if(!$result){
							exit("Error-The query could not get executed");
							$error=mysql_error();
							print "<p>".$error."</p>";
						}					
										
						$num_rows=mysql_num_rows($result);
						$num_fields=mysql_num_fields($result);
						$row=mysql_fetch_array($result);
						
						//Check if db is empty
						if($num_rows==0){
							exit("Database Empty");
						}
						print "<table title='database connection'>";

						//new method for displaying the labels
						$db_labels=array_keys($row);
						echo "<tr>";
						for($x=0;$x!=$num_fields;$x++){
							$i=2*$x+1;
							echo '<td><a href="index.php?order=' .$db_labels[$i]. '">' .$db_labels[$i]. '</a></td>';
						}
						echo "</tr>";

						//new method for displaying the database
						while($row!=""){
							$id_col=$row['Id'];
							$fname_col=$row['FName'];
							$lname_col=$row['LName'];
							$no_col=$row['No'];
							$det_col=$row['Details'];
							echo '<tr>';
							echo '<td><a href="edit_db.php?id='.$id_col.'">'.$id_col.'</a>';
							echo '<td>'.$fname_col.'</td>';
							echo '<td>'.$lname_col.'</td>';
							echo '<td>'.$no_col.'</td>';
							echo '<td>'.$det_col.'</td>';
							echo '</tr>';
							$row=mysql_fetch_array($result);
						}

						echo '
							<form action="database2.php" method="post" onsubmit="return validateForm();">
								<tr>
								<td></td>
								<td><input type="text" name="fname" id="fname"/></td>
								<td><input type="text" name="lname" id="lname"/></td>
								<td><input type="text" name="tel" id="tel"/></td>
								<td><input type="text" name="det" id="det"/></td>
								</tr>

								<tr>
								<td></td>
								<td><input type="submit" name="add"/></td>
								<td><span id="error"></span></td>
								<td></td>
								</tr>
							</form>
						'; 
						print "</table>";
				?>
			</div><!--db div end-->
		</div><!--container div end-->
	</body>
</html>