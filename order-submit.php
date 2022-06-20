
<?php
$conn=mysqli_connect('localhost','root','','bookstore');
include_once 'cart-action.php';
error_reporting(0);
session_start();							  
	foreach ($_SESSION["cart"] as $books)
	{	
		$book_total += ($books["price"]*$books["quantity"]);				
				$sql="INSERT INTO orders (customerID,bookname,quantity,price,total,status,transactionID)
					 VALUES('".$_SESSION['customerID']."','".$books["bookname"]."','".$books["quantity"]."','".$books["price"]."','".$book_total."','Pending','".$token."')";	
				mysqli_query($conn,$sql);
	}
			header('location:customerdashboard.php');
?>