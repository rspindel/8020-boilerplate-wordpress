<?php get_header(); ?>

<header id="site-header">
	<?php get_template_part('parts/branding', 'archive' ); ?>
	<?php get_template_part('parts/navigation', 'archive' ); ?>
</header>

<div id="content">
	<div id="articles" class="text-content">
		<h1 class="page-title">
<?php if ( is_day() ) : ?>
			<?php printf( __( 'Daily Archives: <span>%s</span>', 'etbp' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
			<?php printf( __( 'Monthly Archives: <span>%s</span>', 'etbp' ), get_the_date('F Y') ); ?>
<?php elseif ( is_year() ) : ?>
			<?php printf( __( 'Yearly Archives: <span>%s</span>', 'etbp' ), get_the_date('Y') ); ?>
<?php else : ?>
			<?php _e( 'Blog Archives', 'etbp' ); ?>
<?php endif; ?>
		</h1>
		<?php get_template_part('parts/loop', 'archive' ); ?>
	</div>
</div>

<?php get_sidebar(); ?>

<footer id="site-footer">
	<?php get_template_part('parts/footer', 'archive' ); ?>
</footer>

<?php get_footer(); ?>
