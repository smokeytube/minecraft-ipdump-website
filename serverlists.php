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

	<!-- Serverlists Css -->
	<link rel="stylesheet" href="css/serverlists.css">

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

<body style='background-image: url("/images/dirttrans.png");'>


	<div class="container" id="features">
		<div class="row">
			<div class="col-md-12">
				<div class="main_heading">
					<h1 style='color: #080808;'>IP Lists</h1>
					<div class="text-center"><span class="underline"></span></div>
				</div>
			</div><!-- End col-md-12 -->
		</div><!-- End row -->

		


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
				
				echo "<h4 style='color: #080808;'>$thefiledir.0.0.0 - $thefiledir.255.255.255</h4>";	
				foreach (new DirectoryIterator("ips/$thefiledir") as $fileInfo) {
					if ($fileInfo->isDot()) {
						continue;
					}
					$ipfile = $fileInfo->getFilename();

					$filenms = explode("-", $ipfile);
					$firstfilenm = explode(".", $filenms[0]);
					
					$tempstr = explode(".tx", $filenms[1]);
					$secondfilenm = explode(".", $tempstr[0]);
					
					$rgbcolor = "";
					$rgbcolor1 = $secondfilenm[3] - $firstfilenm[3];
					$rgbcolor2 = $secondfilenm[2] - $firstfilenm[2];
					$rgbcolor3 = $secondfilenm[1] - $firstfilenm[1];
					
					$rgbcolorint = $rgbcolor1 + $rgbcolor2 + $rgbcolor3;
					
					if ($rgbcolorint > 0 and $rgbcolorint <= 255) {
						$rgbcolor = $rgbcolor1 . ", " . 255-$rgbcolor3 .  ", " . $rgbcolor2;
					}
					
					else if ($rgbcolorint > 255 and $rgbcolorint <= 510) {
						$rgbcolor = $rgbcolor1 . ", " . 255-$rgbcolor2 . ", " . $rgbcolor3;
					}
					
					else if ($rgbcolorint > 510) {
						$rgbcolor = $rgbcolor1 . ", " . $rgbcolor2 . ", " . $rgbcolor3;
					}

					echo "<a href='ips/$thefiledir/$ipfile'><button style='
					
					width: 200px;
					height: 50px;
					background-color: rgb($rgbcolor);
					color: #000000;
					text-align: center;
					border-radius: 5px;

					'>$ipfile</button></a>" . "<br>\n";
					
					
					echo "<div style='padding: 2px;'></div>";
				}
				echo "</div>";
				
				
			}

			?>


	<script type="text/javascript" src="js/jquery-main.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>

	<script>
		new WOW().init();
	</script>

</body>

</html>