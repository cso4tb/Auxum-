<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Auxum Sign Up</title>
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
								<li class="current"><a href="sign-up.html">Sign Up</a></li>
							</ul>
						</nav>

				</div>

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->

							
							<h3> Sign Up Confirmation </h3>


							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbName = "Auxum";

								$conn = new mysqli($servername, $username, $password, $dbName);
								if ($conn->connect_error) {
								    die("Connection failed: " . $conn->connect_error);
								} 

								$username = $_POST['name'];
								$sql = "SELECT * from Users where name='".$username."'";									
								$result = $conn->query($sql);															
								if($result->num_rows == 0){																		
									$email = $_POST['email'];
									$address = $_POST['address'];
									$city = $_POST['city'];
									$state = $_POST['state'];
									$zip = $_POST['zipcode'];
									$date = date("Y-m-d");

									$sql = "INSERT INTO Users (name, email, address, city, state, zip, joined)
									VALUES ('$username', '$email', '$address', '$city', '$state', '$zip', '$date')";

									if ($conn->query($sql) === TRUE) {
									    echo "New record created successfully<br>";
									} else {
									    echo "Error: " . $sql . "<br>" . $conn->error;
									}

									$conn->close();								

									require 'PHPMailer\PHPMailerAutoload.php';

									$mail = new PHPMailer;

									$mail->isSMTP();                                      // Set mailer to use SMTP
									$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
									$mail->SMTPAuth = true;                               // Enable SMTP authentication
									$mail->Username = 'auxuminfo@gmail.com';                 // SMTP username
									$mail->Password = 'auxuminfo1';                           // SMTP password
									$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
									$mail->Port = 465;                                    // TCP port to connect to

									$mail->setFrom('auxuminfo@gmail.com', 'Auxum Info');
									$mail->addAddress($email, $username);     // Add a recipient
									$mail->isHTML(true); 	

									$mail->Subject = 'Welcome to Auxum!';
									$mail->Body    = 'Hi '.$username.','.'<br><br>Thanks for signing up with Auxum! You can now start enhancing your education with Auxum\'s suite of advanced learning tools.';

									if(!$mail->send()) {
									    echo 'Message could not be sent.';
									    echo 'Mailer Error: ' . $mail->ErrorInfo;
									} else {
									    echo 'Message has been sent';
									}
								}
								else{
									echo "Sorry, that username is already taken.";
								}

							?> 

							<?php
							    require_once('Stripe/init.php');
							   
								
								// // Set your secret key: remember to change this to your live secret key in production
								// // See your keys here https://dashboard.stripe.com/account/apikeys
								// \Stripe\Stripe::setApiKey("sk_test_qs2iFGrvEotxoRFNAaCfSklu");

								// // Get the credit card details submitted by the form
								// $token = $_POST['stripeToken'];

								// // Create a Customer
								// $customer = \Stripe\Customer::create(array(
								//   "source" => $token,
								//   "description" => "Example customer")
								// );

								// // Charge the Customer instead of the card
								// Stripe\Charge::create(array(
								//   "amount" => 1000, // amount in cents, again
								//   "currency" => "usd",
								//   "customer" => $customer->id)
								// );

								// // YOUR CODE: Save the customer ID and other info in a database for later!

								// // YOUR CODE: When it's time to charge the customer again, retrieve the customer ID!

								// \Stripe\lib\Charge::create(array(
								//   "amount"   => 1500, // $15.00 this time
								//   "currency" => "usd",
								//   "customer" => $customerId // Previously stored, then retrieved
								//   ));


								// Set your secret key: remember to change this to your live secret key in production
								// See your keys here https://dashboard.stripe.com/account/apikeys
								// Set your secret key: remember to change this to your live secret key in production
								// See your keys here https://dashboard.stripe.com/account/apikeys
								\Stripe\Stripe::setApiKey("sk_test_qs2iFGrvEotxoRFNAaCfSklu");

								// Get the credit card details submitted by the form
								$token = $_POST['stripeToken'];

								// Create a Customer
								$customer = \Stripe\Customer::create(array(
								  "source" => $token,
								  "description" => "Example customer")
								);

								// Charge the Customer instead of the card
								\Stripe\Charge::create(array(
								  "amount" => 1000, // amount in cents, again
								  "currency" => "usd",
								  "customer" => $customer->id)
								);

								// YOUR CODE: Save the customer ID and other info in a database for later!

								// YOUR CODE: When it's time to charge the customer again, retrieve the customer ID!

								\Stripe\Charge::create(array(
								  "amount"   => 1500, // $15.00 this time
								  "currency" => "usd",
								  "customer" => $customer->id // Previously stored, then retrieved
								  ));
							?>

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