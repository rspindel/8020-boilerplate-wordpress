<?php

/**
 * Register widgetized sidebar.
 */
register_sidebar(array(
	'name' => 'Sidebar Widget Area',
	'id' => 'sidebar-widget-area',
	'description' => 'The sidebar widget area',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<div class="widget-header"><h1 class="widget-title">',
	'after_title' => '</h1></div>',
));

?>