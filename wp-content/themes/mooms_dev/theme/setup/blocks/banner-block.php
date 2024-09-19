<?php
use Carbon_Fields\Block;
use Carbon_Fields\Field;

    Block::make(__('Content Block', 'gaumap'))
    ->add_fields([
        Field::make('complex', 'content_blocks', __('Content blocks | Khối nội dung:', 'gaumap'))
        ->set_layout('tabbed-horizontal')
        ->add_fields([
            Field::make('text', 'title_content_block', __('Title | Tiêu đề', 'gaumap')),
            Field::make('rich_text', 'desc_content_block', __('Desc | Mô tả', 'gaumap')),
        ])->set_header_template('<% if (title_content_block) { %><%- title_content_block %><% } %>')
    ])
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
    ?>
        <section class="contents-blocks">
            <div class="container">
            <?php
            $contents = $fields['content_blocks'];
            if ( $contents ) :
                foreach ( $contents as $str ) :
					$title = $str['title_content_block'];
					$content = $str['desc_content_block'];
                ?>
                    <div id="<?php echo sanitize_title($str['title_content_block']); ?>" class="item inner">
						<?php
						if ($title) :
						?>
                        	<h2 class="title-blocks"><?php echo $title; ?></h2>
						<?php
						endif;
						?>

						<?php
						if ($content) :
							?>
							<div class="description-blocks">
								<?php echo apply_filters('the_content', $content); ?>
							</div>
						<?php
						endif;
						?>
                    </div>
                <?php
                endforeach;
            endif;
            ?>
            </div>
        </section>
        <?php
    });

