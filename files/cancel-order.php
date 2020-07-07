<?php
include "connection.php";
    $id=$_GET['id'];
	header('location:../my-orders.php');
	$status = "cancelled by Customer";
	$sql1 = "update orders SET status = '$status' WHERE id = '$id'";
	$result1 = $conn->query($sql1);
?>