<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sgstn_Cover
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

<body <?php body_class('text-center'); ?>>
<div id="page" class="site cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sgstncover' ); ?></a>

	<header id="masthead" class="site-header mb-auto">
		<div class="inner">
			<div class="site-branding masthead-brand">
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
				$sgstncover_description = get_bloginfo( 'description', 'display' );
				if ( $sgstncover_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $sgstncover_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation nav nav-masthead justify-content-center">
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sgstncover' ); ?></button> -->
				<?php
				// wp_nav_menu( array(
				// 	'theme_location' => 'menu-1',
				// 	'menu_id'        => 'primary-menu',
				// ) );


						wp_nav_menu( array(
							'menu'              => 'primary',
							'theme_location'    => 'menu-1',
							'depth'             => 2,
							// 'container'         => 'div',
							// 'container_class'   => 'collapse navbar-collapse js-navbar',
							'menu_class'        => 'menu-main list-inline',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker()
						) );
				?>
			</nav><!-- #site-navigation -->
		</div>

	</header><!-- #masthead -->
