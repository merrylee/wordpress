<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up until id="main-core".
 *
 * @package ThinkUpThemes
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<?php thinkup_hook_header(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="//gmpg.org/xfn/11" />
<link rel="pingback" href="<?php esc_url( bloginfo( 'pingback_url' ) ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="body-core" class="hfeed site">

	<header>
	<div id="site-header">

		<?php if ( get_header_image() ) : ?>
			<div class="custom-header"><img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt=""></div>
		<?php endif; // End header image check. ?>

		<div id="pre-header">
		<div class="wrap-safari">
		<div id="pre-header-core" class="main-navigation">
  
			<?php  /*if ( has_nav_menu( 'pre_header_menu' ) ) : ?>
			<?php wp_nav_menu( array( 'container_class' => 'header-links', 'container_id' => 'pre-header-links-inner', 'theme_location' => 'pre_header_menu' ) ); ?>
			<?php endif;*/ ?>
			<?php /* Social Media Icons */ thinkup_input_socialmediaheaderpre(); ?>

			<div class="container">
				<div class="navbar-header">

			<i class="fa fa-phone" aria-hidden="true"></i> Tel. +82 70­-8637-4888  | 
			<i class="fa fa-envelope" aria-hidden="true"></i> delhikim@daum.net</div>
			</div>
			
			
		</div>
		</div>
		</div>
		<!-- #pre-header -->

		<div id="header">
		<div id="header-core">

			<div id="logo">
			<?php /* Custom Logo */ echo thinkup_custom_logo(); ?>
			</div>

			<div id="header-links" class="main-navigation">
			<div id="header-links-inner" class="header-links">

				<?php $walker = new thinkup_menudescription;
				wp_nav_menu(array( 'container' => false, 'theme_location'  => 'header_menu', 'walker' => new thinkup_menudescription() ) ); ?>
				
				<?php /* Header Search */ thinkup_input_headersearch(); ?>
			</div>
			</div>
			<!-- #header-links .main-navigation -->

			<?php /*Add responsive header menu*/  thinkup_input_responsivehtml1(); ?>

		</div>
		</div>
		<!-- #header -->

		<?php /* Add responsive header menu */ thinkup_input_responsivehtml2(); ?>

	</div>

	<?php /* Custom Slider */ thinkup_input_sliderhome(); ?>

	</header>
	<!-- header -->
	<?php /*  Call To Action - Intro */ thinkup_input_ctaintro(); ?>

	<?php /* Custom Intro */ 
	$pageid = get_the_ID();
	if($pageid!=1) : thinkup_custom_intro(); endif; ?>
	<?php /*  Pre-Designed HomePage Content */ thinkup_input_homepagesection(); ?>

	<?php if($pageid==12) : ?>
	<div id="content" style="background-color: #eae9e9; !important;">
	<?php else : ?>
	<div id="content">
	<?php endif; ?>
	<div id="content-core">

		<div id="main">
		<div id="main-core">