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

$data[ 'name' ]             = esc_html__( 'Content Banners', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'contents' ];
$data[ 'custom_class' ]     = 'contents';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'contents/Content-Banners.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = false;

// Wireframe content

$data[ 'content' ]      = '
[vc_row row_height_percent="0" override_padding="yes" h_padding="2" top_padding="5" bottom_padding="5" overlay_alpha="50" gutter_size="3" column_width_percent="100" border_color="color-gyho" border_style="solid" shift_y="0" z_index="0" css=".vc_custom_1555596710535{border-top-width: 1px !important;}"][vc_column column_width_percent="100" align_horizontal="align_center" overlay_alpha="50" gutter_size="3" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/1"][vc_row_inner][vc_column_inner column_width_use_pixel="yes" align_horizontal="align_center" gutter_size="2" overlay_alpha="50" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/1" column_width_pixel="660"][vc_custom_heading heading_semantic="h3" text_size="'. uncode_wf_print_font_size( 'h1' ) .'"]Short headline[/vc_custom_heading][vc_column_text text_lead="yes"]Change the color to match your brand or vision, add your logo, choose the perfect layout, modify menu settings and more.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" equal_height="yes" gutter_size="3" shift_y="0" z_index="0"][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" medium_width="4" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/2"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="one-one" advanced="yes" media_items="media|original,title,description" media_overlay_color="color-wayh" media_overlay_opacity="20" media_text_visible="yes" media_text_anim_type="btt" media_overlay_visible="yes" single_image_anim_move="yes" media_h_align="center" media_padding="3" media_text_reduced="yes" media_title_dimension="h3" media_link="url:%23|||" media_title_custom="Short headline" media_subtitle_custom="Tagline"][/vc_column_inner][vc_column_inner column_width_percent="100" position_vertical="middle" gutter_size="3" overlay_alpha="50" medium_width="4" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/2"][vc_single_image media="'. uncode_wf_print_single_image( '80471' ) .'" media_width_percent="100" media_ratio="four-three" advanced="yes" media_items="media|original,title,description" media_overlay_color="color-wayh" media_overlay_opacity="20" media_text_visible="yes" media_text_anim_type="btt" media_overlay_visible="yes" single_image_anim_move="yes" media_h_align="center" media_padding="3" media_text_reduced="yes" media_title_dimension="h3" media_link="url:%23|||" media_title_custom="Short headline" media_subtitle_custom="Tagline"][/vc_column_inner][/vc_row_inner][vc_button button_color="accent" border_width="0" link="url:%23|||"]Click the button[/vc_button][/vc_column][/vc_row]
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
