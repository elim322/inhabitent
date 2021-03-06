<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-
    O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
			<!-- if statement to change header on certain pages -->
				<?php if(is_page_template("about.php") || is_front_page()):?>
				<header id="masthead" class="site-header reverse-header" role="banner">

			<?php else: ?>
			<header id="masthead" class="site-header">
				<?php endif; ?>
			<div class="container">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php if(is_page_template("about.php") || is_front_page()):?>
				<div class="tent-logo">
					<a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/logos/inhabitent-logo-tent-white.svg"></a>
				</div>
					<?php else: ?>
					<div class="tent-logo">
					<a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/logos/inhabitent-logo-tent.svg"></a>
				</div>
					<?php endif; ?>

					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				

					<?php get_search_form(); ?>
				

					<!-- <div class="form-search">
					
					
					<form class="search">
						<i class="fas fa-search" href="#"></i>
						<input class="search-input" type="text"></input>
						</form>


					</div> -->
				</nav><!-- #site-navigation -->
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
