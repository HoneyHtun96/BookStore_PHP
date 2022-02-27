<?php
	//1.Accept data	
	$book_name=$_POST['book_name'];
	$author_id=$_POST['author_id'];
	$book_quantity=$_POST['book_quantity'];
	$category_id=$_POST['category_id'];
	$book_price=$_POST['book_price'];
	$book_description=$_POST['book_description'];
	
	
	$photo=$_FILES['photo'] ['name'];
	$photo_tmpname=$_FILES['photo']['tmp_name'];

	$photo_savename = 'photo/'.$photo; /// File path 
	$photoobj=$_FILES['photo'];
	//var_dump($photoobj);
	move_uploaded_file($photo_tmpname, $photo_savename);

	include('database.php');
	$sql = "insert into books(id,name,category_id,author_id,photo,description,lendprice,qty) values('','$book_name',$category_id,$author_id,'$photo_savename','$book_description','$book_price',$book_quantity)";
	 var_dump($sql);
	// die();
	$conn->query($sql);
	header("location:index.php?status=1");

	// echo "$item_code => $type_id => $size_id => $color_id => $gender_id => $brand_id => $price => $quantity => $description => $photo";


	//2.File Upload
	//3.Insert into Database
?>