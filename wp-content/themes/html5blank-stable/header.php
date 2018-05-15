<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<!-- header -->
		<header class="header clear" role="banner">

			<div class="section-toggle d-inline-block" data-class_toggle="footer">
				<i class="fa fa-list-ul"></i>
			</div>

			<!-- logo -->
			<div class="logo d-inline-block">
				<a href="<?php echo home_url(); ?>">
					PHOTOMANIAX
				</a>
			</div>
			<!-- /logo -->

			<div class="section-toggle text-right float-right" data-class_toggle="box_search">
				<i class="fa fa-search"></i>
			</div>

			<div class="picto-nav-mobile section-toggle text-right float-right" data-class_toggle="nav">
				<i class="fa fa-bars"></i>
			</div>

			<!-- nav -->
			<nav class="nav" role="navigation">
				<?php html5blank_nav(); ?>
			</nav>
			<!-- /nav -->


		</header>
		<!-- /header -->

	<div class="nav-left">
		<div class="wrapper-rotate">
			<div class="content-rotate section-toggle" data-class_toggle="box_about">
				<span class="element">Le projet
				</span>
				<span class="close-section closest">
					<i class="fa fa-close"></i>
					close
				</span>
			</div>
			<div class="content-rotate section-toggle " data-class_toggle="box_slide_cat">
				<span class="element">Catégorie

				</span>
				<span class="close-section closest">
					<i class="fa fa-close"></i>
					close
				</span>
			</div>
		</div>
	</div>
