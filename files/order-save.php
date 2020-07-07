<?php 
    session_start();
	require 'connection.php';
	if(!isset($_SESSION['custid']))
	{
	header('location:cust-login.php');
	}
	else {
			if(isset($_POST['order'])){

		        $cust_id = $_SESSION['custid'];
		        $res_id = $_POST['res_id'];
		        $res_names = $_POST['res_names'];
		        $item_names = $_POST['item_names'];
		        $address = $_POST['address'];
		        $date = date('Y/m/d H:i:s');
		        $payment_type = $_POST['payment_type'];
		        $total_price = $_POST['total_price'];
		        $mobile_number = $_POST['mobile_number'];
		        
		        $sql="INSERT INTO orders (cust_id, res_id, item_names, res_names, address, date, payment_type, total_price, mobile_number) VALUES ('$cust_id', '$res_id', '$item_names', '$res_names', '$address', '$date', '$payment_type', '$total_price', '$mobile_number')";

            if ($conn->query($sql) === TRUE) {
               echo "Your Order is done!!!";
               header( "location:../my-orders.php");
            } else {
               $error= "Error: " . $sql . "<br>" . $conn->error;
                }
        $conn->close();
          }
	    }
?>
