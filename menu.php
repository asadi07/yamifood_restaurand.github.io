<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Yamifood Restaurant</title>


       <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/menu.css">    
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
						<li class="nav-item active"><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item"><a class="nav-link" href="reservation.php">Reservation</a>
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
	<!-- Start Banner -->
	<div class="banner">
		<div class="row">
			<div class="banner-bg">
				<div class="banner-tittle">
					<h1><span>S</span>pecial <span>M</span>enu</h1>
				</div>
			</div>
		</div>
	</div>

	<!-- End Banner -->
	<!-- Start Menu -->
	<div class="menu">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-10 col-sm-12 col-xs-10">
					<div class="menu-head">
						<h1>Special Menu</h1>
						<p>We give hear some delicious Foods.Choose your items.</p>
						<hr>
					</div>
				</div>
			</div>
			<div class="menu-btn">
				<div class="row">
					<button type="button" data-filter="all" >All</button>
					<button type="button" data-filter=".breakfast" class="bk">breakfast</button>
					<button type="button" data-filter=".lunch">lunch</button>
					<button type="button" data-filter=".dinner">dinner</button>
					<button type="button" data-filter=".drinks">drinks</button>
				</div>
			</div>
			<div class="menu-img items">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix drinks">
							<img src="images/img-01.jpg" class="img-fluid ">
							<div class="menu-txt">
								<h4>Special Drinks 1</h4>
								<p>price:  <i>$7.79</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix drinks">
							<img src="images/img-02.jpg" class="img-fluid ">
							<div class="menu-txt">
								<h4>Special Drinks 2</h4>
								<p>price:  <i>$8.79</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix drinks">
							<img src="images/img-03.jpg" class="img-fluid ">
							<div class="menu-txt">
								<h4>Special Drinks 3</h4>
								<p>price:  <i>$10.79</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix lunch">
							<img src="images/img-04.jpg" class="img-fluid ">
							<div class="menu-txt">
								<h4>Special Lunch 1</h4>
								<p>price:  <i>$15.19</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix lunch">
							<img src="images/img-05.jpg" class="img-fluid ">
							<div class="menu-txt">
								<h4>Special Lunch 2</h4>
								<p>price:  <i>$18.59</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix lunch">
							<img src="images/img-06.jpg" class="img-fluid ">
							<div class="menu-txt">
								<h4>Special Lunch 3</h4>
								<p>price:  <i>$20.80</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix dinner">
							<img src="images/img-07.jpg" class="img-fluid ">
							<div class="menu-txt">
								<h4>Special Dinner 1</h4>
								<p>price:  <i>$25.19</i></p>
							</div>
						</div><div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix dinner">
							<img src="images/img-08.jpg" class="img-fluid ">
							<div class="menu-txt">
								<h4>Special Dinner 2</h4>
								<p>price:  <i>$22.95</i></p>
							</div>
						</div><div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix dinner">
							<img src="images/img-09.jpg" class="img-fluid ">
							<div class="menu-txt">
								<h4>Special Dinner 3</h4>
								<p><i> price:  $29.79</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix breakfast">
							<img src="images/menu-image1.jpg" class="img-fluid ">
							<div class="menu-txt">
								<h4>American Breakfast</h4>
								<p>price:  <i>$25.79</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix breakfast">
							<img src="images/menu-image2.jpg" class="img-fluid ">
							<div class="menu-txt">
								<h4>Self-made Salad1</h4>
								<p>price:  <i>$18.79</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix breakfast">
							<img src="images/menu-image3.jpg" class="img-fluid ">
							<div class="menu-txt">
								<h4>Chinese Noodle</h4>
								<p>price:  <i>$34</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix breakfast">
							<img src="images/menu-image4.jpg" class="img-fluid ">
							<div class="menu-txt">
								<h4>Rice Soup</h4>
								<p>price:  <i>$28</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix breakfast">
							<img src="images/menu-image5.jpg" class="img-fluid ">
							<div class="menu-txt">
								<h4>Deli Burger</h4>
								<p>price:  <i>$46</i></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-10 col-xs-10 mix breakfast">
							<img src="images/menu-image6.jpg" class="img-fluid ">
							<div class="menu-txt">
								<h4>Big Flat Fried</h4>
								<p>price:  <i>$39.79</i></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End Menu -->
	<!-- Start Fotter -->
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