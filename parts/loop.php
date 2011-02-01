<div id="articles">
	<?php if (!have_posts()) : ?>
		<div class="page error404 not-found">
			<div class="entry-header text-content">
				<h1 class="entry-title">Not Found</h1>
			</div>
			<div class="entry-content text-content">
				<p>Apologies, but no results were found for the requested
					 archive.</p>
			</div>
		</div>
	<?php endif; ?>

	<?php while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-header text-content">
				<h1 class="entry-title">
					<a href="<?php the_permalink(); ?>" class="permalink" rel="bookmark"><?php the_title(); ?></a>
				</h1>
				<p class="post-meta">
					<?php the_author(); ?> |
					<?php the_date(); ?> |
					<?php comments_popup_link(); ?>
				</p>
			</div>
			<div class="entry-content text-content">
				<?php the_content('Continue reading &rarr;'); ?>
			</div>
			<?php is_single() ? comments_template() : ''; ?>
		</div>
	<?php endwhile; ?>
</div>
