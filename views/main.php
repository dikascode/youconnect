<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Daves Event Manager</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">

	<!-- <link rel="stylesheet" href="assets/css/bootstrap.css"> -->
	
	<!-- Carousel for multiple items -->
		<!-- <link rel="stylesheet" href="assets/css_cmi/animate.css"> -->
        <!-- <link rel="stylesheet" href="assets/css_cmi/style.css"> -->
        <link rel="stylesheet" href="assets/css_cmi/media-queries.css">
		<link rel="stylesheet" href="assets/css_cmi/carousel.css">
	
  </head>
  <body>

    <div class="container pt-5">
			<div class="row justify-content-between">
				<div class="col">
					<a class="navbar-brand" href="<?php echo ROOT_URL; ?>" style="font-size:400%; margin:0;">Y<span>C</span></a>
				</div>
				<div class="col d-flex justify-content-end">
					<div class="social-media">
		    		<p class="mb-0 d-flex">
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
		    		</p>
	        </div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
				<form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="<?php echo ROOT_URL ?>" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="team.html" class="nav-link">Our team</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

       

        <div class="container-fluid">

            <div class="row">
                <div class="col-md">
                    <?php Messages::display(); ?>
                    <?php require($view); ?>
                </div>
            </div>
            
        </div>

       <!-- /.container -->
    </body>


    <footer class="footer">
			<div class="container-fluid px-lg-5">
				<div class="row">
					<div class="col-md-9 py-5">
						<div class="row">
							<div class="col-md-4 mb-md-0 mb-4">
								<h2 class="footer-heading">About us</h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								<ul class="ftco-footer-social p-0">
		              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-logo-twitter"></span></a></li>
		              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
		              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-logo-instagram"></span></a></li>
		            </ul>
							</div>
							<div class="col-md-8">
								<div class="row justify-content-center">
									<div class="col-md-12 col-lg-10">
										<div class="row">
											<div class="col-md-4 mb-md-0 mb-4">
												<h2 class="footer-heading">Services</h2>
												<ul class="list-unstyled">
						              <li><a href="#" class="py-1 d-block">Construction</a></li>
						              <li><a href="#" class="py-1 d-block">House Renovation</a></li>
						              <li><a href="#" class="py-1 d-block">Painting</a></li>
						              <li><a href="#" class="py-1 d-block">Arhictecture Design</a></li>
						            </ul>
											</div>
											<div class="col-md-4 mb-md-0 mb-4">
												<h2 class="footer-heading">About</h2>
												<ul class="list-unstyled">
						              <li><a href="#" class="py-1 d-block">Staff</a></li>
						              <li><a href="#" class="py-1 d-block">Team</a></li>
						              <li><a href="#" class="py-1 d-block">Careers</a></li>
						              <li><a href="#" class="py-1 d-block">Blog</a></li>
						            </ul>
											</div>
											<div class="col-md-4 mb-md-0 mb-4">
												<h2 class="footer-heading">Resources</h2>
												<ul class="list-unstyled">
						              <li><a href="#" class="py-1 d-block">Security</a></li>
						              <li><a href="#" class="py-1 d-block">Global</a></li>
						              <li><a href="#" class="py-1 d-block">Charts</a></li>
						              <li><a href="#" class="py-1 d-block">Privacy</a></li>
						            </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-md-5">
							<div class="col-md-12">
								<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script>
							</div>
						</div>
					</div>
					<div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
						<h2 class="footer-heading">Request A Quote</h2>
						<form action="#" class="contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
              	<button type="submit" class="form-control submit px-3">Send</button>
              </div>
            </form>
					</div>
				</div>
			</div>
		</footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>


  <!-- Carousel Script for multiple items -->
	 	<script src="assets/js_cmi/jquery-3.3.1.min.js"></script>
		<script src="assets/js_cmi/jquery-migrate-3.0.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="assets/js_cmi/jquery.backstretch.min.js"></script>
        <script src="assets/js_cmi/wow.min.js"></script>
        <script src="assets/js_cmi/scripts.js"></script>
    
  </body>
</html>