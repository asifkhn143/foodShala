<?php 
	require 'connection.php';
		if(isset($_POST['res_signup'])){

	        $res_name = $_POST['res_name'];
	        $res_email = $_POST['res_email'];
	        $res_number = $_POST['res_number'];
	        $res_city = $_POST['res_city'];
	        $res_password = $_POST['res_password'];
	        //$hashrespassword = md5($res_password);
	        $filename = date('Y_m_d_H_i_s_').$_FILES['profile_image']['name'];
		        $type = $_FILES['profile_image']['type'];
		        $tmp_name = $_FILES['profile_image']['tmp_name'];
		        $size = $_FILES['profile_image']['size'];
		        $location = "uploads/";
		        $filepath = $location.$filename;

            if($type == "image/gif" || $type == "image/jpeg" || $type="image/png" || $type="image/jpg"){ 
			        if(move_uploaded_file($tmp_name, '../'.$location.$filename)){

	        $sql="insert into restaurants (res_name, res_email, res_number, res_city, res_password, profile_imagepath) values ('$res_name', '$res_email', '$res_number', '$res_city', '$res_password', '$filepath')";
	        if($conn->query($sql) === TRUE){
			              header( "refresh:1; url=../res-login.php" );
			             
			              echo ("Created successfully. Please login to continue.!!");;

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