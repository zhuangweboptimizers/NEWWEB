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

$data[ 'name' ]             = esc_html__( 'Shop Boutique Carousel Stage Padding', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'shop' ];
$data[ 'custom_class' ]     = 'shop';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'shop/Shop-Boutique-Carousel-Stage-Padding.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = false;

// Wireframe content

$data[ 'content' ]      = '
[vc_row row_height_percent="0" override_padding="yes" h_padding="2" top_padding="5" bottom_padding="5" overlay_alpha="50" gutter_size="3" column_width_percent="100" shift_y="0" z_index="0"][vc_column column_width_percent="100" align_horizontal="align_center" overlay_alpha="50" gutter_size="4" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/1"][vc_row_inner][vc_column_inner column_width_use_pixel="yes" align_horizontal="align_center" gutter_size="2" overlay_alpha="50" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/1" column_width_pixel="600"][vc_custom_heading heading_semantic="h3" text_size="'. uncode_wf_print_font_size( 'h1' ) .'"]Short headline[/vc_custom_heading][vc_column_text text_lead="yes"]Change the color to match your brand or vision, add your logo, choose the perfect layout, modify menu settings and more.[/vc_column_text][/vc_column_inner][/vc_row_inner][uncode_index el_id="index-32554865" index_type="carousel" loop="size:7|order_by:date|post_type:product" carousel_lg="3" carousel_md="2" carousel_sm="1" thumb_size="three-four" gutter_size="4" product_items="title,media|featured|onpost|original|hide-sale|enhanced-atc,price|default" portfolio_items="title,media|featured|onpost|original" carousel_interval="5000" carousel_navspeed="400" carousel_loop="yes" carousel_overflow="yes" carousel_dots="yes" carousel_dots_space="yes" carousel_dots_mobile="yes" carousel_half_opacity="yes" stage_padding="0" single_overlay_opacity="1" single_overlay_anim="no" single_h_align="center" single_padding="1" single_title_dimension="h6" single_border="yes" single_css_animation="zoom-in" single_animation_delay="200" single_animation_first="yes"][/vc_column][/vc_row]
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
