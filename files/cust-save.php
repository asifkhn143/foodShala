<?php 
	require 'connection.php';
		if(isset($_POST['cust_signup'])){

	        $name = $_POST['name'];
	        $email = $_POST['email'];
	        $preference = $_POST['preference'];
	        $contact_number = $_POST['contact_number'];
	        $password = $_POST['password'];
	        //$hashpassword = md5($password);
	        $filename = date('Y_m_d_H_i_s_').$_FILES['profile_image']['name'];
		        $type = $_FILES['profile_image']['type'];
		        $tmp_name = $_FILES['profile_image']['tmp_name'];
		        $size = $_FILES['profile_image']['size'];
		        $location = "uploads/";
		        $filepath = $location.$filename;

            if($type == "image/gif" || $type == "image/jpeg" || $type="image/png" || $type="image/jpg"){ 
			        if(move_uploaded_file($tmp_name, '../'.$location.$filename)){
			        	
	        $sql="insert into customers (name, email, preference, contact_number, password, profile_imagepath) values ('$name', '$email', '$preference', '$contact_number', '$password', '$filepath')";
	       if($conn->query($sql) === TRUE){
			              header( "refresh:1; url=../cust-login.php" );
			             
			              echo ("Item added successfully.Please login to continue. !!");;

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
?>