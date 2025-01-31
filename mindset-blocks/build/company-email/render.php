<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<address <?php echo get_block_wrapper_attributes(); ?>>
	<?php if ($attributes['svgIcon']): ?>
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" role="img"
			aria-label="Email Icon">
			<path d="M12 12.713l11.985-8.713h-23.97l11.985 8.713zm0 2.287l-12-8.713v12h24v-12l-12 8.713z" />
		</svg>
	<?php endif; ?>
	<p><?php echo esc_html(get_post_meta(get_the_ID(15), 'company_email', true)); ?></p>
</address>