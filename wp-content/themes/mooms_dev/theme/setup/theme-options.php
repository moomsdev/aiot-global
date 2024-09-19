<?php

/**
 * Theme Options.
 *
 * Here, you can register Theme Options using the Carbon Fields library.
 *
 * @link    https://carbonfields.net/docs/containers-theme-options/
 *
 * @package WPEmergeCli
 */

use Carbon_Fields\Container\Container;
use Carbon_Fields\Field\Field;

$optionsPage = Container::make('theme_options', __('Theme Options', 'gaumap'))
	->set_page_file('app-theme-options.php')
	->add_tab(__('Branding | Thương hiệu', 'gaumap'), [
		Field::make('image', 'logo' . currentLanguage(), __('Logo', 'gaumap'))->set_width(33.33),
		Field::make('image', 'hinh_anh_mac_dinh' . currentLanguage(), __('Default image | Hình ảnh mặc định', 'gaumap'))->set_width(33.33),
	])
	->add_tab(__('Contact | Liên hệ', 'gaumap'), [
		Field::make('html', 'info', __('', 'gaumap'))
			->set_html('----<i> Information | Thông tin </i>----'),
		Field::make('text', 'company' . currentLanguage(), __('', 'gaumap'))->set_width(50)
			->set_attribute('placeholder', 'Company | Công ty'),
		Field::make('text', 'address' . currentLanguage(), __('', 'gaumap'))->set_width(50)
			->set_attribute('placeholder', 'Address | Địa chỉ'),
		Field::make('text', 'email' . currentLanguage(), __('', 'gaumap'))->set_width(50)
			->set_attribute('placeholder', 'Email'),
		Field::make('text', 'phone_number' . currentLanguage(), __('', 'gaumap'))->set_width(50)
			->set_attribute('placeholder', 'Phone number | Số điện thoại'),
		Field::make('html', 'socials', __('', 'gaumap'))
			->set_html('----<i> Socials | Mạng xã hội </i>----'),
		Field::make('text', 'facebook' . currentLanguage(), __('', 'gaumap'))->set_width(33.33)
			->set_attribute('placeholder', 'facebook'),
		Field::make('text', 'instagram' . currentLanguage(), __('', 'gaumap'))->set_width(33.33)
			->set_attribute('placeholder', 'instagram'),
		Field::make('text', 'twitter' . currentLanguage(), __('', 'gaumap'))->set_width(33.33)
			->set_attribute('placeholder', 'twitter'),
	])
	->add_tab(__('Scripts', 'gaumap'), [
		Field::make('header_scripts', 'crb_header_script', __('Header Script', 'app')),
		Field::make('footer_scripts', 'crb_footer_script', __('Footer Script', 'app')),
	]);

/**
 * homepage fields
 */
