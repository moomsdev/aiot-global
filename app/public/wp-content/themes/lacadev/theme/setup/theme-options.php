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

$optionsPage = Container::make('theme_options', __('Laca Theme', 'laca'))
	->set_page_file('app-theme-options.php')
	->set_page_menu_position(3)
	// Branding
	->add_tab(__('Branding | Thương hiệu', 'laca'), [
		Field::make('color', 'primary_color' . currentLanguage(), __('Primary Color', 'laca'))
			->set_width(50)
			->set_default_value('#d85040'),
		Field::make('color', 'secondary_color' . currentLanguage(), __('Secondary Color', 'laca'))
			->set_width(50)
			->set_default_value('#5384ed'),

		Field::make('image', 'logo' . currentLanguage(), __('Logo', 'laca'))
			->set_width(33.33),
		Field::make('image', 'footer_logo' . currentLanguage(), __('Footer Logo', 'laca'))
			->set_width(33.33),
		Field::make('image', 'hinh_anh_mac_dinh' . currentLanguage(), __('Default image | Hình ảnh mặc định', 'laca'))
			->set_width(33.33),
	])

	// Contact
	->add_tab(__('Contact | Liên hệ', 'laca'), [
		Field::make('html', 'info', __('', 'laca'))
			->set_html('----<i> Information | Thông tin </i>----'),
		Field::make('select', 'page_contact' . currentLanguage(), __('Contact page | Trang liên hệ', 'laca'))
			->set_options(function () {
				return getListAllPages();
			}),
		Field::make('text', 'company' . currentLanguage(), __('', 'laca'))
			->set_width(50)
			->set_attribute('placeholder', 'Company | Công ty'),
		Field::make('text', 'address' . currentLanguage(), __('', 'laca'))
			->set_width(50)
			->set_attribute('placeholder', 'Address | Địa chỉ'),
		Field::make('textarea', 'googlemap' . currentLanguage(), __('', 'laca'))
			->set_attribute('placeholder', 'Google map'),
		Field::make('text', 'email' . currentLanguage(), __('', 'laca'))
			->set_width(33.33)
			->set_attribute('placeholder', 'Email'),
		Field::make('text', 'phone_number' . currentLanguage(), __('', 'laca'))
			->set_width(33.33)
			->set_attribute('placeholder', 'Phone number | Số điện thoại'),
		Field::make('text', 'hour_working' . currentLanguage(), __('', 'laca'))
			->set_width(33.33)
			->set_attribute('placeholder', 'Hour working | Giờ làm việc'),
		Field::make('html', 'socials', __('', 'laca'))
			->set_html('----<i> Socials | Mạng xã hội </i>----'),
		Field::make('text', 'facebook' . currentLanguage(), __('', 'laca'))
			->set_width(33.33)
			->set_attribute('placeholder', 'facebook'),
		Field::make('text', 'instagram' . currentLanguage(), __('', 'laca'))
			->set_width(33.33)
			->set_attribute('placeholder', 'instagram'),
		Field::make('text', 'twitter' . currentLanguage(), __('', 'laca'))
			->set_width(33.33)
			->set_attribute('placeholder', 'twitter'),
	])

	// Footer
	->add_tab(__('Footer', 'laca'), [
		Field::make('text', 'contact_label' . currentLanguage(), __('', 'laca'))
			->set_width(30)
			->set_attribute('placeholder', 'Contact label | Nhãn liên hệ'),
		Field::make('textarea', 'contact_message' . currentLanguage(), __('', 'laca'))
			->set_width(70)
			->set_attribute('placeholder', 'Contact description | Mô tả liên hệ'),
		Field::make('text', 'copyright' . currentLanguage(), __('', 'laca'))
			->set_attribute('placeholder', 'Copyright | Bản quyền'),
	])

	// Scripts
	->add_tab(__('Scripts', 'laca'), [
		Field::make('header_scripts', 'crb_header_script', __('Header Script', 'laca')),
		Field::make('footer_scripts', 'crb_footer_script', __('Footer Script', 'laca')),
	]);
