<?php
/**
 * Theme header partial.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPEmergeTheme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php app_shim_wp_body_open(); ?>
	<div class="wrapper_mm">
		<header id="header" class="header">
			<div class="mm-container">
				<div class="inner-header">
					<div id="logo" class="logo">
						<a href="<?php bloginfo('url');?>" title="<?php bloginfo('name');?>">
							<img src="<?php theOptionImage('logo');?>" width="180" height="53" alt="<?php bloginfo('name');?>">
						</a>
					</div>
					<div class="content-menu">
						<?php
						wp_nav_menu([
							'theme_location' => 'main-menu',
							'menu_class'     => 'nav_menu',
							'container'      => 'nav',
							'container_class'=> 'header__nav-container',
							'walker'         => new MM_Menu_Walker(),
						]);
						?>
						<div class="language">
							<div class="global">
								<?php theLanguageSwitcher() ?>
							</div>
							<div class="current-language">
								<?php 
								$current_language_name = pll_current_language('name');
								echo $current_language_name;
								?>
							</div>
						</div>
						<div class="contact">
							<a href="#" target="_blank"><?= _e('Contact','gaumap') ?></a>
						</div>
					</div>
				</div>
			</div>
		</header>