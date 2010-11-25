<aside id="sidebar">
	<?php if (!dynamic_sidebar('sidebar-widget-area')) : ?>
		<article class="widget">
			<header class="widget-header">
				<h1 class="widget-title">Archives</h1>
			</header>
			<ul>
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ul>
		</article>
	<?php endif; ?>
</aside>
