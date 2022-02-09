<?php
/**
 * VC Widget Tag Cloud config
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$tag_taxonomies = array();
if ( 'vc_edit_form' === vc_post_param( 'action' ) && vc_verify_admin_nonce() ) {
	$taxonomies = get_taxonomies();
	if ( is_array( $taxonomies ) && ! empty( $taxonomies ) ) {
		foreach ( $taxonomies as $taxonomy ) {
			$tax = get_taxonomy( $taxonomy );
			if ( ( is_object( $tax ) && ( ! $tax->show_tagcloud || empty( $tax->labels->name ) ) ) || ! is_object( $tax ) ) {
				continue;
			}
			if ( $taxonomy === 'link_category' ) {
				continue;
			}
			$tag_taxonomies[ $tax->labels->name ] = esc_attr( $taxonomy );
		}
	}
}
vc_map(array(
	'name' => 'WP ' . esc_html__('Tag Cloud', 'uncode-core') ,
	'base' => 'vc_wp_tagcloud',
	'icon' => 'fa fa-wordpress',
	'class' => 'wpb_vc_wp_widget',
	'weight' => - 50,
	'category' => array(
		esc_html__('WordPress Widgets', 'uncode-core') ,
	),
	'description' => esc_html__('Widgets', 'uncode-core') ,
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
		array(
			'type' => 'dropdown',
			'heading' => esc_html__('Taxonomy', 'uncode-core') ,
			'param_name' => 'taxonomy',
			'value' => $tag_taxonomies,
			'admin_label' => true
		) ,
		$add_widget_style,
		$add_widget_collapse,
		$add_widget_collapse_tablet,
		$add_widget_style_no_separator,
		$add_widget_style_title_typo,
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
