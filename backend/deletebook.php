<?php 
	$book_id =$_POST['book_id'];
	include('database.php');
	$sql="delete from books where id=$book_id";
	$conn->query($sql);
	header("location:index.php?status=2");

?>