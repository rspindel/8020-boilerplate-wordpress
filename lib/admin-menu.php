<?php
/**
 * Administration
 */
function etbp_admin() {
	?>
	<div class="wrap">
	<h2>80/20 Boilerplate Options</h2>
	
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options'); ?>
	
	<table class="form-table">	
		<tr valign="top">
			<th scope="row">Footer text</th>
			<td>
				<textarea style="width: 500px; height: 100px;" name="tagline"><?php echo htmlspecialchars(get_option('footer_text')) ?></textarea>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row">Google Analytics site ID</th>
			<td>
				<input type="text" class="text" style="width: 500px;" name="footer_text" value="<?php echo htmlspecialchars(get_option('analytics_id')); ?>" />
			</td>
		</tr>
	</table>
	
	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="footer_text,analytics_id" />
	
	<p class="submit">
	<input type="submit" name="Submit" value="Save Changes" />
	</p>
	
	</form>
	</div>
	<?php
}

function etbp_setup_admin() {
	add_theme_page('80/20 Boilerplate Setup', '80/20 Boilerplate', 8, __FILE__, 'etbp_admin');
}
add_action('admin_menu', 'etbp_setup_admin');

?>