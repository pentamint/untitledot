<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SPOEX
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'spoex' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$spoex_description = get_bloginfo( 'description', 'display' );
				if ( $spoex_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $spoex_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<!-- #site-navigation -->
			<nav class="navbar navbar-default" role="navigation">
				<div class="nav-wrapper">
					<!-- Brand and toggle get grouped for better mobile display -->
					<button type="button" class="navbar-toggle hamburger hamburger--emphatic" data-toggle="collapse" data-target="#navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="hamburger-box">
    				<span class="hamburger-inner"></span>
  					</span>
					</button>
					<div class="collapse navbar-collapse menu-primary" id="navbar-collapse-1">
						<?php
						wp_nav_menu( array(
							'menu'           	=> '',
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => '',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
						?>
						<div class="menu-overlay"></div>
					</div><!-- navbar-colapse -->
				</div><!-- .row -->
			</nav>
		</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
