<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Yamifood Restaurant</title>


       <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/reviews.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>

	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="Home.php">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="Home.php">Home</a></li>
						<li class="nav-item "><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item"><a class="nav-link" href="reservation.php">Reservation</a>
						<li class="nav-item  dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.php">blog</a>
								<a class="dropdown-item" href="blog-single.php">blog Single</a>
							</div>
						</li>
						<li class="nav-item active"><a class="nav-link" href="reviews.php">Reviews</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

<!-- START BLOG-BG -->
		<div class="blog-bg">
			<div class="row">
				<div class="blog-head">
					<h2>Customar Review's</h2>
				</div>
			</div>
		</div>
	<!-- END BLOG-BG -->
	
	<!-- START Customer Reviews -->

	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-1.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
								<h6 class="text-dark m-0">Web Developer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-3.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
								<h6 class="text-dark m-0">Web Designer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile-7.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
								<h6 class="text-dark m-0">Seo Analyst</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"><img src="images/icon.jpg"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"><img src="images/-2.jpg"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	<!-- START GIVE REVIEW -->
	<div class="review-form">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="give-form-head">
						<h2>Give Your Review</h2>
						<hr>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="give-review-form">
						<form>
							<table>
								<tr><td><input type="text" name="name" placeholder="Your Name..." class="from-control"></td></tr>
								<tr><td><input type="email" name="email" placeholder="Your Email..." class="from-control"></td></tr>
								<tr><td><textarea  placeholder="What on your mind..." rows="5" ></textarea></td></tr>
								<tr><td><input type="submit" name="" class="sub"></td></tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END GIVE REVIEW -->
	<!-- START FOTTER -->
		<div class="fotter">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 bg">
					<div class="fotter-text">
						<h2>About Us</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat..</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 bg">
					<div class="fotter-text">
						<h2>opening hour</h2>
						<p>Monday: Closed
							<br><br>
						Tue-Wed : 9:Am - 10PM
						<br><br>
						Thu-Fri : 9:Am - 10PM
						<br><br>
						Sat-Sun : 5:PM - 10PM
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 bg">
					<div class="fotter-text">
						<h2>contact information</h2>
						<p>Ipsum Street, Lorem Tower, MO, Columbia, 508000

						+01 2000 800 9999

						info@admin.com</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 bg">
					<div class="fotter-text">
						<h2>Subscribe</h2>
						<input type="text" class="Subscribe" placeholder="Email Adress..." name="">
						<input type="submit" class="Subscribe" value="Subscribe" name="">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="final-bg">
						<h2>All Rights Reserved. © 2018 Yamifood Restaurant Design By : <span>Asif SaDi</span></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Fotter -->




<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/vendor/mixitup.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
	