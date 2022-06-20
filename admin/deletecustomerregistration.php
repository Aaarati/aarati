<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM register WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location: deletecustomerregistration.php");   

?>