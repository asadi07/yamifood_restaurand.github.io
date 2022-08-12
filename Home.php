<?php include('session.php');?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Yamifood Restaurant - Responsive HTML5 Template</title>  
    

    <!-- Site Icons -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
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
				<a class="navbar-brand" href="index.php">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="home.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item"><a class="nav-link" href="reservation.php">Reservation</a>
							
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.php">blog</a>
								<a class="dropdown-item" href="blog-single.php">blog Single</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="reviews.php">Reviews</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="images/slider-01.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Yamifood Restaurant</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.php">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/slider-02.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Yamifood Restaurant</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.php">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/slider-03.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Yamifood Restaurant</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.php">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	<!---START ABOUT---->
	<div class="about">
		<div class="container">
			<div class="row">
				<div class=" col-lg-6 col-md-12 col-sm-12 col-xs-12" >
					<div class=" about-img">
						<img src="images/about-img.jpg"  alt="..." class="img-thumbnail">
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
					<div class="about-txt">
						<h2>Welcome To <span>Yamifood Resturand</span></h2>
						<h6>Little Story</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur.<br> Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur </p>
					</div>
					<div class="about-btn">
						<a href="reservation.php"><button type="button">RESURVATION</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!---END ABOUT---->
	<!---START REVIEW---->


<div class="review" id="review">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">
				<div class="review-head">
					<div class="review-txt">
						<div class="col-lg-12 col-md-10 col-sm-10 col-xs-10">
							<h2>" If you're not the one cooking, stay out of the way and <br>compliment the chef." 
							<br><br><br>
							<span>"Michael Strahan"</span></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	
	
	<!---END REVIEW---->
	<!---START MENU---->

	<div class="menu">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-10 col-sm-12 col-xs-10">
					<div class="menu-head">
						<h3>Special Menu</h3>
						<p>We give hear some delicious Foods.Choose your items.</p>
						<hr>
					</div>
				</div>
			<div class="menu-btnn">
				<div class="row">
						<button type="button" data-filter="all">all</button>
						<button type="button" data-filter=".drinks">drinks</button>
						<button type="button" data-filter=".lunch">lunch</button>
						<button type="button" class="dinner-button" data-filter=".dinner">dinner</button>
				</div>
			</div>
			<div class="menu-img items">
				<div class="container box">
					<div class="row ">
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix drinks">
							<img src="images/img-01.jpg" class="img-fluid items ">
							<div class="menu-txt">
								<h4>Special Drinks 1</h4>
								<p>price:  <i>$7.79</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix drinks">
							<img src="images/img-02.jpg" class="img-fluid items">
							<div class="menu-txt">
								<h4>Special Drinks 2</h4>
								<p>price:  <i>$9.79</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix drinks">
							<img src="images/img-03.jpg" class="img-fluid items">
							<div class="menu-txt">
								<h4>Special Drinks 3</h4>
								<p>price:  <i>$10.79</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix lunch">
							<img src="images/img-04.jpg" class="img-fluid items">
							<div class="menu-txt">
								<h4>Special Lunch 1</h4>
								<p>price:  <i>$15.19</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix lunch">
							<img src="images/img-05.jpg" class="img-fluid items">
							<div class="menu-txt">
								<h4>Special Lunch 2</h4>
								<p>price:  <i>$18.59</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix lunch">
							<img src="images/img-06.jpg" class="img-fluid items">
							<div class="menu-txt">
								<h4>Special Lunch 3</h4>
								<p>price:  <i>$20.80</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix dinner">
							<img src="images/img-07.jpg" class="img-fluid items">
							<div class="menu-txt">
								<h4>Special Dinner 1</h4>
								<p>price:  <i>$25.19</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix dinner">
							<img src="images/img-08.jpg" class="img-fluid items">
							<div class="menu-txt">
								<h4>Special Dinner 2</h4>
								<p>price:  <i>$22.95</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix dinner">
							<img src="images/img-09.jpg" class="img-fluid items">
							<div class="menu-txt">
								<h4>Special Dinner 3</h4>
								<p><i> price:  $29.79</i></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!---END MENU---->	
	<!---START GALLERY---->

	<div class="gallery" id="gallery">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">
				<div class="gallery-head">
					<h2>Gallery</h2>
					<p>Choose Your Favourit items.We give our some items hear.</p>
					<hr>
				</div>
			</div>
			<div class="gallery-img">
				<div class="row">
					<img src="images/gallery-img-01.jpg" class=" col-sm-12 col-md-4 col-lg-4" alt="Responsive image">
					<img src="images/gallery-img-02.jpg" class=" col-sm-6 col-md-4 col-lg-4" alt="Responsive image">
					<img src="images/gallery-img-03.jpg" class=" col-sm-6 col-md-4 col-lg-4" alt="Responsive image">
					<img src="images/gallery-img-04.jpg" class=" col-sm-12 col-md-4 col-lg-4" alt="Responsive image">
					<img src="images/gallery-img-05.jpg" class=" col-sm-6 col-md-4 col-lg-4" alt="Responsive image">
					<img src="images/gallery-img-06.jpg" class=" col-sm-6 col-md-4 col-lg-4" alt="Responsive image">
				</div>
			</div>
		</div>
	</div>

	<!---END GALLERY---->
	<!---START CONTACT---->

<div class="contact dee">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<div class="contact-icons">
				<img src="images/social-media/call.png" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<h2>Phone<br>
				<span>+54481645448</span> </h2>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<div class="contact-icons">
				<img src="images/social-media/email.png" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<h2>Email<br>
				<span>asif2@gmail.com</span></h2>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
			<div class="contact-icons">
				<img src="images/social-media/location.png" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<h2>Location<br>
				<span>Chunarughat,Sylhet</span></h2>
			</div>
		</div>
	</div>
</div>

	<!---END CONTACT---->
	<!---START FOTTER---->

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

	<!---END FOTTER---->

	
	


	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
    <script src="js/custom.js"></script>
	<script src="js/vendor/mixitup.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>