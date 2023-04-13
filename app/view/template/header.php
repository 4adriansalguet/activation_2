<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500&family=Barlow+Semi+Condensed:wght@500&family=Poppins:wght@300;500&family=Teko:wght@300&display=swap" rel="stylesheet">
	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" />
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<?php $this->helpers->analytics(); ?>

	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script src="./public/scripts/responsive-menu.js"></script>
</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
	<?php $this->checkSuspensionHeader(); ?>


	<!-- HAMBURGER MENU -->
	<!-- <button class="hamburger">
					<div class="bar"></div>
				</button> -->

	<!-- <li <?php $this->helpers->isActiveMenu("home"); ?> class="btn"><a  href="home#content">HOME</a></li>
	<!-- <li <?php $this->helpers->isActiveMenu("about"); ?>><a href="about#content">ABOUT US</a></li> -->
	
	<header>
		<div id="header_container">
				<nav>
					<ul class="menu_flex">
						<li <?php $this->helpers->isActiveMenu("home"); ?> class="active-menu"><a href="<?php echo URL ?>">HOME</a></li>
						<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="<?php echo URL ?>about#content">ABOUT US</a></li>
						<li <?php $this->helpers->isActiveMenu("services"); ?>><a href="<?php echo URL ?>services#content">SERVICES</a></li>
						<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="<?php echo URL ?>gallery#content">GALLERY</a></li>
						<li <?php $this->helpers->isActiveMenu("reviews"); ?>><a href="<?php echo URL ?>reviews#content">REVIEWS</a></li>
						<li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="<?php echo URL ?>contact#content">CONTACT US</a></li>
						<a class="soc_med">fgil</a>
						<a class="num" href="tel:(920) 699-3151">CONTACT US <span>(920) 699-3151</span></a>
					</ul>
				</nav>

			</div>
			</header>
			<!-- Hero -->
		<?php if ($view == "home") : ?>
			<div id="home_container">
				<div class="text_container">
				<div class="logo_hamburger">
					<img src="./public/images/common/main_logo.png" alt="">
				</div>
				<h2>Major Home Appliance
					Repair Company
				</h2>
				<p>serving southern Wisconsin</p>
				<a class="btn" href="<?php echo URL ?>about">GET A QUOTE</a>
				</div>
			</div>
		<?php endif; ?>
	