<?php
	
	$id=$_REQUEST['id'];
	require 'backend/database.php';
	$sql="select * from users where id=$id";
	$result=$conn->query($sql);

		while ($row=$result->fetch_assoc()) {
			echo json_encode($row);
		}

?>