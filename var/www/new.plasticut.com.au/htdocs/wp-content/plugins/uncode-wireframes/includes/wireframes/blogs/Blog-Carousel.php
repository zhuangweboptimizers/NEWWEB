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

$data[ 'name' ]             = esc_html__( 'Blog Carousel', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'blogs' ];
$data[ 'custom_class' ]     = 'blogs';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'blogs/Blog-Carousel.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = false;

// Wireframe content

$data[ 'content' ]      = '
[vc_row unlock_row_content="yes" row_height_percent="0" override_padding="yes" h_padding="3" top_padding="5" bottom_padding="5" back_color="'. uncode_wf_print_color( 'color-lxmt' ) .'" overlay_alpha="50" gutter_size="3" column_width_percent="100" shift_y="0" z_index="0"][vc_column column_width_percent="100" override_padding="yes" column_padding="0" overlay_alpha="50" gutter_size="3" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" zoom_width="0" zoom_height="0" width="1/1"][uncode_index el_id="index-1660365" index_type="carousel" loop="size:12|order_by:date|post_type:post" carousel_lg="5" carousel_md="3" carousel_sm="1" thumb_size="four-three" gutter_size="2" post_items="media|featured|onpost|poster,date,title,text|excerpt|70,sep-one|full,extra" carousel_height="equal" carousel_interval="5000" carousel_navspeed="400" carousel_loop="yes" carousel_nav_skin="dark" carousel_dots="yes" carousel_dots_mobile="yes" stage_padding="0" single_back_color="'. uncode_wf_print_color( 'color-xsdn' ) .'" single_overlay_opacity="50" single_text_anim="no" single_overlay_anim="no" single_image_anim_move="yes" single_padding="2" single_title_dimension="h5" single_border="yes" single_css_animation="right-t-left" single_animation_delay="200" carousel_rtl="" single_title_uppercase="" single_icon="fa fa-plus2"][/vc_column][/vc_row]
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
