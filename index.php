<?php get_header(); ?>

<header id="site-header">
	<?php get_template_part('parts/branding', 'index' ); ?>
	<?php get_template_part('parts/navigation', 'index' ); ?>
</header>

<div id="content">
	<?php get_template_part('parts/loop', 'index' ); ?>
</div>

<?php get_sidebar(); ?>

<footer id="site-footer">
	<?php get_template_part('parts/footer', 'index' ); ?>
</footer>

<?php get_footer(); ?>
