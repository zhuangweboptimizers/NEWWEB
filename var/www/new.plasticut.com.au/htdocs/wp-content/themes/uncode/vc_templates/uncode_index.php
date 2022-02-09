<?php

global $uncode_post_types, $uncode_vc_index, $changer_back_color_column, $changer_back_color_column_inner;
$uncode_vc_index = true;
$title = $index_type = $isotope_mode = $index_back_color = $items = $filtering = $filter_style = $filter_back_color = $filtering_full_width = $filtering_position = $filtering_uppercase = $filter_all_opposite = $filter_all_text = $filter_mobile = $filter_mobile_align = $filter_mobile_wrapper = $filter_mobile_wrapper_text = $filter_mobile_dropdown = $filter_mobile_dropdown_text = $filter_scroll = $footer_style = $footer_back_color = $footer_full_width = $pagination = $infinite = $infinite_hover_fx = $infinite_button = $infinite_button_text = $infinite_button_shape = $infinite_button_outline = $infinite_button_color = $style_preset = $images_size = $thumb_size = $table_images_size = $single_width = $single_height = $single_height_viewport = $single_height_viewport_minus = $single_back_color = $single_shape = $radius = $single_text = $single_image_position = $single_vertical_text = $single_image_size = $single_lateral_responsive = $drop_image_position = $drop_image_time = $drop_image_default = $drop_title_default = $back_repeat = $back_attachment = $back_position = $back_size = $drop_image_hover = $drop_image_separator = $drop_image_extra = $drop_image_extra_type = $drop_image_extra_size = $drop_image_extra_weight = $drop_image_extra_position = $drop_image_custom_separator = $drop_ratio = $drop_radius = $drop_anchor = $drop_image_arrange = $off_grid = $off_grid_element = $off_grid_val = $off_grid_all = $single_elements_click = $single_text_visible = $single_text_anim = $single_text_anim_type = $single_overlay_visible = $single_overlay_anim = $single_image_coloration = $single_image_color_anim = $single_image_anim = $single_image_magnetic = $single_secondary =$single_reduced = $single_reduced_mobile = $single_padding = $single_padding_vertical = $single_text_reduced = $single_h_align = $single_h_align_mobile = $single_table_last_align = $single_v_position = $single_h_position = $single_style = $single_overlay_color = $single_overlay_coloration = $single_overlay_blend = $single_overlay_opacity = $single_shadow = $shadow_weight = $shadow_darker = $drop_shadow = $drop_shadow_weight = $drop_shadow_darker = $single_border = $single_icon = $single_title_transform = $single_title_weight = $single_title_family = $single_title_dimension = $single_title_semantic = $single_title_height = $single_title_space = $single_text_lead = $single_css_animation = $single_animation_delay = $single_animation_speed = $single_animation_first = $carousel_height = $carousel_v_align = $carousel_type = $carousel_interval = $carousel_navspeed = $carousel_loop = $carousel_nav = $carousel_nav_mobile = $carousel_nav_skin = $carousel_dots = $carousel_dots_space = $carousel_dots_mobile = $carousel_dot_position = $carousel_dot_width = $column_width_use_pixel = $carousel_width_percent = $carousel_width_pixel = $carousel_dots_inside = $carousel_dot_padding = $carousel_autoh = $carousel_lg = $carousel_md = $carousel_sm = $gutter_size = $drop_h_space = $inner_padding = $stage_padding = $carousel_overflow = $carousel_half_opacity = $carousel_scaled = $carousel_pointer_events = $table_v_align = $table_border = $table_click_row = $table_hover = $post_items = $portfolio_items = $page_items = $product_items = $post_table_items = $portfolio_table_items = $page_table_items = $product_table_items = $screen_lg = $screen_md = $screen_sm = $filter = $el_id = $lbox_skin = $lbox_dir = $lbox_title = $lbox_caption = $lbox_social = $lbox_deep = $lbox_no_tmb = $lbox_no_arrows = $no_double_tap = $table_display_tablet = $table_display_mobile = $table_mobile_gutter_size = $titles_display_mobile = $titles_gap_reduced_mobile = $titles_hide_meta_mobile = $titles_hide_separator_mobile = $el_class = $custom_cursor = $skew = $orderby = $order = $custom_order = $order_ids = $css_class = $filter = $filter_background = $filter_sticky = $offset = $search_query = $using_plugin = $post_matrix = $matrix_amount = $matrix_items = $single_fluid_height = $carousel_height_viewport = $carousel_height_viewport_minus = $auto_query = $auto_query_type = $pagination_disable_history = $show_extra_filters = $show_woo_sorting = $show_woo_result_count = $woo_sorting_default_text = $hide_woo_sorting_icon = $woo_sorting_skin = $show_widgetized_content_block = $widgetized_content_block_id = $widgetized_content_block_toggle_text = $hide_widgetized_content_block_icon = $filter_hide_cats = $filter_typography = $woo_sorting_shadow = $parent_id = $filters_wrapper_trigger = $internal_width = $drop_hide_media = $drop_width = $titles_display = $wrong_layout = $wrong_layout_check = $single_meta_custom_typo = $single_meta_size = $single_meta_weight = $single_meta_transform = $table_general_typo = $table_meta_custom_typo = $table_meta_size = $table_meta_weight = $table_meta_transform = '';
$post_types = array();
$wc_filtered = array();

$attributes_first = array(
	'uncode_shortcode_id' => '',
	'title' => '',
	'col_width' => '12',
	'index_type' => 'isotope',
	'isotope_mode' => 'masonry',
	'index_back_color' => '',
	'index_back_color_type' => '',
	'index_back_color_solid' => '',
	'index_back_color_gradient' => '',
	'items' => '',
	'filtering' => '',
	'show_extra_filters' => '',
	'show_woo_sorting' => '',
	'show_woo_result_count' => '',
	'woo_sorting_default_text' => '',
	'hide_woo_sorting_icon' => '',
	'woo_sorting_skin' => '',
	'woo_sorting_shadow' => '',
	'show_widgetized_content_block' => '',
	'widgetized_content_block_id' => '',
	'widgetized_content_block_toggle_text' => '',
	'hide_widgetized_content_block_icon' => '',
	'filter_hide_cats' => '',
	'filter_typography' => '',
	'filter_style' => 'light',
	'filter_back_color' => '',
	'filter_back_color_type' => '',
	'filter_back_color_solid' => '',
	'filter_back_color_gradient' => '',
	'filtering_full_width' => '',
	'filtering_position' => 'left',
	'filtering_uppercase' => '',
	'filter_all_opposite' => '',
	'filter_all_text' => '',
	'filter_mobile' => '',
	'filter_mobile_align' => 'center',
	'filter_mobile_wrapper' => '',
	'filter_mobile_wrapper_text' => esc_html__( 'Filters', 'uncode' ),
	'filter_mobile_dropdown' => '',
	'filter_mobile_dropdown_text' => esc_html__( 'Categories', 'uncode' ),
	'filter_scroll' => '',
	'filter_sticky' => '',
	'footer_style' => 'light',
	'footer_back_color' => '',
	'footer_back_color_type' => '',
	'footer_back_color_solid' => '',
	'footer_back_color_gradient' => '',
	'footer_full_width' => '',
	'pagination' => '',
	'infinite' => '',
	'infinite_hover_fx' => '',
	'infinite_button' => '',
	'infinite_button_text' => '',
	'infinite_button_shape' => '',
	'infinite_button_outline' => '',
	'infinite_button_color' => '',
	'infinite_button_color_type' => '',
	'infinite_button_color_solid' => '',
	'infinite_button_color_gradient' => '',
	'style_preset' => 'masonry',
	'images_size' => '',
	'thumb_size' => '',
	'table_images_size' => '',
	'single_width' => '4',
	'single_height' => '4',
	'single_height_viewport' => '',
	'single_height_viewport_minus' => '',
	'single_back_color' => '',
	'single_shape' => '',
	'radius' => '',
	'single_text' => 'under',
	'single_image_position' => '',
	'single_vertical_text' => '',
	'single_image_size' => '6',
	'single_lateral_responsive' => 'yes',
	'drop_image_position' => '',
	'drop_image_time' => '25',
	'drop_image_default' => '',
	'drop_title_default' => '',
	'back_repeat' => 'repeat',
	'back_attachment' => 'scroll',
	'back_position' => 'center center',
	'back_size' => 'cover',
	'drop_image_hover' => '',
	'drop_image_separator' => '',
	'drop_image_custom_separator' => '',
	'drop_image_extra' => '',
	'drop_image_extra_type' => '',
	'drop_image_extra_size' => '25',
	'drop_image_extra_weight' => '',
	'drop_image_extra_position' => 'after-top',
	'drop_ratio' => '',
	'drop_radius' => '',
	'drop_anchor' => '',
	'drop_image_arrange' => '',
	'single_elements_click' => '',
	'single_text_visible' => 'no',
	'single_text_anim' => 'yes',
	'single_text_anim_type' => '',
	'single_overlay_visible' => 'no',
	'single_overlay_anim' => 'yes',
	'single_image_coloration' => '',
	'single_image_color_anim' => '',
	'single_image_anim' => 'yes',
	'single_image_magnetic' => '',
	'single_secondary' => '',
	'single_reduced' => '',
	'single_reduced_mobile' => '',
	'single_padding' => '',
	'single_padding_vertical' => '',
	'single_text_reduced' => '',
	'single_h_align' => 'left',
	'single_h_align_mobile' => '',
	'single_table_last_align' => '',
	'single_v_position' => 'middle',
	'single_h_position' => 'left',
	'single_style' => 'light',
	'single_overlay_color' => '',
	'single_overlay_coloration' => '',
	'single_overlay_blend' => '',
	'single_overlay_opacity' => 50,
	'single_shadow' => '',
	'shadow_weight' => '',
	'shadow_darker' => '',
	'drop_shadow' => '',
	'drop_shadow_weight' => '',
	'drop_shadow_darker' => '',
	'single_border' => '',
	'single_icon' => '',
	'single_title_transform' => '',
	'single_title_weight' => '',
	'single_title_family' => '',
	'single_title_dimension' => '',
	'single_title_semantic' => 'h3',
	'single_title_height' => '',
	'single_title_space' => '',
	'single_text_lead' => '',
	'single_meta_custom_typo' => '',
	'single_meta_size' => '',
	'single_meta_weight' => '',
	'single_meta_transform' => '',
	'table_general_typo' => '',
	'table_meta_custom_typo' => '',
	'table_meta_size' => '',
	'table_meta_weight' => '',
	'table_meta_transform' => '',
	'single_css_animation' => '',
	'single_animation_delay' => '',
	'single_animation_speed' => '',
	'single_animation_first' => '',
	'single_parallax_intensity' => '',
	'single_parallax_centered' => '',
	'carousel_height' => 'auto',
	'carousel_v_align' => '',
	'carousel_type' => '',
	'carousel_interval' => 3000,
	'carousel_navspeed' => 400,
	'carousel_loop' => '',
	'carousel_nav' => '',
	'carousel_nav_skin' => 'light',
	'carousel_nav_mobile' => '',
	'carousel_dots' => '',
	'carousel_dots_space' => '',
	'carousel_dots_mobile' => '',
	'carousel_dots_inside' => '',
	'carousel_dot_position' => '',
	'carousel_dot_width' => '',
	'column_width_use_pixel' => '',
	'carousel_width_percent' => '',
	'carousel_width_pixel' => '',
	'carousel_dot_padding' => '2',
	'carousel_autoh' => '',
	'carousel_lg' => '',
	'carousel_md' => '',
	'carousel_sm' => '',
	'gutter_size' => 3,
	'drop_h_space' => '',
	'stage_padding' => 0,
	'carousel_overflow' => '',
	'carousel_half_opacity' => '',
	'carousel_scaled' => '',
	'carousel_pointer_events' => '',
	'table_v_align' => '',
	'table_border' => '',
	'table_click_row' => '',
	'table_hover' => '',
	'inner_padding' => '',
	'post_items' => 'media|featured|onpost|original,title,category|nobg,date,text|excerpt,link|default,author,sep-one|full,extra',
	'page_items' => 'media|featured,title,type,category,text',
	'product_items' => 'media|featured,title,type,category,text,price',
	'uncode_taxonomy_items' => 'media|featured|onpost|original,title,count|nobg|relative|hide-label',
	'uncode_taxonomy_table_items' => 'col-one|1,media|featured|onpost|original,col-two|6,title,col-three|3,text|120,col-four|2,count|nobg|relative|hide-label,link|default|default_size',
	'post_table_items' => 'col-one|1,media|featured|onpost|poster,col-two|5,title,col-three|2,date,col-four|2,category|inline,col-five|2,link|default|default_size',
	'page_table_items' => 'col-one|4,title,col-two|4,category|inline,col-three|4,link|link|default_size',
	'product_table_items' => 'col-one|1,media|featured|onpost|original|hide-sale|inherit-atc|inherit-w-atc|atc-typo-default|hide-atc,col-two|3,title,col-three|2,category|block,col-four|3,price|default,col-five|2,add_to_cart|link|default_size',
	'off_grid' => '',
	'off_grid_element' => 'odd',
	'off_grid_custom' => '0,2',
	'off_grid_val' => '2',
	'off_grid_all' => '',
	'screen_lg' => 1000,
	'screen_md' => 600,
	'screen_sm' => 480,
	'filter' => '',
	'el_id' => '',
	'lbox_skin' => '',
	'lbox_dir' => '',
	'lbox_title' => '',
	'lbox_caption' => '',
	'lbox_social' => '',
	'lbox_deep' => '',
	'lbox_no_tmb' => '',
	'lbox_no_arrows' => '',
	'no_double_tap' => '',
	'table_display_tablet' => '',
	'table_display_mobile' => '',
	'table_mobile_gutter_size' => '',
	'titles_display_mobile' => '',
	'titles_gap_reduced_mobile' => '',
	'titles_hide_meta_mobile' => '',
	'titles_hide_separator_mobile' => '',
	'el_class' => '',
	'custom_cursor' => '',
	'skew' => '',
	'orderby' => NULL,
	'order' => 'DESC',
	'custom_order' => '',
	'order_ids' => '',
	'loop' => 'size:10|order_by:date|post_type:post',
	'offset' => '',
	'using_plugin' => '',
	'css_class' => '',
	'post_matrix' => '',
	'matrix_amount' => 5,
	'matrix_items' => '',
	'single_fluid_height' => '33',
	'carousel_height_viewport' => '100',
	'carousel_height_viewport_minus' => '',
	'auto_query' => '',
	'auto_query_type' => '',
	'pagination_disable_history' => '',
	'parent_id' => false,
	'drop_hide_media' => '',
	'drop_width' => '4',
	'titles_display' => 'block',
	'assets_check' => false,
);

