<?php
$subheading = $subtext_one = $subtext_two = $heading_semantic = $text_size = $text_height = $text_space = $text_font = $text_weight = $text_transform = $text_italic = $text_color = $separator = $separator_color = $separator_double = $sub_text = $sub_lead = $sub_reduced = $desktop_visibility = $medium_visibility = $mobile_visibility = $css_animation = $marquee_clone = $animation_delay = $animation_speed = $interval_animation = $output = $el_id = $el_class = $skew = $sub_class = $is_header = $auto_text = '';
extract( shortcode_atts( array(
	'uncode_shortcode_id' => '',
	'subheading' => '',
	'subtext_one' => '',
	'subtext_two' => '',
	'heading_semantic' => 'h2',
	'text_size' => 'h2',
	'text_height' => '',
	'text_space' => '',
	'text_font' => '',
	'text_weight' => '',
	'text_transform' => '',
	'text_italic' => '',
	'text_color' => '',
	'text_color_type' => '',
	'text_color_solid' => '',
	'text_color_gradient' => '',
	'separator' => '',
	'separator_color' => '',
	'separator_double' => '',
	'sub_text' => '',
	'sub_lead' => '',
	'sub_reduced' => '',
	'desktop_visibility' => '',
	'medium_visibility' => '',
	'mobile_visibility' => '',
	'css_animation' => '',
	'marquee_clone' => '',
	'animation_delay' => '',
	'animation_speed' => '',
	'interval_animation' => '',
	'parallax_intensity' => '',
	'parallax_centered' => '',
	'el_id' => '',
	'el_class' => '',
	'skew' => '',
	'auto_text' => '',
	'is_header' => ''
), $atts ) );

if ( $el_id !== '' ) {
	$el_id = ' id="' . esc_attr( trim( $el_id ) ) . '"';
} else {
	$el_id = '';
}

$cont_classes = array('heading-text el-text');
$resp_classes = array();
$classes = array();
$sub_classes = array();
$separator_classes = array();
$div_data = array();
$data_size = array();

$inline_style_css = uncode_get_dynamic_colors_css_from_shortcode( array(
	'type'       => 'vc_custom_heading',
	'id'         => $uncode_shortcode_id,
	'attributes' => array(
		'text_color'          => $text_color,
		'text_color_type'     => $text_color_type,
		'text_color_solid'    => $text_color_solid,
		'text_color_gradient' => $text_color_gradient,
	)
) );

$text_color = uncode_get_shortcode_color_attribute_value( 'text_color', $uncode_shortcode_id, $text_color_type, $text_color, $text_color_solid, $text_color_gradient );

$fonts = (function_exists('ot_get_option')) ? ot_get_option('_uncode_font_groups') : array();
$headings_font = (function_exists('ot_get_option')) ? ot_get_option('_uncode_heading_font_family') : '';

$heading_font = array(
	$headings_font => ''
);

if (isset($fonts) && is_array($fonts)) {
	foreach ($fonts as $key => $value) {
		$heading_font[$value['_uncode_font_group_unique_id']] = urldecode($value['_uncode_font_group']);
		if ($value['_uncode_font_group'] === 'manual') {
			$heading_font[$value['_uncode_font_group_unique_id']] = $value['_uncode_font_manual'];
		}
	}
}

if ($text_font !== '') {
	$classes[] = $text_font;
}

if ($text_size !== '') {
	$classes[] = $text_size;
	if ($text_size === 'bigtext') {
		$cont_classes[] = 'heading-bigtext';
	}
}
if ($text_height !== '') {
	$classes[] = $text_height;
}
if ($text_space !== '') {
	$classes[] = $text_space;
}
if ($text_weight !== '') {
	$classes[] = 'font-weight-' . $text_weight;
}
if ($text_color !== '') {
	$classes[] = 'text-' . $text_color . '-color';
}
if ($text_transform !== '') {
	$classes[] = 'text-' . $text_transform;
}

if ($separator !== '') {
	$separator_classes[] = 'separator-break';
	if ($separator_color === 'yes') {
		$separator_classes[] = 'separator-accent';
	}
	if ($separator_double === 'yes') {
		$separator_classes[] = 'separator-double-padding';
	}
}

