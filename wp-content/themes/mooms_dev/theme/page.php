<?php
/**
 * App Layout: layouts/app.php
 *
 * This is the template that is used for displaying all pages by default.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WPEmergeTheme
 */
?>
<div class="page" data-aos="fade-in" data-aos-duration="2000">
	<?php
	if ( ! is_front_page() ) {
		echo '<div class="page-header border-line-bottom"><div class="mm-container">';
			get_template_part('template-parts/breadcrumb');

			echo '<h1 class="page-title">' . get_the_title() . '</h1>';
		echo '</div></div>';
	}
	?>
	<div class="mm-container">
		<?php
		// Page Thumbnail for parent page
		global $post;
		if ( !is_front_page() && is_page() && !$post->post_parent && has_post_thumbnail() ) :
			echo '<div class="page-thumbnail"> 
					<figure class="media border-radius-4">
						<img src="'. getPostThumbnailUrl(get_the_ID()) .'" alt="'. get_the_title() .'" loading="lazy">
					</figure> 
				</div>';
		endif;
		
		// Page Content
		echo '<div class="page-content">';
			the_content();
		echo '</div>';
		?>
		<!--  List child pages -->
		<div class="child-pages">
			<ul>
				<?php
				$pages = get_pages([
					'child_of' => $post->ID,
					'sort_column' => 'menu_order',
					'sort_order' => 'ASC'
				]);
				
				if ($pages) :
					foreach ($pages as $page) :
						$pageThumbnail = getPostThumbnailUrl($page->ID);
						$pageTitle = get_the_title($page->ID);
						$pageLink = get_permalink($page->ID);
						$pageExcerpt = get_the_excerpt($page->ID);
						?>
							<li class="child-page">

								<div class="inner">
									<div class="inner-media">
										<figure class="media">
											<img src="<?= $pageThumbnail; ?>" alt="<?= $pageTitle; ?>" loading="lazy">
										</figure>
									</div>

									<div class="inner-content">
										<h3 class="title"><?= $pageTitle; ?></h3>
										<p class="excerpt"><?= $pageExcerpt; ?></p>
										<a class="btn-url" href="<?= $pageLink; ?>">
											<span class="_circle"></span>
											<span class="_label"><?= _e('View More','gaumap');?></span>
											<span class="_icon">
												<div class="mm-svg"></div>
											</span>
										</a>
									</div>

								</div>

							</li>
						<?php
					endforeach;
				endif;
				?>
			</ul>
		</div>
	</div>
</div>