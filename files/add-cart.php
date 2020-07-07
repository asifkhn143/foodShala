<?php
session_start(); 
	require 'connection.php';
	if(!isset($_SESSION['custid']))
	{
	header('location:../cust-login.php');
	}
	else {
			if(isset($_POST['addcart'])){
				
				$cust_id = $_SESSION['custid'];
				$res_id = $_POST['res_id'];
				$item_id = $_POST['item_id'];
		        $item_name = $_POST['item_name'];
		        $item_quantity = $_POST['item_quantity'];
		        $item_price = $_POST['item_price'];
		        $total_price = $item_price*$item_quantity;
		        
		       $sql="INSERT INTO cust_cart (cust_id, res_id, item_id, item_name, item_quantity, item_price, total_price) VALUES ('$cust_id', '$res_id', '$item_id', '$item_name', '$item_quantity', '$item_price', '$total_price')";
		       if ($conn->query($sql) === TRUE) {
               echo "item added to cart.!!!";
               header( "location:../view-cart.php");
            } else {
               $error= "Error: " . $sql . "<br>" . $conn->error;
                }
        $conn->close();
          }
	    }
?>
