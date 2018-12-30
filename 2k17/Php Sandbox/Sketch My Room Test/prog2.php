<!DOCTYPE html>	
	<html>
		<head>
			<title>	Program 2 </title>
			<style type="text/css">
				*{
					font-size:18px;
					font-weight:bold;
					font-family:monospace;
					background-color:#CFCFC2;
					margin:25px;
					padding-left:5px;	
				}
				p.heading{
					font-size:30px;
				}
				#content{
					background-color:#D9D921;
					width:50%;
					padding:5px;
					border:1px solid #8D8D88;
				}
				.alert{
					color:#B83924;
				}
			</style>
		</head>
		<body>
			<div>
				<div>
					<p class="heading">
						Results:
					</p>
				</div>
				<div>
					<?php
						if(isset($_FILES['txtFile'])!==""){
							$errors=array();
							$file_name=$_FILES['txtFile']['name'];
							$file_size=$_FILES['txtFile']['size'];
							$file_tmp=$_FILES['txtFile']['tmp_name'];
							$file_type=$_FILES['txtFile']['type'];
							$file_ext=strtolower(end(explode('.',$_FILES['txtFile']['name'])));
							  
							print "<p>File Details:</p>";
							print "<p>Name:$file_name <br/> Size:$file_size <br/> Tmp Name:$file_tmp <br/> Type:$file_type <br/> Extension:$file_ext <br/></p>";
							  
							$extensions= array("txt");
							  
							if(in_array($file_ext,$extensions)=== false){
								$errors[]="Extension not allowed, please choose a TXT file.";
							}						  
							if($file_size > 2097152){
								$errors[]='File size must be exactly 2 MB';
							}						  
							if(empty($errors)==true){
								move_uploaded_file($file_tmp,$file_name);
								print "<p class=alert>File Uploaded Successfully</p>";
							  						   
								$file_lines=file($file_name);						
								$total_lines=sizeof($file_lines);
								
								for($i=0;$i<$total_lines-1;$i++){
									for($j=0;$j<$total_lines-$i-1;$j++){
										if(strlen($file_lines[$j])>strlen($file_lines[$j+1])){
											$temp=$file_lines[$j];
											$file_lines[$j]=$file_lines[$j+1];
											$file_lines[$j+1]=$temp;
										}
									}
								}
								echo "<p>File Content:</p>";
								print "<div id='content'>";
								foreach($file_lines as $values){
									echo "$values<br/>";
								}
								print "</div>";
							}
							else{
								print "<p class='alert'>File was not Uploaded !!</p>";
								foreach($errors as $values){
									print "<p>$values</p>";
								}
							}	
						}
						else{
							print "<p class='alert'>No File Selected</p>";
						}
					?>
				</div>
			</div>
		</body>
	</html>