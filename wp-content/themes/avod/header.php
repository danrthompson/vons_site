<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<!-- Favicons
	================================================== -->

		<?php if( of_get_option('favicon_default') != '' ) : ?>
		<!-- Default Favicon -->
		<link href="<?php echo of_get_option('favicon_default'); ?>" rel="icon" type="image/x-icon" />
		<?php endif; ?>

		<?php if( of_get_option('favicon_retina_ipad') != '' ) : ?>
		<!-- For third-generation iPad with high-resolution Retina display: -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo of_get_option('favicon_retina_ipad'); ?>">
		<?php endif; ?>

		<?php if( of_get_option('favicon_retina_iphone') != '' ) : ?>
		<!-- For iPhone with high-resolution Retina display: -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo of_get_option('favicon_retina_iphone'); ?>">
		<?php endif; ?>

		<?php if( of_get_option('favicon_nonretina_ipad') != '' ) : ?>
		<!-- For first- and second-generation iPad: -->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo of_get_option('favicon_nonretina_ipad'); ?>">
		<?php endif; ?>

		<?php if( of_get_option('favicon_nonretina_iphone') != '' ) : ?>
		<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo of_get_option('favicon_nonretina_iphone'); ?>">
		<?php endif; ?>

	<!-- Meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php if(of_get_option('disable_responsive') == false) : ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php endif; ?>

	<!-- Utils -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- Title-->
	<title><?php
		global $page, $paged;

		wp_title( '-', true, 'right' );
		bloginfo( 'name' );

		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " - $site_description";
	?></title>

	<!-- WP_Head -->
	<?php wp_head(); ?>

</head>

<?php
	$_fixed = 'fixed';
	if(!of_get_option('header_fixed'))
		$_fixed = 'normal';
?>
<body <?php body_class($_fixed.'-header xt-'.of_get_option('layout_mode')); ?>>

<!--
<div id="full-bg"></div>
-->

<div id="container-full"> <!-- (closes at footer.php) -->

	<div id="main-outerglow"> <!-- (closes at footer.php) -->
		<div id="header-wrapper">
			<header class="container">
				
				<?php if(of_get_option('logo')) : ?>
				<a href="<?php echo wpml_get_home_url(); ?>" class="logo-wrapper">
					<img id="logo" src="<?php echo of_get_option('logo'); ?>" alt="<?php echo get_bloginfo('name'); ?>" />
					<?php if(of_get_option('logo_retina')) : ?>
						<img id="logo-retina" src="<?php echo of_get_option('logo_retina'); ?>" alt="<?php echo get_bloginfo('name'); ?>" />
					<?php endif; ?>
				</a>
				<?php endif; ?>
			
				<div id="top-menu">
					<nav>
						<?php 
						if(has_nav_menu('main_menu')) : 

							wp_nav_menu( array( 'theme_location' => 'main_menu', 
								'container' => '', 'items_wrap' => '<ul>%3$s</ul>' ) );

						endif; ?>
					</nav> <!-- nav -->	
				</div> <!-- #top-menu -->

				<div class="clear clearboth"></div>

			</header> <!-- #header -->
		</div><!-- #header-wrapper -->