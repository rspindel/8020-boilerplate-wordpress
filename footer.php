<!-- Javascript at the bottom for fast page loading -->

<!--[if lt IE 7 ]>
	<script src="<?php bloginfo('template_directory') ?>/javascripts/libs/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img'); </script>
<![endif]-->

<?php if (strlen(trim(get_option('analytics_id'))) != 0) { ?>
	<!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet -->
	<script>
		var _gaq = [['_setAccount', '<?php echo get_option('analytics_id'); ?>'], ['_trackPageview']];
		(function(d, t) {
			var g = d.createElement(t),
			s = d.getElementsByTagName(t)[0];
			g.async = true;
			g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g, s);
		})(document, 'script');
	</script>
<?php } ?>

<?php wp_footer(); ?>

</body>
</html>
