<!DOCTYPE html>

<?php
session_start();
$counter_name = "counter.txt";

if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}


$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

$_SESSION['hasVisited']="no";

if(isset($_SESSION['hasVisited'])){
  $_SESSION['hasVisited']="yes";
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f);
}

$visiorstring = "You are visitor number $counterVal";
?>

<html>
<head>
	<title>Server IP dump</title>
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

	<meta name="title" content="We do a lil trollin'">
        <meta name="description" content="">
        <meta name="theme-color" content="#526935">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Open Graph -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://wedoaliltrollin.com/">
        <meta property="og:title" content="Minecraft Server IP Dump">
        <meta property="og:description" content="">
        <meta property="og:image" content="https://wedoaliltrollin.com/images/trollminecraft.png">
       <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://wedoaliltrollin.com/">
        <meta property="twitter:title" content="Minecraft Server IP Dump">
        <meta property="twitter:description" content="">
        <meta property="twitter:image" content="https://wedoaliltrollin.com/images/trollminecraft.png">

</head>
<body>
<!-- Header -->
<div class="header-div">

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header logo-div bounceInLeft wow" data-wow-duration="2s">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse top-right-menu-ul bounceInRight wow" id="bs-example-navbar-collapse-1" data-wow-duration="4s">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="serverlists.php">IP dumps</a></li>
      </ul>
    </div><!-- End navbar-collapse -->
  </div><!-- End container -->
</nav>

<div class="container wow bounceInDown" data-wow-duration="5s">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 text-center slide-text">
			<h1>Server IP dump</h1>
			<img src="images/trollminecraft.png" alt="images/trollminecraft.png"></img>
		</div><!-- End col-md-8-->
		<div class="col-md-offset-2"></div><!-- End col-md-offset-2 -->
	</div><!-- End Row -->
</div><!-- End Contanier -->

</div><!-- End header-div -->

<!-- Feature -->

<div class="container" id="features">
	<div class="row">
		<div class="col-md-12">
			<div class="main_heading">
				<h1>What is this?</h1>
				<div  class="text-center"><span class="underline"></span></div>
			</div>
		</div><!-- End col-md-12 -->
	</div><!-- End row -->

	<div class="row" style="text-align: center; line-height: 20px;">
			<h3>
			This website stores thousands of private servers (right now it's a stub, please be patient). 
			Many of these servers. do not have a whitelist, meaning anyone can join and play on them. have
			fun trollin'!
			</h3>
		<div style="padding: 30px;"></div>
		<?php
		echo $visiorstring;
		?>
		<div class="main_heading">
		<div style="padding: 11%;"></div>
		<p>New IPs will be added soon. Please be patient.</p>
	</div><!-- End row -->
</div><!-- End Container -->


<!-- End Footer -->


<script type="text/javascript" src="js/jquery-main.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>

<script>
	new WOW().init();
</script>

</body>
</html>