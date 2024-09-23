<?php
use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Intro Block', 'gaumap')) 
->add_fields([
    Field::make('separator', 'intro_spt', __('Intro block', 'gaumap'))->set_width(70),
    Field::make('html', 'intro_guide')
        ->set_html('<button class="intro-guide button">Hướng dẫn nhập</button>')
        ->set_width(30),
    Field::make('text', 'intro_title', __('', 'gaumap'))
        ->set_width(20)
        ->set_attribute('placeholder', 'Title block')
        ->set_attribute('data-step', '1')
        ->set_attribute('data-intro', 'Nhập tiêu đề'),
    Field::make('checkbox', 'reversed', __('Reversed', 'gaumap'))->set_width(20)
        ->set_option_value('reversed')
        ->set_attribute('data-step', '2')
        ->set_attribute('data-intro', 'Click chọn để đảo ngược vị trí của Media (Slider, ảnh, video) và nội dung'),
])
->set_render_callback(function ($fields, $attributes, $inner_blocks) {
?>


<?php
});
