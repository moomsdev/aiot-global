<?php
use Carbon_Fields\Block;
use Carbon_Fields\Field;

    Block::make(__('Banner Block', 'gaumap'))
    ->add_fields([
        Field::make('select', 'type_banner', __('Type banner', 'gaumap')) ->set_width(20)
            ->set_default_value('image')
            ->set_options([
                'image' => 'Image',
                'video' => 'Video',
            ]),

        //Type image
        Field::make('image', 'image_banner', __('Image banner', 'gaumap')) ->set_width(80)
            ->set_conditional_logic([
                [
                    'field' => 'type_banner',
                    'value' => 'image',
                    'compare' => '=',
                ],
            ]),

        //Type video
        Field::make('select', 'type_video', __('Type video', 'gaumap')) ->set_width(20)
            ->set_options([
                'embed' => 'Embed link',
                'upload' => 'Upload',
            ])
            ->set_default_value('embed')
            ->set_conditional_logic([
                [
                    'field' => 'type_banner',
                    'value' => 'video',
                    'compare' => '=',
                ],
            ]),

        //video upload
        Field::make('file', 'video_upload', __('Video banner', 'gaumap')) ->set_width(60)
        ->set_conditional_logic([
            'relation' => 'AND',
            [
                'field' => 'type_banner',
                'value' => 'video',
                'compare' => '=',
            ],
            [
                'field' => 'type_video',
                'value' => 'upload',
                'compare' => '=',
            ],
        ]),
        //Video embed
        Field::make('text', 'video_embed', __('Video banner', 'gaumap')) ->set_width(60)
        ->set_conditional_logic([
            'relation' => 'AND',
            [
                'field' => 'type_banner',
                'value' => 'video',
                'compare' => '=',
            ],
            [
                'field' => 'type_video',
                'value' => 'embed',
                'compare' => '=',
            ],
        ]),
    ])
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
    ?>
        <section class="banner-block">
            <?php
            $types = $fields['type_banner'];
            $img = $fields['image_banner'];
            $video = $fields['video_banner'];

            if ( $types == 'image' && $img ) :
            ?>
                <figure>
                    <img
                        src="<?= getImageUrlById($img, 1920, 1080); ?>" 
                        srcset="<?= getImageUrlById($img, 400, 300); ?> 400w,
                                <?= getImageUrlById($img, 800, 600); ?> 800w,
                                <?= getImageUrlById($img, 1200, 900); ?> 1200w"
                        sizes="(max-width: 600px) 400px, (max-width: 1200px) 800px, 1200px"
                        width="1920" height="1080"
                        alt="<?= !empty(get_post_meta($img, '_wp_attachment_image_alt', true)) ? esc_attr(get_post_meta($img, '_wp_attachment_image_alt', true)) : get_the_title($img); ?>"
                        loading="lazy"
                    >
                </figure>
            <?php
            elseif ( $types == 'video' && $video ) :
            ?>
                <figure>
                <video
                    src="<?= $video; ?>"
                    autoplay
                    loop
                    muted
                    playsinline
                    preload="auto"
                    width="1920" height="1080"
                ></video>
                </figure>
            <?php
            endif;
            ?>
        </section>
        <?php
    });

