<!DOCTYPE html>
<html lang="en" style="margin-top: 0px !important;">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bundle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136441548-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-136441548-1');
	</script>
	<!-- /Google Analytics -->

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
	<div class="wrapper">
		<header class="header decoration-bottom">
	<div class="shell">
		<div class="header__inner">
			<a href="/" class="logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="" width="297" height="153">
			</a>

			<nav class="nav">
				<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>


				<!--<div class="search">
					<a href="#">
						<i class="ico-search"></i>
					</a>
				</div>  /.search -->

				<div class="nav-trigger">
					<span></span>
					
					<span></span>
					
					<span></span>
				</div><!-- /.nav-trigger -->
			</nav><!-- /.nav -->

		</div><!-- /.header__inner -->
	</div><!-- /.shell -->
</header><!-- /.header -->