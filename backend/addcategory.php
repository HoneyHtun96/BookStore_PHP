 <?php
	$category_name =trim( $_POST['category_name'] ) ;
	include('database.php');
	$sql="insert into categories(id,name) values('','$category_name')";
	$conn->query($sql);
	header("location:category.php?status=1");


?>