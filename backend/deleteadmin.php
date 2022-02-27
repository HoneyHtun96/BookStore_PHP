<?php 
	$admin_id =$_POST['admin_id'];
	include('database.php');
	$sql="delete from admins where id=$admin_id";
	// var_dump($sql);
	// die();
	$conn->query($sql);
	header("location:admin.php?status=2");

?>