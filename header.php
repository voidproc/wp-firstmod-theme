<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package First
 */
?><!DOCTYPE html>
<!--[if IE 8]>
<html class="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php if ( ! get_theme_mod( 'first_disable_responsive' ) ) : ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php endif; ?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<![endif]-->
<?php wp_head(); ?>
<!-- Font Awesome を使用 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'first' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-top">
			<div class="site-top-table">
				<div class="site-branding">
				<?php if ( get_theme_mod( 'first_logo' ) ) : ?>
				<h1 class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php first_logo(); ?></a></h1>
				<?php endif; ?>
				<?php if ( ! ( get_theme_mod( 'first_logo' ) && get_theme_mod( 'first_replace_blogname' ) ) ) :?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php endif; ?>
				<?php if ( ! get_theme_mod( 'first_hide_blogdescription' ) ) : ?>
				<div class="site-description"><?php bloginfo( 'description' ); ?></div>
				<?php endif; ?>
				</div>

				<?php if ( has_nav_menu( 'header' ) ) : ?>
				<nav id="header-navigation" class="header-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'header', 'depth' => 2 ) ); ?>
				</nav><!-- #header-navigation -->
				<?php endif; ?>
			</div>
		</div>

		<?php if ( ! get_theme_mod( 'first_hide_navigation' ) ) : ?>
		<div class="site-bar">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="menu-toggle"><?php _e( 'Menu', 'first' ); ?></div>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				<?php if ( ! get_theme_mod( 'first_hide_search' ) ) : ?>
				<?php get_search_form(); ?>
				<?php endif; ?>
			</nav><!-- #site-navigation -->
		</div>
		<?php endif; ?>

		<?php if ( is_home() && get_header_image() ) : ?>
		<div id="header-image" class="header-image">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</div><!-- #header-image -->
		<?php elseif ( is_page() && has_post_thumbnail() ) : ?>
		<div id="header-image" class="header-image">
			<?php the_post_thumbnail( 'first-page-thumbnail' ); ?>
		</div><!-- #header-image -->
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
