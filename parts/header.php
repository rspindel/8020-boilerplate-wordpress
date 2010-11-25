<hgroup id="branding">
	<h1 id="site-title">
		<a href="/" rel="home"><?php bloginfo('name'); ?></a>
	</h1>
	<h2 id="site-description">
		<?php bloginfo('description'); ?>
	</h1>
</hgroup>

<? wp_nav_menu(array('theme_location' => 'primary',
	'container_id' => 'primary-nav')); ?>
