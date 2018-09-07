<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blimey
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blimey' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="wrapper">
			<div class="wrapper-inner">
				<div class="site-branding">
					<div class="grid gutters grid--1of4">
						<div class="grid-cell">
							<div class="col-1of6">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blimey-logo.png" alt="Blimey Theme"></a>
							</div>
						</div>
					</div>
				</div><!-- .site-branding -->
			</div>
		</div>
			<div class="primary-nav-wrapper"> 		
				<nav id="primary-nav">
					<div class="nav-mobile">
						<a id="nav-toggle" href="#!"><span></span></a>
					</div>
					<?php
						wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu', //Name of the div that wraps the menu
						) );
					?>  
				</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
