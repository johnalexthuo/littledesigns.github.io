<?php
session_start();
//config
if (file_exists('config.php')) {
	require('config.php');
}
require_once(DIR_SYSTEM.'startup.php');
require_once(DIR_SYSTEM.'functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title><?php echo $page_title; ?></title>
<meta http-equiv="description" name="description" content="<?php echo $page_description; ?>" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link href="assets/style/dist/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="assets/style/dist/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/style/avant.css">
<link rel="stylesheet" href="assets/style/rotating-card.css">
<link rel="stylesheet" href="assets/style/inputs.css">
<link rel="stylesheet" href="assets/style/wizard.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Voces|Reem+Kufi|Cabin:400,700" rel="stylesheet">

<link rel="apple-touch-icon" sizes="57x57" href="assets/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">


<meta name="msapplication-config" content="IEconfig.xml" />
<meta name="theme-color" content="transparent">
<script src="assets/scripts/jquery-3.1.1.min.js"></script>

</head>

<body data-spy="scroll" data-target=".navbar">

<!-- Navigation-->
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
	    <div class="navbar-header">
		    <button type="button" class="navbar-toggle btn"
				    data-toggle="collapse" data-target="#myNavbar">
			    <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
			</button>
			<?php 
				if(is_page('home')) 
					echo '<a class="navbar-brand page-scroll" href="#">';
				else 
					echo '<a class="navbar-brand page-scroll" href="index.php">';
			?>
				<span class="name">littledesigns</span>
			</a><br>
		</div>
		<div class="collapse navbar-collapse navbar-main-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li class="active">
					<a href="#top" class="page-scroll"> Home </a>
				</li>
				<li>
					<a href="#features" class="page-scroll"> Why Us </a>
				</li>
				<li>
					<a href="#services" class="page-scroll"> services </a>
				</li>
				<li>
					<a href="#contactus" class="page-scroll">Contact</a>
				</li>
				<li>
					<a href="cs/01-comming-soon.html">about us</a>
				</li>
			</ul>
		</div>
	</div>
</nav>