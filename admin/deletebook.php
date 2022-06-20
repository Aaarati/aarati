<?php
session_start();
if (!isset($_SESSION['usernamae'])){
	header('location:Adminlogin.php');
}
$producationhouseID = $_GET['productionhouseID'];
//connect to database
$conn = mysqli_connect('localhost','root','','bookstore');
//query to delete record from tbl_category with id
$sql = "DELETE FROM productionhouse WHERE productionhouseID = $productionhouseID";
//execute query
mysqli_query($conn, $sql);

//redirect to listing page
header('location:book.php');
?>