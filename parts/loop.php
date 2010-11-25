<?php if (!have_posts()) : ?>
	<article class="page error404 not-found">
		<header class="entry-header">
			<h1 class="entry-title">Not Found</h1>
		</header>
		<p>Apologies, but no results were found for the requested archive.</p>
	</article>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" class="permalink" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<p class="post-meta">
				<?php the_author(); ?> |
				<?php the_date(); ?> |
				<?php comments_popup_link(); ?>
			</p>
		</header>
		<section class="entry-content">
			<?php the_content('Continue reading &rarr;'); ?>
		</section>
		<?php is_single() ? comments_template() : ''; ?>
	</article>
<?php endwhile; ?>
