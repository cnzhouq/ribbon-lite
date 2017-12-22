<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ribbon Lite
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
    <div class="main-container">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ribbon-lite' ); ?></a>
		<header id="site-header" role="banner">
			<div class="container clear">
				<div class="site-branding">
					<?php if (has_custom_logo()) { ?>
						<?php if( is_front_page() || is_home() || is_404() ) { ?>
							<h1 id="logo" class="image-logo" itemprop="headline">
								<?php the_custom_logo(); ?>
							</h1><!-- END #logo -->
						<?php } else { ?>
						    <h2 id="logo" class="image-logo" itemprop="headline">
								<?php the_custom_logo(); ?>
							</h2><!-- END #logo -->
						<?php } ?>
					<?php } else { ?>
						<?php if( is_front_page() || is_home() || is_404() ) { ?>
							<h1 id="logo" class="site-title" itemprop="headline">
								<a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo( 'name' ); ?></a>
							</h1><!-- END #logo -->
							<div class="site-description"><?php bloginfo( 'description' ); ?></div>
						<?php } else { ?>
						    <h2 id="logo" class="site-title" itemprop="headline">
								<a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo( 'name' ); ?></a>
							</h2><!-- END #logo -->
							<div class="site-description"><?php bloginfo( 'description' ); ?></div>
						<?php } ?>
					<?php } ?>
				</div><!-- .site-branding -->
				<?php dynamic_sidebar('widget-header'); ?>
			</div>
		</header><!-- #masthead -->
