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
			<div class="container">
				<div class="flex-header d-flex">
					<div id="logo" class="logo d-flex align-items-center justify-content-start">
						<a href="<?php bloginfo('url'); ?>" title="AMZ"><img src="<?php theOptionImage('logo'); ?>" alt="<?php bloginfo('url'); ?>"></a>
					</div>
					<div class="content-menu d-flex align-items-center justify-content-end">
						<div class="nav-wrap">
							<div class="btn-menu"><span></span></div>
							<nav id="mainnav" class="mainnav">
								<ul class="menu">
									<li>
										<a href="#services">IT Services</a>
									</li>
									<li>
										<a href="#testimonial">Testimonial</a>
									</li>
									<li>
										<a href="#team">Teams</a>
									</li>
									<li>
										<a href="#contact">Contact</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header><!-- header -->