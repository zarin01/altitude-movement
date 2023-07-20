<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Genesis Block Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead" class="site-header">
	<div class="top-navigation">
		<!-- Mobile menu -->
		<?php get_template_part( 'template-parts/content-menu-drawer' ); ?>

		<div class="container">
			<div class="site-identity clear">
				<!-- Site title and logo -->
				<?php genesis_block_theme_title_logo(); ?>

				<div class="top-navigation-right">
					<!-- Main navigation -->
					<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Main', 'genesis-block-theme' ); ?>">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'fallback_cb'    => 'genesis_block_theme_fallback_menu',
							)
						);
						?>
					</nav><!-- .main-navigation -->
				</div><!-- .top-navigation-right -->
			</div><!-- .site-identity-->
		</div><!-- .container -->
	</div><!-- .top-navigation -->

	<!-- Get the archive page titles -->
	<?php if ( is_archive() || is_search() || is_404() ) { ?>
		<div class="container text-container">
			<div class="header-text">
				<?php genesis_block_theme_page_titles(); ?>
			</div><!-- .header-text -->
		</div><!-- .text-container -->
	<?php } ?>
</header><!-- .site-header -->

<div id="page" class="hfeed site container">
	<div id="content" class="site-content">
