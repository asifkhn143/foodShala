<?php
include "connection.php";
    $id=$_GET['id'];
	header('location:../view-cart.php');
	$sql = "delete from cust_cart where id='$id'";
	$result1  = $conn->query($sql);
?>