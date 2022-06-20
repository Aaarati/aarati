<?php
$conn = mysqli_connect('localhost','root','','bookstore');
	if (isset($_POST['status'])) {
			$status = $_POST['status'];
			$id = $_POST['id'];
		
		$sql = "UPDATE orders SET status = '$status'  WHERE orderID = '$id'";
		mysqli_query($conn, $sql);
	}
?>