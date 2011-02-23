<?php
/**
 * Set up theme support for menus.
*/

register_nav_menus(array('primary' => 'Primary Navigation'));

function etbp_page_menu_args($args) {
	$args['show_home'] = true;
	return $args;
}
add_filter('wp_page_menu_args', 'etbp_page_menu_args');

function etbp_nav_menu_args($args) {
	$args['container'] = 'div';
	$args['container_class'] = 'menu-container';
	return $args;
}
add_filter('wp_nav_menu_args', 'etbp_nav_menu_args');

?>
