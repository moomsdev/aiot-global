<?php
$sliders = getPostMeta('sliders');
?>
<section class="slider-block">
	<div class="inner">
		<div class="swiper sliders">
			<div class="swiper-wrapper">
				<?php
				foreach ($sliders as $slider) :
					$url = $slider['url'];
				?>
					<div class="swiper-slide">
						<?= $url ? "<a href='$url'>" : ''; ?>
						<figure class="responsive-media">
							<img src="<?= getImageUrlById($slider['img']); ?>" alt="<?= $slider['name']; ?>">
						</figure>
						<?= $url ? '</a>' : ''; ?>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="swiper-pagination"></div>
		</div>
	</div>
</section>
<?php
