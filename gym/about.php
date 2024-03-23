<?php
session_start();
error_reporting(0);
include 'include/config.php';
$uid = $_SESSION['uid'];

if (isset ($_POST['submit'])) {
	$pid = $_POST['pid'];


	$sql = "INSERT INTO tblbooking (package_id,userid) Values(:pid,:uid)";

	$query = $dbh->prepare($sql);
	$query->bindParam(':pid', $pid, PDO::PARAM_STR);
	$query->bindParam(':uid', $uid, PDO::PARAM_STR);
	$query->execute();
	echo "<script>alert('Package has been booked.');</script>";
	echo "<script>window.location.href='booking-history.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Gym Management System</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.min.css" />
	<link rel="stylesheet" href="css/nice-select.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/slicknav.min.css" />
	<link rel="stylesheet" href="css/animate.css" />

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css" />

</head>

<body>
	<!-- Page Preloder -->


	<!-- Header Section -->
	<?php include 'include/header.php'; ?>
	<!-- Header Section end -->




	<!-- Page top Section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>About GYM Management System</h2>
				</div>
			</div>
		</div>
	</section>



	<!-- Pricing Section -->
	<section class="pricing-section spad">
		<div class="container">
			<div class="section-title text-center">
				<img src="img/icons/logo-icon.png" alt="">
				<h2>About Us</h2>
			</div>
			<div class="row">
				<section class="facilities-section spad">
					<div class="container">
						<div class="section-title text-center">
							<h2>Our Facilities</h2>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="facility-item">
									<img src="cardioarea.jpg" alt="Cardio">

									<h3>Cardio Area</h3>
									<p>Our gym features a state-of-the-art cardio area equipped with treadmills,
										ellipticals, and stationary bikes.</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="facility-item">
									<img src="strength.jpg" alt="Strength Training">
									<h3>Strength Training</h3>
									<p>We have a wide range of strength training equipment including free weights,
										machines, and resistance bands.</p>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<img src="selfdefence.jpg" alt="Self defence">
								<h3>Self Defence</h3>
								<p>he act of defending yourself, your property, etc</p>
							</div>
						</div>

						<!-- Add more facility items here -->
					</div>
			</div>
	</section>

	<!-- Trainers Section -->
	<section class="trainers-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Our Trainers</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="trainer-item">
						<img src="image1.jpg" alt="Trainer">
						<h4>John Doe</h4>
						<span>Fitness Trainer</span>
						<p>John is a certified fitness trainer with over 10 years of experience in helping
							clients achieve their fitness goals.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="trainer-item">
						<img src="image2.jpg" alt="Trainer">
						<h4>Jane Smith</h4>
						<span>Yoga Instructor</span>
						<p>Jane specializes in yoga and meditation techniques to promote physical and mental
							well-being.</p>
					</div>
				</div>
				<!-- Add more trainer items here -->
			</div>
		</div>
	</section>

	<!-- Equipment Section -->
	<section class="equipment-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Our Equipment</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="equipment-item">
						<img src="treadmill.jpg" alt="Equipment">
						<h4>Treadmill And Cycles</h4>
						<p>Our treadmills and cycles feature various speed and incline settings to suit
							users of all
							fitness levels.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="equipment-item">
						<img src="dumbells.jpg" alt="Equipment">
						<h4>Dumbells</h4>
						<p>All Kind of Weights</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="equipment-item">
						<img src="machines.jpg" alt="Equipment">
						<h4>Imported machines</h4>
						<p>Imported machine with a modular features and amazing build quality</p>
					</div>
				</div>
				<!-- Add more equipment items here -->
			</div>
		</div>
	</section>

	<div class="col-lg-12 col-sm-6">
		<p>Hola amigos! We are a bunch of curious and intellectual professionals who out of boredom from the
			monotonous routine, established Brand Beavers in Mumbai to emerge as problem solvers. Our team
			of entrepreneurs, thinkers, strategists, designers, and technologists will help you to emerge as
			an effective and disruptive brand all over the globe. Our brainstorming and amicable individuals
			go beyond their comfort zone to satisfy the customer’s requirements.</p>
	</div>
	</div>
	</div>
	</section>


	<!-- Footer Section -->
	<?php include 'include/footer.php'; ?>
	<!-- Footer Section end -->

	<div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

	<!-- Search model end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>