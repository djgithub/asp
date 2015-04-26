<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
	
		<div class="home-top" >
		<div class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/Logo.png" alt="logo">
			</a>
			
		</div>
		
		<?php dynamic_sidebar( 'home-top' );?>
		

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<!--button class="menu-toggle" data-target=".main-navigation-collapse" data-toggle="collapse" type="button"><?php # _e( 'Menu', 'twentytwelve' ); ?></button-->
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		</div>
<div id="header-image">
	<?php if ( has_post_thumbnail() & !is_front_page() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail("full");}
	elseif(is_front_page())
	{
	dynamic_sidebar( 'home-header' );
	}
	?>
	</div>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">