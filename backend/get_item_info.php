<?php
	
	$book_id=$_REQUEST['book_id'];
	// var_dump($book_id);
	// die();

	include('database.php');
	$sql="select * from books where id=$book_id";

	//var_dump($sql);
	
	$result=$conn->query($sql);
	// var_dump($result);
	// die();

		while ($row=$result->fetch_assoc()) {
			echo json_encode($row);
		}

?>