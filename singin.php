<?php
session_start();
$error="";
if (isset($_POST['submit'])) 
{
	if (empty($_POST['username']) || empty($_POST['password'])) 
	{
		$error="Username or Password is invalid"; 
	}
	else
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

		$con=mysqli_connect("localhost","root","");

		$db=mysqli_select_db($con,"yamifood_restaurant");
		$query=mysqli_query($con,"select * from regestation where password='$password' AND username='$username'");
		$count=mysqli_num_rows($query);

			if ($count == 1)
				{
					$_SESSION['as']=$username;
					header("location:Home.php");
				}
			else
				{
					$error="Username or password is invalid";

				}

		mysqli_close($con);
	}
}
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Yamifood Restaurant</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<link rel="stylesheet" type="text/css" href="css/singin.css">

</head>
<body>
	<div class="singin">
		<div class="container singin-bg">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="singin-circle">
						<img src="images/userr.png">
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="singin-head">
						<h2>Singin</h2>
						<p>OR <a href="registation.php">SingUp</a></p>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="singin-form">
						<form action="" method="post">
							<table>
								<tr><td><input type="text" name="username" placeholder="Your Email..."></td></tr>
								<tr><td><input type="password" id="pass" name="password" placeholder="Your password..."></td></tr>
								<tr><td><input type="submit" value="Log in" name="submit"></td></tr>
							</table>
						</form>
						<p><a href="">forget password?</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>