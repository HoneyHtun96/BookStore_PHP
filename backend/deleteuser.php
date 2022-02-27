<?php 
	$user_id =$_POST['user_id'];
	include('database.php');
	$sql="delete from users where id=$user_id";
	// var_dump($sql);
	// die();
	$conn->query($sql);
	header("location:user.php?status=2");

?>