$attributes_second = array();

if (!isset($uncode_post_types)) {
	$uncode_post_types = uncode_get_post_types();
}
if (isset($uncode_post_types) && !empty($uncode_post_types)) {
	foreach ($uncode_post_types as $key => $value) {
		$post_types[] = $value;
		if (isset($atts[$value . '_items']) && strpos($value, '-') !== false) {
			$new_key = str_replace('-', '_', $value);
			$atts[$new_key . '_items'] = $atts[$value . '_items'];
			unset($atts[$value . '_items']);
			$value = $new_key;
		}
		$attributes_second[$value . '_items'] = $value === 'product' ? 'media|featured,title,type,category,text,price' : 'media|featured,title,type,category,text';

		if (isset($atts[$value . '_table_items']) && strpos($value, '-') !== false) {
			$new_key = str_replace('-', '_', $value);
			$atts[$new_key . '_table_items'] = $atts[$value . '_table_items'];
			unset($atts[$value . '_table_items']);
			$value = $new_key;
		}
		$attributes_second[$value . '_table_items'] = $value === 'product' ? 'col-one|1,media|featured|onpost|original|hide-sale|inherit-atc|inherit-w-atc|atc-typo-default|hide-atc,col-two|3,title,col-three|2,category|block,col-four|3,price|default,col-five|2,add_to_cart|link|default_size' : 'col-one|4,title,col-two|3,date,col-three|3,category|nobg|relative|display-icon,col-four|2,link|default|default_size';
	}
}

$post_types[] = 'post';
$post_types[] = 'page';

$attributes = array_merge($attributes_first, $attributes_second);

extract( shortcode_atts($attributes , $atts ) );

$inline_style_css = uncode_get_dynamic_colors_css_from_shortcode( array(
	'type'       => 'uncode_index',
	'id'         => $uncode_shortcode_id,
	'attributes' => array(
		'index_back_color'               => $index_back_color,
		'index_back_color_type'          => $index_back_color_type,
		'index_back_color_solid'         => $index_back_color_solid,
		'index_back_color_gradient'      => $index_back_color_gradient,
		'filter_back_color'              => $filter_back_color,
		'filter_back_color_type'         => $filter_back_color_type,
		'filter_back_color_solid'        => $filter_back_color_solid,
		'filter_back_color_gradient'     => $filter_back_color_gradient,
		'infinite_button_color'          => $infinite_button_color,
		'infinite_button_color_type'     => $infinite_button_color_type,
		'infinite_button_color_solid'    => $infinite_button_color_solid,
		'infinite_button_color_gradient' => $infinite_button_color_gradient,
		'footer_back_color'              => $footer_back_color,
		'footer_back_color_type'         => $footer_back_color_type,
		'footer_back_color_solid'        => $footer_back_color_solid,
		'footer_back_color_gradient'     => $footer_back_color_gradient,
	)
) );

$index_back_color = uncode_get_shortcode_color_attribute_value( 'index_back_color', $uncode_shortcode_id, $index_back_color_type, $index_back_color, $index_back_color_solid, $index_back_color_gradient );
$filter_back_color = uncode_get_shortcode_color_attribute_value( 'filter_back_color', $uncode_shortcode_id, $filter_back_color_type, $filter_back_color, $filter_back_color_solid, $filter_back_color_gradient );
$infinite_button_color = uncode_get_shortcode_color_attribute_value( 'infinite_button_color', $uncode_shortcode_id, $infinite_button_color_type, $infinite_button_color, $infinite_button_color_solid, $infinite_button_color_gradient );
$footer_back_color = uncode_get_shortcode_color_attribute_value( 'footer_back_color', $uncode_shortcode_id, $footer_back_color_type, $footer_back_color, $footer_back_color_solid, $footer_back_color_gradient );

switch ($gutter_size) {
	case 0:
		$gutter_size = 'no-gutter';
		break;
	case 1:
		$gutter_size = 'px-gutter';
		break;
	case 2:
		$gutter_size = 'half-gutter';
		break;
	case 3:
	default:
		$gutter_size = 'single-gutter';
		break;
	case 4:
		$gutter_size = 'double-gutter';
		break;
	case 5:
		$gutter_size = 'triple-gutter';
		break;
	case 6:
		$gutter_size = 'quad-gutter';
		break;
}

$table_mobile_gutter = '';
if ( $table_mobile_gutter_size === 'yes' ) {
	$table_mobile_gutter = 'mobile-single-gutter';
}

$main_container_classes = array();
$main_data = array();
$parent_container_classes = array();
$container_classes = array();
$drop_classes = array();

$general_width = $single_width;
$general_height = $single_height;
$general_fluid_height = $single_fluid_height;
$general_shape = $single_shape;

$stylesArray = array(
	'light',
	'dark'
);
$general_style = ot_get_option('_uncode_general_style');
$general_iso_style = $single_style;
$general_overlay_color = $single_overlay_color;
$general_overlay_coloration = $single_overlay_coloration;
$general_overlay_opacity = $single_overlay_opacity;
$general_overlay_blend = $single_overlay_blend;
$general_text = $single_text;
$general_image_position = $single_image_position;
$general_vertical_text = $single_vertical_text;
$general_image_size = $single_image_size;
$general_lateral_responsive = $single_lateral_responsive;
$general_elements_click = $single_elements_click;
$general_text_visible = $single_text_visible;
$general_text_anim = $single_text_anim;
$general_text_anim_type = $single_text_anim_type;
$general_overlay_visible = $single_overlay_visible;
$general_overlay_anim = $single_overlay_anim;
$general_image_coloration = $single_image_coloration;
$general_image_color_anim = $single_image_color_anim;
$general_image_anim = $single_image_anim;
$general_image_magnetic = $single_image_magnetic;
$general_secondary = $single_secondary;
$general_reduced = $single_reduced;
$general_reduced_mobile = $single_reduced_mobile;
$general_padding = $single_padding;
$general_padding_vertical = $single_padding_vertical;
$general_text_reduced = $single_text_reduced;
$general_h_align = $single_h_align;
$general_h_align_mobile = $single_h_align_mobile;
$general_table_last_align = $single_table_last_align;
$general_v_position = $single_v_position;
$general_h_position = $single_h_position;
$general_shadow = $single_shadow;
$general_shadow_weight = $shadow_weight;
$general_shadow_darker = $shadow_darker;
$general_border = $single_border;
$general_icon = $single_icon;
$general_back_color = $single_back_color;
$general_title_transform = $single_title_transform;
$general_title_weight = $single_title_weight;
$general_title_family = $single_title_family;
$general_title_dimension = $single_title_dimension;
$general_title_semantic = $single_title_semantic;
$general_title_height = $single_title_height;
$general_title_space = $single_title_space;
$general_text_lead = $single_text_lead;
if ($index_type === 'table') {
	if ( $table_general_typo !== 'yes' ) {
		$single_meta_custom_typo = $table_meta_custom_typo;
		$single_meta_size = $table_meta_size;
		$single_meta_weight = $table_meta_weight;
		$single_meta_transform = $table_meta_transform;
	}
}
$general_meta_custom_typo = $single_meta_custom_typo;
$general_meta_size = $single_meta_size;
$general_meta_weight = $single_meta_weight;
$general_meta_transform = $single_meta_transform;
$general_css_animation = $single_css_animation;
$general_animation_delay = $single_animation_delay;
$general_animation_speed = $single_animation_speed;
$general_parallax_intensity = $single_parallax_intensity;
$general_parallax_centered = $single_parallax_centered;

$this->resetTaxonomies();
if ( empty( $loop ) ) {
	return;
}
$loop_parse = uncode_parse_loop_data($loop);

global $wp_query;

$paged = (get_query_var('paged')) ? get_query_var('paged') : (isset($wp_query->query['paged']) ? $wp_query->query['paged'] : 1);

if (isset($_GET['upage'])) {
	$paged = $_GET['upage'];
}

$infinite = $show_extra_filters === 'yes' ? '' : $infinite;
if ($infinite !== 'yes') {
	$loop_pagination = $loop;
	if(isset($_GET['ucat'])) {
		$loop .= '|category:'.$_GET['ucat'];
	}
}

$loop .= '|paged:' . $paged;

if (is_search() && ($using_plugin === 'yes' || $auto_query === 'yes')) {
	$search_query = $wp_query;
}
$this->getLoop( $loop, $offset, $auto_query, $auto_query_type );

if ($search_query === '') {
	$my_query = $this->query;
} else {
	$my_query = $search_query;
}

$args = $this->loop_args;
if (isset($loop_parse['by_id']) && isset($loop_parse['order']) && $loop_parse['order'] === 'none') {
	$custom_order = 'yes';
	$order_ids = $loop_parse['by_id'];
}

$is_tax_query = $my_query instanceof WP_Term_Query ? true : false;

if ( $custom_order === 'yes' ) {
	if ($order_ids !== '') {
		$post_list = explode(',', $order_ids);
		$ordered = array();

		if ( $is_tax_query ) {
			foreach($post_list as $key) {
				foreach($my_query->terms as $skey => $spost) {
					if($key == $spost->term_id) {
						$ordered[] = $spost;
						unset($my_query->terms[$skey]);
					}
				}
			}
			$my_query->terms = array_merge($ordered, $my_query->terms);
		} else {
			foreach($post_list as $key) {
				foreach($my_query->posts as $skey => $spost) {
					if($key == $spost->ID) {
						$ordered[] = $spost;
						unset($my_query->posts[$skey]);
					}
				}
			}
			$my_query->posts = array_merge($ordered, $my_query->posts);
		}
	}
}

