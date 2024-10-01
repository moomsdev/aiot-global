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
global $post;

?>
<div class="page" data-aos="fade-in" data-aos-duration="2000">
	<?php
	if ( ! is_front_page() && is_page() ) {
		// Kiểm tra xem có phải là child page hay không
		if ( $post->post_parent ) {
			?>
			<div class="mm-container-fluid"> 
				<div class="head-child-page">
					<div class="page-thumbnail">
						<figure class="media border-radius-4">
							<img src="<?= getPostThumbnailUrl(get_the_ID()); ?>" alt="<?= get_the_title(); ?>" loading="lazy">
						</figure>
					</div>
					<div class="page-title-breadcrumb">
						<?php
						get_template_part('template-parts/breadcrumb');
						echo '<h1 class="page-title">' . get_the_title() . '</h1>';
						?>
					</div>
				</div>

				<div class="body-child-page">
					<div class="page-sidebar">
						<?php
						
						?>
					</div>
					<div class="page-content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

			<?php
		} else {
			// Đây là trang cha hoặc không có trang cha, hiển thị tiêu đề và breadcrumb
			echo '<div class="page-header border-line-bottom"><div class="mm-container">';
				get_template_part('template-parts/breadcrumb');
	
				echo '<h1 class="page-title">' . get_the_title() . '</h1>';
			echo '</div></div>';
		}
	}
	?>

	<div class="mm-container">
		<?php
		// Page Thumbnail for parent page
		if ( !is_front_page() && is_page() && !$post->post_parent && has_post_thumbnail() ) :
			echo '<div class="head-parent-page">';
				echo '<div class="page-thumbnail"> 
						<figure class="media border-radius-4">
							<img src="'. getPostThumbnailUrl(get_the_ID()) .'" alt="'. get_the_title() .'" loading="lazy">
						</figure> 
					</div>';
				echo '<div class="page-excerpt">'. get_the_excerpt() .'</div>';
			echo '</div>';
		endif;
		
		// Page Content
		if ( ! is_front_page() && is_page() ) {
			// Kiểm tra xem có phải là child page hay không
			if ( $post->post_parent ) {
				return;
			} else {
				echo '<div class="page-content">';
					the_content();
				echo '</div>';
			}
		}
		
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