if ($desktop_visibility === 'yes') {
	$resp_classes[] = 'desktop-hidden';
}
if ($medium_visibility === 'yes') {
	$resp_classes[] = 'tablet-hidden';
}
if ($mobile_visibility === 'yes') {
	$resp_classes[] = 'mobile-hidden';
}


if ($css_animation !== '' && uncode_animations_enabled() && strpos( $css_animation, 'marquee') === false) {
	if ( $css_animation === 'curtain' || $css_animation === 'curtain-words' || $css_animation === 'single-slide' ||  $css_animation === 'single-slide-opposite' || $css_animation === 'typewriter' || $css_animation === 'single-curtain' ) {
		$cont_classes[] = $css_animation . ' animate_inner_when_almost_visible el-text-split';
		$classes[] = 'font-obs';
		if ($text_italic !== '') {
			$data_size['data-style'] = 'italic';
		} else {
			$data_size['data-style'] = 'normal';
		}
		if ($text_weight !== '') {
			$data_size['data-weight'] = esc_attr($text_weight);
		} else {
			$data_size['data-weight'] = ot_get_option('_uncode_heading_font_weight');
		}
		if ( isset($heading_font[$text_font]) ) {
			$data_font = wptexturize($heading_font[$text_font]);
		} elseif ( isset($heading_font[$headings_font]) ) {
			$data_font = wptexturize($heading_font[$headings_font]);
		}
		if ( isset($data_font) ) {
			$data_font = preg_replace( '/,\s+/', ',', $data_font );
			$data_font = preg_replace( '/\&\#(.*?);/', '', $data_font );
			$data_size['data-font'] = $data_font;
		}
	} else if ( $css_animation === 'parallax' ) {
		$cont_classes[] = 'parallax-el';
		$div_data = array_merge( $div_data, uncode_get_parallax_div_data( $parallax_intensity, $parallax_centered ) );
	} else {
		$cont_classes[] = $css_animation . ' animate_when_almost_visible';
	}
	if ($animation_delay !== '') {
		$div_data['data-delay'] = $animation_delay;
	}
	if ($animation_speed !== '') {
		$div_data['data-speed'] = $animation_speed;
	}
	if ($interval_animation !== '') {
		$div_data['data-interval'] = $interval_animation;
	}
}

 if ( strpos( $css_animation, 'marquee') !== false ) {
	$content = str_replace(array("\r", "\n"), ' ', $content);
	$classes[] = 'un-text-marquee';
	$classes[] = 'un-' . $css_animation;
	if ( $marquee_clone === 'yes' ) {
		$classes[] = 'un-marquee-infinite';
	}
}

if ( $skew === 'yes' ) {
	$resp_classes[] = 'uncode-skew';
}

$resp_classes[] = trim($this->getExtraClass( $el_class ));

$div_data_attributes = array_map(function ($v, $k) { return $k . '="' . $v . '"'; }, $div_data, array_keys($div_data));

if ( strpos( $content, '[uncode_hl_text') !== false ) {
	$cont_classes[] = 'heading-lines';
}

$output .= '<div class="vc_custom_heading_wrap ' . esc_attr(trim(implode( ' ', $resp_classes ))) . '"><div class="' . esc_attr(trim(implode( ' ', $cont_classes ))) . '" '.implode(' ', $div_data_attributes). $el_id . '>';
if ($separator === 'over') {
	$output .= '<hr class="' . esc_attr(trim(implode( ' ', $separator_classes ))) . '" />';
}

if ( $auto_text == 'price' ) {
	global $product;
	if ( ! $product ) {
		$product_object = uncode_populate_post_object();
	} else {
		$product_object = $product;
	}
}

$post_type = uncode_get_current_post_type();
if ( $is_header != 'yes' ) {
	if ( $auto_text == 'yes' ) {
		$content = uncode_custom_dynamic_heading_in_content();
	} elseif ( $auto_text == 'excerpt' && $post_type != 'uncodeblock' && uncode_custom_dynamic_heading_in_content('subtitle') !== '' ) {
		$content = uncode_custom_dynamic_heading_in_content('subtitle');
	} elseif ( class_exists( 'WooCommerce' ) && $auto_text == 'price' && $product_object ) {
		add_filter( 'uncode_woocommerce_price_custom_heading', '__return_false' );
		$content = wp_kses_post($product_object->get_price_html());
		if ( ( function_exists('vc_is_page_editable') && vc_is_page_editable() ) || $post_type == 'uncodeblock' ) {
			$classes[] = 'woocommerce';
		}
		add_filter( 'uncode_woocommerce_price_custom_heading', '__return_true' );
	}
}

