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

$data[ 'name' ]             = esc_html__( 'Blog Lateral Fullwidth', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'blogs' ];
$data[ 'custom_class' ]     = 'blogs';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'blogs/Blog-Lateral-Fullwidth.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = false;

// Wireframe content

$data[ 'content' ]      = '
[vc_row unlock_row_content="yes" row_height_percent="0" override_padding="yes" h_padding="0" top_padding="0" bottom_padding="0" back_color="'. uncode_wf_print_color( 'color-nhtu' ) .'" overlay_alpha="100" gutter_size="100" column_width_percent="100" shift_y="0" z_index="0" style="inherited"][vc_column column_width_percent="100" override_padding="yes" column_padding="0" overlay_alpha="100" gutter_size="3" medium_width="0" shift_x="0" shift_y="0" zoom_width="0" zoom_height="0" width="1/1"][uncode_index el_id="index-1" loop="size:9|order_by:date|post_type:post" style_preset="metro" infinite="yes" footer_full_width="yes" gutter_size="0" post_items="media|featured|onpost|original,date,title,text|excerpt|120,spacer|one,link|default|default_size" screen_lg="1000" screen_md="600" screen_sm="480" single_text="lateral" single_width="12" single_height="3" single_image_size="6" single_back_color="'. uncode_wf_print_color( 'color-xsdn' ) .'" single_overlay_opacity="50" single_text_anim="no" single_overlay_anim="no" single_h_align_mobile="center" single_vertical_text="middle" single_padding="5" single_text_lead="yes" single_title_dimension="h2" single_border="yes" single_css_animation="bottom-t-top" single_animation_delay="200" post_matrix="matrix" matrix_amount="2" matrix_items="eyIxX2kiOnsic2luZ2xlX2ltYWdlX3Bvc2l0aW9uIjoicmlnaHQiLCJzaW5nbGVfaF9hbGlnbiI6InJpZ2h0In19"][/vc_column][/vc_row]
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
