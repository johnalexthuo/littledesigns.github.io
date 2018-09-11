<?php
session_start();
require('config.php');
require('common/functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title><?php echo $page_title; ?></title>
<meta http-equiv="description" name="description" content="<?php echo $page_description; ?>" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link href="style/dist/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="style/dist/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="style/avant.css">
<link href="https://fonts.googleapis.com/css?family=Ek+Mukta:400,700|Voces|Reem+Kufi|Cabin:400,700" rel="stylesheet">
<link rel="apple-touch-icon-precomposed" sizes="180x180" href="common/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="common/favicons/android-icon-192x192.png">
<meta name="theme-color" content="#333333">
<link rel="icon" type="image/png" sizes="32x32" href="common/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="common/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="common/favicons/favicon-16x16.png">
<link rel="manifest" href="common/favicons/manifest.json">
<meta name="msapplication-TileColor" content="transparent">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="msapplication-config" content="IEconfig.xml" />
<meta name="theme-color" content="transparent">
<script src="scripts/jquery-3.1.1.min.js"></script>
</head>

<body id="#top">

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
					echo '<a class="navbar-brand page-scroll" href="#top">';
				else 
					echo '<a class="navbar-brand page-scroll" href="index.php">';
			?>
				<span class="name">AvantContent</span>
			</a><br>
		</div>
		<div class="collapse navbar-collapse navbar-main-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li class="li-item <?php if(is_page('home')) echo 'current'; ?>">
					<a href="index.php"> Home </a>
				</li>
				<li class="li-item <?php if(is_page('blog')) echo 'current'; ?>">
					<a href="#"> Blog </a>
				</li>
				<li class="li-item">
					<a href="#talk" class="page-scroll"> Contact Us </a>
				</li>
				<li class="li-item <?php if(is_page('login')) echo'current';?>">
					<?php 
						if (is_logged_in())
							echo'<a href="user.php"> Account';
						else echo'<a href="signin.php"> Login';
					?> </a>
				</li>
				<li class="li-item nav-special <?php if(is_page('signup')) echo 'current'; ?>">
					<?php 
						if (is_logged_in())
							echo'<a href="login/logout.php"> Logout';
						else echo'<a href="signup.php"> Register';
					?> </a>
				</li>
			</ul>
		</div>
	</div>
</nav>