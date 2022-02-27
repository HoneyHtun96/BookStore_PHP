<?php
	//1.Accept data
	$book_id = $_POST['book_id'];

	$oldphotolink = $_POST['oldphotolink'];

	$book_name=$_POST['name'];

	$author_id=$_POST['author_id'];

	$category_id=$_POST['category_id'];	

	$book_price=$_POST['price'];

	$book_quantity=$_POST['quantity'];

	$book_description=$_POST['description'];

	$photo=$_FILES['photo'] ['name'];

	$photoobj=$_FILES['photo'];
	//var_dump($photoobj);
	// var_dump($book_id,$book_name,$author_id,$category_id,$book_price,$book_quantity);
	// die();

	if ($photo) {		
	
		$photo_tmpname=$_FILES['photo']['tmp_name'];

		$photo_savename = 'photo/'.$photo; /// File path 		
		
		move_uploaded_file($photo_tmpname, $photo_savename);

		$oldphotolink = $photo_savename;
	}

	include('database.php');
	$sql = "update books set 
				name='$book_name',
				author_id=$author_id,
				category_id=$category_id,
				lendprice='$book_price',	
				qty=$book_quantity,
				photo='$oldphotolink',
				description='$book_description'
				 where id=$book_id";
			// var_dump($sql);
			// die();

	$conn->query($sql);
	header("location:index.php?status=3");

	// echo "$item_code => $type_id => $size_id => $color_id => $gender_id => $brand_id => $price => $quantity => $description => $photo";


	//2.File Upload
	//3.Insert into Database

?>