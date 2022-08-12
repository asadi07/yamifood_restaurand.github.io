<?php
include('db.php');
session_start();	


$user_check=$_SESSION['as'];

$ses_sql=mysqli_query($con,"select username from regestation where username='$user_check'");

$row = mysqli_fetch_assoc($ses_sql);

$login_session =$row['username'];

	if(!isset($login_session))
	{
		mysqli_close($con); // Closing Connection
		header('Location: index.php'); // Redirecting To Home Page
	}
?>
