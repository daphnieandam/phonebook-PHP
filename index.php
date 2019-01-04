<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>phonebook</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body {
			background-image: url(img/back.jpg);
			color: white;
			width: 100%;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-success bg-dark">
		<img src="img/call.png" width="30" height="30" alt="img/call.png"/>&nbsp;&nbsp;&nbsp;
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
	</nav>
	<div class="container"><br/><br/><br/>
		<div class="header">
			<h2>phonebook</h2>
		</div><br/>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($db, "SELECT * FROM login");
	?>
	
	<?php	
	}
	?>
	
	<main class="bd-masthead" id="content" role="main">
  				<div class="container">
    					<div class="row align-items-center">
      						<div class="col-2 mx-auto col-md-4 text-md-left order-md-4">
        						<img src="img/iphone.png" alt="img/iphone.png" width="400" height="300"/>
      						</div>
							<div class="col-md-8 order-md-2 text-center text-md-left pr-md-2">
								<center>
								<p class="p"><font size="5">
									Phonebook is a book that lists the names, addresses, emails, <br/>and phone numbers of the the people and businesses in a certain area.</font></p>
								<br/><br/><br/>
									<a class="btn btn-sm btn-outline-success" href="register.php" role="button">register</a>&nbsp;&nbsp;&nbsp;
									<a class="btn btn-sm btn-outline-info" href="login.php" role="button">log in</a>
									</center>
							</div>
    					</div>
</div><br/><br/>
	<div class="footer text-center">
		<p><font size="1">&copy; daphnieandam</font></p>
	</div>
</body>
</html>
