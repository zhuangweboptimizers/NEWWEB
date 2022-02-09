<?php
if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

$text_lead = $el_id = $el_class = '';
extract(shortcode_atts(array(
	'text_lead' => '',
	'el_id' => '',
	'el_class' => '',
) , $atts));

if ( $el_id !== '' ) {
	$el_id = ' id="' . esc_attr( trim( $el_id ) ) . '"';
} else {
	$el_id = '';
}

$post_type = uncode_get_current_post_type();
if ( ( function_exists('vc_is_page_editable') && vc_is_page_editable() ) || $post_type == 'uncodeblock' ) {
	global $product;
	if ( ! $product ) {
		$product = uncode_populate_post_object();
	}
}

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'uncode-single-product-additional-info', $this->settings['base'], $atts );

$classes = array( $css_class );
$classes[] = trim( $this->getExtraClass( $el_class ) );

if ( $text_lead === 'yes' ) {
	$classes[] = 'module-text-lead';
} else if ( $text_lead === 'small' ) {
	$classes[] = 'module-text-small';
}

$post_type = uncode_get_current_post_type();
if ( ( function_exists('vc_is_page_editable') && vc_is_page_editable() ) || $post_type == 'uncodeblock' ) {
	$classes[] = 'woocommerce';
}

$output = '<div class="uncode-wrapper '.esc_attr( trim( implode( ' ', $classes ) ) ).'" '.$el_id . '>';
	$templ_arr = array(
		'vc_shortcode' => true,
	);
	ob_start();
	wc_get_template( 'single-product/tabs/additional-information.php', $templ_arr );
	$output .= ob_get_clean();
$output .= '</div>';

echo uncode_remove_p_tag($output);
