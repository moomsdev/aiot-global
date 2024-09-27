<?php
/**
 * Theme footer partial.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPEmergeTheme
 */
?>
<footer id="footer">
	<div class="mm-container">
		<div class="footer-top">
			<a class="contactLink" href="<?= esc_url(getOption('contact_url'));?>">
				<span class="_label"><?= esc_html(getOption('contact_label'));?></span>
				<span class="_circle"></span>
				<span class="_message"><?= apply_filters('the_content',esc_html(getOption('contact_message')));?></span>
			</a>
			<!-- Back to top button -->
			<a id="back-to-top">
				<div class="svg"></div>
			</a>

		</div>
	</div>
</footer>

</div>




<?php wp_footer(); ?>
</body>

</html>