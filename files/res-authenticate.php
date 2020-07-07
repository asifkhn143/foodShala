<?php
session_start();
    require 'connection.php';
    if(isset($_POST['res_login'])){
    $email=$_POST['res_email'];
    $password=$_POST['res_password'];
    //$reshashpassword = md5($res_password);
    $sql="select * from restaurants where res_email='$email' and res_password='$password'";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($result);
    if($rows_fetched==0){
        ?>
        <script>
            window.alert("Wrong email or password!");
        </script>
        <meta http-equiv="refresh" content="1;url=../res-login.php"/>
        <?php
    }else{
        $row=mysqli_fetch_array($result);
        $_SESSION['image']=$row['profile_imagepath'];
        $_SESSION['name']=$row['res_name'];
        $_SESSION['restid']=$row['id'];
        echo "You are successfully logged in.!!!";
        header( "location:../index.php");
    } 
  }
?>