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
	<div class="footer-top">
		<div class="mm-container">
			<div class="inner">
				<a class="contactLink" href="<?= esc_url(getOption('contact_url'));?>">
					<span class="_label"><?= esc_html(getOption('contact_label'));?></span>
					<span class="_circle"></span>
					<span class="_message"><?= apply_filters('the_content',esc_html(getOption('contact_message')));?></span>
				</a>
			</div>
		</div>
		<!-- Back to top button -->
		<a id="back-to-top">
			<div class="svg"></div>
		</a>
	</div>
	<div class="footer-main">
		<div class="mm-container">
			<div class="inner">
				<div class="info-company">
					<div class="logo">
						<a href="<?php bloginfo('url');?>" title="<?php bloginfo('name');?>">
							<img src="<?php theOptionImage('footer_logo');?>" alt="<?php bloginfo('name');?>" loading="lazy">
						</a>
					</div>
					<div class="info">
						<div class="company"><?= esc_html(getOption('company'));?></div>
						<div class="address"><?= esc_html(getOption('address'));?></div>
						<div class="google-map">
							<a href="<?=esc_url(getOption('googlemap'));?>" target="_blank" rel="noopener noreferrer"><?= _e('Google map','gaumap') ?></a>
						</div>
						<div class="contact">
							<div class="email">
								<a href="mailto:<?= esc_html(getOption('email'));?>">
									<div class="icon-mail"></div>
									<?= esc_html(getOption('email'));?>
								</a>
							</div>
							<div class="phone">
								<a href="tel:<?= str_replace(['.', ',','-', ' '], '', getOption('phone_number'));?>">
									<div class="icon-phone"></div>
									<?= esc_html(getOption('phone_number'));?>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="nav-menu">
					<?php
					wp_nav_menu([
						'theme_location' => 'footer-menu',
						'menu_class'     => 'nav_menu',
						'container'      => 'nav',
						'container_class'=> 'footer__nav',
						'walker'         => new MM_Menu_Walker(),
					]);
					?>
				</div>
			</div>
		</div>
	</div>
</footer>

</div>




<?php wp_footer(); ?>
</body>

</html>