$post_blocks = array();
if ( $is_tax_query ) {
	$post_blocks['uncode_taxonomy'] = uncode_flatArray(vc_sorted_list_parse_value( $uncode_taxonomy_items ));
	$post_blocks['uncode_taxonomy_table'] = uncode_flatArray(vc_sorted_list_parse_value( $uncode_taxonomy_table_items ));
} else {
	foreach ($post_types as $key => $value) {
		if ($index_type === 'table') {
			$value .= '_table';
		}
		$value = str_replace('-', '_', $value);
		if ( isset(${$value . '_items'}) ) {
			$post_blocks['uncode_' . $value] = uncode_flatArray(vc_sorted_list_parse_value( ${$value . '_items'} ));
		}
	}
}

$posts = array();
$this->filter_categories = array();

if ( $is_tax_query ) {
	$tax_queried = false;

	if ( is_array( $my_query->terms ) ) {
		foreach ( $my_query->terms as $term ) {
			$post = new stdClass(); // Creating post object.
			$post->id = $term->term_id;
			$post->title = $term->name;
			$post->type = false;
			$post->link = get_term_link( $term );
			$post->content = $term->description;
			$post->categories_css = false;
			$post->categories_name = array();
			$post->tags_name = array();
			$post->taxonomy_type = array();
			$post->categories_id = array();
			$posts[] = $post;
			$tax_queried = $term->taxonomy;
		}
	}
} else {
	while ( $my_query->have_posts() ) {
		$my_query->the_post(); // Get post from query
		$post = new stdClass(); // Creating post object.
		$post->id = get_the_ID();
		$post->title = get_the_title($post->id);
		$post->type = get_post_type( $post->id );
		$post->format = ($post->type === 'post') ? get_post_format( $post->id ) : '';
		$post->link = get_permalink( $post->id );
		$post->content = get_the_content();
		$post_category = $this->getCategoriesCss( $post->id );
		$post->categories_css = $post_category['cat_css'];
		$post->categories_name = $post_category['cat_name'];
		$post->tags_name = $post_category['tag'];
		$post->categories_id = $post_category['cat_id'];
		$post->taxonomy_type = $post_category['taxonomy'];
		$posts[] = $post;
	}
	wp_reset_query();
}

// Save found posts in a global variable and return
// when calling the shortcode from our assets test
if ( $assets_check === 'yes' ) {
	global $uncode_index_posts;
	$uncode_index_posts = $posts;
	return;
}

$parent_container_classes[] = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $css_class, $this->settings['base'], $atts );
$parent_container_classes = array_filter($parent_container_classes);
$items = function_exists( 'uncode_core_decode' ) ? json_decode( uncode_core_decode( strip_tags( $items ) ), true) : array();
$matrix_items = function_exists( 'uncode_core_decode' ) ? json_decode( uncode_core_decode( strip_tags( $matrix_items ) ), true) : array();

$posts_counter = count( $posts );

/*** init classes ***/

// if ($posts_counter === 1) {
	// $gutter_size = 'no-gutter';
// }

if ($index_type == 'isotope') {
	$main_container_classes[] = 'isotope-system';
	$main_container_classes[] = 'isotope-general-' . $general_style;
	$parent_container_classes[] = 'isotope-wrapper';
	$parent_container_classes[] = $gutter_size;
	$container_classes[] = 'isotope-container';
	$container_classes[] = 'isotope-layout';
	$container_classes[] = 'style-' . $style_preset;
	if ($inner_padding === 'yes') {
		$parent_container_classes[] = 'isotope-inner-padding';
	}
	if ( ! $is_tax_query ) {
		if ( $infinite === 'yes' && $pagination !== 'yes')  {
			$container_classes[] = 'isotope-infinite';
			if ($infinite_button === 'yes') $container_classes[] = 'isotope-infinite-button';
		} else {
			$container_classes[] = 'isotope-pagination';
		}
	}
	if ($index_back_color !== '') {
		$parent_container_classes[] = 'style-'.$index_back_color.'-bg';
	}
} elseif ($index_type == 'carousel') {
	$main_container_classes[] = 'owl-carousel-wrapper';
	if ($carousel_overflow === 'yes') {
		$main_container_classes[] = 'carousel-overflow-visible';
		if ( $carousel_half_opacity === 'yes' ) {
			$main_container_classes[] = 'carousel-not-active-opacity';
		}
		if ( $carousel_scaled === 'yes' ) {
			$main_container_classes[] = 'carousel-scaled';
		}
		if ( $carousel_pointer_events === 'yes' ) {
			$main_container_classes[] = 'carousel-not-clickable';
		}
	}
	if ( $single_animation_first === 'yes' ) {
		$main_container_classes[] = 'carousel-animation-first';
	}
	$parent_container_classes[] = 'owl-carousel-container owl-carousel-loading';
	$parent_container_classes[] = $gutter_size;
	$container_classes[] = 'owl-carousel owl-element';
	if ( $thumb_size === 'fluid' ){
		$style_preset = 'metro';
	} else {
		$style_preset = 'masonry';
	}
	$images_size = $thumb_size;
	if ($inner_padding === 'yes') {
		$parent_container_classes[] = 'carousel-inner-padding';
	}
	if ($carousel_v_align !== '') {
		$container_classes[] = 'owl-valign-' . $carousel_v_align;
	}
	if ($carousel_height !== '' && $thumb_size !== 'fluid') {
		$container_classes[] = 'owl-height-' . $carousel_height;
	}
	if ($thumb_size === 'fluid') {
		$container_classes[] = 'owl-height-viewport';
	}
	if ($index_back_color !== '') {
		$container_classes[] = 'style-'.$index_back_color.'-bg';
	}
} elseif ($index_type == 'titles') {
	$parent_container_classes[] = $gutter_size;
	$main_container_classes[] = 'uncode-post-titles';
	if ($index_back_color !== '') {
		$parent_container_classes[] = 'style-'.$index_back_color.'-bg';
	}
	$images_size = $drop_ratio;
	if ( $drop_image_position !== '' ) {
		$main_container_classes[] = 'uncode-post-titles-parent-' . esc_attr( $drop_image_position );

		if ( $drop_image_default === 'yes' ) {
			$main_container_classes[] = 'uncode-post-titles-default-image';

			if ( $drop_title_default === 'yes' ) {
				$main_container_classes[] = 'uncode-post-titles-default-title';
			}
		}

		$back_array = array(
			'background-repeat' => $back_repeat,
			'background-position' => $back_position,
			'background-size' => $back_size,
			'background-attachment' => $back_attachment,
		);

	} else {
		if ( $drop_anchor !== '' ) {
			$main_container_classes[] = 'drop-anchor-' . esc_attr( $drop_anchor );
		}
		if ( $drop_shadow !== '' ) {
			$drop_classes[] = 'tmb-shadowed';

			$drop_shadow_out = $drop_shadow_weight;
			if ( $drop_shadow_weight === '' ){
				$drop_shadow_out = 'xs';
			}
			if ( $drop_shadow_darker !== '' ) {
				$drop_shadow_out = 'darker-' . $drop_shadow_out;
			}

			$drop_classes[] = 'tmb-shadowed-' . $drop_shadow_out;
		}
		if ( $drop_radius !== '' ){
			$drop_classes[] = 'img-round';
			$drop_classes[] = 'img-round-' . $drop_radius;
		}
	}
	if ( $drop_image_hover !== '' ) {
		$main_container_classes[] = 'drop-hover-' . $drop_image_hover;
	}
	if ( $drop_image_arrange !== '' ) {
		$main_container_classes[] = 'drop-arrange-' . esc_attr( $drop_image_arrange );
	}
	if ( $drop_image_time !== '' ) {
		$main_data['data-timing'] = esc_attr( $drop_image_time );
	}
	if ( $titles_display_mobile === 'yes' ) {
		$main_container_classes[] = 'drop-mobile-block';
	}
	if ( $titles_gap_reduced_mobile === 'yes' ) {
		$main_container_classes[] = 'drop-mobile-gap-reduced';
	}
	if ( $titles_hide_meta_mobile === 'yes' ) {
		$main_container_classes[] = 'drop-mobile-hide-meta';
	} elseif ( $titles_hide_meta_mobile === 'block' ) {
		$main_container_classes[] = 'drop-mobile-block-meta';
	}
	if ( $titles_hide_separator_mobile === 'yes' ) {
		$main_container_classes[] = 'drop-mobile-hide-separator';
	}
	$parent_container_classes[] = 'post-titles-inner';
	$parent_container_classes[] = 'titles-display-' . $titles_display;
} elseif ($index_type === 'table') {
	$main_container_classes[] = 'uncode-post-table';
	$main_container_classes[] = $gutter_size;
	if ( $table_mobile_gutter !== '' ) {
		$main_container_classes[] = $table_mobile_gutter;
	}
	if ( $table_v_align !== '' ) {
		$main_container_classes[] = 'uncode-post-table-valign-' . $table_v_align;
	}
	if ( $table_display_tablet !== 'yes' ) {
		$main_container_classes[] = 'tablet-stacked';
	}
	if ( $table_display_mobile !== 'yes' ) {
		$main_container_classes[] = 'mobile-stacked';
	}
	if ( $table_click_row === 'yes' && $table_hover !== '' ) {
		$main_container_classes[] = 'uncode-post-table-hover';
		$main_container_classes[] = 'uncode-post-table-hover-' . $table_hover;
	}
	$images_size = $table_images_size;
} else {
	$main_container_classes[] = 'index-system';
	$main_container_classes[] = $gutter_size;
	$parent_container_classes[] = 'index-wrapper clearfix';
	$parent_container_classes[] = 'style-' . $style_preset;
	$container_classes[] = 'index-row';
	if ( ! $is_tax_query ) {
		if ( $infinite === 'yes' && $pagination !== 'yes')  {
			$parent_container_classes[] = 'index-infinite';
			if ($infinite_button === 'yes') {
				$parent_container_classes[] = 'index-infinite-button';
			}
		} else {
			$parent_container_classes[] = 'index-pagination';
		}
	}
	if ($index_back_color !== '') {
		$parent_container_classes[] = 'style-'.$index_back_color.'-bg';
	}
}

if ( $skew === 'yes' ) {
	$main_container_classes[] = 'uncode-skew';
}

if ( $off_grid === 'yes' ) {
	$container_classes[] = 'off-grid-layout';
	$container_classes[] = 'off-grid-item-' . $off_grid_element;
	$container_classes[] = 'off-grid-val-' . $off_grid_val;

	if ( $off_grid_all === 'yes' ) {
		$container_classes[] = 'off-grid-forced';
	}

	if ( $off_grid_element === 'custom' ) {
		$off_grid_arr = explode(',', $off_grid_custom);
	}
}

if ( ! $is_tax_query ) {
	if ( $pagination_disable_history === 'yes' ) {
		$main_container_classes[] = 'un-no-history';
	}
}

$general_images_size = $images_size;

$main_container_classes[] = trim($this->getExtraClass( $el_class ));

$main_data_attributes = array_map(function ($v, $k) { return $k . '="' . $v . '"'; }, $main_data, array_keys($main_data));

