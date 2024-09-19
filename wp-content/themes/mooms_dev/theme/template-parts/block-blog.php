<?php
$showBlock = getPostMeta('crb_service');
if ($showBlock == 'yes') :
	$sections = getPostMeta('add_section');
	foreach ($sections as $section) :
		$titleBlock = $section['title'];
		$descBlock = $section['desc'];
		$typeCpt = $section['type_cpt'];
		$typeChoose = $section['type_choose'];
		$services = $section['service_object'];
		$blogs = $section['blog_object'];
		?>
		<section class="blog_service-block">
			<div class="container">
				<?php
				if ($titleBlock) :
					echo '<h2 class="title-block">' . $titleBlock . '</h2>';
				endif;
				if ($descBlock) :
					echo '<div class="desc-block text-center">' . apply_filters('the_content', $descBlock) . '</div>';
				endif;
				?>
				<div class="row gy-5 d-flex align-items-stretch">
					<?php
					if ( $typeCpt == 'blog' ) :
						$cpt = 'blog';
						$object = $blogs;
					else :
						$cpt = 'service';
						$object = $services;
					endif;

					if ($typeChoose == 'auto') :
						$post_query = new WP_Query([
							'post_type' => $cpt,
							'posts_per_page' => 9,
							'post_status' => 'publish',
							'orderby' => 'date',
							'order' => 'DESC',
						]);
						if ($post_query->have_posts()) :
							while ($post_query->have_posts()) : $post_query->the_post();
								get_template_part('template-parts/loop','post');
							endwhile;
						endif;
						wp_reset_postdata();
						wp_reset_query();
					else:
						foreach ($object as $obj) :

							$title = get_the_title($obj['id']);
							$desc = wp_trim_words( get_the_content(), 25, '...' );
						?>
							<div class="col col-12 col-sm-6 col-md-4 item-post">
								<div class="inner h-100">
									<a href="<?= get_the_permalink($obj['id']); ?>">
										<figure class="responsive-media">
											<img src="<?= getPostThumbnailUrl($obj['id']); ?>" alt="<?= get_the_title($obj['id']); ?>">
											
										</figure>
										<figure class="responsive-media">
											<img 
												src="<?= getPostThumbnailUrl($obj['id'], 800, 600); ?>" 
												srcset="<?= getPostThumbnailUrl($obj['id'], 400, 300); ?> 400w,
														<?= getPostThumbnailUrl($obj['id'], 800, 600); ?> 800w,
														<?= getPostThumbnailUrl($obj['id'], 1200, 900); ?> 1200w"
												sizes="(max-width: 600px) 400px, (max-width: 1200px) 800px, 1200px"
												alt="<?= get_the_title($obj['id']); ?>"
												loading="lazy"
											>
										</figure>

										<div class="content">
											<?php
											if ($title):
												echo '<h4 class="title-post">' . $title . '</h4>';
											endif;
												echo '<div class="desc">' . $desc. '</div>';
											?>
										</div>
									</a>
								</div>
							</div>
						<?php
						endforeach;
					endif;
					?>
				</div>
			</div>
		</section>
	<?php
	endforeach;
endif;
