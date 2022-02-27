<?php 
	
	$admin_id=$_POST['admin_id'];
	$admin_name=$_POST['admin_name'];
	$admin_email=$_POST['admin_email'];
	$admin_password=$_POST['admin_password'];
	
	include('database.php');
	$sql="update admins set name='$admin_name',
			email='$admin_email',
			password='$admin_password' where id=$admin_id";

	// $sql = "UPDATE `admins` SET `id`=[value-1],`name`=[value-2],`email`=[value-3],`password`=[value-4],`createdat`=[value-5] WHERE 1"

	$conn->query($sql);
	header("location:admin.php?status=3");


?>