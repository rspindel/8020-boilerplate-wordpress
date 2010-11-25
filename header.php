<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<title>
		<?php wp_title( '|', true, 'right' ); ?>
		<?php bloginfo('name'); ?>
	</title>

	<!-- Always force latest IE rendering engine & Chrome Frame -->
	<!-- Remove this if you use the .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<!--  Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5
		elements & feature detects -->
	<script src="<?php bloginfo('stylesheet_directory') ?>/javascripts/libs/modernizr-1.6.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
