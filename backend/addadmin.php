
<?php

	$admin_name =trim( $_POST['admin_name'] );
	$admin_email =trim( $_POST['admin_email'] );
	$admin_password =trim( $_POST['admin_password'] );
	// var_dump($admin_name,$admin_email,$admin_password);
	// die();
	include('database.php');
	$sql="insert into admins(id,name,email,password) values('','$admin_name','$admin_email','$admin_password') ";
	$conn->query($sql);
	header("location:admin.php?status=1");


?>
