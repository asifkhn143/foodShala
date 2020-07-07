<?php
session_start();
    require 'connection.php';
    if(isset($_POST['cust_login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    //$reshashpassword = md5($res_password);
    $sql="select * from customers where email='$email' and password='$password'";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($result);
    if($rows_fetched==0){
        ?>
        <script>
            window.alert("Wrong email or password!");
        </script>
        <meta http-equiv="refresh" content="1;url=../cust-login.php"/>
        <?php
    }else{
        $row=mysqli_fetch_array($result);
        $_SESSION['image']=$row['profile_imagepath'];
        $_SESSION['name']=$row['name'];
        $_SESSION['custid']=$row['id'];
        echo "You are successfully logged in.!!!";
        header( "location:../index.php");
    } 
  }

?>