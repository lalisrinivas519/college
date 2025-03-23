<?php
   include('php_include/connect.php');
   if(isset($_POST['submit'])) {
    $userid=$_POST['userid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
      $query_contact=mysqli_query($con,"INSERT INTO `user`(`userid`, `name`, `email`, `mobile`, `password`) VALUES ('$userid','$name','$email','$mobile','$password')");
   	        echo"<script>alert('Registered successfully');window.location.assign('login.php');</script>";								 
    }
   else{
    echo"<script>alert('Registered Unsuccessfully');window.location.assign('register.php');</script>";
   }
?>