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

$data[ 'name' ]             = esc_html__( 'Pricing Table Background', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'pricing_tables' ];
$data[ 'custom_class' ]     = 'pricing_tables';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'pricing-tables/Pricing-Table-Background.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = false;

// Wireframe content

$data[ 'content' ]      = '
[vc_row row_height_percent="0" override_padding="yes" h_padding="2" top_padding="5" bottom_padding="5" back_color="accent" back_image="'. uncode_wf_print_single_image( '80472' ) .'" parallax="yes" overlay_color="accent" overlay_alpha="80" gutter_size="0" column_width_percent="100" shift_y="0" z_index="0" style="inherited"][vc_column column_width_percent="100" position_vertical="middle" align_horizontal="align_center" overlay_alpha="50" gutter_size="3" medium_width="0" shift_x="0" shift_y="0" zoom_width="0" zoom_height="0" width="1/3"][uncode_pricing title="Headline|Tagline" price="$25|per month" price_color="accent" body="5GB|Feature one
15|Feature two
50|Feature three" button="url:%23|title:Sign%20up||"][/vc_column][vc_column column_width_percent="100" position_vertical="middle" align_horizontal="align_center" overlay_alpha="50" gutter_size="3" medium_width="0" shift_x="0" shift_y="0" zoom_width="0" zoom_height="0" width="1/3"][uncode_pricing title="Headline|Tagline" price_color="accent" most="yes" body="5GB|Feature one
15|Feature two
50|Feature three" button="url:%23|title:Sign%20up||"][/vc_column][vc_column column_width_percent="100" position_vertical="middle" align_horizontal="align_center" overlay_alpha="50" gutter_size="3" medium_width="0" shift_x="0" shift_y="0" zoom_width="0" zoom_height="0" width="1/3"][uncode_pricing title="Headline|Tagline" price="$75|per month" price_color="accent" body="5GB|Feature one
15|Feature two
50|Feature three" button="url:%23|title:Sign%20up||"][/vc_column][/vc_row]
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
