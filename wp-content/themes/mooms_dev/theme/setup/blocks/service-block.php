<?php
use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Service Block', 'gaumap'))
->add_fields([
    Field::make('separator', 'service_spt', __('Service block', 'gaumap'))->set_width(70),
    Field::make('html', 'service_guide')
        ->set_html(
             '<button class="service-guide button">Hướng dẫn nhập</button>'
        )
        ->set_width(30),
    Field::make('text', 'service_title', __('', 'gaumap'))
        ->set_width(20)
        ->set_attribute('placeholder', 'Title block')
        ->set_attribute('data-step', '1')
        ->set_attribute('data-intro', 'Nhập tiêu đề'),
        Field::make('text', 'service_conten', __('', 'gaumap'))
        ->set_width(20)
        ->set_attribute('placeholder', 'Content block')
        ->set_attribute('data-step', '2')
        ->set_attribute('data-intro', 'Nhập Nội dung'),
        Field::make('text', 'service_btn', __('', 'gaumap'))
        ->set_width(20)
        ->set_attribute('placeholder', 'url')
        ->set_attribute('data-step', '3')
        ->set_attribute('data-intro', 'Nhập Nội dung'),
  
  
])
->set_render_callback(function ($fields, $attributes, $inner_blocks) {
    // Render code if needed
});
