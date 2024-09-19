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
<div class="single-content">
	<div class="banner">
		<figure class="responsive-media ratio-16-5">
			<img src="<?php thePostThumbnailUrl(); ?>" alt="<?= get_the_title(); ?>">
		</figure>
	</div>

    <div class="container">
        <?php the_content(); ?>
    </div>
</div>
