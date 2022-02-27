  

<?php
	
	include('database.php');
	$book_id=$_POST['idname'];
	$lent_date=$_POST['lentname'];
	$return_date=$_POST['returnname'];
	$user_id = $_POST['username'];
	//$item = $_POST['item'];
	// var_dump($book_id,$lent_date,$return_date,$user_id,$item);
	// die();
	// var_dump($rent_id);
	// die();
		
		$sql1 = "select * from books where id=$book_id";
		$result=$conn->query($sql1);
		$row=$result->fetch_assoc();
		$id =  $row['id'];
		$qty = $row['qty'];

		if ($book_id==$id) {
			$quantity=$qty--;

			$sql2="update books set qty=$qty where id=$book_id";
			$conn->query($sql2);
		}
		//var_dump($sql1);
		
	
	$sql = "insert into lents(id,lent_date,return_date,book_id,user_id) values('','$lent_date','$return_date',$book_id,$user_id)";

	$conn->query($sql);

	header("location:rent.php");
	echo "sussess";
 ?>