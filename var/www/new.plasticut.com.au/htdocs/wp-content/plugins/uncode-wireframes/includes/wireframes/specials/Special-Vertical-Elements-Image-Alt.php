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

$data[ 'name' ]             = esc_html__( 'Special Vertical Elements Image Alt', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'specials' ];
$data[ 'custom_class' ]     = 'specials';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'specials/Special-Vertical-Elements-Image-Alt.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = false;

// Wireframe content

$data[ 'content' ]      = '
[vc_row row_height_percent="0" override_padding="yes" h_padding="5" top_padding="5" bottom_padding="5" back_color="'. uncode_wf_print_color( 'color-xsdn' ) .'" overlay_alpha="50" equal_height="yes" gutter_size="4" column_width_percent="100" shift_y="0" z_index="0" el_class="demo-section demo-dark-background" uncode_shortcode_id="176612" back_color_type="uncode-palette"][vc_column column_width_percent="100" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="1/2" uncode_shortcode_id="109197"][vc_custom_heading heading_semantic="h3" text_size="'. uncode_wf_print_font_size( 'fontsize-338686' ) .'" uncode_shortcode_id="172646"]Medium headline[/vc_custom_heading][vc_column_text text_lead="yes" uncode_shortcode_id="430103"]Change the color to match your brand or vision, add your logo, choose the perfect layout, modify menu settings, add animations, add shape dividers, increase engagement with call to action and more.[/vc_column_text][/vc_column][vc_column column_width_percent="100" position_vertical="bottom" gutter_size="3" overlay_alpha="50" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" medium_width="0" mobile_width="0" width="1/2" uncode_shortcode_id="177268"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="one-one" uncode_shortcode_id="191076"][uncode_vertical_text text_align="top" vertical_text_h_pos="0" vertical_text_v_pos="0" z_index="2" text_size="'. uncode_wf_print_font_size( 'fontsize-155944' ) .'" text_weight="600" text_color="color-rgdb" uncode_shortcode_id="189908" text_color_type="uncode-palette"]Tagline[/uncode_vertical_text][uncode_vertical_text text_align="bottom" position="right" flip="yes" vertical_text_h_pos="0" vertical_text_v_pos="0" z_index="2" text_size="'. uncode_wf_print_font_size( 'fontsize-155944' ) .'" text_weight="600" text_color="color-rgdb" uncode_shortcode_id="154061" text_color_type="uncode-palette"]Tagline[/uncode_vertical_text][/vc_column][/vc_row]
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
