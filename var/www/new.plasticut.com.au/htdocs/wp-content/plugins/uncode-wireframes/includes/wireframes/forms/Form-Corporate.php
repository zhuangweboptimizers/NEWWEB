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

$data[ 'name' ]             = esc_html__( 'Form Corporate', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'forms' ];
$data[ 'custom_class' ]     = 'forms';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'forms/Form-Corporate.jpg';
$data[ 'dependency' ]       = array('cf7');
$data[ 'is_content_block' ] = false;

// Wireframe content

$data[ 'content' ]      = '
[vc_row row_height_percent="50" override_padding="yes" h_padding="2" top_padding="5" bottom_padding="5" back_color="'. uncode_wf_print_color( 'color-nhtu' ) .'" back_image="'. uncode_wf_print_single_image( '80472' ) .'" parallax="yes" kburns="yes" overlay_color="'. uncode_wf_print_color( 'color-nhtu' ) .'" overlay_alpha="50" gutter_size="3" column_width_percent="100" shift_y="0" z_index="0"][vc_column column_width_percent="75" position_horizontal="left" position_vertical="bottom" style="dark" overlay_alpha="50" gutter_size="3" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/1" mobile_height="360"][/vc_column][/vc_row][vc_row row_height_percent="0" override_padding="yes" h_padding="2" top_padding="0" bottom_padding="5" back_color="'. uncode_wf_print_color( 'color-lxmt' ) .'" overlay_alpha="50" gutter_size="3" column_width_percent="100" shift_y="0" z_index="0"][vc_column column_width_percent="100" overlay_alpha="50" gutter_size="4" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/1"][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="4" shift_y="0"][vc_column_inner column_width_percent="100" gutter_size="4" overlay_alpha="50" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" sticky="yes" width="3/12"][vc_empty_space empty_h="2" mobile_visibility="yes"][vc_custom_heading heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'fontsize-160000' ) .'" text_space="'. uncode_wf_print_font_space( 'fontspace-135905' ) .'" text_transform="uppercase"]Tagline[/vc_custom_heading][/vc_column_inner][vc_column_inner column_width_percent="100" override_padding="yes" column_padding="3" gutter_size="3" back_color="'. uncode_wf_print_color( 'color-xsdn' ) .'" overlay_alpha="50" medium_width="0" mobile_width="0" shift_x="0" shift_y="-4" shift_y_down="0" z_index="0" shadow="lg" radius="sm" width="9/12"][vc_custom_heading heading_semantic="h3" subheading="Change the color to match your brand or vision, add your logo, choose the perfect layout, modify menu settings, add animations, add shape dividers, increase engagement with call to action and more."]Medium length display headline[/vc_custom_heading][contact-form-7 id="'. uncode_wf_print_form_id( '83045' ) .'" title="Contact Form"][/vc_column_inner][/vc_row_inner][vc_row_inner row_inner_height_percent="0" overlay_alpha="50" gutter_size="3" shift_y="0"][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" medium_visibility="yes" medium_width="0" mobile_visibility="yes" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/4"][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" medium_width="3" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/4"][vc_icon position="left" icon="fa fa-phone" icon_color="accent" size="fa-2x" heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'h6' ) .'" linked_title="yes" title="+44 (0) 555 555 5555" link="url:tel%3A%2F%2F1-555-555-5555|||"][/vc_icon][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" medium_width="3" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/4"][vc_icon position="left" icon="fa fa-envelope" icon_color="accent" size="fa-2x" heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'h6' ) .'" linked_title="yes" title="info@youremail.com" link="url:mailto%3Ainfo%40youremail.com|||"][/vc_icon][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" medium_width="3" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/4"][vc_icon position="left" icon="fa fa-user" icon_color="accent" size="fa-2x" heading_semantic="h6" text_size="'. uncode_wf_print_font_size( 'h6' ) .'" linked_title="yes" title="info@youremail.com" link="url:mailto%3Ainfo%40youremail.com|||"][/vc_icon][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
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
