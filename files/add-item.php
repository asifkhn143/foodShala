<?php 
	require 'connection.php';
	session_start();
	if(!isset($_SESSION['restid']))
	{
	header('location:res-login.php');
	}
	else {

	    	if(isset($_POST['addItemBtn'])){
	    		$item_name=$_POST['item_name'];
	    		$res_id=$_SESSION['restid'];
	    		$item_desc=$_POST['item_desc'];
	    		$item_type=$_POST['item_type'];
	    		$item_price=$_POST['item_price'];
	    		$filename = date('Y_m_d_H_i_s_').$_FILES['item_image']['name'];
		        $type = $_FILES['item_image']['type'];
		        $tmp_name = $_FILES['item_image']['tmp_name'];
		        $size = $_FILES['item_image']['size'];
		        $location = "uploads/";
		        $filepath = $location.$filename;

		        if($type == "image/gif" || $type == "image/jpeg" || $type="image/png" || $type="image/jpg"){ 
			        if(move_uploaded_file($tmp_name, '../'.$location.$filename)){
			            $sql="insert into menu_items (res_id, item_name, item_desc, item_price, item_type, item_imagepath) values ('$res_id', '$item_name', '$item_desc', '$item_price', '$item_type', '$filepath')";
			            if($conn->query($sql) === TRUE){
			              header( "refresh:1; url=../index.php" );
			             
			              echo ("Item added successfully!!!");;

			            }else{
			              echo "Error: " . $sql . "<br>" . $conn->error;
			            }
			        }else{
			            echo "Failed to Upload";
			        } 
			    }else{
			        echo "File should be in PDF or .DOCX Format";
		        }
	    	}
    	}
?>