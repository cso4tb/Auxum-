<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Log In</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		  <link rel="stylesheet" href="assets/css/main.css" />		
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="index.html" id="logo"></a></h1>
						<img src="logotp3.png" width=485 height=122 > </img>


					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="about-us.html">About Us</a></li>
								<li><a href="sign-up.html">Sign Up</a></li>
								<li class="current"><a href="login.html"> Log In </a></li>
							</ul>
						</nav>

				</div>

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->

								<article>
									<header>
										<h2>Log In</h2>
										<?php
											$servername = "localhost";
											$username = "root";
											$password = "";
											$dbName = "Auxum";
										    $conn = new mysqli($servername, $username, $password, $dbName);

										    $username = $_POST['username'];
										    $sql = "SELECT * from users WHERE name='".$username."'";

										    $result = $conn->query($sql);    
											if ($result->num_rows == 0) {    	
											    echo "Error: No User with that name exists.";
											}
											else{	
												$row = $result->fetch_assoc();
												if($row['password'] == $_POST['password']){		
										 			session_start();
													$_SESSION['logged in'] = true;													
												}				
												else{
													echo "The password entered is incorrect.";
												}
											}		
										?>
										<?php if(isset($_SESSION['logged in']) && $_SESSION['logged in'] == 'true'): ?>
											<script>
												window.location.replace("member_page.php");
											</script>
									 	<?php endif ?>
										<p> </p>
									</header>											
								</article>

						</div>
					</div>
				</section>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							
						
						</div>
					</div>

					<!-- Copyright -->
						<div class="copyright">
							<ul class="menu">
								<li>&copy; Auxum. All rights reserved</li>
							</ul>
						</div>

				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>