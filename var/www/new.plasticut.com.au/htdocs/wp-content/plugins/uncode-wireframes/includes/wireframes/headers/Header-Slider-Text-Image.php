<?php
/**
 * name             - Wireframe title
 * cat_name         - Comma separated list for multiple categories (cat display name)
 * custom_class     - Space separated list for multiple categories (cat ID)
 * dependency       - Array of dependencies
 * is_content_block - (optional) Best in a content block
 *
 * @version  1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$wireframe_categories = UNCDWF_Dynamic::get_wireframe_categories();
$data                 = array();

// Wireframe properties

$data[ 'name' ]             = esc_html__( 'Header Slider Text Image', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'headers' ];
$data[ 'custom_class' ]     = 'headers';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'headers/Header-Slider-Text-Image.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = false;

// Wireframe content

$data[ 'content' ]      = '
[vc_row row_height_percent="85" back_color="'. uncode_wf_print_color( 'color-nhtu' ) .'" overlay_alpha="50" gutter_size="3" column_width_percent="100" shift_y="0" z_index="0" shape_dividers=""][vc_column width="1/1"][uncode_slider slider_type="fade" slider_interval="5000" slider_navspeed="400" slider_loop="yes"][vc_row_inner row_inner_height_percent="0" back_color="accent" back_image="'. uncode_wf_print_single_image( '84889' ) .'" overlay_color="accent" overlay_alpha="80" gutter_size="4" shift_y="0" z_index="0"][vc_column_inner column_width_percent="100" position_vertical="middle" style="dark" gutter_size="3" overlay_alpha="50" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" zoom_width="0" zoom_height="0" width="1/2"][vc_custom_heading text_size="'. uncode_wf_print_font_size( 'fontsize-338686' ) .'" css_animation="bottom-t-top" animation_delay="400"]Medium length headline[/vc_custom_heading][vc_column_text text_lead="yes" css_animation="bottom-t-top" animation_delay="600"]Change the color to match your brand or vision, add your logo, choose the perfect layout, modify menu settings and more.[/vc_column_text][vc_button border_width="0" css_animation="bottom-t-top" animation_delay="800" link="url:%23|||"]Click the button[/vc_button][/vc_column_inner][vc_column_inner column_width_percent="100" position_vertical="middle" gutter_size="3" overlay_alpha="50" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/2"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="one-one" shadow="yes" shadow_weight="lg" css_animation="zoom-in" animation_delay="1000"][/vc_column_inner][/vc_row_inner][vc_row_inner row_inner_height_percent="0" back_color="'. uncode_wf_print_color( 'color-nhtu' ) .'" back_image="'. uncode_wf_print_single_image( '84897' ) .'" overlay_color="'. uncode_wf_print_color( 'color-nhtu' ) .'" overlay_alpha="50" gutter_size="4" shift_y="0" z_index="0"][vc_column_inner column_width_percent="100" position_vertical="middle" style="dark" gutter_size="3" overlay_alpha="50" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" zoom_width="0" zoom_height="0" width="1/2"][vc_custom_heading text_size="'. uncode_wf_print_font_size( 'fontsize-338686' ) .'" css_animation="bottom-t-top" animation_delay="400"]Medium length headline[/vc_custom_heading][vc_column_text text_lead="yes" css_animation="bottom-t-top" animation_delay="600"]Change the color to match your brand or vision, add your logo, choose the perfect layout, modify menu settings and more.[/vc_column_text][vc_button button_color="accent" border_width="0" css_animation="bottom-t-top" animation_delay="800" link="url:%23|||"]Click the button[/vc_button][/vc_column_inner][vc_column_inner column_width_percent="100" position_vertical="middle" gutter_size="3" overlay_alpha="50" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/2"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="one-one" shadow="yes" shadow_weight="lg" css_animation="zoom-in" animation_delay="1000"][/vc_column_inner][/vc_row_inner][vc_row_inner row_inner_height_percent="0" back_color="'. uncode_wf_print_color( 'color-xsdn' ) .'" back_image="'. uncode_wf_print_single_image( '84889' ) .'" overlay_color="'. uncode_wf_print_color( 'color-xsdn' ) .'" overlay_alpha="90" gutter_size="4" shift_y="0" z_index="0"][vc_column_inner column_width_percent="100" position_vertical="middle" gutter_size="3" overlay_alpha="50" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" zoom_width="0" zoom_height="0" width="1/2"][vc_custom_heading text_size="'. uncode_wf_print_font_size( 'fontsize-338686' ) .'" css_animation="bottom-t-top" animation_delay="400"]Medium length headline[/vc_custom_heading][vc_column_text text_lead="yes" css_animation="bottom-t-top" animation_delay="600"]Change the color to match your brand or vision, add your logo, choose the perfect layout, modify menu settings and more.[/vc_column_text][vc_button button_color="accent" border_width="0" css_animation="bottom-t-top" animation_delay="800" link="url:%23|||"]Click the button[/vc_button][/vc_column_inner][vc_column_inner column_width_percent="100" position_vertical="middle" gutter_size="3" overlay_alpha="50" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/2"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="one-one" shadow="yes" shadow_weight="lg" css_animation="zoom-in" animation_delay="1000"][/vc_column_inner][/vc_row_inner][/uncode_slider][/vc_column][/vc_row]
';

// Check if this wireframe is for a content block
if ( $data[ 'is_content_block' ] && ! $is_content_block ) {
	$data[ 'custom_class' ] .= ' for-content-blocks';
}

// Check if this wireframe requires a plugin
foreach ( $data[ 'dependency' ]  as $dependency ) {
	if ( ! UNCDWF_Dynamic::has_dependency( $dependency ) ) {
		$data[ 'custom_class' ] .= ' has-dependency needs-' . $dependency;
	}
}

vc_add_default_templates( $data );
