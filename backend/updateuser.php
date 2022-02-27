<?php 
	
	$user_id = $_POST['user_id'];
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];
	$user_phoneno = $_POST['user_phoneno'];
	$user_address = $_POST['user_address'];
	
	include('database.php');
	$sql="update users set name='$user_name',
			email='$user_email',
			password='$user_password',
			phoneno=$user_phoneno,
			address='$user_address' where id=$user_id";
	// var_dump($sql);
	// die();

	// $sql = "UPDATE `admins` SET `id`=[value-1],`name`=[value-2],`email`=[value-3],`password`=[value-4],`createdat`=[value-5] WHERE 1"

	$conn->query($sql);
	header("location:user.php?status=3");


?>