?>
<div<?php if ($index_type === 'isotope') { echo ' id="' . esc_attr($el_id) .'"'; } ?> class="<?php echo esc_attr(trim(implode(' ', $main_container_classes))); ?>" <?php echo implode(' ', $main_data_attributes); ?>>
	<?php if ( $posts_counter > 0 && $index_type === 'isotope'):  ?>
		<?php if ( $filtering === 'yes' && ! $is_tax_query ) :
			$show_filters                  = false;
			$show_extra_filters            = $show_extra_filters === 'yes' ? true : false;
			$show_woo_sorting              = class_exists( 'WooCommerce' ) && $show_extra_filters && $show_woo_sorting === 'yes' ? true : false;
			$show_widgetized_content_block = $show_extra_filters && $show_widgetized_content_block === 'yes' && $widgetized_content_block_id ? true : false;
			$filter_hide_cats              = $show_extra_filters && $filter_hide_cats === 'yes' ? true : false;
			$woo_sorting_skin              = $woo_sorting_skin === 'dark' ? 'dark' : 'light';
			$woo_sorting_shadow            = $woo_sorting_shadow === 'yes' ? true : false;

			$show_woo_result_count_flag = false;

			if ( $show_woo_sorting ) {
				$show_woo_result_count_flag = true;

				if ( ! $filter_hide_cats && $show_woo_result_count !== 'yes' ) {
					$show_woo_result_count_flag = false;
				}
			}

			$show_woo_result_count = $show_woo_result_count_flag;

			$categories_array = array();

			// Show filter bar when sorting or widgetized sidebar is active
			if ( $show_woo_sorting || $show_widgetized_content_block ) {
				$show_filters = true;
			}

			if ( ! $filter_hide_cats ) {
				$this->resetTaxonomies();
				if ($infinite === 'yes' || $pagination != 'yes') {
					if (count($this->filter_categories) != 0) {
						$categories_array = $this->getFilterCategories();
					}
				} else {
					$parse_query = $this->parseData($loop_pagination);
					$parse_query['size'] = '-1';
					$this->getLoop( $parse_query );
					$my_query_filter = $this->query;
					foreach ($my_query_filter->posts as &$value) {
						$get_cat = $this->getCategoriesCss( $value->ID );
						$post->categories_css = $get_cat['cat_css'];
					}
					if (count($this->filter_categories) != 0) {
						$categories_array = $this->getFilterCategories();
					}
					wp_reset_query();
				}
			}

			if ( count($categories_array) > 1 || ($infinite === 'yes' && $filtering === 'yes') ) {
				$show_filters = true;
			}

			$has_cat_filters = false;

			if ( count( $categories_array ) > 1 && ! $filter_hide_cats ) {
				$has_cat_filters = true;
			}


			if ( $show_filters ) :

				$filters_container_class = array();

				if ( $has_cat_filters ) {
					$filters_container_class[] = 'has-cat-filters';
				}

				if ( $show_woo_sorting ) {
					$filters_container_class[] = 'has-sorting';

					if ( $filter_hide_cats && $show_woo_result_count ) {
						$filters_container_class[] = 'has-result-count';
					}
				}

				if ( $show_widgetized_content_block ) {
					$filters_container_class[] = 'has-widgetized-cb';
				}

				if ( $show_woo_sorting || $show_widgetized_content_block ) {
					$filters_container_class[] = 'has-extra-filters';
				}

				if ( ot_get_option( '_uncode_menu_li_animation' ) === 'on' ) {
					$filters_container_class[] = 'menu-animated';
				}

				$filters_container_class[] = esc_attr($gutter_size);

				if ($filter_back_color !== '') {
					$filters_container_class[] = 'style-'.$filter_back_color.'-bg';
					$filters_container_class[] = 'with-bg';
				}

				if ( $filter_mobile === 'yes' ) {
					$filters_container_class[] = 'mobile-hidden';
					$filters_container_class[] = 'tablet-hidden';
				}

				if ( $filter_mobile_dropdown === 'yes' ) {
					$filters_container_class[] = 'mobile-dropdown';
				}

				if ( $filter_scroll === 'yes' ) {
					$filters_container_class[] = 'filter-scroll';
				}

				if ( $inner_padding === 'yes' ) {
					$filters_container_class[] = 'filters-inner-padding';
				}

				if ( $filter_sticky === 'yes' ) {
					$filters_container_class[] = 'sticky-element';
				}

				if ( $filter_typography ) {
					$filters_container_class[] = 'filter-typography-' . $filter_typography;
				}

				$filters_container_class[] = 'submenu-' . esc_attr( $woo_sorting_skin );

				$filters_container_class[] = esc_attr( ($filtering_uppercase === 'yes') ? ' text-uppercase' : ' no-text-uppercase' );

				$result_count_show = false;
				?>
				<?php if ( $filter_mobile_wrapper === 'yes' ) {

					$filters_container_class[] = 'filters-wrapper';

					$filters_wrapper_trigger = true;

				} ?>
					<div class="isotope-filters menu-container <?php echo esc_attr( implode( ' ', $filters_container_class ) ); ?> menu-<?php echo esc_attr($filter_style); ?>">
						<?php if ( $filters_wrapper_trigger ) { echo '<div class="filters-toggle text-mobile-' . esc_attr($filter_mobile_align) . ' mobile-toggle"><a href="#" class="filters-toggle-trigger mobile-toggle-trigger desktop-hidden menu-smart-toggle">' . esc_html( $filter_mobile_wrapper_text ) . '</a></div>'; } ?>
						<div class="menu-horizontal<?php echo esc_attr( ($filtering_full_width !== 'yes') ? ' limit-width' : '' ); ?> text-<?php echo esc_attr($filtering_position); ?> text-mobile-<?php echo esc_attr($filter_mobile_align); ?> filter-alignment-<?php echo esc_attr($filtering_position); ?> <?php echo esc_attr( ( $woo_sorting_shadow ) ? ' menu-dd-shadow-sm' : '' ); ?>">
							<?php if ( ! $filter_hide_cats ) : ?>
								<?php if ($filter_mobile_dropdown === 'yes') { ?>
									<div class="menu-smart--filter-cats_mobile-toggle desktop-hidden mobile-toggle">
										<a href="#" class="menu-smart--filter-cats_mobile-toggle-trigger mobile-toggle-trigger no-isotope-filter menu-smart-toggle"><?php echo esc_html( $filter_all_text === '' ? esc_html( $filter_mobile_dropdown_text ) : $filter_all_text ); ?></a>
									</div>
								<?php } ?>
								<ul class="menu-smart sm<?php echo esc_attr( ($filtering_uppercase === 'yes') ? ' text-uppercase' : ' no-text-uppercase' ); ?> menu-smart--filter-cats <?php echo esc_attr( $filter_mobile_dropdown === 'yes' ? 'menu-smart--filter-cats-mobile-dropdown ul-mobile-dropdown' : '' ); ?>">
									<?php
										global $wp;
										$current_url = home_url(add_query_arg(array(),$wp->request));
										$show_all_class = 'filter-show-all';
										if ($filter_all_opposite === 'yes') {
											if ($filtering_position === 'left') {
												$show_all_class = ' float-right';
											}
											if ($filtering_position === 'right') {
												$show_all_class = ' float-left';
											}
										}
									?>
									<?php
									$isotope_nav_link_class = $show_woo_sorting || $show_widgetized_content_block ? '' : 'isotope-nav-link';
									?>
									<li class="<?php echo esc_attr($show_all_class); ?>">
										<span>
											<?php if (($infinite === 'yes' || $pagination !== 'yes' || $my_query->max_num_pages == 1) && !isset($_GET['id'])) :
											?><a href="#" data-filter="*" class="<?php if (!isset($_GET['ucat'])) echo 'active'; if ($filtering_uppercase !== 'yes') echo ' no-letterspace'; ?> isotope-nav-link"><?php
												else:
											?><a href="<?php echo esc_url( $current_url ); ?>" class="<?php if (!isset($_GET['ucat'])) echo 'active'; if ($filtering_uppercase !== 'yes') echo ' no-letterspace'; ?>  <?php echo esc_attr( $isotope_nav_link_class ); ?>"><?php
												endif;
												echo esc_html( $filter_all_text === '' ? esc_html__('Show all' , 'uncode') : $filter_all_text );
											?></a>
										</span>
									</li>
									<?php foreach ( $categories_array as $cat ):
										if ($cat->taxonomy !== 'product_type'): ?>
											<?php if (($infinite === 'yes' || $pagination !== 'yes' || $my_query->max_num_pages == 1) && !isset($_GET['ucat'])) : ?>
												<li class="filter-cat-<?php echo esc_attr($cat->term_id); ?>"><span><a href="#" data-filter="grid-cat-<?php echo esc_attr($cat->term_id); ?>" class="<?php if (isset($_GET['ucat']) && $_GET['ucat'] == $cat->term_id) echo 'active'; ?> isotope-nav-link"><?php echo esc_attr( $cat->name ) ?></a></span></li>
											<?php else : ?>
												<li class="filter-cat-<?php echo esc_attr($cat->term_id); ?>"><span><a href="<?php echo esc_url( $current_url ); ?>?id=<?php echo esc_attr($el_id); ?>&amp;ucat=<?php echo esc_attr($cat->term_id); ?>" class="<?php if (isset($_GET['ucat']) && $_GET['ucat'] == $cat->term_id) { echo 'active'; } ?>  <?php echo esc_attr( $isotope_nav_link_class ); ?>"><?php echo esc_attr( $cat->name ) ?></a></span></li>
											<?php endif; ?>
										<?php endif;
									endforeach; ?>
								</ul>
							<?php endif; ?>

							<?php if ( $show_woo_result_count && $filter_hide_cats ) : ?>
								<div class="woocommerce-result-count-wrapper woocommerce-result-count-wrapper--top tablet-hidden mobile-hidden text-<?php echo esc_attr( $filtering_position ); ?> text-mobile-<?php echo esc_attr($filter_mobile_align); ?> <?php echo esc_attr( $filter_style === 'dark' ? 'style-dark' : 'style-light' ); ?>">
									<?php uncode_woocommerce_print_result_count( $my_query->found_posts, $my_query->get( 'posts_per_page' ), $my_query->get( 'paged' ) ); ?>
								</div>
							<?php endif; ?>

							<?php if ( $show_woo_sorting || $show_widgetized_content_block ) : ?>
								<div class="extra-filters-wrapper <?php echo esc_attr( ( $filtering_uppercase === 'yes' ) ? ' text-uppercase' : 'no-text-uppercase' ); ?> <?php echo esc_attr( ( $hide_woo_sorting_icon === 'yes' ) ? ' no-sorting-icon' : '' ); ?> <?php echo esc_attr( ( $hide_widgetized_content_block_icon === 'yes' ) ? ' no-filter-icon' : '' ); ?>">
							<?php endif; ?>

								<?php if ( $show_woo_sorting ) : ?>
									<?php uncode_woocommerce_print_sorting_dropdown( $woo_sorting_default_text ); ?>
								<?php endif; ?>

								<?php if ( $show_widgetized_content_block ) : ?>
									<?php $widgetized_content_block_toggle_text = $widgetized_content_block_toggle_text ? $widgetized_content_block_toggle_text : __( 'Options', 'uncode' ); ?>

									<ul class="menu-smart sm uncode-woocommerce-toggle-widgetized-cb">
										<li class="uncode-woocommerce-toggle-widgetized-cb__item"><a href="#" class="uncode-woocommerce-toggle-widgetized-cb__link no-isotope-filter mobile-toggle-trigger"><?php echo esc_html( $widgetized_content_block_toggle_text ); ?></a>
										</li>
									</ul>
								<?php endif; ?>

							<?php if ( $show_woo_sorting || $show_widgetized_content_block ) : ?>
								</div>
							<?php endif; ?>
						</div>
						<?php
						$counter_mobile = '';
						if ( $show_woo_result_count ) {
							if ( $filter_hide_cats ) {
								$counter_mobile = ' desktop-hidden';
							}
						?>
							<div class="woocommerce-result-count-wrapper woocommerce-result-count-wrapper--bottom<?php echo esc_attr( $counter_mobile ); ?> text-<?php echo esc_attr( $filtering_position ); ?> text-mobile-<?php echo esc_attr($filter_mobile_align); ?> <?php echo esc_attr( $filter_style === 'dark' ? 'style-dark' : 'style-light' ); ?>">
								<?php uncode_woocommerce_print_result_count( $my_query->found_posts, $my_query->get( 'posts_per_page' ), $my_query->get( 'paged' ) ); ?>
							</div>
						<?php } ?>
					</div>

					<?php if ( $show_widgetized_content_block ) : ?>
						<div class="widgetized-cb-wrapper <?php echo esc_attr( $gutter_size ); ?>">
							<?php
							$widgetized_content_block_id      = apply_filters( 'wpml_object_id', $widgetized_content_block_id, 'uncodeblock', true );
							$widgetized_content_block_content = get_post_field( 'post_content', $widgetized_content_block_id );

							echo uncode_remove_p_tag( $widgetized_content_block_content );

							// reset loop just in case
							$this->loop_args = $args;
							$this->resetTaxonomies();
							?>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
		<?php

		/*** data module preparation ***/
		$div_data = array();
		switch ($index_type) {
			case 'isotope':
				$div_data['data-type'] = $style_preset;
				$div_data['data-layout'] = $isotope_mode;
				$div_data['data-lg'] = $screen_lg;
				$div_data['data-md'] = $screen_md;
				$div_data['data-sm'] = $screen_sm;
				$div_data['data-vp-height'] = $single_height_viewport === 'yes' && $index_type === 'isotope' && $style_preset === 'metro';
				if ( $single_height_viewport_minus === 'yes' ) {
					$div_data['data-vp-menu'] = 'true';
				}
				break;
			case 'carousel':
				if ($carousel_type === 'fade') {
					$div_data['data-fade'] = 'true';
				}
				if ($carousel_loop === 'yes') {
					$div_data['data-loop'] = 'true';
				}
				if ($carousel_dots === 'yes' || $carousel_dots_mobile === 'yes') {

					if ($carousel_dots_space === 'yes') {
						$container_classes[] = 'owl-dots-db-space';
					}
					if ($carousel_dots_inside === 'yes') {
						$container_classes[] = 'owl-dots-inside';
					} else {
						$container_classes[] = 'owl-dots-outside';
					}

					switch ($carousel_dot_padding) {
				  		case 0:
							$container_classes[] = 'owl-dots-no-block-padding';
							break;
						case 1:
							$container_classes[] = 'owl-dots-half-block-padding';
							break;
						case 2:
						default:
							$container_classes[] = 'owl-dots-single-block-padding';
							break;
						case 3:
							$container_classes[] = 'owl-dots-double-block-padding';
							break;
						case 4:
							$container_classes[] = 'owl-dots-triple-block-padding';
							break;
						case 5:
							$container_classes[] = 'owl-dots-quad-block-padding';
							break;
					}

					$carousel_dot_position = $carousel_dot_position === '' ? 'center' : $carousel_dot_position;
					$container_classes[] = 'owl-dots-align-'.esc_attr($carousel_dot_position);
				}
				if ($carousel_dots === 'yes') {
					$div_data['data-dots'] = 'true';
				}
				if ($carousel_dots_mobile === 'yes') {
					$div_data['data-dotsmobile'] = 'true';
				}
				if ($carousel_nav === 'yes') {
					$div_data['data-nav'] = 'true';
				}
				if ($carousel_nav_mobile === 'yes') {
					$div_data['data-navmobile'] = 'true';
				} else {
					$div_data['data-navmobile'] = 'false';
				}
				if ($carousel_nav === 'yes' || $carousel_nav_mobile === 'yes') {
					$div_data['data-navskin'] = $carousel_nav_skin;
				}
				if ($carousel_navspeed !== '') {
					$div_data['data-navspeed'] = $carousel_navspeed;
				}
				if ((int)$carousel_interval === 0 || $carousel_interval === '' ) {
					$div_data['data-autoplay'] = 'false';
				} else {
					$div_data['data-autoplay'] = 'true';
					$div_data['data-timeout'] = $carousel_interval;
				}
				if ($carousel_autoh === 'yes') {
					$div_data['data-autoheight'] = 'true';
				}
				if ($stage_padding !== '' && $stage_padding !== 0) {
					$div_data['data-stagepadding'] = $stage_padding;
				}

				$carousel_lg = absint( $carousel_lg );
				$carousel_lg = $carousel_lg > 0 ? $carousel_lg : 3;
				$carousel_md = absint( $carousel_md );
				$carousel_md = $carousel_md > 0 ? $carousel_md : 3;
				$carousel_sm = absint( $carousel_sm );
				$carousel_sm = $carousel_sm > 0 ? $carousel_sm : 1;
				$div_data['data-lg'] = $carousel_lg;
				$div_data['data-md'] = $carousel_md;
				$div_data['data-sm'] = $carousel_sm;
				$div_data['data-vp-height'] = $thumb_size === 'fluid' ? $carousel_height_viewport : 'false';
				if ( $carousel_height_viewport_minus === 'yes' ) {
					$div_data['data-vp-menu'] = 'true';
				}

				if ($column_width_use_pixel === 'yes' && $carousel_width_pixel !== '') {
					$carousel_width_pixel = preg_replace("/[^0-9,.]/", "", $carousel_width_pixel);
					$carousel_width_pixel = 12 * round(($carousel_width_pixel) / 12);
					$internal_width = ' style="max-width:' . esc_attr( $carousel_width_pixel ) . 'px;"';
				} else {
					if (!empty($carousel_width_percent) && $carousel_width_percent !== '100') {
					  $internal_width = ' style="max-width:' . esc_attr( $carousel_width_percent ) . '%;"';
					}
				}

				$dots_classes = array();
				if ($carousel_dot_width !== '') {
					$dots_classes[] = 'limit-width';
				}

				break;
		}

		$div_data_attributes = array_map(function ($v, $k) { return $k . '="' . $v . '"'; }, $div_data, array_keys($div_data));

		?>
		<?php if ( !empty( $parent_container_classes ) ) { ?><div class="<?php echo esc_attr(trim(implode(' ', $parent_container_classes))); ?>"><?php } ?>
			<?php if ( !empty( $container_classes ) ) { ?><div<?php if ($index_type === 'carousel') { echo ' id="' . esc_attr($el_id) .'"'; } ?> class="<?php if ($posts_counter > 0) { echo esc_attr(trim(implode(' ', $container_classes))); } ?>" <?php echo implode(' ', $div_data_attributes); ?>><?php } ?>
			<?php
			$i_matrix = 0;
			if ( $posts_counter > 0 ):

				$no_album_counter = 0;

				foreach ( $posts as $key_post => $post ):

					if (!$is_tax_query && !in_array($post->type, $post_types)) {
						continue;
					}

					if ( $wrong_layout === true ) {
						continue;
					}

					$block_data = array();
					$tmb_data_parent = array();
					$tmb_data = array();
					$item_thumb_id = '';
					$block_classes = array('tmb');

					if ($index_type === 'carousel') {
						$block_classes[] = 'tmb-carousel';
					} elseif ($index_type === 'titles') {
						$block_classes[] = 'tmb-title';
					} elseif ($index_type === 'table') {
						$block_classes[] = 'tmb-table';
						if ( $table_border !== '' ) {
							$block_classes[] = 'tmb-table-border';
							if ( $table_border === 'yes' ) {
								$block_classes[] = 'tmb-table-border-between';
							} elseif ( $table_border === 'below' ) {
								$block_classes[] = 'tmb-table-border-below';
							} elseif ( $table_border === 'above' ) {
								$block_classes[] = 'tmb-table-border-between';
								$block_classes[] = 'tmb-table-border-both';
							} elseif ( $table_border === 'both' ) {
								$block_classes[] = 'tmb-table-border-below';
								$block_classes[] = 'tmb-table-border-both';
							}
						}
						if ( $table_click_row === 'yes' ) {
							$block_classes[] = 'tmb-click-row';
							$block_data['table_click_row'] = true;
						}
					}

					if ( isset( $off_grid_arr ) && is_array( $off_grid_arr ) && !empty( $off_grid_arr ) && in_array( $key_post % ( 12 / $single_width ), $off_grid_arr ) ) {
						$block_classes[] = 'off-grid-custom-item';
					}

					$title_classes = array();
					$lightbox_classes = array();

					if (!empty($post->format)) {
						$block_classes[] = 'tmb-format-' . $post->format;
					}

					if ( $post_matrix === 'matrix' ) {
						$matrix_amount = intval($matrix_amount) == 0 ? 1 : intval($matrix_amount);
						$item_prop = (isset($matrix_items[($i_matrix % $matrix_amount) . '_i'])) ? $matrix_items[($i_matrix % $matrix_amount) . '_i'] : array();
					} else {
						$item_prop = (isset($items[$post->id . '_i'])) ? $items[$post->id . '_i'] : array();
					}

					if ($post->type === 'product') {
						$block_classes[] = 'tmb-woocommerce';
						$block_data['product'] = true;
					} else {
						$block_data['product'] = false;
					}

					if ( $index_type !== 'titles' ) {
						$post_type_layout = $index_type === 'table' ? $post->type . '_table' : $post->type;
						if ( $index_type === 'table' ) {
							$typeLayout = $is_tax_query ? $post_blocks['uncode_taxonomy_table'] : $post_blocks['uncode_' . str_replace('-', '_', $post_type_layout)];
						} else {
							$typeLayout = $is_tax_query ? $post_blocks['uncode_taxonomy'] : $post_blocks['uncode_' . str_replace('-', '_', $post_type_layout)];
						}
						$single_layout = $is_tax_query ? 'single_layout_uncode_taxonomy_items' : 'single_layout_' . $post_type_layout . '_items';

						if (isset($item_prop[$single_layout])) {
							$typeLayout = uncode_flatArray(vc_sorted_list_parse_value($item_prop[$single_layout]));
						}

						if (
							( isset($typeLayout['media']) && isset($typeLayout['media'][4]) && $typeLayout['media'][4] === 'enhanced-atc')
							||
							( ot_get_option('_uncode_woocommerce_enhanced_atc') === 'on' && ( ! isset($typeLayout['media']) || ! isset($typeLayout['media'][4]) || $typeLayout['media'][4] === '' || $typeLayout['media'][4] === 'inherit-atc' ) )
						) {
							$block_classes[] = 'enhanced-atc';
						}

						if (
							( isset($typeLayout['media']) && isset($typeLayout['media'][5]) && $typeLayout['media'][5] === 'auto-w-atc')
							||
							( ot_get_option('_uncode_woocommerce_width_atc') === 'on' && ( ! isset($typeLayout['media']) || ! isset($typeLayout['media'][5]) || $typeLayout['media'][5] === '' || $typeLayout['media'][5] === 'inherit-w-atc' ) )
						) {
							$block_classes[] = 'auto-width-atc';
						}

						if (isset($typeLayout['price']) && isset($typeLayout['price'][0]) && $typeLayout['price'][0] === 'inline') {
							$block_data['price_inline'] = 'yes';
						}

						if ( isset($typeLayout['media']) && isset($typeLayout['media'][6]) && $typeLayout['media'][6] === 'atc-typo-column') {
							$block_data['atc_column_typography'] = 'yes';
						} else {
							$block_data['atc_column_typography'] = 'no';
						}

						$block_classes[] = 'atc-typography-inherit';

						if ( isset($typeLayout['media']) && isset($typeLayout['media'][7]) && $typeLayout['media'][7] === 'hide-atc') {
							$block_data['show_atc'] = 'no';
						} else {
							$block_data['show_atc'] = 'yes';
						}

					} else {
						$typeLayout = array();
						$typeLayout['title'] = true;
						if ( $drop_hide_media !== 'off' ) {
							$typeLayout['media'][0] = 'featured';
						}
					}

					$single_text = (isset($item_prop['single_text'])) ? $item_prop['single_text'] : $general_text;
					$single_image_position = (isset($item_prop['single_image_position'])) ? $item_prop['single_image_position'] : $general_image_position;
					$single_vertical_text = (isset($item_prop['single_vertical_text'])) ? $item_prop['single_vertical_text'] : $general_vertical_text;
					$single_image_size = (isset($item_prop['single_image_size'])) ? $item_prop['single_image_size'] : $general_image_size;
					$single_lateral_responsive = (isset($item_prop['single_lateral_responsive'])) ? $item_prop['single_lateral_responsive'] : $general_lateral_responsive;

					if ($index_type !== 'carousel') {
						$single_width = (isset($item_prop['single_width'])) ? $item_prop['single_width'] : $general_width;
						if ( $index_type === 'titles' ) {
							$single_width = $drop_width;
						}
						$block_classes[] = 'tmb-iso-w' . $single_width;
						if ( $single_width == 15 ) {
							$single_width = 3;
						}
					} else {
						$single_width = floor( ( intval( $col_width ) / 12 ) * ( 1 / intval( $carousel_lg ) ) * 12 );
					}

					$single_height = (isset($item_prop['single_height'])) ? $item_prop['single_height'] : $general_height;
					$single_fluid_height = (isset($item_prop['single_fluid_height'])) ? $item_prop['single_fluid_height'] : $general_fluid_height;

					if ( isset($div_data['data-vp-height']) && $div_data['data-vp-height'] ){
					  $single_height = $single_fluid_height;
					}
					$block_classes[] = 'tmb-iso-h' . $single_height;

					$images_size = (isset($item_prop['images_size'])) ? $item_prop['images_size'] : $general_images_size;

					$single_back_color = (isset($item_prop['single_back_color'])) ? $item_prop['single_back_color'] : $general_back_color;

					$single_shape = (isset($item_prop['single_shape'])) ? $item_prop['single_shape'] : $general_shape;

					if ($single_shape !== '') {
						$block_classes[] = ($single_back_color === '' || (count($typeLayout) === 1 && array_key_exists('media',$typeLayout))) ? 'img-' . $single_shape : 'tmb-' . $single_shape;
					}

					if ( $single_shape === 'round' && $radius !== '' ){
						$block_classes[] = 'img-round-' . $radius;
					}

					if (!array_key_exists('media',$typeLayout) && $single_text === 'overlay' && $style_preset === 'masonry') {
						$block_classes[] = 'tmb-no-media';
					}

					$single_style = (isset($item_prop['single_style'])) ? $item_prop['single_style'] : $general_iso_style;
					$block_classes[] = 'tmb-' . $single_style;

					if ($index_back_color === '' && $single_back_color === '' && $changer_back_color_column === true && $changer_back_color_column_inner === true) {
						$tmb_data_parent['data-skin-change'] = 'tmb-' . $single_style;
					}

					$single_overlay_color = (isset($item_prop['single_overlay_color']) && $item_prop['single_overlay_color'] !== '') ? $item_prop['single_overlay_color'] : $general_overlay_color;
					$overlay_style = $stylesArray[!array_search($single_style, $stylesArray) ];

					if ($single_overlay_color === '') {
						if ($overlay_style === 'light'){
							$single_overlay_color = 'light';
						} else {
							$single_overlay_color = 'dark';
						}
					}

					$single_overlay_color = 'style-' . $single_overlay_color .'-bg';

					$single_overlay_coloration = (isset($item_prop['single_overlay_coloration'])) ? $item_prop['single_overlay_coloration'] : $general_overlay_coloration;
					switch ($single_overlay_coloration) {
						case 'top_gradient':
							$block_classes[] = 'tmb-overlay-gradient-top';
							break;
						case 'bottom_gradient':
							$block_classes[] = 'tmb-overlay-gradient-bottom';
							break;
					}

					$single_overlay_opacity = (isset($item_prop['single_overlay_opacity'])) ? $item_prop['single_overlay_opacity'] : $general_overlay_opacity;

					$single_overlay_blend = (isset($item_prop['single_overlay_blend'])) ? $item_prop['single_overlay_blend'] : $general_overlay_blend;

					$single_elements_click = (isset($item_prop['single_elements_click'])) ? $item_prop['single_elements_click'] : $general_elements_click;

					$single_h_align = (isset($item_prop['single_h_align'])) ? $item_prop['single_h_align'] : $general_h_align;
					$single_h_align_mobile = (isset($item_prop['single_h_align_mobile'])) ? $item_prop['single_h_align_mobile'] : $general_h_align_mobile;
					$single_table_last_align = (isset($item_prop['single_table_last_align'])) ? $item_prop['single_table_last_align'] : $general_table_last_align;

					$single_text_visible = (isset($item_prop['single_text_visible'])) ? $item_prop['single_text_visible'] : $general_text_visible;
					if ($single_text_visible === 'yes') {
						$block_classes[] = 'tmb-text-showed';
					}

					$single_text_anim = (isset($item_prop['single_text_anim'])) ? $item_prop['single_text_anim'] : $general_text_anim;
					if ($single_text_anim === 'yes') {
						$block_classes[] = 'tmb-overlay-text-anim';
					}

					$single_text_anim_type = (isset($item_prop['single_text_anim_type'])) ? $item_prop['single_text_anim_type'] : $general_text_anim_type;
					if ($single_text_anim_type === 'btt') {
						$block_classes[] = 'tmb-reveal-bottom';
					}

					$single_overlay_visible = (isset($item_prop['single_overlay_visible'])) ? $item_prop['single_overlay_visible'] : $general_overlay_visible;
					if ($single_overlay_visible === 'yes') {
						$block_classes[] = 'tmb-overlay-showed';
					}

					$single_overlay_anim = (isset($item_prop['single_overlay_anim'])) ? $item_prop['single_overlay_anim'] : $general_overlay_anim;
					if ($single_overlay_anim === 'yes') {
						$block_classes[] = 'tmb-overlay-anim';
					}

					if ($single_text === 'overlay') {

						$single_h_position = (isset($item_prop['single_h_position'])) ? $item_prop['single_h_position'] : $general_h_position;

						$single_reduced = (isset($item_prop['single_reduced'])) ? $item_prop['single_reduced'] : $general_reduced;
						$single_reduced_mobile = (isset($item_prop['single_reduced_mobile'])) ? $item_prop['single_reduced_mobile'] : $general_reduced_mobile;
						if ($single_reduced !== '') {
							switch ($single_reduced) {
								case 'three_quarter':
									$block_classes[] = 'tmb-overlay-text-reduced';
									break;
								case 'half':
									$block_classes[] = 'tmb-overlay-text-reduced-2';
									break;
								case 'limit-width':
									$block_data['limit-width'] = true;
									$single_h_position = 'center';
									break;
							}
							if ($single_h_position !== '') {
								$block_classes[] = 'tmb-overlay-' . $single_h_position;
							}
							if ($single_reduced_mobile !== '') {
								$block_classes[] = 'tmb-overlay-text-wide-sm';
							}
						}

						$single_v_position = (isset($item_prop['single_v_position'])) ? $item_prop['single_v_position'] : $general_v_position;
						if ($single_v_position !== '') {
							$block_classes[] = 'tmb-overlay-' . $single_v_position;
						}
						if ($single_h_align !== '') {
							$block_classes[] = 'tmb-overlay-text-' . $single_h_align;
						}
						if ($single_h_align_mobile !== '') {
							$block_classes[] = 'tmb-overlay-text-mobile-' . $single_h_align_mobile;
						}
					} else {
						if ( $single_text === 'lateral' ) {
							$single_image_position = $single_image_position == '' ? 'left' : $single_image_position;
							$single_vertical_text = $single_vertical_text == '' ? 'top' : $single_vertical_text;
							$block_classes[] = 'tmb-content-lateral-' . $single_image_position;
							$block_classes[] = 'tmb-content-vertical-' . $single_vertical_text;
							$block_classes[] = 'tmb-content-size-' . intval( $single_image_size );
							if ( $single_lateral_responsive === 'yes' ) {
								$block_classes[] = 'tmb-content-lateral-responsive';
							}
						}

						if ( $index_type !== 'titles' ) {
							$block_classes[] = 'tmb-content-' . $single_h_align;
							if ($single_h_align_mobile !== '') {
								$block_classes[] = 'tmb-content-mobile-' . $single_h_align_mobile;
							}
						}

						if ( $index_type === 'table' && $single_table_last_align !== '' ) {
							$block_classes[] = 'tmb-content-last-' . $single_table_last_align;
						}
					}

					$single_text_reduced = (isset($item_prop['single_text_reduced'])) ? $item_prop['single_text_reduced'] : $general_text_reduced;
					if ($single_text_reduced === 'yes') {
						$block_classes[] = 'tmb-text-space-reduced';
					}

					$single_image_coloration = (isset($item_prop['single_image_coloration'])) ? $item_prop['single_image_coloration'] : $general_image_coloration;
					if ($single_image_coloration === 'desaturated') {
						$block_classes[] = 'tmb-desaturated';
					}

					$single_image_color_anim = (isset($item_prop['single_image_color_anim'])) ? $item_prop['single_image_color_anim'] : $general_image_color_anim;
					if ($single_image_color_anim === 'yes') {
						$block_classes[] = 'tmb-image-color-anim';
					}

					$single_image_anim = (isset($item_prop['single_image_anim'])) ? $item_prop['single_image_anim'] : $general_image_anim;
					if ($single_image_anim === 'yes') {
						$single_image_magnetic = (isset($item_prop['single_image_magnetic'])) ? $item_prop['single_image_magnetic'] : $general_image_magnetic;
						if ($single_image_magnetic === 'yes') {
							$block_classes[] = 'tmb-image-anim-magnetic';
						} else {
							$block_classes[] = 'tmb-image-anim';
						}
					}

					$single_secondary = (isset($item_prop['single_secondary'])) ? $item_prop['single_secondary'] : $general_secondary;
					if ($single_secondary === 'yes') {
						$block_classes[] = 'tmb-show-secondary';
					}

					$single_icon = (isset($item_prop['single_icon'])) ? $item_prop['single_icon'] : $general_icon;

					$single_shadow = (isset($item_prop['single_shadow'])) ? $item_prop['single_shadow'] : $general_shadow;
					$shadow_weight = (isset($item_prop['shadow_weight'])) ? $item_prop['shadow_weight'] : $general_shadow_weight;
					$shadow_darker = (isset($item_prop['shadow_darker'])) ? $item_prop['shadow_darker'] : $general_shadow_darker;

					if ($single_shadow === 'yes') {
						$block_classes[] = 'tmb-shadowed';

						$shadow_out = $shadow_weight;
						if ( $shadow_weight === '' ){
							$shadow_out = 'xs';
						}
						if ( $shadow_darker !== '' ) {
							$shadow_out = 'darker-' . $shadow_out;
						}

						$block_classes[] = 'tmb-shadowed-' . $shadow_out;
					}

					$single_title_semantic = (isset($item_prop['single_title_semantic'])) ? $item_prop['single_title_semantic'] : $general_title_semantic;
					if ($single_title_semantic !== '') {
						$block_data['tag'] = $single_title_semantic;
					}

					$single_border = (isset($item_prop['single_border'])) ? $item_prop['single_border'] : $general_border;
					if ($single_border !== 'yes') {
						$block_classes[] = 'tmb-bordered';
					}

					$single_title_transform = (isset($item_prop['single_title_transform'])) ? $item_prop['single_title_transform'] : $general_title_transform;
					if ($single_title_transform !== '') {
						$block_classes[] = 'tmb-entry-title-' . $single_title_transform;
					}

					$single_title_family = (isset($item_prop['single_title_family'])) ? $item_prop['single_title_family'] : $general_title_family;
					if ($single_title_family !== '') {
						$title_classes[] = $single_title_family;
					}

					$single_title_dimension = (isset($item_prop['single_title_dimension'])) ? $item_prop['single_title_dimension'] : $general_title_dimension;
					if ($single_title_dimension !== '') {
						$title_classes[] = $single_title_dimension;
					} else {
						if ($style_preset === 'metro') {
							switch ($single_width) {
								case 1:
								case 2:
									$title_classes[] = 'h6';
									break;
								case 3:
									$title_classes[] = 'h5';
									break;
								case 4:
									$title_classes[] = 'h4';
									break;
								case 6:
								case 7:
								case 8:
									$title_classes[] = 'h3';
									break;
								case 9:
								case 10:
									$title_classes[] = 'h2';
									break;
								case 11:
								case 12:
									$title_classes[] = 'h1';
									break;
							}
						} else {
							$title_classes[] = 'h6';
						}
					}

					$single_title_weight = (isset($item_prop['single_title_weight'])) ? $item_prop['single_title_weight'] : $general_title_weight;
					if ($single_title_weight !== '') {
						$title_classes[] = 'font-weight-' . $single_title_weight;
					}

					$single_title_height = (isset($item_prop['single_title_height'])) ? $item_prop['single_title_height'] : $general_title_height;
					if ($single_title_height !== '') {
						$title_classes[] = $single_title_height;
					}

					$single_title_space = (isset($item_prop['single_title_space'])) ? $item_prop['single_title_space'] : $general_title_space;
					if ($single_title_space !== '') {
						$title_classes[] = $single_title_space;
					}

					$single_text_lead = (isset($item_prop['single_text_lead'])) ? $item_prop['single_text_lead'] : $general_text_lead;
					if ($single_text_lead === 'yes') {
						$block_data['text_lead'] = 'yes';
					} else if ($single_text_lead === 'small') {
						$block_data['text_lead'] = 'small';
					}

					$single_meta_custom_typo = (isset($item_prop['single_meta_custom_typo'])) ? $item_prop['single_meta_custom_typo'] : $general_meta_custom_typo;

					if ( $single_meta_custom_typo === 'yes' ) {

						$single_meta_size = (isset($item_prop['single_meta_size'])) ? $item_prop['single_meta_size'] : $general_meta_size;
						if ( $single_meta_size !== '' ) {
							$block_classes[] = 'tmb-meta-size-' . $single_meta_size;
						}

						$single_meta_weight = (isset($item_prop['single_meta_weight'])) ? $item_prop['single_meta_weight'] : $general_meta_weight;
						if ( $single_meta_weight !== '' ) {
							$block_classes[] = 'tmb-meta-weight-' . $single_meta_weight;
						}

						$single_meta_transform = (isset($item_prop['single_meta_transform'])) ? $item_prop['single_meta_transform'] : $general_meta_transform;
						if ( $single_meta_transform !== '' ) {
							$block_classes[] = 'tmb-meta-transform-' . $single_meta_transform;
						}
					}

					$single_animation_delay = (isset($item_prop['single_animation_delay'])) ? $item_prop['single_animation_delay'] : $general_animation_delay;
					$single_animation_speed = (isset($item_prop['single_animation_speed'])) ? $item_prop['single_animation_speed'] : $general_animation_speed;
					$single_css_animation = (isset($item_prop['single_css_animation'])) ? $item_prop['single_css_animation'] : $general_css_animation;

					if ($single_css_animation !== '' && uncode_animations_enabled()) {
						if ( $single_css_animation === 'parallax' ) {
							$single_parallax_intensity = ( isset( $item_prop['single_parallax_intensity'] ) ) ? $item_prop['single_parallax_intensity'] : $general_parallax_intensity;
							$single_parallax_centered = ( isset( $item_prop['single_parallax_centered'] ) ) ? $item_prop['single_parallax_centered'] : $general_parallax_centered;
							$block_data['parallax'] = $single_parallax_intensity;
							$block_data = array_merge( $block_data, uncode_get_parallax_div_data( $single_parallax_intensity, $single_parallax_centered ) );
						} else {
							$block_data['animation'] = ' animate_when_almost_visible ' . $single_css_animation;
							if ($single_animation_delay !== '') {
								$tmb_data['data-delay'] = $single_animation_delay;
							}
							if ($single_animation_speed !== '') {
								$tmb_data['data-speed'] = $single_animation_speed;
							}
						}
					}

					if ( $custom_cursor !== '' ) {
						$tmb_data['data-cursor'] = 'icon-' . esc_attr( $custom_cursor );
					}

					if (isset($typeLayout['media']) && isset($typeLayout['media'][0])) {
						switch ($typeLayout['media'][0]) {
							case 'featured':
								if ( $is_tax_query ) {
									$item_thumb_id = uncode_get_term_featured_thumbnail_id( $post->id );
								} else {
									$item_thumb_id = get_post_thumbnail_id($post->id);
									if ( $item_thumb_id === '' || $item_thumb_id == 0 ) {
										$item_thumb_id = get_post_meta( $post->id, '_uncode_featured_media', 1);
										$medias = explode(',', $item_thumb_id);
										if (is_array($medias) && isset($medias[0])) {
											$item_thumb_id = $medias[0];
										}
									}
								}
								break;
							case 'media':
								$item_thumb_id = get_post_meta( $post->id, '_uncode_featured_media', 1);
								if ( $item_thumb_id === '' || $item_thumb_id == 0 ) {
									$item_thumb_id = get_post_thumbnail_id($post->id);
								}
								break;
							case 'custom':
								if (!$is_tax_query && isset($item_prop['back_image'])) {
									$item_thumb_id = $item_prop['back_image'];
								}
								break;
						}
					}

					if (isset($typeLayout['media']) && ( $item_thumb_id === '' || $item_thumb_id == 0 ) && $single_text !== 'overlay') {
						if ($post->type === 'product' && isset( $typeLayout['media'][0] ) && $typeLayout['media'][0] === 'featured') {
							$typeLayout['media'][0] = 'placeholder';
				  		} else {
							unset($typeLayout['media']);
							if ($single_back_color === '' && isset($item_prop) && is_array($item_prop) && $index_type !== 'table') {
								$item_prop['single_padding'] = 0;
							}
						}
					}

					$block_classes[] = $post->categories_css;
					if ($no_double_tap === 'yes') {
						$block_classes[] = 'tmb-no-double-tap';
					}

					if ( $is_tax_query ) {
						$block_classes[] = 'tmb-term-id-' . $post->id;
					} else {
						$block_classes[] = 'tmb-id-' . $post->id;
					}

					$single_padding = (isset($item_prop['single_padding'])) ? $item_prop['single_padding'] : $general_padding;
					$single_padding_vertical = (isset($item_prop['single_padding_vertical'])) ? $item_prop['single_padding_vertical'] : $general_padding_vertical;

					if ( $index_type === 'table' ) {
						switch ($single_padding) {
							case 0:
								$block_classes[] = 'tmb-table-no-h-padding';
								break;
							case 1:
								$block_classes[] = 'tmb-table-half-h-padding';
								break;
							case 2:
							default:
								$block_classes[] = 'tmb-table-single-h-padding';
								break;
							case 3:
								$block_classes[] = 'tmb-table-double-h-padding';
								break;
							case 4:
								$block_classes[] = 'tmb-table-triple-h-padding';
								break;
							case 5:
								$block_classes[] = 'tmb-table-quad-h-padding';
								break;
						}

						if ( $table_general_typo === 'yes' ) {
							$block_data['table_heading'] = true;
						}
					}

					$block_data['id'] = $post->id;
					$block_data['content'] = $post->content;
					$block_data['classes'] = $block_classes;
					$block_data['drop_classes'] = $drop_classes;
					$block_data['tmb_data'] = $tmb_data;
					$block_data['tmb_data_parent'] = $tmb_data_parent;
					$block_data['media_id'] = $item_thumb_id;
					$block_data['images_size'] = $images_size;
					$block_data['single_style'] = $single_style;
					$block_data['single_text'] = $single_text;
					if ( $single_text !== 'lateral' ) {
						$single_image_size = 1;
					}
					$block_data['single_image_size'] = $single_image_size;
					$block_data['single_image_position'] = $single_image_position;
					$block_data['single_elements_click'] = $single_elements_click;
					$block_data['single_secondary'] = $single_secondary;
					$block_data['overlay_opacity'] = $single_overlay_opacity;
					$block_data['overlay_blend'] = $single_overlay_blend;
					$block_data['overlay_color'] = $single_overlay_color;
					$block_data['overlay_style'] = $overlay_style;
					$block_data['thumb_size'] = $thumb_size;
					$block_data['single_width'] = $single_height_viewport === 'yes' || $thumb_size === 'fluid' ? '12' : $single_width;
					$block_data['single_height'] = $single_height_viewport === 'yes' || $thumb_size === 'fluid' || ( $style_preset === 'metro' && $single_text === 'lateral' ) ? '' : $single_height;
					$block_data['single_back_color'] = $single_back_color;
					$block_data['single_icon'] = $single_icon;
					$block_data['single_title'] = $post->title;

					switch ($single_padding) {
				  		case 0:
							$block_data['text_padding'] = 'no-block-padding';
							break;
						case 1:
							$block_data['text_padding'] = 'half-block-padding';
							break;
						case 2:
						default:
							$block_data['text_padding'] = 'single-block-padding';
							break;
						case 3:
							$block_data['text_padding'] = 'double-block-padding';
							break;
						case 4:
							$block_data['text_padding'] = 'triple-block-padding';
							break;
						case 5:
							$block_data['text_padding'] = 'quad-block-padding';
							break;
					}

					if ( $single_padding_vertical !== '' ) {
						$block_data['text_padding'] .= ' single-h-padding';
					}

					if (isset($item_prop['text_length'])) {
						$block_data['text_length'] = $item_prop['text_length'];
					}
					if (isset($item_prop['read_more_text'])) {
						$block_data['read_more_text'] = $item_prop['read_more_text'];
					}

					if (!$is_tax_query && isset($item_prop['single_link']) && $item_prop['single_link'] != '') {
						$post->link = $item_prop['single_link'];
						$link = vc_build_link( $item_prop['single_link'] );
						$post->link = $link['url'];
						$a_title = $link['title'];
						$a_target = $link['target'];
						$block_data['link'] = $link;
					} else {
						$block_data['link'] = array(
							'url' => $post->link,
							'target' => '_self'
				  		);
					}

					$block_data['title_classes'] = $title_classes;
					if ($single_text === 'overlay' && $single_elements_click !== 'yes') {
						$block_data['single_categories'] = $post->categories_name;
						$block_data['single_tags'] = $post->tags_name;
					} else {
						$block_data['single_categories'] = $this->getCategoriesLink( $post->id );
					}

					$single_categories = $block_data['single_categories'];
					$single_categories_tax = array();
					$single_categories_tag = array();
					foreach ($single_categories as $key => $value) {
						if ( isset($value['tax']) && $value['tax'] == 'category' ) {
							$single_categories_tax[] = $value;
							unset($single_categories[$key]);
						} elseif ( isset($value['tax']) && $value['tax'] == 'post_tag' ) {
							$single_categories_tag[] = $value;
							unset($single_categories[$key]);
						}
					}

					$single_categories = array_merge($single_categories, $single_categories_tax);
					$single_categories = array_merge($single_categories, $single_categories_tag);
					$block_data['single_categories'] = $single_categories;

					$block_data['taxonomy_type'] = $post->taxonomy_type;
					foreach ( $block_data['taxonomy_type'] as $key_tax => $value_tax ) {
						if ( $value_tax === 'product_type' || $value_tax === 'product_visibility' || $value_tax === 'product_tag' ) {
							unset( $block_data['taxonomy_type'][$key_tax] );
						}
					}
					$single_categories_id = $post->categories_id;
					$single_categories_id_tax = array();
					$single_categories_id_tag = array();
					foreach ($single_categories_id as $key => $tax) {
						$term = get_term($tax);
						if ( $term->taxonomy == 'category' ) {
							$single_categories_id_tax[] = $tax;
							unset($single_categories_id[$key]);
						} elseif ( $term->taxonomy == 'post_tag' ) {
							$single_categories_id_tag[] = $tax;
							unset($single_categories_id[$key]);
						}
					}

					$single_categories_id = array_merge($single_categories_id, $single_categories_id_tax);
					$single_categories_id = array_merge($single_categories_id, $single_categories_id_tag);
					$block_data['single_categories_id'] = $single_categories_id;

					if (isset($typeLayout['media'][1]) && $typeLayout['media'][1] === 'lightbox') {
						if ($lbox_skin !== '') {
							$lightbox_classes['data-skin'] = $lbox_skin;
						}
						if ($lbox_title !== '') {
							$lightbox_classes['data-title'] = true;
						}
						if ($lbox_caption !== '') {
							$lightbox_classes['data-caption'] = true;
						}
						if ($lbox_dir !== '') {
							$lightbox_classes['data-dir'] = $lbox_dir;
						}
						if ($lbox_social !== '') {
							$lightbox_classes['data-social'] = true;
						}
						if ($lbox_deep !== '') {
							$lightbox_classes['data-deep'] = $el_id;
						}
						if ($lbox_no_tmb !== '') {
							$lightbox_classes['data-notmb'] = true;
						}
						if ($lbox_no_arrows !== '') {
							$lightbox_classes['data-noarr'] = true;
						}
						if (count($lightbox_classes) === 0) {
							$lightbox_classes['data-active'] = true;
						}
					} elseif (isset($typeLayout['media'][1]) && $typeLayout['media'][1] === 'nolink') {
						$block_data['link_class'] = 'inactive-link';
						$block_data['link'] = '#';
					}

					if (isset($typeLayout['media'][2]) && $typeLayout['media'][2] === 'poster') {
						$block_data['poster'] = true;
					} else {
						$block_data['poster'] = false;
					}

					if (isset($typeLayout['icon'][0]) && $typeLayout['icon'][0] !== '') {
						$block_data['icon_size'] = ' t-icon-size-' . $typeLayout['icon'][0];
					}

					$block_data['lb_index'] = $no_album_counter;
					$no_album_counter++;

					$block_data['parent_id'] = $parent_id;

					if ( $is_tax_query ) {
						$block_data['is_tax_block'] = true;
						$block_data['tax_queried'] = $tax_queried;
					}

					// Pass layout type
					$block_data['is_isotope']  = $index_type === 'isotope' ? true : false;
					$block_data['is_carousel'] = $index_type === 'carousel' ? true : false;

					if ( $index_type === 'titles' ) {
						$block_data['is_titles'] = true;
						if ( $drop_image_position !== '' ) {
							$block_data['drop_image_position'] = $drop_image_position;
							$block_data['drop_back_array'] = $back_array;
						}

						if ( $titles_display === 'inline' ) {
							$block_data['drop_image_separator_classes'] = array(
								'tmb-' . $single_style,
								'tmb-color-title'
							);
							switch ($drop_image_separator) {
								case 'slash':
									$drop_image_separator_entity = '/';
									break;

								case 'pipe':
									$drop_image_separator_entity = '|';
									break;

								case 'dash':
									$drop_image_separator_entity = '-';
									break;

								case 'bullet':
									$drop_image_separator_entity = '&#x2022;';
									break;

								case 'dot':
									$drop_image_separator_entity = '&#x22C5;';
									break;

								case 'triangle':
									$drop_image_separator_entity = '&#x2023;';
									break;

								case 'square':
									$drop_image_separator_entity = '&#x25A0;';
									break;

								default:
									$drop_image_separator_entity = '';
									$block_data['drop_image_separator_classes'][] = 'drop-image-separator-empty';
									break;
							}
							$drop_image_separator_entity = $drop_image_separator === 'custom' ? $drop_image_custom_separator : $drop_image_separator_entity;
							if ( $i_matrix+1 === $posts_counter ) {
								$block_data['drop_image_separator_last'] = true;
							}
							if ( $i_matrix === 0 ) {
								$block_data['drop_image_separator_first'] = true;
							}
							$block_data['drop_image_separator'] = $drop_image_separator_entity;
							if ( $drop_h_space !== '' ) {
								$block_data['drop_image_separator_classes'][] = 'drop-separator-' . $drop_h_space;
							}
						}

						if ( $drop_image_extra === 'yes' ) {
							$block_data['drop_image_extra_class'] = array( 'drop-image-extra' );
							if ( $drop_image_extra_type === '' ) {
								$block_data['drop_image_extra'] = sprintf('%02d', $i_matrix+1);
							} else {
								$block_data['drop_image_extra'] = true;
								$typeLayout[$drop_image_extra_type][0] = true;
							}

							$block_data['drop_image_extra_size'] = $drop_image_extra_size;
							$block_data['drop_image_extra_weight'] = $drop_image_extra_weight;
							$block_data['drop_extra_position'] = $drop_image_extra_position;
							if ($single_title_space !== '') {
								$block_data['drop_image_extra_class'][] = $single_title_space;
							}
						}

					} elseif ( $index_type === 'table' ) {
						$block_data['is_table'] = true;
						if ( $table_display_tablet === 'yes' ) {
							$block_data['table_on_tablet'] = true;
						}
						if ( $table_display_mobile === 'yes' ) {
							$block_data['table_on_mobile'] = true;
						}
						foreach ($typeLayout as $key => $value) {
							if ( $wrong_layout_check !== true ) {
								$wrong_layout_check = true;
								if ( $key !== 'col-one' && $key !== 'col-two' && $key !== 'col-three' && $key !== 'col-four' && $key !== 'col-five' && $key !== 'col-six' ) {
									$wrong_layout = true;
									if ( current_user_can( 'edit_posts' ) ) {
										echo '<p>' . esc_html__( 'The Post Table layout must start with a \'Column\' element.', 'uncode' ) . '</p>';
									}
									continue;
								}
							}
						}
					}

					if ( ! $wrong_layout ) {
						echo uncode_create_single_block($block_data, $el_id, $style_preset, $typeLayout, $lightbox_classes, 'no', true);
					} else {
						continue;
					}

					$i_matrix++;

				endforeach;
			else: ?>
				<div class="tmb tmb-iso-w12 tmb-iso-h1"><p class="t-entry-title"><?php esc_html_e( "Nothing found.", "uncode" ) ?></p></div>
			<?php endif; ?>
		<?php if ( !empty( $container_classes ) ) { ?></div><?php } ?>

	<?php if ( $index_type === 'carousel' && isset( $dots_classes ) && !empty( $dots_classes ) ) {
		$dots_classes[] = 'owl-dots-classes';
		echo '<div class="uncode_index-dot_classes ' . esc_attr(trim(implode( ' ', $dots_classes ))) . '"' . $internal_width . '></div>';
	} ?>


	<?php if ( !empty( $parent_container_classes ) ) { ?></div><?php } ?>
	<?php if (!$is_tax_query && ($infinite === 'yes' || $pagination === 'yes') && $index_type !== 'carousel'):
		$page_url = explode("?", get_pagenum_link(1, false));
		$footer_background = ' style-' . $footer_style;
		if ($footer_back_color !== '') {
			$footer_background .= ' style-'.$footer_back_color.'-bg with-bg';
		}
		?>
		<div class="<?php echo esc_attr($index_type); ?>-footer<?php echo esc_attr($footer_background) . ' ' . esc_attr($gutter_size); ?>">
			<div class="<?php echo esc_attr($index_type); ?>-footer-inner<?php if ($footer_full_width !== 'yes') { echo ' limit-width'; ?> menu-<?php echo esc_attr($footer_style); } ?> text-center">
				<?php if ($infinite === 'yes' && $pagination !== 'yes' && $my_query->max_num_pages != 1 && $paged < $my_query->max_num_pages): ?>
					<nav class="loadmore-button"<?php if ($infinite_button !== 'yes') { echo ' style="display: none;"'; } ?>>
						<?php
						if ($infinite_button_text === '') {
							$infinite_button_text = ($infinite_button === 'yes') ? esc_html__('Load more' , 'uncode') : esc_html__('Loading…' , 'uncode');
						}
						$nextpage = intval($paged) + 1;
						if (isset($page_url[1]) && $page_url[1] !== '') {
							parse_str($page_url[1], $output);
							$output['upage'] = $nextpage;
						} else {
							$output = array('upage' => $nextpage);
						}

						$next_page_url = $page_url[0] . add_query_arg( $output, '?' );
						if (is_search() && $auto_query === 'yes') {
							$next_page_url = get_next_posts_page_link();
						}
						$load_more_button = '<a data-page="' . esc_attr( $nextpage ) . '" data-pages="' . esc_attr( $my_query->max_num_pages ) .'" href="' . esc_url($next_page_url) . '" class="btn"><div class="icon-container"><i class="fa fa-refresh2 fa-lg fa-spin"></i></div><span>' . $infinite_button_text . '</span></a>';
						$load_more_classes = '';
						if ($infinite_button_color !== '') {
							$load_more_classes .= ' btn-' . $infinite_button_color;
						} else {
							$load_more_classes .= ' btn-default';
						}

						// Hover effect
						$infinite_hover_fx = $infinite_hover_fx=='' ? ot_get_option('_uncode_button_hover') : $infinite_hover_fx;

						// Outlined and flat classes
						if ( $infinite_hover_fx == '' || $infinite_hover_fx == 'outlined' ) {
							if ($infinite_button_outline === 'yes' ) {
								$load_more_classes .= ' btn-outline';
							}
						} else {
							$load_more_classes .= ' btn-flat';
						}

						if ($infinite_button_shape !== '') {
							$load_more_classes .= ' ' . $infinite_button_shape;
						}
						$load_more_button = str_replace('class="btn"', 'class="btn' . esc_attr( $load_more_classes ) . '" data-label="' . esc_attr($infinite_button_text) . '"', $load_more_button);
						echo uncode_remove_p_tag($load_more_button);
						?>
					</nav>
				<?php else:
					if ($pagination === 'yes'):
						$base = $page_url[0] . '%_%';
						$prev_link = '';
						$next_link = '';
						if (isset($_GET['ucat']) || is_front_page() || is_home() || is_archive() || is_single()) {
							if (isset($page_url[1]) && $page_url[1] !== '') {
								parse_str($page_url[1], $output);
							}
							if ( !is_array($output) ) {
								$output = array();
							}
							$output['upage'] = '%#%';
							$format = add_query_arg( $output, '?' );
							if ($paged - 1 > 0) {
								$output['upage'] = $paged - 1;
								$prev_link = $page_url[0] . add_query_arg( $output, '?' );
							}
							if ($paged < $my_query->max_num_pages) {
								$output['upage'] = $paged + 1;
								$next_link = $page_url[0] . add_query_arg( $output, '?' );
							}
						} else {
							$format = 'page/%#%';
							if ($paged > 1) {
								$prev_link = $page_url[0] . 'page/' . ($paged - 1);
							}
							if ($paged == 2) {
								$prev_link = $page_url[0];
							}
							if ($paged < $my_query->max_num_pages) {
								$next_link = $page_url[0] . 'page/' . ($paged + 1);
							}
						}
						$pagination_args = array(
							'base'			=> $base,
							'format'		  => $format,
							'total'		   => $my_query->max_num_pages,
							'current'		 => $paged,
							'show_all'		=> false,
							'prev_next'	   => false,
							'type'			=> 'array',
							'add_args'		=> false,
							'add_fragment'	=> ''
						);

						if ( isset( $_GET['s'] ) ) {
							$next_link = add_query_arg( 's', $_GET['s'], $next_link );
							$prev_link = add_query_arg( 's', $_GET['s'], $prev_link );
						}

						if ( is_archive() ) {
							$pagination_args['base'] = str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) );
						}

						$paginate_links = paginate_links($pagination_args);
						if (is_array($paginate_links)) {
							echo "<ul class='pagination'>";
							if ( $paged > 1 ) {
								echo '<li class="page-prev"><a class="btn btn-link text-default-color" href="' . esc_url( $prev_link ) . '"><i class="fa fa-angle-left"></i></a></li>';
							} else {
								echo '<li class="page-prev"><span class="btn btn-link btn-disable-hover"><i class="fa fa-angle-left"></i></a></li>';
							}
							foreach ( $paginate_links as $page ) {
								echo '<li><span class="btn btn-link text-default-color">'.$page.'</span></li>';
							}
							if ( $paged < $my_query->max_num_pages ) {
								echo '<li class="page-next"><a class="btn btn-link text-default-color" href="' . esc_url( $next_link ) . '"><i class="fa fa-angle-right"></i></a></li>';
							} else {
								echo '<li class="page-next"><span class="btn btn-link btn-disable-hover"><i class="fa fa-angle-right"></i></a></li>';
							}
							echo "</ul>";
						}
					endif;
				endif; ?>
			</div>
		</div>
	<?php endif; ?>
	<?php echo uncode_print_dynamic_colors_inline_style( $inline_style_css ); ?>
</div>
<?php
$uncode_vc_index = false;
