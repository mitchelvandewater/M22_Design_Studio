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
	
	<!-- portfolio -->
	<?php require_once("portfolio.php"); ?>

	<!-- Contact -->
	<?php require_once("contact.php"); ?>

	<script src="js/jquery.js"></script>
	<script src="js/js.js"></script>
</body>
</html>
