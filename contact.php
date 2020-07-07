<?php session_start(); 
        require 'files/connection.php';
         if(isset($_POST['contact'])){
            $name = $_POST['name'];
	        $email = $_POST['email'];
             $message = $_POST['message'];
             $sql="insert into contactus (name, email, message) values ('$name', '$email', '$message')";
             $result=$conn->query($sql);
           }
?>

<!DOCTYPE html>
<html>

<?php require 'head.php'; ?>

<body>      
	    <?php require 'navbar.php'; ?>
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house.jpg">

				<div class="header">
					<div class="row header-inner">
						<div class="col-md-6 col-12">
							<img src="img/simple-house-logo.png" alt="Logo" class="site-logo" /> 
							<div class="site-text-box">
								<h1 class="site-title">FoodShala</h1>
								<h6 class="site-description">Online Services for Customers & Restaurants</h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="nav-ul">
								<form method="get" action="search.php">
									<input type="text" name="search" placeholder="search by name" value="<?php echo @$_GET['search']; ?>">
									<input type="submit" name="submit" value="search">
								</form>
							</ul>
						</nav>	
					</div>
				</div>
			</div>

    <div class="container-fluid">
			
			<div class="paging-links">
				<li class="paging-item"><a class="paging-link active">Contact us</a></li>
			</div>

				<div class="row justify-content-center">
					<div class="col-md-4 mb-5">
						<form action="" method="POST" class="contact-form">
					        <div class="form-group">
					          <input type="text" name="name" class="form-control" placeholder="Name" required="" />
					        </div>
					        
					        <div class="form-group">
					          <input type="email" name="email" class="form-control" placeholder="Email" required="" />
					        </div>
				
					        <div class="form-group">
					          <textarea rows="5" name="message" class="form-control" placeholder="Message" required=""></textarea>
					        </div>
					
					        <div class="form-group float-right">
					          <button type="submit" name="contact" class="btn btn-success">
					            Send
					          </button>
					        </div>
						</form>

					</div>

					    <div class="col-md-4 mb-5">
						    <ul>
							   <h4 class="text-info">Our Address</h4>
								<p> Near charbagh, Station road Lucknow.</p>
                                <p><span class="fa fa-mobile"></span> <a href="tel:+919876543210">+91-9876543200</a></p>
                                <p> <span class="fa fa-envelope-o"></span> <a href="mailto:fscustomers@gmail.com">fscustomers@gmail.com</a></p>
                                <p> <span class="fa fa-envelope-o"></span> <a href="mailto:fsrestaurants@gmail.com">fsrestaurants@gmail.com</a></p>
                            </ul>
                        </div>

                    <div class="col-md-4 mb-5">
						<ul>
							<h4 class="text-info">Follow us</h4>
				            <p>
					          <form method="" action="">
                                <input type="email" name="follow" placeholder="your Email">
                                <input type="submit" name="follow" value="follow">
				               </form>
			                </p>
			                
                            <p><a href="https://facebook.com/asifkhn143" class="social"><span class="fa fa-facebook-official"></span></a>
                            <a href="https://instagram.com/asifkhn143" class="social"><span class="fa fa-instagram"></span></a>
                            <a href="https://twitter.com/asifkhn143" class="social"><span class="fa fa-twitter"></span></a>
                            <a href="https://www.linkedin.com/in/asifkhn143/" class="social"><span class="fa fa-linkedin"></span></a>
                            <a href="https://youtube.com/" class="social"><span class="fa fa-youtube"></span></a></p>
			            </ul>
					</div>

				</div>

            
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->

				<div class="row justify-content-center">
					<div class="col-md-12">
						
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14241.326716662988!2d80.91086337648703!3d26.829400928556165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfdc8bfb928d5%3A0x9f9163ace7ebaf6c!2sCharbagh%2C%20Lucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1593169545221!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						
					</div>
				</div>
		</div>

	<?php require 'footer.php'; ?>

    <script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>	
	
</body>
</html>