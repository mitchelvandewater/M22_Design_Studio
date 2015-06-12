<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Odd Duck</title>
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

	<link rel="shortcut icon" href="images/icon.ico">
</head>
<body  onload="LoadGmaps()" onunload="GUnload()">

	<?php require_once("menu.php"); ?>

	<!-- Home -->
	<?php require_once("home.php"); ?>
	
	<div class="bottomwrapper first">
		<div style="background-color:#393F3D;"class="kleurbox"></div>
		<div style="background-color:#4C2C32;"class="kleurbox"></div>
		<div style="background-color:#A45646;"class="kleurbox"></div>
		<div style="background-color:#D39250;"class="kleurbox"></div>
		<div style="background-color:#E1DDD4;"class="kleurbox"></div>
	</div>

	<!-- About -->
	<?php require_once("about.php"); ?>
	
	<div class="bottomwrapper">
		<div style="background-color:#393F3D;"class="kleurbox"></div>
		<div style="background-color:#4C2C32;"class="kleurbox"></div>
		<div style="background-color:#A45646;"class="kleurbox"></div>
		<div style="background-color:#D39250;"class="kleurbox"></div>
		<div style="background-color:#E1DDD4;"class="kleurbox"></div>
	</div>

	<!-- Werknemers -->
	<?php require_once("werknemers.php"); ?>
	
	<div class="bottomwrapper">
		<div style="background-color:#393F3D;"class="kleurbox"></div>
		<div style="background-color:#4C2C32;"class="kleurbox"></div>
		<div style="background-color:#A45646;"class="kleurbox"></div>
		<div style="background-color:#D39250;"class="kleurbox"></div>
		<div style="background-color:#E1DDD4;"class="kleurbox"></div>
	</div>

	<!-- Portfolio -->
	<?php require_once("portfolio.php"); ?>
	
	<div class="bottomwrapper">
		<div style="background-color:#393F3D;"class="kleurbox"></div>
		<div style="background-color:#4C2C32;"class="kleurbox"></div>
		<div style="background-color:#A45646;"class="kleurbox"></div>
		<div style="background-color:#D39250;"class="kleurbox"></div>
		<div style="background-color:#E1DDD4;"class="kleurbox"></div>
	</div>

	<!-- Contact -->
	<?php require_once("contact.php"); ?>

	<script src="js/jquery.js"></script>
	<script src="js/js.js"></script>
</body>
</html>
