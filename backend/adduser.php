
<?php

	$user_name = trim( $_POST['user_name'] );
	$user_email = trim( $_POST['user_email'] );
	$user_password = trim( $_POST['user_password'] );
	$user_phoneno = trim( $_POST['user_phoneno'] );
	$user_address = trim( $_POST['user_address'] );
	
	var_dump($user_name,$user_email,$user_password,$user_phoneno,$user_address);
	//die();

	include('database.php');
	$sql="insert into users(id,name,email,password,phoneno,address) values('','$user_name','$user_email','$user_password',$user_phoneno,'$user_address')";
	var_dump($sql);
	//die();
	$conn->query($sql);
	header("location:user.php?status=1");


?>
