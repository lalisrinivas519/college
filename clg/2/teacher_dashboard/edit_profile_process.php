<?php 
include("php_include/connect.php");


$_SESSION['userid']=$userid;
?>
<?php 
	if(isset($_POST['submit'])){
		
										
										$userid=$_POST['userid'];
										$name=$_POST['name'];
										$email=$_POST['email'];
										$mobile=$_POST['mobile'];
										$address=$_POST['address'];
										$city=$_POST['city'];
										$district=$_POST['district'];
										$state=$_POST['state'];
										$country=$_POST['country'];
										$pincode=$_POST['pincode'];
										
											
									$query=mysqli_query($con,"UPDATE user SET name='$name',email='$email',mobile='$mobile',address='$address',city='$city',district='$district',state='$state',country='$country',pincode='$pincode' WHERE userid='$userid'");
									if($query){
										echo"<script>alert('Update Successful');window.location.assign('edit_profile.php');</script>";
									}else{
										echo"<script>alert('Update Not Successful');window.location.assign('edit_profile.php');</script>";
									}
										
									
										
									}
									
								?>