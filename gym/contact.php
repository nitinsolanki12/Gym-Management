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
	<!-- Header Section -->
	<?php include 'include/header.php'; ?>
	<!-- Header Section end -->

	<!-- Page top Section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>Contact Us</h2>
				</div>
			</div>
		</div>
	</section>

	<!-- Contact Section -->
	<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-6">
					<p><strong>Email:</strong> fitfighter@gmail.com</p>
					<p><strong>Contact No:</strong> 9372599275</p>
					<p><strong>Address:</strong> IIT MARKET , POWAI,MUMBAI 400076</p>
					<section class="google-maps-section">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<section class="google-maps-section">
										<div class="container">
											<div class="row">
												<div class="col-lg-12">
													<!-- Embed Google Maps -->
													<div class="google-map">
													</div>
													<!-- "View in Maps" Link -->
													<div class="text-center mt-3">
														<a href="https://www.google.com/maps/place/IIT+Market/@19.1250157,72.9160587,17z/data=!3m1!4b1!4m6!3m5!1s0x3be7c7f3792faaed:0x157275054c6a109f!8m2!3d19.1250106!4d72.9186336!16s%2Fg%2F11bwnbltfw"
															target="_blank">View in Maps</a>
													</div>
												</div>
											</div>
										</div>
									</section>


								</div>
					</section>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-6">
					<h3>Follow Us</h3>
					<!-- Add your social media links here -->
					<ul class="social-links">
						<li><a href="https://www.facebook.com/FlyingBeast320"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href=" https://www.youtube.com/@RohitKhatriFitness"><i class="fa fa-youtube"></i></a>
						</li>
						<li><a href="https://www.instagram.com/rajat_9629/"><i class="fa fa-instagram"> </i></a></li>
						<!-- Add more social media icons as needed -->
					</ul>
				</div>
			</div>
		</div>


		<!-- Footer Section -->
		<?php include 'include/footer.php'; ?>
		<!-- Footer Section end -->

		<div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

		<!-- Javascripts & Jquery -->
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