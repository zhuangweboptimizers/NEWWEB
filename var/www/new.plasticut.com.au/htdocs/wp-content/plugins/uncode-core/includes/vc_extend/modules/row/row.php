<?php
/**
 * VC Row config
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$back_color_options = uncode_core_vc_params_get_advanced_color_options( 'back_color', esc_html__("Background color", 'uncode-core'), esc_html__("Specify a background color for the row.", 'uncode-core'), esc_html__("Style", 'uncode-core'), $uncode_colors );
list( $add_back_color_type, $add_back_color, $add_back_color_solid, $add_back_color_gradient ) = $back_color_options;

$overlay_color_options = uncode_core_vc_params_get_advanced_color_options( 'overlay_color', esc_html__("Overlay color", 'uncode-core'), esc_html__("Specify an overlay color for the background.", 'uncode-core'), esc_html__("Style", 'uncode-core'), $uncode_colors );
list( $add_overlay_color_type, $add_overlay_color, $add_overlay_color_solid, $add_overlay_color_gradient ) = $overlay_color_options;

$border_color_options = uncode_core_vc_params_get_advanced_color_options( 'border_color', esc_html__("Border color", 'uncode-core'), esc_html__("Specify a border color.", 'uncode-core'), esc_html__("Custom", 'uncode-core'), $flat_uncode_colors_w_transp, array( 'flat' => true ) );
list( $add_border_color_type, $add_border_color, $add_border_color_solid ) = $border_color_options;

$shape_top_color_options = uncode_core_vc_params_get_advanced_color_options( 'shape_top_color', esc_html__("Shape color", 'uncode-core'), esc_html__("Select a solid color for the Shape Divider.", 'uncode-core'), esc_html__("Dividers", 'uncode-core'), $flat_uncode_colors_w_accent, array( 'flat' => true, 'dependency' => array( 'element' => 'enable_top_divider', 'value' => array( 'default', 'custom' ) ), 'tab' => array( 'element' => 'shape_dividers', 'value' => array( 'top' ) ) ) );
list( $add_shape_top_color_type, $add_shape_top_color, $add_shape_top_color_solid ) = $shape_top_color_options;

$shape_bottom_color_options = uncode_core_vc_params_get_advanced_color_options( 'shape_bottom_color', esc_html__("Shape color", 'uncode-core'), esc_html__("Select a solid color for the Shape Divider.", 'uncode-core'), esc_html__("Dividers", 'uncode-core'), $flat_uncode_colors_w_accent, array( 'flat' => true, 'dependency' => array( 'element' => 'enable_bottom_divider', 'value' => array( 'default', 'custom' ) ), 'tab' => array( 'element' => 'shape_dividers', 'value' => array( 'bottom' ) ) ) );
list( $add_shape_bottom_color_type, $add_shape_bottom_color, $add_shape_bottom_color_solid ) = $shape_bottom_color_options;

$row_params = array(
	array(
		'type' => 'uncode_shortcode_id',
		'heading' => esc_html__('Unique ID', 'uncode-core') ,
		'param_name' => 'uncode_shortcode_id',
		'description' => '' ,
		'group' => esc_html__('Aspect', 'uncode-core')
	) ,
	array(
		"type" => 'checkbox',
		"heading" => esc_html__("Container width", 'uncode-core') ,
		"param_name" => "unlock_row",
		"description" => esc_html__("Define the width of the container.", 'uncode-core') ,
		"value" => Array(
			'' => 'yes'
		) ,
		"std" => 'yes',
		"group" => esc_html__("Aspect", 'uncode-core')
	) ,
	array(
		"type" => 'checkbox',
		"heading" => esc_html__("Content width", 'uncode-core') ,
		"param_name" => "unlock_row_content",
		"description" => esc_html__("Define the width of the content area.", 'uncode-core') ,
		"value" => Array(
			'' => 'yes'
		) ,
		"group" => esc_html__("Aspect", 'uncode-core') ,
		'dependency' => array(
			'element' => 'unlock_row',
			'value' => 'yes'
		)
	) ,
	array(
		"type" => "type_numeric_slider",
		"heading" => esc_html__("Height", 'uncode-core') ,
		"param_name" => "row_height_percent",
		"min" => 0,
		"max" => 100,
		"step" => 1,
		"value" => 0,
		"description" => wp_kses(__("Set the row height with a percent value.<br>NB. This value is including the top and bottom padding.", 'uncode-core'), array( 'br' => array( ) ) ) ,
		"group" => esc_html__("Aspect", 'uncode-core') ,
	) ,
	array(
		'type' => 'textfield',
		'heading' => esc_html__("Minimum height", 'uncode-core') ,
		'param_name' => 'row_height_pixel',
		'description' => esc_html__("Insert the row minimum height in pixel.", 'uncode-core') ,
		"group" => esc_html__("Aspect", 'uncode-core') ,
	) ,
	array(
		"type" => 'checkbox',
		"heading" => esc_html__("Custom padding", 'uncode-core') ,
		"param_name" => "override_padding",
		"description" => esc_html__('Activate this to define custom paddings.', 'uncode-core') ,
		"group" => esc_html__("Aspect", 'uncode-core') ,
		"value" => array(
			'' => 'yes'
		)
	) ,
	array(
		"type" => "type_numeric_slider",
		"heading" => esc_html__("Left-Right padding", 'uncode-core') ,
		"param_name" => "h_padding",
		"min" => 0,
		"max" => 7,
		"step" => 1,
		"value" => 2,
		"description" => esc_html__("Set the left and right padding.", 'uncode-core') ,
		"group" => esc_html__("Aspect", 'uncode-core') ,
		"dependency" => Array(
			'element' => "override_padding",
			'value' => array(
				'yes'
			)
		) ,
	) ,
	array(
		"type" => "type_numeric_slider",
		"heading" => esc_html__("Top padding", 'uncode-core') ,
		"param_name" => "top_padding",
		"min" => 0,
		"max" => 7,
		"step" => 1,
		"value" => 2,
		"description" => esc_html__("Set the top padding.", 'uncode-core') ,
		"group" => esc_html__("Aspect", 'uncode-core') ,
		"dependency" => Array(
			'element' => "override_padding",
			'value' => array(
				'yes'
			)
		) ,
	) ,
	array(
		"type" => "type_numeric_slider",
		"heading" => esc_html__("Bottom padding", 'uncode-core') ,
		"param_name" => "bottom_padding",
		"min" => 0,
		"max" => 7,
		"step" => 1,
		"value" => 2,
		"description" => esc_html__("Set the bottom padding.", 'uncode-core') ,
		"group" => esc_html__("Aspect", 'uncode-core') ,
		"dependency" => array(
			'element' => "override_padding",
			'value' => array(
				'yes'
			)
		) ,
	) ,
	$add_back_color_type,
	$add_back_color,
	$add_back_color_solid,
	$add_back_color_gradient,
	array(
		"type" => "media_element",
		"heading" => esc_html__("Background media", 'uncode-core') ,
		"param_name" => "back_image",
		"value" => "",
		"description" => esc_html__("Specify a media from the Media Library.", 'uncode-core') ,
		"group" => esc_html__("Style", 'uncode-core')
	) ,
	array(
		"type" => 'checkbox',
		"heading" => esc_html__("Dynamic Background", 'uncode-core') ,
		"param_name" => "back_image_auto",
		"description" => esc_html__("Enable the Dynamic Background.", 'uncode-core') ,
		"value" => Array(
			'' => 'yes'
		) ,
		"group" => esc_html__("Style", 'uncode-core') ,
	),
	array(
		"type" => "dropdown",
		"heading" => esc_html__("Dynamic media", 'uncode-core') ,
		"param_name" => "back_image_option",
		"description" => esc_html__("Set the source for the Dynamic Background.", 'uncode-core') ,
		"group" => esc_html__("Style", 'uncode-core'),
		"value" => array(
			esc_html__('Featured Image', 'uncode-core') => '',
			esc_html__('Secondary Featured Image', 'uncode-core') => 'secondary',
		) ,
		"dependency" => array(
			'element' => "back_image_auto",
			'not_empty' => true
		) ,
	) ,
	$add_background_repeat,
	$add_background_attachment,
	$add_background_position,
	$add_background_size,
	array(
		"type" => 'checkbox',
		"heading" => esc_html__("Parallax", 'uncode-core') ,
		"param_name" => "parallax",
		"description" => esc_html__("Activate the Parallax effect. NB. Not available with Slides Scroll.", 'uncode-core') ,
		"value" => Array(
			esc_html__("Yes, please", 'uncode-core') => 'yes'
		) ,
		"group" => esc_html__("Style", 'uncode-core'),
		"dependency" => array(
			'element' => "back_image",
			'not_empty' => true
		) ,
	) ,
	array(
		"type" => "dropdown",
		"heading" => esc_html__("Zoom effect", 'uncode-core') ,
		"param_name" => "kburns",
		"description" => esc_html__("Activate the Zoom effect you prefer.", 'uncode-core') ,
		"group" => esc_html__("Style", 'uncode-core'),
		"value" => array(
			esc_html__('None', 'uncode-core') => '',
			esc_html__('Ken Burns', 'uncode-core') => 'yes',
			esc_html__('Zoom Out', 'uncode-core') => 'zoom',
			esc_html__('Magnetic', 'uncode-core') => 'magnetic'
		) ,
		"dependency" => array(
			'element' => "back_image",
			'not_empty' => true
		) ,
	) ,
	$add_overlay_color_type,
	$add_overlay_color,
	$add_overlay_color_solid,
	$add_overlay_color_gradient,
	array(
		"type" => "type_numeric_slider",
		"heading" => esc_html__("Overlay Opacity", 'uncode-core') ,
		"param_name" => "overlay_alpha",
		"min" => 0,
		"max" => 100,
		"step" => 1,
		"value" => 50,
		"description" => esc_html__("Set the transparency for the overlay.", 'uncode-core') ,
		"group" => esc_html__("Style", 'uncode-core') ,
	) ,
	array(
		"type" => "dropdown",
		"heading" => esc_html__("Overlay Blend Mode *", 'uncode-core') ,
		"param_name" => "overlay_color_blend",
		"description" => esc_html__("Specify a Blend Mode. NB. It does not work on IE and Edge.", 'uncode-core') ,
		"group" => esc_html__("Style", 'uncode-core') ,
		"value" => array(
			esc_html__('None', 'uncode-core') => '',
			esc_html__('Multiply', 'uncode-core') => 'multiply',
			esc_html__('Screen', 'uncode-core') => 'screen',
			esc_html__('Overlay', 'uncode-core') => 'overlay',
			esc_html__('Darken', 'uncode-core') => 'darken',
			esc_html__('Lighten', 'uncode-core') => 'lighten',
			esc_html__('Color dodge', 'uncode-core') => 'color-dodge',
			esc_html__('Color burn', 'uncode-core') => 'color-burn',
			esc_html__('Hard light', 'uncode-core') => 'hard-light',
			esc_html__('Soft light', 'uncode-core') => 'soft-light',
			esc_html__('Difference', 'uncode-core') => 'difference',
			esc_html__('Exclusion', 'uncode-core') => 'exclusion',
		) ,
		"dependency" => array(
			'element' => "overlay_color",
			'not_empty' => true
		) ,
	) ,
	array(
		"type" => 'checkbox',
		"heading" => esc_html__("Columns Equal Height", 'uncode-core') ,
		"param_name" => "equal_height",
		"description" => esc_html__("Activate this to have columns that are all equally tall, matching the height of the tallest.", 'uncode-core') ,
		"value" => Array(
			esc_html__("Yes, please", 'uncode-core') => 'yes'
		) ,
		"group" => esc_html__("Columns", 'uncode-core')
	) ,
	array(
		"type" => "type_numeric_slider",
		"heading" => esc_html__("Columns gap", 'uncode-core') ,
		"param_name" => "gutter_size",
		"min" => 0,
		"max" => 4,
		"step" => 1,
		"value" => 3,
		"description" => esc_html__("Set the columns gap.", 'uncode-core') ,
		"group" => esc_html__("Columns", 'uncode-core') ,
	) ,
	array(
		"type" => 'checkbox',
		"heading" => esc_html__("Content Width", 'uncode-core') ,
		"param_name" => "column_width_use_pixel",
		"edit_field_class" => 'vc_column row_height',
		"description" => 'Set this value if you want to constrain the column width.',
		"group" => esc_html__("Columns", 'uncode-core') ,
		"value" => array(
			'' => 'yes'
		),
	) ,
	array(
		"type" => "type_numeric_slider",
		"heading" => esc_html__("Content Width Value", 'uncode-core') ,
		"param_name" => "column_width_percent",
		"min" => 0,
		"max" => 100,
		"step" => 1,
		"value" => 100,
		"description" => esc_html__("Set the column width with a percent value.", 'uncode-core') ,
		"group" => esc_html__("Columns", 'uncode-core') ,
		'dependency' => array(
			'element' => 'column_width_use_pixel',
			'is_empty' => true,
		)
	) ,
	array(
		'type' => 'textfield',
		"heading" => esc_html__("Content Width Value", 'uncode-core') ,
		'param_name' => 'column_width_pixel',
		'description' => esc_html__("Insert the column width in pixel.", 'uncode-core') ,
		"group" => esc_html__("Columns", 'uncode-core') ,
		'dependency' => array(
			'element' => 'column_width_use_pixel',
			'not_empty' => true
		)
	) ,
	array(
		'type' => 'css_editor',
		'heading' => esc_html__('CSS', 'uncode-core') ,
		'param_name' => 'css',
		'group' => esc_html__('Custom', 'uncode-core')
	) ,
	array(
		"type" => 'checkbox',
		"heading" => esc_html__("Lateral border mobile", 'uncode-core') ,
		"param_name" => "preserve_border",
		"description" => esc_html__("By default, columns are stack on mobile, and lateral borders are hidden. Use this option to preserve custom lateral Borders on mobile.", 'uncode-core') ,
		'group' => esc_html__('Custom', 'uncode-core'),
		"value" => Array(
			'' => 'yes'
		) ,
	) ,
	array(
		"type" => 'checkbox',
		"heading" => esc_html__("Tablet", 'uncode-core') ,
		"param_name" => "preserve_border_tablet",
		"description" => esc_html__("Use this option to preserve lateral borders on tablet.", 'uncode-core') ,
		'group' => esc_html__('Custom', 'uncode-core'),
		"value" => Array(
			'' => 'yes'
		) ,
		"dependency" => array(
			'element' => "preserve_border",
			'not_empty' => true
		) ,
	) ,
	array(
		"type" => 'checkbox',
		"heading" => esc_html__("Mobile", 'uncode-core') ,
		"param_name" => "preserve_border_mobile",
		"description" => esc_html__("Use this option to preserve lateral borders on Mobile.", 'uncode-core') ,
		'group' => esc_html__('Custom', 'uncode-core'),
		"value" => Array(
			'' => 'yes'
		) ,
		"dependency" => array(
			'element' => "preserve_border",
			'not_empty' => true
		) ,
	) ,
	$add_border_color_type,
	$add_border_color,
	$add_border_color_solid,
	array(
		"type" => "dropdown",
		"heading" => esc_html__("Border style", 'uncode-core') ,
		"param_name" => "border_style",
		"description" => esc_html__("Specify a border style.", 'uncode-core') ,
		"group" => esc_html__("Custom", 'uncode-core') ,
		"value" => $border_style,
	) ,
	array(
		"type" => "type_numeric_slider",
		"heading" => esc_html__("Shift y-axis", 'uncode-core') ,
		"param_name" => "shift_y",
		"min" => - 5,
		"max" => 5,
		"step" => 1,
		"value" => 0,
		"description" => esc_html__("Set how much the element has to shift in the Y axis. This works on the margin-top property.", 'uncode-core') ,
		'group' => esc_html__('Off-grid', 'uncode-core')
	) ,
	array(
		"type" => 'checkbox',
		"heading" => esc_html__("Shift y-axis fixed", 'uncode-core') ,
		"param_name" => "shift_y_fixed",
		"description" => esc_html__("Deactive shift-y responsiveness.", 'uncode-core') ,
		'group' => esc_html__('Off-grid', 'uncode-core') ,
		"value" => Array(
			'' => 'yes'
		) ,
	) ,
	array(
		"type" => "type_numeric_slider",
		"heading" => esc_html__("Custom z-index", 'uncode-core') ,
		"param_name" => "z_index",
		"min" => 0,
		"max" => 10,
		"step" => 1,
		"value" => 0,
		"description" => esc_html__("Set a custom z-index to ensure the visibility of the element.", 'uncode-core') ,
		'group' => esc_html__('Off-grid', 'uncode-core')
	) ,
	array(
		"type" => "uncode_inner_tabs",
		"heading" => esc_html__("Shape Dividers", 'uncode-core') ,
		"param_name" => "shape_dividers",
		"description" => esc_html__("Enable Shape Dividers.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"tabs" => array(
			esc_html__('Top', 'uncode-core') => 'top',
			esc_html__('Bottom', 'uncode-core') => 'bottom',
		),
	) ,
	array(
		"type" => "dropdown",
		"heading" => esc_html__("Shape Divider", 'uncode-core') ,
		"param_name" => "enable_top_divider",
		'description' => esc_html__('Select \'Default\' to use a pre-made shape or select \'Custom\' to use your own SVG code Shape Divider.', 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"value" => array(
			esc_html__('Disabled', 'uncode-core') => '',
			esc_html__('Default', 'uncode-core') => 'default',
			esc_html__('Custom', 'uncode-core') => 'custom'
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'top',
			)
		) ,
	) ,
	array(
		"type" => "uncode_radio_image",
		"heading" => "Shape type",
		"description" => esc_html__("Select a pre-made Shape Divider.", 'uncode-core') ,
		"param_name" => "top_divider",
		"flip" => true,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"std" => "curve",
		"options" => array(
			"curve" => array( esc_html__('Curve', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/curve.svg"),
			"curve-opacity" => array( esc_html__('Curve opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/curve-opacity.svg"),
			"curve-asym" => array( esc_html__('Curve asym', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/curve-asym.svg"),
			"curve-asym-opacity" => array( esc_html__('Curve asym opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/curve-asym-opacity.svg"),
			"book" => array( esc_html__('Book', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/book.svg"),
			"spear" => array( esc_html__('Spear', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/spear.svg"),
			"arrow" => array( esc_html__('Arrow', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/arrow.svg"),
			"mountains" => array( esc_html__('Mountains', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/mountains.svg"),
			"clouds" => array( esc_html__('Clouds', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/clouds.svg"),
			"city" => array( esc_html__('City', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/city.svg"),
			"triangle" => array( esc_html__('Triangle', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/triangle.svg"),
			"pyramids" => array( esc_html__('Pyramids', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/pyramids.svg"),
			"tilt" => array( esc_html__('Tilt', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/tilt.svg"),
			"tilt-opacity" => array( esc_html__('Tilt opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/tilt-opacity.svg"),
			"ray-opacity" => array( esc_html__('Ray opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/ray.svg"),
			"fan-opacity" => array( esc_html__('Fan opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/fan.svg"),
			"swoosh" => array( esc_html__('Swoosh', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/swoosh.svg"),
			"swoosh-opacity" => array( esc_html__('Swoosh opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/swoosh-opacity.svg"),
			"waves" => array( esc_html__('Waves', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/waves.svg"),
			"waves-opacity" => array( esc_html__('Waves opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/waves-opacity.svg"),
			"hills" => array( esc_html__('Hills', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/hills.svg"),
			"hills-opacity" => array( esc_html__('Hills opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/hills-opacity.svg"),
			"flow" => array( esc_html__('Flow', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/flow.svg"),
			"flow-opacity" => array( esc_html__('Flow opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/flow-opacity.svg"),
			"step" => array( esc_html__('Step', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/step.svg"),
			"step_1_2" => array( esc_html__('Step 1/2', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/step_1_2.svg"),
			"step_2_3" => array( esc_html__('Step 2/3', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/step_2_3.svg"),
			"step_3_4" => array( esc_html__('Step 3/4', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/step_3_4.svg"),
			"gradient" => array( esc_html__('Gradient', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/gradient.svg"),
		),
		"dependency" => array(
			'element' => "shape_top_invert",
			'is_empty' => true
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'top'
			)
		) ,
	),
	array(
		"type" => "uncode_radio_image",
		"heading" => "Shape type",
		"description" => esc_html__("Select a pre-made Shape Divider.", 'uncode-core') ,
		"param_name" => "top_divider_inv",
		"group" => esc_html__("Dividers", 'uncode-core'),
		"std" => "curve",
		"options" => array(
			"curve" => array( esc_html__('Curve', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/curve-inv.svg"),
			"curve-opacity" => array( esc_html__('Curve opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/curve-opacity-inv.svg"),
			"curve-asym" => array( esc_html__('Curve asym', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/curve-asym-inv.svg"),
			"curve-asym-opacity" => array( esc_html__('Curve asym opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/curve-asym-opacity-inv.svg"),
			"book" => array( esc_html__('Book', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/book-inv.svg"),
			"spear" => array( esc_html__('Spear', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/spear-inv.svg"),
			"arrow" => array( esc_html__('Arrow', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/arrow-inv.svg"),
			"mountains" => array( esc_html__('Mountains', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/mountains-inv.svg"),
			"clouds" => array( esc_html__('Clouds', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/clouds-inv.svg"),
			"city" => array( esc_html__('City', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/city-inv.svg"),
			"triangle" => array( esc_html__('Triangle', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/triangle-inv.svg"),
			"pyramids" => array( esc_html__('Pyramids', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/pyramids-inv.svg"),
			"tilt" => array( esc_html__('Tilt', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/tilt-inv.svg"),
			"tilt-opacity" => array( esc_html__('Tilt opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/tilt-opacity-inv.svg"),
			"ray-opacity" => array( esc_html__('Ray opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/ray-inv.svg"),
			"fan-opacity" => array( esc_html__('Fan opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/fan-inv.svg"),
			"swoosh" => array( esc_html__('Swoosh', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/swoosh-inv.svg"),
			"swoosh-opacity" => array( esc_html__('Swoosh opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/swoosh-opacity-inv.svg"),
			"waves" => array( esc_html__('Waves', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/waves-inv.svg"),
			"waves-opacity" => array( esc_html__('Waves opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/waves-opacity-inv.svg"),
			"hills" => array( esc_html__('Hills', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/hills-inv.svg"),
			"hills-opacity" => array( esc_html__('Hills opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/hills-opacity-inv.svg"),
			"flow" => array( esc_html__('Flow', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/flow-inv.svg"),
			"flow-opacity" => array( esc_html__('Flow opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/flow-opacity-inv.svg"),
			"step_1_2" => array( esc_html__('Step 1/2', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/step_1_2-inv.svg"),
			"step_2_3" => array( esc_html__('Step 2/3', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/step_2_3-inv.svg"),
			"step_3_4" => array( esc_html__('Step 3/4', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/step_3_4-inv.svg"),
			"gradient" => array( esc_html__('Gradient', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/gradient-inv.svg"),
		),
		"dependency" => array(
			'element' => "shape_top_invert",
			'not_empty' => true
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'top'
			)
		) ,
	),
	array(
		"type" => "media_element",
		"heading" => esc_html__("Shape SVG code", 'uncode-core') ,
		"param_name" => "shape_top_custom",
		"value" => "",
		"is_custom_svg" => true,
		"description" => esc_html__("Select a custom SVG code.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"dependency" => array(
			'element' => "enable_top_divider",
			'value' => array(
				'custom'
			)
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'top'
			)
		) ,
	) ,
	array(
		"type" => "checkbox",
		"heading" => esc_html__("Shape inverted", 'uncode-core') ,
		"param_name" => "shape_top_invert",
		"description" => esc_html__("Select this option to use inverted shape.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"value" => array(
			'' => 'yes'
		),
		"dependency" => array(
			'element' => "enable_top_divider",
			'value' => array(
				'default'
			)
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'top',
			)
		) ,
	) ,
	array(
		"type" => "checkbox",
		"heading" => esc_html__("Shape flip", 'uncode-core') ,
		"param_name" => "shape_top_flip",
		"description" => esc_html__("Select to flip the Shape Divider.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"value" => array(
			'' => 'yes'
		),
		"dependency" => array(
			'element' => "enable_top_divider",
			'value' => array(
				'default',
				'custom'
			)
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'top'
			)
		) ,
	) ,
	array(
		"type" => 'checkbox',
		"heading" => esc_html__("Shape height unit", 'uncode-core') ,
		"param_name" => "shape_top_h_use_pixel",
		"edit_field_class" => 'vc_column row_height',
		"description" => esc_html__("Set a custom height for your Shape Divider.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"std" => 'yes',
		"dependency" => array(
			'element' => "enable_top_divider",
			'value' => array(
				'default',
				'custom'
			)
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'top'
			)
		) ,
	) ,
	array(
		"type" => "uncode_numeric_textfield",
		"heading" => esc_html__("Shape height value", 'uncode-core') ,
		"param_name" => "shape_top_height",
		"std" => 150,
		"description" => esc_html__("Set the shape height in pixel.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"dependency" => array(
			'element' => "shape_top_h_use_pixel",
			'is_empty' => true
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'top'
			)
		) ,
	) ,
	array(
		"type" => "type_numeric_slider",
		"heading" => esc_html__("Shape height value", 'uncode-core') ,
		"param_name" => "shape_top_height_percent",
		"min" => 0,
		"max" => 100,
		"step" => 1,
		"value" => 33,
		"description" => esc_html__("Set the shape height with a percent value.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"dependency" => array(
			'element' => "shape_top_h_use_pixel",
			'not_empty' => true
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'top'
			)
		) ,
	) ,
	$add_shape_top_color_type,
	$add_shape_top_color,
	$add_shape_top_color_solid,
	array(
		"type" => "type_numeric_slider",
		"heading" => esc_html__("Shape opacity", 'uncode-core') ,
		"param_name" => "shape_top_opacity",
		"min" => 1,
		"max" => 100,
		"step" => 1,
		"value" => 100,
		"description" => esc_html__("Set the shape opacity.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"dependency" => array(
			'element' => "enable_top_divider",
			'value' => array(
				'default',
				'custom'
			)
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'top'
			)
		) ,
	) ,
	array(
		"type" => "checkbox",
		"heading" => esc_html__("Shape ratio", 'uncode-core') ,
		"param_name" => "shape_top_ratio",
		"description" => esc_html__("Select to preserve the shape aspect ratio.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"value" => array(
			'' => 'yes'
		),
		"dependency" => array(
			'element' => "enable_top_divider",
			'value' => array(
				'default',
				'custom'
			)
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'top'
			)
		) ,
	) ,
	array(
		"type" => "checkbox",
		"heading" => esc_html__("Shape safe", 'uncode-core') ,
		"param_name" => "shape_top_safe",
		"description" => esc_html__("Select to position the Shape Divider relative to the contents to avoid overlaps.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"value" => array(
			'' => 'yes'
		),
		"dependency" => array(
			'element' => "shape_top_h_use_pixel",
			'is_empty' => true
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'top'
			)
		) ,
	) ,
	array(
		"type" => "type_numeric_slider",
		"heading" => esc_html__("Shape z-index", 'uncode-core') ,
		"param_name" => "shape_top_index",
		"min" => 0,
		"max" => 10,
		"step" => 1,
		"value" => 0,
		"description" => esc_html__("Set a Z-Index for the Shape Divider.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"dependency" => array(
			'element' => "enable_top_divider",
			'value' => array(
				'default',
				'custom'
			)
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'top'
			)
		) ,
	) ,
	array(
		"type" => "checkbox",
		"heading" => esc_html__("Shape responsive", 'uncode-core') ,
		"param_name" => "shape_top_responsive",
		"description" => esc_html__("Manage shapes on tablets and mobile devices.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"value" => array(
			'' => 'yes'
		),
		"dependency" => array(
			'element' => "enable_top_divider",
			'value' => array(
				'default',
				'custom'
			)
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'top'
			)
		) ,
	) ,
	array(
		"type" => "checkbox",
		"heading" => esc_html__("Shape tablet hidden", 'uncode-core') ,
		"param_name" => "shape_top_tablet_hide",
		"description" => esc_html__("Hide this shape on tablets.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"value" => array(
			'' => 'yes'
		),
		"dependency" => array(
			'element' => "shape_top_responsive",
			'not_empty' => true,
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'top'
			)
		) ,
	) ,
	array(
		"type" => "checkbox",
		"heading" => esc_html__("Shape mobile hidden", 'uncode-core') ,
		"param_name" => "shape_top_mobile_hide",
		"description" => esc_html__("Hide this shape on mobile devices.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"value" => array(
			'' => 'yes'
		),
		"dependency" => array(
			'element' => "shape_top_responsive",
			'not_empty' => true,
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'top'
			)
		) ,
	) ,
	array(
		"type" => "dropdown",
		"heading" => esc_html__("Shape Divider", 'uncode-core') ,
		"param_name" => "enable_bottom_divider",
		'description' => esc_html__('Select \'Default\' to use a pre-made shape or select \'Custom\' to use your own SVG code Shape Divider.', 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"value" => array(
			esc_html__('Disabled', 'uncode-core') => '',
			esc_html__('Default', 'uncode-core') => 'default',
			esc_html__('Custom', 'uncode-core') => 'custom'
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'bottom',
			)
		) ,
	) ,
	array(
		"type" => "uncode_radio_image",
		"heading" => "Shape type",
		"description" => esc_html__("Select a pre-made Shape Divider.", 'uncode-core') ,
		"param_name" => "bottom_divider",
		"group" => esc_html__("Dividers", 'uncode-core'),
		"std" => "curve",
		"options" => array(
			"curve" => array( esc_html__('Curve', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/curve.svg"),
			"curve-opacity" => array( esc_html__('Curve opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/curve-opacity.svg"),
			"curve-asym" => array( esc_html__('Curve asym', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/curve-asym.svg"),
			"curve-asym-opacity" => array( esc_html__('Curve asym opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/curve-asym-opacity.svg"),
			"book" => array( esc_html__('Book', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/book.svg"),
			"spear" => array( esc_html__('Spear', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/spear.svg"),
			"arrow" => array( esc_html__('Arrow', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/arrow.svg"),
			"mountains" => array( esc_html__('Mountains', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/mountains.svg"),
			"clouds" => array( esc_html__('Clouds', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/clouds.svg"),
			"city" => array( esc_html__('City', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/city.svg"),
			"triangle" => array( esc_html__('Triangle', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/triangle.svg"),
			"pyramids" => array( esc_html__('Pyramids', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/pyramids.svg"),
			"tilt" => array( esc_html__('Tilt', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/tilt.svg"),
			"tilt-opacity" => array( esc_html__('Tilt opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/tilt-opacity.svg"),
			"ray-opacity" => array( esc_html__('Ray opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/ray.svg"),
			"fan-opacity" => array( esc_html__('Fan opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/fan.svg"),
			"swoosh" => array( esc_html__('Swoosh', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/swoosh.svg"),
			"swoosh-opacity" => array( esc_html__('Swoosh opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/swoosh-opacity.svg"),
			"waves" => array( esc_html__('Waves', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/waves.svg"),
			"waves-opacity" => array( esc_html__('Waves opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/waves-opacity.svg"),
			"hills" => array( esc_html__('Hills', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/hills.svg"),
			"hills-opacity" => array( esc_html__('Hills opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/hills-opacity.svg"),
			"flow" => array( esc_html__('Flow', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/flow.svg"),
			"flow-opacity" => array( esc_html__('Flow opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/flow-opacity.svg"),
			"step" => array( esc_html__('Step', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/step.svg"),
			"step_1_2" => array( esc_html__('Step 1/2', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/step_1_2.svg"),
			"step_2_3" => array( esc_html__('Step 2/3', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/step_2_3.svg"),
			"step_3_4" => array( esc_html__('Step 3/4', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/step_3_4.svg"),
			"gradient" => array( esc_html__('Gradient', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/gradient.svg"),
		),
		"dependency" => array(
			'element' => "shape_bottom_invert",
			'is_empty' => true
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'bottom'
			)
		) ,
	),
	array(
		"type" => "uncode_radio_image",
		"heading" => "Shape type",
		"description" => esc_html__("Select a pre-made Shape Divider.", 'uncode-core') ,
		"param_name" => "bottom_divider_inv",
		"group" => esc_html__("Dividers", 'uncode-core'),
		"flip" => true,
		"std" => "curve",
		"options" => array(
			"curve" => array( esc_html__('Curve', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/curve-inv.svg"),
			"curve-opacity" => array( esc_html__('Curve opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/curve-opacity-inv.svg"),
			"curve-asym" => array( esc_html__('Curve asym', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/curve-asym-inv.svg"),
			"curve-asym-opacity" => array( esc_html__('Curve asym opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/curve-asym-opacity-inv.svg"),
			"book" => array( esc_html__('Book', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/book-inv.svg"),
			"spear" => array( esc_html__('Spear', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/spear-inv.svg"),
			"arrow" => array( esc_html__('Arrow', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/arrow-inv.svg"),
			"mountains" => array( esc_html__('Mountains', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/mountains-inv.svg"),
			"clouds" => array( esc_html__('Clouds', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/clouds-inv.svg"),
			"city" => array( esc_html__('City', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/city-inv.svg"),
			"triangle" => array( esc_html__('Triangle', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/triangle-inv.svg"),
			"pyramids" => array( esc_html__('Pyramids', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/pyramids-inv.svg"),
			"tilt" => array( esc_html__('Tilt', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/tilt-inv.svg"),
			"tilt-opacity" => array( esc_html__('Tilt opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/tilt-opacity-inv.svg"),
			"ray-opacity" => array( esc_html__('Ray opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/ray-inv.svg"),
			"fan-opacity" => array( esc_html__('Fan opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/fan-inv.svg"),
			"swoosh" => array( esc_html__('Swoosh', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/swoosh-inv.svg"),
			"swoosh-opacity" => array( esc_html__('Swoosh opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/swoosh-opacity-inv.svg"),
			"waves" => array( esc_html__('Waves', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/waves-inv.svg"),
			"waves-opacity" => array( esc_html__('Waves opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/waves-opacity-inv.svg"),
			"hills" => array( esc_html__('Hills', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/hills-inv.svg"),
			"hills-opacity" => array( esc_html__('Hills opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/hills-opacity-inv.svg"),
			"flow" => array( esc_html__('Flow', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/flow-inv.svg"),
			"flow-opacity" => array( esc_html__('Flow opacity', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/flow-opacity-inv.svg"),
			"step_1_2" => array( esc_html__('Step 1/2', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/step_1_2-inv.svg"),
			"step_2_3" => array( esc_html__('Step 2/3', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/step_2_3-inv.svg"),
			"step_3_4" => array( esc_html__('Step 3/4', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/step_3_4-inv.svg"),
			"gradient" => array( esc_html__('Gradient', 'uncode-core') => get_template_directory_uri()."/library/img/dividers/gradient-inv.svg"),
		),
		"dependency" => array(
			'element' => "shape_bottom_invert",
			'not_empty' => true
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'bottom'
			)
		) ,
	),
	array(
		"type" => "media_element",
		"heading" => esc_html__("Shape SVG code", 'uncode-core') ,
		"param_name" => "shape_bottom_custom",
		"value" => "",
		"is_custom_svg" => true,
		"description" => esc_html__("Select a custom SVG code.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"dependency" => array(
			'element' => "enable_bottom_divider",
			'value' => array(
				'custom'
			)
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'bottom'
			)
		) ,
	) ,
	array(
		"type" => "checkbox",
		"heading" => esc_html__("Shape inverted", 'uncode-core') ,
		"param_name" => "shape_bottom_invert",
		"description" => esc_html__("Select this option to use inverted shape.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"value" => array(
			'' => 'yes'
		),
		"dependency" => array(
			'element' => "enable_bottom_divider",
			'value' => array(
				'default'
			)
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'bottom',
			)
		) ,
	) ,
	array(
		"type" => "checkbox",
		"heading" => esc_html__("Shape flip", 'uncode-core') ,
		"param_name" => "shape_bottom_flip",
		"description" => esc_html__("Select to flip the Shape Divider.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"value" => array(
			'' => 'yes'
		),
		"dependency" => array(
			'element' => "enable_bottom_divider",
			'value' => array(
				'default',
				'custom'
			)
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'bottom'
			)
		) ,
	) ,
	array(
		"type" => 'checkbox',
		"heading" => esc_html__("Shape height unit", 'uncode-core') ,
		"param_name" => "shape_bottom_h_use_pixel",
		"edit_field_class" => 'vc_column row_height',
		"description" => esc_html__("Set a custom height for your Shape Divider.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"std" => 'yes',
		"dependency" => array(
			'element' => "enable_bottom_divider",
			'value' => array(
				'default',
				'custom'
			)
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'bottom'
			)
		) ,
	) ,
	array(
		"type" => "uncode_numeric_textfield",
		"heading" => esc_html__("Shape height value", 'uncode-core') ,
		"param_name" => "shape_bottom_height",
		"std" => 150,
		"description" => esc_html__("Set the shape height in pixel.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"dependency" => array(
			'element' => "shape_bottom_h_use_pixel",
			'is_empty' => true
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'bottom'
			)
		) ,
	) ,
	array(
		"type" => "type_numeric_slider",
		"heading" => esc_html__("Shape height value", 'uncode-core') ,
		"param_name" => "shape_bottom_height_percent",
		"min" => 0,
		"max" => 100,
		"step" => 1,
		"value" => 33,
		"description" => esc_html__("Set the shape height with a percent value.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"dependency" => array(
			'element' => "shape_bottom_h_use_pixel",
			'not_empty' => true
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'bottom'
			)
		) ,
	) ,
	$add_shape_bottom_color_type,
	$add_shape_bottom_color,
	$add_shape_bottom_color_solid,
	array(
		"type" => "type_numeric_slider",
		"heading" => esc_html__("Shape opacity", 'uncode-core') ,
		"param_name" => "shape_bottom_opacity",
		"min" => 1,
		"max" => 100,
		"step" => 1,
		"value" => 100,
		"description" => esc_html__("Set the shape opacity.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"dependency" => array(
			'element' => "enable_bottom_divider",
			'value' => array(
				'default',
				'custom'
			)
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'bottom'
			)
		) ,
	) ,
	array(
		"type" => "checkbox",
		"heading" => esc_html__("Shape ratio", 'uncode-core') ,
		"param_name" => "shape_bottom_ratio",
		"description" => esc_html__("Select to preserve the shape aspect ratio.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"value" => array(
			'' => 'yes'
		),
		"dependency" => array(
			'element' => "enable_bottom_divider",
			'value' => array(
				'default',
				'custom'
			)
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'bottom'
			)
		) ,
	) ,
	array(
		"type" => "checkbox",
		"heading" => esc_html__("Shape safe", 'uncode-core') ,
		"param_name" => "shape_bottom_safe",
		"description" => esc_html__("Select to position the Shape Divider relative to the contents to avoid overlaps.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"value" => array(
			'' => 'yes'
		),
		"dependency" => array(
			'element' => "shape_bottom_h_use_pixel",
			'is_empty' => true
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'bottom'
			)
		) ,
	) ,
	array(
		"type" => "type_numeric_slider",
		"heading" => esc_html__("Shape z-index", 'uncode-core') ,
		"param_name" => "shape_bottom_index",
		"min" => 0,
		"max" => 10,
		"step" => 1,
		"value" => 0,
		"description" => esc_html__("Set a Z-Index for the Shape Divider.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"dependency" => array(
			'element' => "enable_bottom_divider",
			'value' => array(
				'default',
				'custom'
			)
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'bottom'
			)
		) ,
	) ,
	array(
		"type" => "checkbox",
		"heading" => esc_html__("Shape responsive", 'uncode-core') ,
		"param_name" => "shape_bottom_responsive",
		"description" => esc_html__("Manage shapes on tablets and mobile devices.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"value" => array(
			'' => 'yes'
		),
		"dependency" => array(
			'element' => "enable_bottom_divider",
			'value' => array(
				'default',
				'custom'
			)
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'bottom'
			)
		) ,
	) ,
	array(
		"type" => "checkbox",
		"heading" => esc_html__("Shape tablet hidden", 'uncode-core') ,
		"param_name" => "shape_bottom_tablet_hide",
		"description" => esc_html__("Hide this shape on tablets.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"value" => array(
			'' => 'yes'
		),
		"dependency" => array(
			'element' => "shape_bottom_responsive",
			'not_empty' => true,
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'bottom'
			)
		) ,
	) ,
	array(
		"type" => "checkbox",
		"heading" => esc_html__("Shape mobile hidden", 'uncode-core') ,
		"param_name" => "shape_bottom_mobile_hide",
		"description" => esc_html__("Hide this shape on mobile devices.", 'uncode-core') ,
		"group" => esc_html__("Dividers", 'uncode-core'),
		"value" => array(
			'' => 'yes'
		),
		"dependency" => array(
			'element' => "shape_bottom_responsive",
			'not_empty' => true,
		) ,
		"tab" => array(
			'element' => "shape_dividers",
			'value' => array(
				'bottom'
			)
		) ,
	) ,
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
		"heading" => esc_html__("Inverted device order", 'uncode-core') ,
		"param_name" => "inverted_device_order",
		"description" => esc_html__("Use this option to invert the order of the first and last stacked columns on mobile inside the row.", 'uncode-core') ,
		'group' => esc_html__('Responsive', 'uncode-core') ,
		"value" => Array(
			'' => 'yes'
		) ,
	) ,
	array(
		"type" => 'checkbox',
		"heading" => esc_html__("Auto height mobile", 'uncode-core') ,
		"param_name" => "auto_height_device",
		"description" => esc_html__("Enable this option to remove the Aspect > Height percentage when using this Row as main Header in mobile.", 'uncode-core') ,
		'group' => esc_html__('Responsive', 'uncode-core') ,
		"value" => Array(
			'' => 'yes'
		) ,
	) ,
	array(
		"type" => 'checkbox',
		"heading" => esc_html__("Sticky", 'uncode-core') ,
		"param_name" => "sticky",
		"description" => esc_html__("Activate this to stick the element when scrolling. NB. It doesn't work on mobile and it's not compatible with the Off-Grid.", 'uncode-core') ,
		'group' => esc_html__('Extra', 'uncode-core') ,
		"value" => Array(
			'' => 'yes'
		) ,
	) ,
	array(
		"type" => 'checkbox',
		"heading" => esc_html__("Color Change", 'uncode-core') ,
		"param_name" => "changer_back_color",
		"description" => esc_html__("Enable this option to change the Background Colour and Skins when scrolling. NB. It doesn't work with Gradients, and it is not enabled when working with the Frontend Builder. When this option is enabled, it is recommended to assign a Background Color to all rows on the page.", 'uncode-core') ,
		'group' => esc_html__('Extra', 'uncode-core') ,
		"dependency" => array(
			'callback' => 'uncode_check_flat_color'
		) ,
		"value" => Array(
			esc_html__("Yes, please", 'uncode-core') => 'yes'
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
		'heading' => esc_html__('Section name', 'uncode-core') ,
		'param_name' => 'row_name',
		'description' => esc_html__('Required for the page Scroll option, this gives the name to the section and to the tooltip unless specified in the Section Custom Slug option.', 'uncode-core') ,
		"group" => esc_html__("Extra", 'uncode-core')
	) ,
	array(
		"type" => "checkbox",
		"heading" => esc_html__("Section Custom Slug", 'uncode-core') ,
		"param_name" => "row_custom_slug_check",
		"description" => esc_html__("Select this option to set a custom slug.", 'uncode-core') ,
		"group" => esc_html__("Extra", 'uncode-core'),
		"std" => '',
		"value" => array(
			'' => 'yes'
		),
	) ,
	array(
		'type' => 'textfield',
		'heading' => esc_html__('Custom slug', 'uncode-core') ,
		'param_name' => 'row_custom_slug',
		'description' => esc_html__('Set a custom slug.', 'uncode-core') ,
		"group" => esc_html__("Extra", 'uncode-core'),
		"dependency" => array(
			'element' => "row_custom_slug_check",
			'not_empty' => true
		) ,
	) ,
	array(
		'type' => 'textfield',
		'heading' => esc_html__('Element ID', 'uncode-core') ,
		'param_name' => 'el_id',
		'description' => esc_html__('This value has to be unique. Change it in case it\'s needed.', 'uncode-core') ,
		"group" => esc_html__("Extra", 'uncode-core')
	) ,
	array(
		'type' => 'textfield',
		'heading' => esc_html__('Extra class name', 'uncode-core') ,
		'param_name' => 'el_class',
		'description' => esc_html__('If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your CSS file.', 'uncode-core') ,
		"group" => esc_html__("Extra", 'uncode-core')
	) ,
);

if ( class_exists( 'Uncode_Toolkit_Privacy' ) )
	$row_params = array_merge($row_params, $gdpr);

vc_map(array(
	'name' => esc_html__('Row', 'uncode-core') ,
	'base' => 'vc_row',
	'weight' => 10000,
	'php_class_name' => 'uncode_row',
	'is_container' => true,
	'icon' => 'fa fa-align-justify',
	'show_settings_on_create' => false,
	'category' => array(
		esc_html__('Essentials', 'uncode-core') ,
		esc_html__('Dynamic', 'uncode-core') ,
	),
   	'description' => esc_html__('Row Columns Shape dividers Background Layout Header Skins Structure', 'uncode-core') ,
	'params' => $row_params,
	'js_view' => 'UncodeRowView',
));
