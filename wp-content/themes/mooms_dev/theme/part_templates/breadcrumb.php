<?php
if (function_exists('yoast_breadcrumb')) :
	yoast_breadcrumb('<div id="page-breadcrumb">', '</div>');
elseif (function_exists('rank_math_the_breadcrumbs')) :
	?>
	<div id="breadcrumb">
		<?php
		echo do_shortcode("[rank_math_breadcrumb]");
		?>
	</div>
<?php
endif;

