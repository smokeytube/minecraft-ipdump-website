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

	<meta name="title" content="Minecraft Server IPs">
	<meta name="description" content="">
	<meta name="theme-color" content="#526935">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Open Graph -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://wedoaliltrollin.com/">
	<meta property="og:title" content="Minecraft Server IPs">
	<meta property="og:description" content="">
	<meta property="og:image" content="https://wedoaliltrollin.com/images/iplists.png">
	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://wedoaliltrollin.com/">
	<meta property="twitter:title" content="Minecraft Server IPs">
	<meta property="twitter:description" content="">
	<meta property="twitter:image" content="https://wedoaliltrollin.com/images/iplists.png">


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


			<?php
			$files1 = scandir('ips/');
			$filesarr = array();

			foreach ($files1 as &$dirs) {
				if ($dirs == "." or $dirs == "..") {
				} 
				else {
					array_push($filesarr, $dirs);
				}
			}


			foreach ($filesarr as &$thefiledir) {
				echo "<div class='col-md-3 col-sm-6'>";
				echo "<div class='features-div'>";
				echo "<h4>$thefiledir.0.0.0 - $thefiledir.255.255.255</h4>";	
				foreach (new DirectoryIterator("ips/$thefiledir") as $fileInfo) {
					if ($fileInfo->isDot()) {
						continue;
					}
					$ipfile = $fileInfo->getFilename();
					echo "<a href='ips/$thefiledir/$ipfile'><button type='button' class='ip-button'>$ipfile</button></a>" . "<br>\n";
					echo "<div style='padding: 2px;'></div>";
				}
				echo "</div>";
				echo "</div>";
				
			}

			?>


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