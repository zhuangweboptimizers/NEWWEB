<?php
/**
 * VC Heading config
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$text_color_options = uncode_core_vc_params_get_advanced_color_options( 'text_color', esc_html__("Heading color", 'uncode-core'), esc_html__("Specify heading color. NB. Please note that this option does not override the link color but applies to the plain text.", 'uncode-core'), esc_html__('General', 'uncode-core'), $uncode_colors, array( 'default_label' => true ) );
list( $add_text_color_type, $add_text_color, $add_text_color_solid, $add_text_color_gradient ) = $text_color_options;

$new_css_animation =  array (
	esc_html__('Lines curtain', 'uncode-core') => 'curtain',
	esc_html__('Words curtain', 'uncode-core') => 'curtain-words',
	esc_html__('Words sliding', 'uncode-core') => 'single-slide',
	esc_html__('Words sliding reverse', 'uncode-core') => 'single-slide-opposite',
	esc_html__('Letters curtain', 'uncode-core') => 'single-curtain',
	esc_html__('Letters typewriter', 'uncode-core') => 'typewriter',
	esc_html__('Parallax', 'uncode-core') => 'parallax',
	esc_html__('Marquee Auto (right to left)', 'uncode-core') => 'marquee',
	esc_html__('Marquee Auto (left to right)', 'uncode-core') => 'marquee-opposite',
	esc_html__('Marquee Scroll (right to left)', 'uncode-core') => 'marquee-scroll',
	esc_html__('Marquee Scroll (left to right)', 'uncode-core') => 'marquee-scroll-opposite',
);
$old_css_animation = $add_column_css_animation;
$old_css_animation = $old_css_animation['value'];
$add_text_css_animation = $add_css_animation;
$add_text_css_animation['value'] = array_merge($old_css_animation, $new_css_animation);

$add_text_size = uncode_core_vc_params_get_text_size( 'sub_lead', esc_html__("Subheading text size", 'uncode-core'), esc_html__("General", 'uncode-core') );

$add_parallax_options = uncode_core_vc_params_get_parallax_options();
$add_parallax_centered_options = uncode_core_vc_params_get_parallax_centered_options();

vc_map(array(
	'name' => esc_html__('Heading', 'uncode-core') ,
	'base' => 'vc_custom_heading',
	'icon' => 'fa fa-header',
	'php_class_name' => 'uncode_generic_admin',
	'weight' => 9800,
	'show_settings_on_create' => true,
	'shortcode' => true,
	'category' => array(
		esc_html__('Essentials', 'uncode-core') ,
		esc_html__('Dynamic', 'uncode-core') ,
		esc_html__('WooCommerce Product', 'uncode-core') ,
	),
	'description' => esc_html__('Heading title name price excerpt subheading product description text', 'uncode-core') ,
	'params' => array(
		array(
			'type' => 'uncode_shortcode_id',
			'heading' => esc_html__('Unique ID', 'uncode-core') ,
			'param_name' => 'uncode_shortcode_id',
			'description' => '' ,
			'group' => esc_html__('General', 'uncode-core')
		) ,
		array(
			'type' => 'textarea_html',
			'heading' => esc_html__('Heading text', 'uncode-core') ,
			'param_name' => 'content',
			'admin_label' => true,
			'value' => esc_html__('This is a custom heading element.', 'uncode-core') ,
			//'description' => esc_html__('Enter your content. If you are using non-latin characters be sure to activate them under Settings/Visual Composer/General Settings.', 'uncode-core') ,
			'group' => esc_html__('General', 'uncode-core'),
			'dependency' => array(
				'element' => 'auto_text',
				'is_empty' => true,
			) ,
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Dynamic heading", 'uncode-core') ,
			"param_name" => "auto_text",
			"description" => esc_html__("Activate this to pull dynamic text content (title or excerpt).", 'uncode-core') ,
			'group' => esc_html__('General', 'uncode-core') ,
			'admin_label' => true,
			"value" => array(
				esc_html__('No', 'uncode-core') => '',
				esc_html__('Get the Title', 'uncode-core') => 'yes',
				esc_html__('Get the Excerpt or Description', 'uncode-core') => 'excerpt',
				esc_html__('Get the Price for Single Product (WooCommerce)', 'uncode-core') => 'price',
			) ,
		) ,
		$add_text_color_type,
		$add_text_color,
		$add_text_color_solid,
		$add_text_color_gradient,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Heading semantic", 'uncode-core') ,
			"param_name" => "heading_semantic",
			"description" => esc_html__("Specify element tag.", 'uncode-core') ,
			"value" => $heading_semantic,
			'std' => 'h2',
			'group' => esc_html__('General', 'uncode-core')
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Heading font family", 'uncode-core') ,
			"param_name" => "text_font",
			"description" => esc_html__("Specify heading font family.", 'uncode-core') ,
			"value" => $heading_font,
			'std' => '',
			"group" => esc_html__("General", 'uncode-core') ,
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Heading size", 'uncode-core') ,
			"param_name" => "text_size",
			"description" => esc_html__("Specify heading size.", 'uncode-core') ,
			'std' => 'h2',
			"value" => $heading_size,
			'group' => esc_html__('General', 'uncode-core')
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Heading weight", 'uncode-core') ,
			"param_name" => "text_weight",
			"description" => esc_html__("Specify heading weight.", 'uncode-core') ,
			"value" => $heading_weight,
			'std' => '',
			'group' => esc_html__('General', 'uncode-core')
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Heading transform", 'uncode-core') ,
			"param_name" => "text_transform",
			"description" => esc_html__("Specify the heading text transformation.", 'uncode-core') ,
			"value" => array(
				esc_html__('Default', 'uncode-core') => '',
				esc_html__('Uppercase', 'uncode-core') => 'uppercase',
				esc_html__('Lowercase', 'uncode-core') => 'lowercase',
				esc_html__('Capitalize', 'uncode-core') => 'capitalize'
			) ,
			"group" => esc_html__("General", 'uncode-core')
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Heading line height", 'uncode-core') ,
			"param_name" => "text_height",
			"description" => esc_html__("Specify heading line height.", 'uncode-core') ,
			"value" => $heading_height,
			'group' => esc_html__('General', 'uncode-core')
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Heading letter spacing", 'uncode-core') ,
			"param_name" => "text_space",
			"description" => esc_html__("Specify heading letter spacing.", 'uncode-core') ,
			"value" => $heading_space,
			'group' => esc_html__('General', 'uncode-core')
		) ,
		array(
			"type" => 'dropdown',
			"heading" => esc_html__("Heading italic", 'uncode-core') ,
			"param_name" => "text_italic",
			"description" => esc_html__("Transform the heading to italic.", 'uncode-core') ,
			"value" => array(
				esc_html__('Normal', 'uncode-core') => '',
				esc_html__('Italic', 'uncode-core') => 'yes',
			) ,
			"group" => esc_html__("General", 'uncode-core')
		) ,
		array(
			"type" => "dropdown",
			"heading" => esc_html__("Separator", 'uncode-core') ,
			"param_name" => "separator",
			"description" => esc_html__("Activate the separator. This will appear under the text.", 'uncode-core') ,
			"value" => array(
				esc_html__('None', 'uncode-core') => '',
				esc_html__('Under Heading', 'uncode-core') => 'yes',
				esc_html__('Under Subheading', 'uncode-core') => 'under',
				esc_html__('Over Heading', 'uncode-core') => 'over'
			) ,
			"group" => esc_html__("General", 'uncode-core'),
			'dependency' => array(
				'element' => 'auto_text',
				'value' => array(
					'',
					'yes',
					'excerpt',
				),
			) ,
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Separator colored", 'uncode-core') ,
			"param_name" => "separator_color",
			"description" => esc_html__("Color the separator with the accent color.", 'uncode-core') ,
			"value" => Array(
				'' => 'yes'
			) ,
			'dependency' => array(
				'element' => 'separator',
				'not_empty' => true,
			) ,
			"group" => esc_html__("General", 'uncode-core')
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Separator double space", 'uncode-core') ,
			"param_name" => "separator_double",
			"description" => esc_html__("Activate to increase the separator space.", 'uncode-core') ,
			"value" => Array(
				'' => 'yes'
			) ,
			'dependency' => array(
				'element' => 'separator',
				'not_empty' => true,
			) ,
			"group" => esc_html__("General", 'uncode-core')
		) ,
		array(
			'type' => 'textarea',
			'heading' => esc_html__('Subheading', 'uncode-core') ,
			"param_name" => "subheading",
			"description" => esc_html__("Add a subheading text.", 'uncode-core') ,
			"group" => esc_html__("General", 'uncode-core') ,
			'admin_label' => true,
			'dependency' => array(
				'element' => 'auto_text',
				'value' => array(
					'',
					'yes',
					'excerpt',
				),
			) ,
		) ,
		$add_text_size,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Subheading reduced space", 'uncode-core') ,
			"param_name" => "sub_reduced",
			"description" => esc_html__("Activate this to reduce the subheading top margin.", 'uncode-core') ,
			"value" => Array(
				esc_html__("Yes, please", 'uncode-core') => 'yes'
			) ,
			"group" => esc_html__("General", 'uncode-core') ,
			'dependency' => array(
				'element' => 'auto_text',
				'value' => array(
					'',
					'yes',
					'excerpt',
				),
			) ,
		) ,
		$add_text_css_animation,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Marquee Edge to Edge", 'uncode-core') ,
			"param_name" => "marquee_clone",
			"description" => esc_html__("Repeat the Marquee to cover the viewport.", 'uncode-core') ,
			"value" => Array(
				esc_html__("Yes, please", 'uncode-core') => 'yes'
			) ,
			'dependency' => array(
				'element' => 'css_animation',
				'value' => array(
					'marquee',
					'marquee-scroll',
					'marquee-opposite',
					'marquee-scroll-opposite',
				),
			) ,
			'group' => esc_html__('Animation', 'uncode-core') ,
		) ,

		$add_animation_speed,
		$add_animation_delay,
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Animation interval', 'uncode-core') ,
			'param_name' => 'interval_animation',
			'admin_label' => true,
			'value' => array(
				esc_html__('Default (ms 0)', 'uncode-core') => '',
				esc_html__('ms 20', 'uncode-core') => 20,
				esc_html__('ms 40', 'uncode-core') => 40,
				esc_html__('ms 60', 'uncode-core') => 60,
				esc_html__('ms 80', 'uncode-core') => 80,
				esc_html__('ms 100', 'uncode-core') => 100,
				esc_html__('ms 120', 'uncode-core') => 120,
				esc_html__('ms 140', 'uncode-core') => 140,
				esc_html__('ms 160', 'uncode-core') => 160,
				esc_html__('ms 180', 'uncode-core') => 180,
				esc_html__('ms 200', 'uncode-core') => 200,
				esc_html__('ms 250', 'uncode-core') => 250,
				esc_html__('ms 300', 'uncode-core') => 300,
				esc_html__('ms 350', 'uncode-core') => 350,
				esc_html__('ms 400', 'uncode-core') => 400,
				esc_html__('ms 450', 'uncode-core') => 450,
				esc_html__('ms 500', 'uncode-core') => 500,
			) ,
			'dependency' => array(
				'element' => 'css_animation',
				'value' => array(
					'curtain',
					'curtain-words',
					'single-curtain',
					'single-slide',
					'single-slide-opposite',
					'typewriter',
				),
			) ,
			'group' => esc_html__('Animation', 'uncode-core') ,
			'description' => esc_html__('Specify the interval between animations.', 'uncode-core')
		) ,
		$add_parallax_options,
		$add_parallax_centered_options,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Desktop", 'uncode-core') ,
			"param_name" => "desktop_visibility",
			"description" => esc_html__("Choose the visibiliy of the element in desktop layout mode (960px >).", 'uncode-core') ,
			'group' => esc_html__('Responsive', 'uncode-core') ,
			"value" => Array(
				'' => 'yes'
			) ,
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Tablet", 'uncode-core') ,
			"param_name" => "medium_visibility",
			"description" => esc_html__("Choose the visibiliy of the element in tablet layout mode (570px > < 960px).", 'uncode-core') ,
			'group' => esc_html__('Responsive', 'uncode-core') ,
			"value" => Array(
				'' => 'yes'
			) ,
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Mobile", 'uncode-core') ,
			"param_name" => "mobile_visibility",
			"description" => esc_html__("Choose the visibiliy of the element in mobile layout mode (< 570px).", 'uncode-core') ,
			'group' => esc_html__('Responsive', 'uncode-core') ,
			"value" => Array(
				'' => 'yes'
			) ,
		) ,
		array(
			"type" => 'checkbox',
			"heading" => esc_html__("Skew", 'uncode-core') ,
			"param_name" => "skew",
			"description" => esc_html__("Apply the Skew effect at the page scroll. NB. For performance reasons, this option is disabled while working with the Frontend Editor.", 'uncode-core') ,
			"value" => Array(
				esc_html__("Yes, please", 'uncode-core') => 'yes'
			) ,
			'group' => esc_html__('Extra', 'uncode-core') ,
		) ,
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Element ID', 'uncode-core') ,
			'param_name' => 'el_id',
			'description' => esc_html__('This value has to be unique. Change it in case it\'s needed.', 'uncode-core') ,
			"group" => esc_html__("Extra", 'uncode-core') ,
		) ,
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Extra class name', 'uncode-core') ,
			'param_name' => 'el_class',
			'description' => esc_html__('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your CSS file.', 'uncode-core') ,
			'group' => esc_html__('Extra', 'uncode-core')
		) ,
	) ,
));