Container::make('post_meta', __('NHẬP THÔNG TIN CÁC BLOCKS', 'gaumap'))
	->set_context('carbon_fields_after_title') // normal, advanced, side or carbon_fields_after_title
	->where('post_type', '=', 'page')
	->where('post_template', '=', 'page_templates/homepage_template.php')
	->add_fields([
		/**
		 * Sliders
		 */
		Field::make('separator', 'slider_spt', __('Slider block', 'gaumap'))->set_width(20),
		Field::make('complex', 'sliders', __('Thêm hình ảnh:', 'gaumap'))->set_width(80)
			->set_layout('tabbed-vertical')
			->add_fields([
				Field::make('image', 'img', __('Hình ảnh', 'gaumap'))->set_width(20),
				Field::make('text', 'name', __('Tên', 'gaumap'))->set_width(20),
				Field::make('text', 'url', __('Đường dẫn (nếu có)', 'gaumap'))->set_width(60),
			])->set_header_template('<% if (name) { %><%- name %><% } %>'),
		Field::make('text', 'slider_content_1', __('', 'gaumap'))->set_width(33.33)
			->set_attribute('placeholder', 'Hỗ trợ tư vấn 24/7')
			->set_default_value('Hỗ trợ tư vấn 24/7'),
		Field::make('text', 'slider_content_2', __('', 'gaumap'))->set_width(33.33)
			->set_attribute('placeholder', 'Đội ngũ nhân viên chuyên nghiệp')
			->set_default_value('Đội ngũ nhân viên chuyên nghiệp'),
		Field::make('text', 'slider_content_3', __('', 'gaumap'))->set_width(33.33)
			->set_attribute('placeholder', 'Sử dụng trang thiết bị hiện đại')
			->set_default_value('Sử dụng trang thiết bị hiện đại'),

		/**
		 * Giới thiệu về nhần viên
		 */
		Field::make('checkbox', 'crb_staff', __('Hiển thị block ?', 'gaumap'))->set_width(20)
			->set_default_value('yes'),
		Field::make('separator', 'staff_spt', __('Giới thiệu về nhần viên', 'gaumap'))->set_width(80),
		Field::make('image', 'staff_bg', __('Hình nền', 'gaumap'))->set_width(30),
		Field::make('text', 'staff_title', __('', 'gaumap'))->set_width(70)
			->set_attribute('placeholder', 'Tiêu đề')
			->set_default_value('Nhân viên'),
		Field::make('rich_text', 'staff_content', __('Nội dung', 'gaumap')),
		Field::make('text', 'staff_1', __('', 'gaumap'))->set_width(33.33)
			->set_attribute('placeholder', 'Có kinh nghiệm & đáng tin cậy')
			->set_default_value('Có kinh nghiệm & đáng tin cậy'),
		Field::make('text', 'staff_2', __('', 'gaumap'))->set_width(33.33)
			->set_attribute('placeholder', 'Giao tiếp tiếng Anh')
			->set_default_value('Giao tiếp tiếng Anh'),
		Field::make('text', 'staff_3', __('', 'gaumap'))->set_width(33.33)
			->set_attribute('placeholder', 'Được đào tạo & chuyên nghiệp ')
			->set_default_value('Được đào tạo & chuyên nghiệp '),

		/**
		 * Slider Báo chí
		 */
		Field::make('checkbox', 'crb_slider_news', __('Hiển thị block ?', 'gaumap'))->set_width(20)
			->set_default_value('yes'),
		Field::make('separator', 'slider_news_spt', __('Slider Báo chí', 'gaumap'))->set_width(80),
		Field::make('text', 'slider_news_title', __('Tiêu đề', 'gaumap'))
			->set_attribute('placeholder', 'Báo chí nói về <span>viethomecare</span>')
			->set_default_value('<span>Báo chí</span> nói về viethomecare'),
		Field::make('textarea', 'slider_news_desc', __('Mô tả ngắn', 'gaumap')),
		Field::make('complex', 'sliders_news', __('Thêm hình ảnh:', 'gaumap'))
			->set_layout('tabbed-horizontal')
			->add_fields([
				Field::make('image', 'img', __('Hình ảnh', 'gaumap'))->set_width(30),
				Field::make('text', 'name', __('Tên', 'gaumap'))->set_width(70),
				Field::make('text', 'url', __('Đường dẫn (nếu có)', 'gaumap')),
			])->set_header_template('<% if (name) { %><%- name %><% } %>'),

		/**
		 * Khách hàng của VIETHOMECARE
		 */
		Field::make('checkbox', 'ckb_client', __('Hiển thị block ?', 'gaumap'))->set_width(20)
			->set_default_value('yes'),
		Field::make('separator', 'client_spt', __('Khách hàng của VIETHOMECARE', 'gaumap'))->set_width(80),
		Field::make('text', 'client_title', __('Tiêu đề', 'gaumap'))
			->set_attribute('placeholder', 'Khách hàng của <span>viethomecare</span>')
			->set_default_value('Khách hàng của <span>viethomecare</span>'),
		Field::make('textarea', 'client_desc', __('Mô tả ngắn', 'gaumap')),
		Field::make('complex', 'clients', __('Thêm khách hàng:', 'gaumap'))
			->set_layout('tabbed-vertical')
			->add_fields([
				Field::make('image', 'img', __('Hình ảnh', 'gaumap'))->set_width(25),
				Field::make('text', 'name', __('Tên', 'gaumap'))->set_width(40),
				Field::make('text', 'url', __('Đường dẫn (nếu có)', 'gaumap'))->set_width(35),
			])->set_header_template('<% if (name) { %><%- name %><% } %>'),
	]);