$content = apply_filters('uncode_vc_custom_heading_content', $content, $auto_text, $is_header);

if ( strpos( $content, '[uncode_hl_text') !== false ) {
	$classes[] = 'font-obs';
}

preg_match_all("/(?:<h[0-6]>).*?(?:<\/h[0-6]>)/", $content, $tag_matches);
$content_tags = count($tag_matches[0]);

if ($content !== '') {

	$div_data_attributes = array_map(function ($v, $k) { return $k . '="' . $v . '"'; }, $data_size, array_keys($data_size));

	if ( !$content_tags ) {
		$output .= '<' . $heading_semantic . ' class="' . esc_attr(trim(implode( ' ', $classes ))) . '" '.implode(' ', $div_data_attributes) . '>';
		if ($text_italic === 'yes') {
			$output .= '<i>';
		}
		if ( strpos($content, '[uncode_hl_text') !== false || ( uncode_animations_enabled() && ( $css_animation === 'curtain' || $css_animation === 'curtain-words' || $css_animation === 'single-slide' ||  $css_animation === 'single-slide-opposite' || $css_animation === 'typewriter' || $css_animation === 'single-curtain' ) ) ) {
			$breaks = array("<br />","<br>","<br/>");
			$content = str_ireplace( $breaks, "\r\n", $content );
			$content = strip_tags( $content, '<span>' );
			$span_classes = ' class="heading-text-inner"';
			$split_in_words = preg_split('/(\s+)|(<[^>]*[^\/]>)|(\[|\]+)/i', $content, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
			if ( isset($split_in_words) ) {
				$content = '';
				$skip_split = false;
				$skip_tag = false;
				$empty_space = $empty_space_2 = '';
				$counter_word = 0;
				foreach ($split_in_words as $key => $word) {
					if ( $word === '[' || substr( $word, 0, 1 ) === '[' ) {
						$skip_split = true;
					}
					if ( $word === '<' || substr( $word, 0, 1 ) === '<' ) {
						$skip_tag = true;
					}
					if ( $skip_split || $skip_tag ) {
						$content .= $empty_space_2 . $word;
						$empty_space = $empty_space_2 = '';
					} elseif ( strpos($word, "\n") !== false ) {
						$content .= "\n";
					} elseif ( strlen(trim($word)) == 0 && $word !== "\n" ) {
						$empty_space = '<span class="split-word-empty">&nbsp;</span>';
						$empty_space_2 = '<span class="split-word split-word-empty">&nbsp;</span>';
					} else {
						$split_inner_class = 'split-word-inner';
						if ( $word === '&nbsp;' ||  $word === '' || $empty_space !== '' ) {
							$split_inner_class .= ' split-empty-inner';
						}
						$counter_word++;
						$content .= '<span class="split-word word' . $counter_word . '"><span class="split-word-flow"><span class="' . $split_inner_class . '">' . $empty_space . $word . '</span></span></span>';
						$empty_space = $empty_space_2 = '';
					}
					if ( $word === ']' || substr($word, -1) === ']' ) {
						$skip_split = false;
					}
					if ( $word === '>' || substr($word, -1) === '>' ) {
						$skip_tag = false;
					}
				}
			}
			if ( $css_animation === 'single-curtain' || $css_animation === 'typewriter' ) {
				$content = preg_replace( '/<span class="split-char(.*?)>(.*?)<\/span>/', '$2', do_shortcode( $content ) );
				$split_content = preg_split('/(?<!^)(?!$)(?!&(?!(amp|gt|lt|quot))[^\s]*)/u', $content );
			}
			if ( isset($split_content) ) {
				$content = '';
				$skip_split = false;
				$skip_tag = false;
				$skip_ent = false;
				foreach ($split_content as $key => $char) {
					if ( $char === '[' || substr( $char, 0, 1 ) === '[' ) {
						$skip_split = true;
					}
					if ( $char === '<' || substr( $char, 0, 1 ) === '<' ) {
						$skip_tag = true;
					}
					if ( $char === '&' || substr( $char, 0, 1 ) === '&' ) {
						$skip_ent = true;
					}
					if ( $skip_split || $skip_tag || $skip_ent === 'continue' || ctype_space($char) ) {
						$content .= $char;
					} elseif ( $skip_ent  ) {
						$content .= '<span class="split-char char' . $key . '">' . $char;
						$skip_ent = 'continue';
					} else {
						$content .= '<span class="split-char char' . $key . '">' . $char . '</span>';
					}
					if ( $char === ']' || substr($char, -1) === ']' ) {
						$skip_split = false;
					}
					if ( $char === '>' || substr($char, -1) === '>' ) {
						$skip_tag = false;
					}
					if ( $skip_ent == 'continue' && ( $char === ';' || substr($char, -1) === ';' ) ) {
						$skip_ent = false;
						$content .= '</span>';
					}
				}
			}
		} else {
			$span_classes = '';
		}
		$output .= '<span' . $span_classes . '>';
	}
	$content = trim($content);
	$title_lines = explode("\n", $content);
	$lines_counter = count($title_lines);
	if ($lines_counter > 1 && !$content_tags) {
		foreach ($title_lines as $key => $value) {
			preg_match_all("%\[uncode_hl_text(.*?)\]%i", $value, $match_span_starts);
			preg_match_all("%\[\/uncode_hl_text\]%i", $value, $match_span_ends);
			$value = trim($value);

			if ( count( $match_span_starts[0] ) > count( $match_span_ends[0] ) ) {
				$shortcode_end = '[/uncode_hl_text]';
				$shortcode_start = $match_span_starts[0][ count($match_span_starts[0])-1 ];
			} else {
				$shortcode_end = $shortcode_start = '';
			}
			$output .= $value;
			if ($value !== '' && ($lines_counter - 1 !== $key)) {
				$output .= $shortcode_end . '</span><span' . $span_classes . '>' . $shortcode_start;
			}
		}
	} else {
		if ( $content_tags ) {
			$content = wpautop($content);
		}
		$output .= $content;
	}
	if ( !$content_tags ) {
		$output .= '</span>';
		if ($text_italic === 'yes') {
			$output .= '</i>';
		}
		$output .= '</' . $heading_semantic . '>';
	}
}


if ( $auto_text !== 'price' ) {

	if ($separator === 'yes') {
		$output .= '<hr class="' . esc_attr(trim(implode( ' ', $separator_classes ))) . '" />';
	}
	$subheading = apply_filters('uncode_vc_custom_heading_subheading', $subheading, $auto_text, $is_header);
	if ($subheading !== '') {
		if ($sub_lead === 'yes') {
			$sub_lead = ' text-lead';
		} else if ($sub_lead === 'small') {
			$sub_lead = ' text-small';
		}
		if ($sub_reduced === 'yes') {
			$sub_reduced = ' text-top-reduced';
		}
		if ($sub_lead !== '' || $sub_reduced !== '') {
			$sub_class = ' class="'.esc_attr(trim($sub_lead.$sub_reduced)).'"';
		}
		$output .= '<div'.$sub_class.'>' . uncode_remove_p_tag($subheading, true) . '</div>';
	}
	if ($separator === 'under') {
		$output .= '<hr class="' . esc_attr(trim(implode( ' ', $separator_classes ))) . '" />';
	}
}
$output .= '</div>';
$output .= uncode_print_dynamic_colors_inline_style( $inline_style_css );
$output .= '<div class="clear"></div></div>';

if ( class_exists( 'WooCommerce' ) && function_exists('is_product') && is_product() ) {
	if ( $auto_text == 'yes' ) {
		do_action( 'uncode_woocommerce_single_product_summary_1' );
	} elseif ( $auto_text == 'excerpt' ) {
		do_action( 'uncode_woocommerce_single_product_summary_11' );
	} elseif ( $auto_text == 'price' ) {
		do_action( 'uncode_woocommerce_single_product_summary_6' );
	}
}

echo uncode_remove_p_tag($output);

if ( class_exists( 'WooCommerce' ) && function_exists('is_product') && is_product() ) {
	if ( $auto_text == 'yes' ) {
		do_action( 'uncode_woocommerce_single_product_summary_5' );
	} elseif ( $auto_text == 'excerpt' ) {
		do_action( 'uncode_woocommerce_single_product_summary_20' );
	} elseif ( $auto_text == 'price' ) {
		do_action( 'uncode_woocommerce_single_product_summary_10' );
	}
}
