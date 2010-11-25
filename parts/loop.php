<?php if (!have_posts()) : ?>
	<article class="post error404 not-found">
		<header class="post-header">
			<h1>Not Found</h1>
		</header>
		<p>Apologies, but no results were found for the requested archive.</p>
	</article>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="post-header">
			<h1><a href="<?php the_permalink(); ?>" class="permalink" rel="bookmark"><?php the_title(); ?></a></h1>
			<p class="post-meta">
				By <?php the_author(); ?>
				on <?php the_date(); ?> |
				<?php comments_popup_link(); ?>
			</p>
		</header>
		<?php the_content('Continue reading &rarr;'); ?>
		<?php is_single() ? comments_template() : ''; ?>
	</article>
<?php endwhile; ?>
