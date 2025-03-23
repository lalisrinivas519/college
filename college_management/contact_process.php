<?php
include("php_include/connect.php");
if(isset($_POST['submit'])){
	$userid=$_POST['userid'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$message=$_POST['message'];
	
	
	$query_username_check=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
	if(mysqli_num_rows($query_username_check)==0){
		$query=mysqli_query($con,"INSERT INTO `user`(`userid`, `name`, `email`, `mobile`, `message`)
		                               VALUES ('$userid','$name','$email','$mobile','$message')");
		                                                  
		if($query){                                       
			echo"<script>alert('register is successful');window.location.assign('contact.php');</script>";
		}
		else{
			echo"<script>alert('register failed');window.location.assign('contact.php');</script>";
		}
			
		
	}
	else{
	echo"<script>alert('username already exists');window.location.assign('contact.php');</script>";	
	}
}else{
	
}
?>