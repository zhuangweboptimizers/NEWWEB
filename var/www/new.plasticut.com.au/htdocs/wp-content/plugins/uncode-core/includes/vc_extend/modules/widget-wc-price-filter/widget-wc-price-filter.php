<?php
/**
 * VC Widget WC price filter config
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

vc_map(array(
	'name' => esc_html__('Filter Products by Price', 'uncode-core') ,
	'base' => 'uncode_woocommerce_widget_price_filter',
	'icon' => 'icon-wpb-woocommerce',
	'weight' => -200,
	'category' => esc_html__('WooCommerce Widgets', 'uncode-core') ,
	'description' => esc_html__('Display a slider to filter products in your store by price.', 'woocommerce') ,
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__('Title', 'uncode-core') ,
			'param_name' => 'title',
			'description' => esc_html__('What text use as a widget title. Leave blank to use default widget title.', 'uncode-core')
		) ,
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Hide Title', 'uncode-core') ,
			'param_name' => 'hide_title',
			'description' => esc_html__('Hide the widget title and avoid to display the default title when you leave it empty.', 'uncode-core') ,
			'value' => array(
				esc_html__('Yes, please', 'uncode-core') => 'yes'
			)
		) ,
		$add_widget_style,
		$add_widget_collapse,
		$add_widget_collapse_tablet,
		$add_widget_style_no_separator,
		$add_widget_style_title_typo,
		array(
			'type' => 'checkbox',
			'heading' => esc_html__('Remove Accent Color', 'uncode-core') ,
			'param_name' => 'widget_style_remove_accent',
			'description' => esc_html__('Removes the accent color from the price slider.', 'uncode-core') ,
			'value' => array(
				esc_html__('Yes, please', 'uncode-core') => 'yes'
			),
			"dependency" => array(
				'element' => "use_widget_style",
				'value' => 'yes'
			) ,
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
			'description' => esc_html__('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your CSS file.', 'uncode-core'),
			"group" => esc_html__("Extra", 'uncode-core') ,
		)
	)
));
