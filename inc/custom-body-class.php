<?php
function etbp_body_class($classes) {
	global $post;

	if (is_page() && !is_front_page())
		$classes[] = 'single-page';

	return $classes;
}
add_filter('body_class','etbp_body_class');

?>