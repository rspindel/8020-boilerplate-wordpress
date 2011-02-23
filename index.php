<?php get_header(); ?>

<div id="site-header">
	<?php get_template_part('parts/branding', 'index' ); ?>
	<?php get_template_part('parts/navigation', 'index' ); ?>
</div>

<div id="content">
	<div id="articles" class="text-content">
		<?php get_template_part('parts/loop', 'index' ); ?>
	</div>
</div>

<?php get_sidebar(); ?>

<div id="site-footer">
	<?php get_template_part('parts/footer', 'index' ); ?>
</div>

<?php get_footer(); ?>
