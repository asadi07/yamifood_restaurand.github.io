<?php
session_start();
include "db.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Yamifood Restaurant</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<link rel="stylesheet" type="text/css" href="css/registation.css">
</head>
<body>
	<?php
	$nameerr=$emailerr=$numbererr=$passworderr=$cpasserr=$notmatch=""; 
	if ($_SERVER["REQUEST_METHOD"] =="POST")
	{
		if (isset($_POST['submit'])) 
			{
				$name=$email=$number=$password=$cpass=$notmatch=""; 
				
			}
		 	if (empty($_POST['name'])) 
			 	{
			 		$nameer="<font color='red' size='+2'>*</font>";
			 	}
			 else
			 	{
			 		$name=$_POST['name'];
			 		 if (!preg_match("/^[-a-z0-9+&@]*$/",$name)) 
					    {
					      $nameerr="<font color='red' size='-0' text-align='center';>*Only small letters and number allowed</font>";
					    }
			 	}
			 if (empty($_POST['email']))
				 {
				 	$emailerr="<font color='red' size='+2'>*</font>";
				 }
			else
				{
					$email=$_POST['email'];
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
					{
				      $emailerr="<font color='red'>*Invalid email format</form>";
				    }
				}
			if (empty($_POST['number'])) 
				{
					$numbererr="<font color='red' size='+2'>*</font>";
				}
			else
				{
					$number=$_POST['number'];
				}
			if (empty($_POST['password'])) 
				{
					$passworderr="<font color='red' size='+2'>*</font>";
				}
			if (empty($_POST['cpass'])) 
				{
					$cpasserr="<font color='red' size='+2'>*</font>";
				}
			if($_POST['password']==$_POST['cpass'])
				{
					$password=$_POST['password'];
					$cpass=$_POST['cpass'];
				}
			else
				{
					$notmatch="<font color='red' size='3'>* Password and Confirmpassword are not match</font>";
				}
			if (isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['number']) AND isset($_POST['password']) AND isset($_POST['cpass'])); 
				{
					echo $name=$_POST['name'];
					echo $email=$_POST['email'];
					echo $number=$_POST['number'];
					echo $password=$_POST['password'];
					echo $cpass=$_POST['cpass'];
				$sql="INSERT INTO regestation(username,email,number,password,cpass)
				VALUES('$name','$email','$number','$password','$cpass')"or die(mysqli_error());
						if(mysqli_query($con,$sql))
									{
									 echo '
										 <script>
										 	location.replace("index.php?signconfirm=1")

										 	</script>
									
										}
									
									';
								}

						}
								  
					}
					
				
				
		
				
	 ?>
	<div class="registation">
		<div class="container registation-bg">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-lg-12">
					<div class="registation-head">
						<h2>Sing-Up Today at Yamifood</h2>
						<p>OR <a href="singin.php">Login</a></p>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-lg-12">
					<div class="registation-form">
						<form action="" method="post">
							<table>
								<tr><td><input type="text" name="name" placeholder="Your Username"><?php  echo $nameerr; ?></td></tr>
								<td colspan="3"></td>
								<tr><td><input type="email" name="email" placeholder="Your Email"><?php echo $emailerr;?></td></tr>
								<tr><td><input type="number" name="number" placeholder="Your Number"><?php echo $numbererr ?></td></tr>
								<tr><td><input type="password" name="password" placeholder="Your Password"><?php echo $passworderr; ?></td></tr>
								
								<tr><td><input type="password" name="cpass" placeholder="Your Confirm Password"><?php echo $cpasserr; ?></td></tr>
								<tr>
									<tr>
									<td  style="text-align: center;"><?php echo $notmatch; ?></td>
								</tr>
								<td colspan="3">
									<input type="checkbox" name="he">  I will Agree With Your Terms And Condition.
								</td>
								</tr>
								<tr><td><input type="submit" value="Sing-Up" name="submit"></td></tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>