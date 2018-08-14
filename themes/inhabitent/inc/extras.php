<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

//remove submenus
function inhabitent_remove_submenus() {
	remove_submenu_page( 'themes.php', 'theme-editor.php' );
	remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );

// change login screen 
function inhabitent_change_login() {
	echo '<style type="text/css">
	h1 a {background-image: url("' . get_stylesheet_directory_uri() . '/logos/inhabitent-logo-text-dark.svg") !important; height: 58px !important; width: 320px !important;  background-size: 320px !important; margin 25px auto;}
	</style>';
}
add_action( 'login_head', 'inhabitent_change_login');

// change login url

function inhabitent_change_login_url($url) {
	return home_url();
}
add_filter('login_headerurl', 'inhabitent_change_login_url');
