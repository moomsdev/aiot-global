<?php
use Carbon_Fields\Block;
use Carbon_Fields\Field;

    Block::make(__('Media Block', 'gaumap'))
    ->add_fields([
        Field::make('separator', 'media_spt', __('Media block', 'gaumap')),
 
        Field::make('select', 'type_media', __('Type media', 'gaumap'))->set_width(20)
            ->set_attribute('data-step', '1')
            ->set_default_value('image')
            ->add_options([
                'image' => __('Image'),
                'video' => __('Video'),
            ]),

        //Type image
        Field::make('image', 'image_media', __('Image', 'gaumap')) ->set_width(80)
            ->set_conditional_logic([
                [
                    'field' => 'type_media',
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
                    'field' => 'type_media',
                    'value' => 'video',
                    'compare' => '=',
                ],
            ]),

        //video upload
        Field::make('file', 'video_upload', __('Video upload', 'gaumap')) ->set_width(60)
        ->set_conditional_logic([
            'relation' => 'AND',
            [
                'field' => 'type_media',
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
        Field::make('text', 'video_embed', __('Video from URL', 'gaumap')) ->set_width(60)
        ->set_conditional_logic([
            'relation' => 'AND',
            [
                'field' => 'type_media',
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
            $types = $fields['type_media'];
            $img = $fields['image_media'];
            $type_video = $fields['type_video'];
            $videoUpload = $fields['video_upload'];
            $videoEmbed = $fields['video_embed'];

            if ( $types == 'image' && $img ) :
            ?>
                <figure class="media">
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
            elseif ( $types == 'video' && $type_video == 'upload' ) :
            ?>
                <figure>
                <video
                    src="<?= $videoUpload; ?>"
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

        <section class="welcome">
            <div class="mm-container-fluid">
                <div class="scroll-circle">
                    <svg viewBox="0 0 200 200">
                        <path id="circlePath" d="M100,100 m-75,0 a75,75 0 1,1 150,0 a75,75 0 1,1 -150,0" fill="none"/>
                        <text>
                            <textPath href="#circlePath" startOffset="0">
                                Scroll down - Scroll down - Scroll down - Scroll down -
                            </textPath>
                        </text>
                    </svg>
                    <div class="arrow"></div>
                </div>
                <div class="welcome-aiot">Welcome to AIOT-global</div>
            </div> 
        </section>
        <?php
    });

