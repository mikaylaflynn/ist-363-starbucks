<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
</head>
<body>
	<header>
		<div class="overlay" id="mobileMenu">
			<button class="btn-ui" id="closeBtn">Close</button>
				<img
					src="<?php bloginfo('template_directory'); ?>/img/close.svg"
					alt="Close button"
				/>
			<nav class="nav-mobile">
				<ul>
					<li>
						<a href="/">Home</a>
					</li>
					<li>
						<a href="/menu">Menu</a>
					</li>
					<li>
						<a href="/locations">Locations</a>
					</li>
					<li>
						<a href="/employees">Employees</a>
					</li>
				</ul>
			</nav>
		</div><!-- /.mobile menu -->
		<div class="container">
			<div class="row align-items-center justify-content-space-between">
				<div class="row">
					<img 
						src="<?php bloginfo('template_directory'); ?>/img/starbucks-logo.svg" 
						alt="Starbucks logo" 
						class="logo"
					/>
				<nav class="nav-primary">
					<ul>
						<li>
							<a href="/">Home</a>
						</li>
						<li>
							<a href="/menu">Menu</a>
						</li>
						<li>
							<a href="/locations">Locations</a>
						</li>
						<li>
							<a href="/employees">Employees</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="header-right">
				<a href="" class="btn btn--secondary">Sign In</a>
				<a href="" class="btn btn--primary">Join Now</a>
			</div>
			<button class="btn-ui" id="menuBtn">
				<img 
					src="<?php bloginfo('template_directory'); ?>/img/menu.svg" 
					alt="Menu icon" 
				/>
			</button>
		</div><!-- /row -->
	</div><!-- container -->
</header>
<main>
