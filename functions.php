<?php

require_once('inc/menu-support.php');

/**
 * Register widgetized sidebar.
 */
register_sidebar(array(
	'name' => 'Sidebar Widget Area',
	'id' => 'sidebar-widget-area',
	'description' => 'The sidebar widget area',
	'before_widget' => '<article id="%1$s" class="widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<header class="widget-header"><h3 class="widget-title">',
	'after_title' => '</h3></header>',
));

?>
