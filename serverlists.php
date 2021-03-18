<!DOCTYPE html>

<!--
	Awesome Responsive Template
	templatestock.co
-->
<html>

<head>
	<title>IP Lists</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- Goggle Font -->
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">

	<!-- Font Css -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Animation Css -->
	<link rel="stylesheet" href="css/animate.css">


</head>

<body>


	<div class="container" id="features">
		<div class="row">
			<div class="col-md-12">
				<div class="main_heading">
					<h1>IP Lists</h1>
					<div class="text-center"><span class="underline"></span></div>
				</div>
			</div><!-- End col-md-12 -->
		</div><!-- End row -->

		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="features-div">
					<h4>51.0.0.0 - 51.255.255.255</h4>
					<?php
					foreach (new DirectoryIterator("ips/51") as $fileInfo) {
						if ($fileInfo->isDot()) {
							continue;
						}
						$ipfile = $fileInfo->getFilename();
						echo "<a href='ips/51/$ipfile'><button type='button' class='ip-button'>$ipfile</button></a>" . "<br>\n";
						echo "<div style='padding: 2px;'></div>";
					}
					?>
				</div>
			</div><!-- End col-md-3-->
			<div class="col-md-3 col-sm-6">
				<div class="features-div">
					<h4>54.0.0.0 - 54.255.255.255</h4>
					<?php
					foreach (new DirectoryIterator("ips/54") as $fileInfo) {
						if ($fileInfo->isDot()) {
							continue;
						}
						$ipfile = $fileInfo->getFilename();
						echo "<a href='ips/54/$ipfile'><button type='button' class='ip-button'>$ipfile</button></a>" . "<br>\n";
						echo "<div style='padding: 2px;'></div>";
					}
					?>
				</div>
			</div><!-- End col-md-3-->
			<div class="col-md-3 col-sm-6">
				<div class="features-div">
					<h4>147.0.0.0 - 147.255.255.255</h4>
					<?php
					foreach (new DirectoryIterator("ips/147") as $fileInfo) {
						if ($fileInfo->isDot()) {
							continue;
						}
						$ipfile = $fileInfo->getFilename();
						echo "<a href='ips/147/$ipfile'><button type='button' class='ip-button'>$ipfile</button></a>" . "<br>\n";
						echo "<div style='padding: 2px;'></div>";
					}
					?>
				</div>
			</div><!-- End col-md-3-->
			<div class="col-md-3 col-sm-6">
				<div class="features-div">
					<h4>173.0.0.0 - 173.255.255.255</h4>
					<?php
					foreach (new DirectoryIterator("ips/173") as $fileInfo) {
						if ($fileInfo->isDot()) {
							continue;
						}
						$ipfile = $fileInfo->getFilename();
						echo "<a href='ips/173/$ipfile'><button type='button' class='ip-button'>$ipfile</button></a>" . "<br>\n";
						echo "<div style='padding: 2px;'></div>";
					}
					?>
				</div>
			</div><!-- End col-md-3-->
			<div style='text-align: center;'>
			<div style="padding: 31%;"></div>
			<p>New IPs will be added daily. Please be patient.</p>
			<i>Created Thursday, March 17 2021 | </i>
			<i>Created by Zach D.</i>
			<p>
			<h5>Contact me on discord at ZachD#0132 for any questions comments or concerns</h5>
			</p>
			</div>
		</div><!-- End row -->
	</div><!-- End Container -->






	<script type="text/javascript" src="js/jquery-main.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>

	<script>
		new WOW().init();
	</script>

</body>

</html>