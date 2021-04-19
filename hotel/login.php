
<?php 

define('TITLE', 'login');
define('PAGE', 'login');

include "db/db.php";
session_start();

$msg="";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
     $sql = "select * from user where email='$email' && password = '$password'";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
   if ($num==1) {
   		$_SESSION['email']=$email;
      echo "<script> location.href='index.php'; </script>";
   }else
   {
      $msg = "<h3 style='color:white;'>Email or password wrong</h3>";  
   }



}




?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php echo TITLE ?></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
		<!-- Font awesome -->
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/login1.css">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Wendy+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
	</head>
	<body>
		<section class="con">
			<div class="overlay">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-md-8 p-3 mt-5">
							<h2 class="text-center display-3">Login</h2>
						</div>
					</div>
					<div class="row h-50 justify-content-center">
						<div class="col-md-8 main-con p-3 justify-content-center">
							<form class="form-horizontal" method="post">
								<div class="form-group row justify-content-center">
								<div class="col-md-10 mb-5">
									<div class="wrapper">
										<input type="text"  id="username" class="in" placeholder="Email" name="email">
										 <span class="underline"></span>
										</div>

								</div>
								</div>
								<div class="form-group row">
								<div class="col-md-10 offset-md-1 mb-5">
									<div class="wrapper">
									<input type="password" id="password" class="in" placeholder="Password" name="password">
										<span class="underline"></span>
										 <span style="text-align: center;"><?php echo $msg;?></span>
									</div>

								</div>
								</div>

								<div class="form-group row justify-content-center">
									<div class="col-md-6">
										<button type ="submit" name="submit" class="btn btn-primary btn-block" onclick="validate()">Login</button>

										<br>
										
										<p> <font color=white><font size=3px;>No Username and Password? Register Here For Free!</p>										
										<button type="submit" formaction="registration.php" class="btn btn-primary btn-block">Register Now</button>
										
									</br>

									</div>

								</div>

							</form>


							<p class="text-center t">Brought To You By: code-projects</p>
						</div>
					</div>
				</div>
		</section>
		
	</body>
	<!-- Scripts in case you need them :P -->
	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
	<!-- Tether -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<!-- Bootstrap js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
	<script src="js/login.js"> </script>
</body>
</html>