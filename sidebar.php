<div id="sidebar">
	<?php if (!dynamic_sidebar('sidebar-widget-area')) : ?>
		<div class="widget">
			<div class="widget-header">
				<h1 class="widget-title">Archives</h1>
			</div>
			<ul>
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ul>
		</div>
	<?php endif; ?>
</div>
