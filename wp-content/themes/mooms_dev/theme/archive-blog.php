<?php
/**
 * App Layout: layouts/app.php
 *
 * This is the template that is used for displaying all posts by default.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WPEmergeTheme
 */
?>
<div class="page-listing">
	<div class="container">
		<h1 class="title-block"><?php thePageTitle(); ?></h1>

			<div class="row gy-5">
				<?php
				if (have_posts()) :
					while (have_posts()) : the_post();
						?>
						<div class="">
							<div class="card">
								<figure>
									<img src="<?php thePostThumbnailUrl();?>" alt="">
								</figure>
								<div class="card-body">
									<h5 class="card-title><?php the_title(); ?></h5>
									<p class="card-text"><?php theExcerpt(); ?></p>
									<a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e('Read more', 'wpe'); ?></a>
								</div>
							</div>
						</div>
						<?php
					endwhile;
					wp_reset_postdata();
				endif;
				thePagination();
				?>
			</div>
	</div>
</div>


