	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Car Rentals</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/Admin-form.css">
		</head>
		<body>	
			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="/"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="/">Home</a></li>
				         <li><a href="/contact">Contact</a></li>
						 <li class="adminbutton100" onclick="document.getElementById('id01').style.display='block'" style="color=#ffffff">Admin </li>

							 



			<!--	 <form action="/action_page.php">
      <input type="text" placeholder="Username" name="username">
      <input type="text" placeholder="Password" name="psw">
      <button type="submit">Login</button>
    </form>      --> 


				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-7 col-md-6 ">
							<h6 class="text-white ">Choose your Dream Car :)</h6>
							<h1 class="text-white text-uppercase">
								Raslen Rental Agency
							</h1>
							<p class="pt-20 pb-20 text-white">
							We provide hundred of choices of cars , ,Feel free to pick one
							</p>
						</div>
						<div class="col-lg-5  col-md-6 header-right">
							<h4 class="text-white pb-30">Book Your Car Today!</h4>
							<form class="form" role="form" action="/src" method="GET">
									<div class="form-group">
											<div class="default-select" id="default-select"">
											 <select name ="city">
												 <option value="*" >ALL Location</option>
												 <option value="Nabeul">Nabeul</option>
												 <option value="Monastir">Monastir</option>
												 <option value="Sousse">Sousse</option>
												 <option value="Gabes">Gabes</option>
												 <option value="Tunis">Tunis</option>
												  <option value="Ariana">Ariana</option>
												  <option value="mahdia">mahdia</option>
											 </select>
										 </div>
									 </div>
									 <div class="form-group">
											<div class="default-select" id="default-select">
											 <select name="type">
												 <option value="*" >All cars</option>
												 <option value="Mercedes">Mercedes</option>
												 <option value="BMW">BMW</option>
												 <option value="Porche">Porche</option>
												 <option value="Renault">Renault</option>
												 <option value="Peugeot">Peugeot</option>
												  <option value="Ford">Ford</option>
												  <option value="Fiat">Fiat</option>
											 </select>
										 </div>
									 </div>
									<div class="from-group">
									<input class="form-control txt-field" type="text" name="name" placeholder="Your name">
									</div>

									<div class="form-group row">
									<div class="col-md-6 wrap-left">
										<div class="input-group dates-wrap" >                                          
																						
									
									<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  									<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  									<script>
 									 $( function() {
  													  $( "#datepicker" ).datepicker({dateFormat: "dd-mm-yy"}); } );		 </script>
  									<input type="text" class="dates form-control" id="datepicker"  value="<?php echo date("d/m/Y") ?>" style="    border-top-left-radius: 0.25rem;border-bottom-left-radius: 0.25rem;" >
									  <div class="input-group-prepend">
										<span class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
									</div>
								</div>
							</div>
							</div>
				   						 <div class="form-group row">
							      					  <div class="col-md-12">
							         			 	 <input class="btn btn-lg text-center btn-block" type="submit" value="Rent A Car">
													</div>
							   						 </div>
							</form>
						</div>											
					</div>
				</div>	
				
			</section>
			<!-- End banner Area -->	

			<!-- Start feature Area -->
			<section class="feature-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>What Services we offer to our clients</h1>
							
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-license"></span>Professional Service</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-phone"></span>Great Support</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>									
							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End feature Area -->		
			<!-- Start fact Area -->
			<section class="facts-area section-gap" id="facts-area">
					<div class="container">
						<div class="row">
							<div class="col single-fact">
								<h1 class="counter">2536</h1>
								<p>Agency Collaboration</p>
							</div>
							<div class="col single-fact">
								<h1 class="counter">6784</h1>
								<p>Really Happy Clients</p>
							</div>
							<div class="col single-fact">
								<h1 class="counter">1059</h1>
								<p>Total Tasks Completed</p>
							</div>
							
							<div class="col single-fact">
								<h1 class="counter">335</h1>
								<p>In House Professionals</p>
							</div>												
						</div>
					</div>	
				</section>
			<!-- end fact Area -->							


			<!-- Start callaction Area -->
			<section class="callaction-area relative section-gap">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<h1 class="text-white">Experience Great Support</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
							</p>
							<a class="callaction-btn text-uppercase" href="/contact">Reach Our Support Team</a>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End callaction Area -->


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	


			<div id="id01" class="modal">
  							 <form class="modal-content animate" action="/adminpanel" method="POST">
   										 <div class="container">
     									 <label  for="uname"><b>Username</b></label>
     									 <input type="text" placeholder="Enter Username" name="uname" required>

    									  <label for="psw"><b>Password</b></label>
    							  		<input type="password" placeholder="Enter Password" name="psw" required>
        
     					<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1" >
							Remember me
						</label>
					
						<button  class="login100-form-btn">
							Login
						</button>
						<div style="padding-top: 18px;width: 100%;text-align: center;">
						<span style="font-family: Raleway-Regular;font-size: 16px;color: #999999;line-height: 1.4;">
							Not a member?
						</span>

						<a style="font-family: Raleway-Regular;font-size: 16px;color: #990000;line-height: 1.4;" href="/signup">
							Sign up now							
							</a>
						</div>
 							 </form>
								</div>
								<script>
// Get the modal
var modal= document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
	</html>



