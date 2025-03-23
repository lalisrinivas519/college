<?php
									if(isset($_POST['submit'])){
										$userid=$_POST['userid'];
										 $image=$_FILES["image"]["name"];
										 $extensions=array('image/jpg','image/jpeg','image/png');
										
										if($image!=''){
											$query=mysqli_query($con,"UPDATE user SET image='$image' WHERE userid='$userid'");
											$newname = $image;  
											$target = 'img/profile/'.$newname;
											move_uploaded_file( $_FILES['image']['tmp_name'], $target);
										if($query){
											echo '<script>alert("Upload Successful.");window.location.assign("edit_pic.php");</script>';
										}	
										}else{
												echo '<script>alert("Add Photo.");window.location.assign("edit_pic.php");</script>';
										}
									}
							   ?>