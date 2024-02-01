<?php

/**
 * The header for our theme 
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<title> </title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fonts.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
	<link rel="stylesheet" type="text/css"
		href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-new.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.timepicker.min.css" />
	<style>
		/* .tab-menu ul { margin:0; padding:0; list-style:none; display: -webkit-box; display: -webkit-flex; display: -ms-flexbox; display: flex; }
.tab-menu ul li { -ms-flex-preferred-size: 0; flex-basis: 0; -ms-flex-positive: 1; flex-grow: 1; max-width: 100%; text-align:center; }
.tab-menu ul li a { color: #fff; text-transform: uppercase; letter-spacing: 0.44px; font-family: 'Oswald'; font-weight:bold; display:inline-block; padding:18px 26px; display:block; text-decoration:none; transition:0.5s all; background: #d0d062; border: 2px solid #d0d062; border-bottom: 0; }
.tab-menu ul li a:hover { background:#d0d062; color:#fff; text-decoration:none; }
.tab-menu ul li a.active { background:#f4fcce; color:#000; text-decoration:none; }
.tab-box { display:none; }
 
.tab-main-box { background:#f4fcce; padding: 10px 30px; border:2px solid #d0d062; margin-top:-2px } */
	</style>
</head>

<body>
	<?php
	$header_menus = wp_get_menu_array('header-menu');
	$header_logo = get_field('header_logo', 'option');

	?>
	<div class="main-wrapper">

		<header class="navbar">
			<nav class=" navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="<?php echo get_site_url() ?>/home"><img
							src="<?php echo $header_logo; ?>" alt="Dr. Hafeez Logo"></a>
					<div class="header_right_prt">
						<div class="collapse navbar-collapse" id="navbarMenu">
							<ul class="navbar-nav mb-0">
								<?php foreach ($header_menus as $item): ?>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo $item['url'] ?>">
											<?php echo $item['title']; ?>
										</a>
									</li>
								<?php endforeach; ?>

							</ul>
						</div>
					</div>
					<ul class="rightNav">
						<li class="book_appointment">
							<a href="javascript:void();" class="theme-btn-primary">Book an appointment</a>
						</li>
						<li class="round-btn rightNav-toggle" id="show-search-box">
							<a href="javascript:void();">
								<svg class="show-search-box" xmlns="http://www.w3.org/2000/svg" width="30.621"
									height="30.621" viewBox="0 0 30.621 30.621">
									<g id="Icon_feather-search" data-name="Icon feather-search"
										transform="translate(-3 -3)">
										<path id="Path_4" data-name="Path 4"
											d="M28.5,16.5a12,12,0,1,1-12-12A12,12,0,0,1,28.5,16.5Z" fill="none"
											stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
											stroke-width="3" />
										<path id="Path_5" data-name="Path 5" d="M31.5,31.5l-6.525-6.525" fill="none"
											stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
											stroke-width="3" />
									</g>
								</svg>

								<svg class="hidden-search-box" xmlns="http://www.w3.org/2000/svg" width="29.561"
									height="29.561" viewBox="0 0 24 24" fill="none" stroke="currentColor"
									stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
									class="feather feather-x">
									<line x1="18" y1="6" x2="6" y2="18"></line>
									<line x1="6" y1="6" x2="18" y2="18"></line>
								</svg>
							</a>
						</li>
					</ul>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
						aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
						<div class="animated-icon2">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
					</button>
				</div>
				<div class="header_right_prt mobile-prt">
					<div class="collapse navbar-collapse" id="navbarMenu">
						<ul class="navbar-nav mb-0">
							<?php foreach ($header_menus as $item): ?>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo $item['url'] ?>">
										<?php echo $item['title']; ?>
									</a>
								</li>
							<?php endforeach; ?>

						</ul>
					</div>
				</div>
			</nav>
			<form id="hidden-search-box" class="navbar-form hidden-search-box" role="search" style="display: none;">
				<div class="input-group add-on">
					<input class="form-control addon-text-box" placeholder="" name="s" type="text">
					<button type="submit" class="input-group-btn addon-btn">
						Search
					</button>
				</div>
			</form>
		</header>