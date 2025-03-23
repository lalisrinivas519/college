<?php 
include("php_include/connect.php");
include("php_include/check_login.php");

$_SESSION['userid']=$userid;
?>
<?php
                    							if(isset($_POST['submit'])){
                    								
                    								$old_password=$_POST['old_password'];
                    								$new_password=$_POST['new_password'];
                    								$confirm_password=$_POST['confirm_password'];
                    								
                    								if($confirm_password==$new_password){
                    									$sql_check=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid' and `password`='$password'");
                    									$num=mysqli_num_rows($sql_check);
                    									if($num>=1){
                    										$up=mysqli_query($con,"UPDATE `admin` SET `password`='$new_password' WHERE `userid`='$userid'");
                    										echo '<script>alert("Password Changed Successful.");window.location.assign("index.php");</script>';
                    									}else{
                    										echo '<script>alert("Old Password does not match.");window.location.assign("password.php");</script>';
                    									}
                    								}else{
                    										echo '<script>alert("New Password and Conform Password Should Match!!!.");window.location.assign("password.php");</script>';
                    								}
                    							}
                                           ?>
										   
										  