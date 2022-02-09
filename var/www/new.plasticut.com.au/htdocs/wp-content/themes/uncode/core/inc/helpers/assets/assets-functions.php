<?php
/**
 * Assets related functions
 */

require_once get_template_directory() . '/core/inc/helpers/assets/test-functions.php';
require_once get_template_directory() . '/core/inc/helpers/assets/font-functions.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/background-media.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/object-fit.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/gsap.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/jquery-bigtext.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/isotope.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/jquery-infinitescroll.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/owl-carousel.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/ilightbox.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/jquery-vc_chart.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/jquery-vc_progress.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/jquery-counterup.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/jquery-countdown.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/share.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/bootstrap-tab-history.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/jquery-fullpage.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/onepage.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/collapse.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/tab.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/tooltip.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/rellax.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/particles.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/vertical-text.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/magic-cursor.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/twentytwenty.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/extra-filters.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/filters.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/bg-changer.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/revslider.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/layerslider.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/shortpixel.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/unmodal.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/livesearch.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/vivus.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/pricing-tables.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/iconbox.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/dividers.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/single-media.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/post-table.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/rotateit.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/author.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/comments.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/breadcrumbs.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/widgets.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/wordpress-gallery.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/gmaps.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/cf7.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/woocommerce.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/wishlist.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/custom-fields.php';
require_once get_template_directory() . '/core/inc/helpers/assets/tests/video-shortcode.php';

/**
 * Check if we can split the CSS
 */
function uncode_can_split_css() {
	if ( is_admin() ) {
		return false;
	}

	$can_split_css = ot_get_option( '_uncode_split_css_files' ) === 'on' ? true : false;

	return $can_split_css;
}

/**
 * Check if we can split the JS
 */
function uncode_can_split_js() {
	if ( is_admin() ) {
		return false;
	}

	$can_split_js = ot_get_option( '_uncode_split_js_files' ) === 'on' ? true : false;

	return $can_split_js;
}

/**
 * Check if we can defer non-critical CSS
 */
function uncode_can_defer_styles() {
	if ( is_admin() ) {
		return false;
	}

	$is_frontend_editor = function_exists( 'vc_is_page_editable' ) && vc_is_page_editable() ? true : false;

	$split_css = $is_frontend_editor ? false : uncode_can_split_css();

	if ( ! $split_css ) {
		return false;
	}

	$can_defer_styles = ot_get_option( '_uncode_defer_css_files' ) === 'on' ? true : false;

	return $can_defer_styles;
}

/**
 * Check if we can inline main CSS style
 */
function uncode_can_inline_main_core_style() {
	if ( is_admin() ) {
		return false;
	}

	$is_frontend_editor = function_exists( 'vc_is_page_editable' ) && vc_is_page_editable() ? true : false;

	$split_css = $is_frontend_editor ? false : uncode_can_split_css();

	if ( ! $split_css ) {
		return false;
	}

	$can_inline_main_core_style = ot_get_option( '_uncode_inline_core_css' ) === 'on' ? true : false;

	return $can_inline_main_core_style;
}

/**
 * Check if we can inline style-custom.css
 */
function uncode_can_inline_style_custom_style() {
	if ( is_admin() ) {
		return false;
	}

	$is_frontend_editor = function_exists( 'vc_is_page_editable' ) && vc_is_page_editable() ? true : false;

	$split_css = $is_frontend_editor ? false : uncode_can_split_css();

	if ( ! $split_css ) {
		return false;
	}

	$can_inline_style_custom_style = ot_get_option( '_uncode_inline_style_custom_css' ) === 'on' ? true : false;
	$can_inline_style_custom_style = apply_filters( 'uncode_can_inline_style_custom_style', $can_inline_style_custom_style );

	return $can_inline_style_custom_style;
}

/**
 * Check if we can move jQuery to the footer
 */
function uncode_can_move_jquery_to_footer() {
	$can_load_jquery_in_footer = ot_get_option( '_uncode_move_jquery_footer' ) === 'on' ? true : false;

	return $can_load_jquery_in_footer;
}

/**
 * Enqueue JS script
 */
function uncode_enqueue_script( $conf, $version = null ) {
	if ( is_array( $conf ) ) {
		if ( isset( $conf['type'] ) && $conf['type'] === 'js' ) {
			if ( isset( $conf['enqueue'] ) && $conf['enqueue'] === true ) {
				wp_enqueue_script( $conf['handle'] );
			} else {
				wp_enqueue_script( $conf['handle'], $conf['path'], $conf['deps'], $version, $conf['in_footer'] );

				if ( $conf['handle'] === 'uncode-ofi' ) {
					wp_script_add_data( 'uncode-ofi', 'conditional', 'lt IE 11' );
					wp_add_inline_script( 'uncode-ofi', 'objectFitImages();' );
				}
			}
		}
	}
}

/**
 * Enqueue CSS style
 */
function uncode_enqueue_style( $conf, $version = null ) {
	if ( is_array( $conf ) ) {
		if ( isset( $conf['type'] ) && $conf['type'] === 'css' ) {
			wp_enqueue_style( $conf['handle'], $conf['path'], $version, 'all' );
		}
	}
}

/**
 * Inline main CSS file
 */
function uncode_print_inline_main_core_style() {
	if ( uncode_can_inline_main_core_style() ) {
		require_once ABSPATH . 'wp-admin/includes/class-wp-filesystem-base.php';
		require_once ABSPATH . 'wp-admin/includes/class-wp-filesystem-direct.php';

		$filesystem = new WP_Filesystem_Direct( false );

		$inline_css = $filesystem->get_contents( get_template_directory() . '/library/css/style-core.css' );
		echo '<style type="text/css" id="uncode-style-core-inline">' . uncode_compress_css_inline( $inline_css ) . '</style>';
	}
}
add_action( 'wp_head', 'uncode_print_inline_main_core_style', 0 );

/**
 * Defer non-critial CSS
 */
function uncode_defer_non_critical_css( $tag, $handle ) {
	if ( uncode_can_defer_styles() ) {
		if ( strpos( $tag, 'wp-admin/' ) !== false || strpos( $tag, 'wp-includes/' ) !== false || strpos( $tag, 'uncode-fonts/' ) !== false || strpos( $tag, 'fonts.googleapis.com/' ) !== false ) {
			return $tag;
		}

		$assets_to_skip     = uncode_can_inline_main_core_style() ? array() : array( 'uncode-style' );
		$assets_to_skip     = apply_filters( 'uncode_assets_to_skip_from_css_defer', $assets_to_skip );
		$defer_style_custom = ot_get_option( '_uncode_defer_style_custom_css' ) === 'on' ? true : false;

		if ( ! $defer_style_custom ) {
			$assets_to_skip[] = 'uncode-custom-style';
		}

		if ( ! in_array( $handle, $assets_to_skip ) ) {
			$preload = 'rel="preload" as="style" onload="this.onload=null;this.rel=\'stylesheet\'"';
			$new_tag = str_replace( "rel='stylesheet'", $preload, $tag );

			return $new_tag;
		}
	}

    return $tag;
}

/**
 * Move jQuery to footer
 */
function uncode_move_jquery_to_footer( $wp_scripts ) {
	if ( is_admin() ) {
		return;
	}

	$is_frontend_editor = function_exists( 'vc_is_page_editable' ) && vc_is_page_editable() ? true : false;

	if ( $is_frontend_editor ) {
		return;
	}

	if ( uncode_can_move_jquery_to_footer() ) {
		$wp_scripts->add_data( 'jquery', 'group', 1 );
		$wp_scripts->add_data( 'jquery-core', 'group', 1 );
		$wp_scripts->add_data( 'jquery-migrate', 'group', 1 );
	}
}
add_action( 'wp_default_scripts', 'uncode_move_jquery_to_footer' );

/**
 * Dequeue WP Emoji
 */
function uncode_remove_wp_emoji_script( $wp_scripts ) {
	if ( is_admin() ) {
		return;
	}

	$is_frontend_editor = function_exists( 'vc_is_page_editable' ) && vc_is_page_editable() ? true : false;

	if ( $is_frontend_editor ) {
		return;
	}

	$remove_emoji = ot_get_option( '_uncode_remove_wp_emoji' ) === 'on' ? true : false;

	if ( $remove_emoji ) {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
	}
}
add_action( 'init', 'uncode_remove_wp_emoji_script' );

/**
 * Dequeue wp-embed.min.js
 */
function uncode_remove_wp_embed_script( $wp_scripts ) {
	if ( is_admin() ) {
		return;
	}

	$is_frontend_editor = function_exists( 'vc_is_page_editable' ) && vc_is_page_editable() ? true : false;

	if ( $is_frontend_editor ) {
		return;
	}

	$remove_embed = ot_get_option( '_uncode_remove_wp_embed_script' ) === 'on' ? true : false;

	if ( $remove_embed ) {
		remove_action('wp_head', 'wp_oembed_add_discovery_links');
		remove_action('wp_head', 'wp_oembed_add_host_js');
	}
}
add_action( 'init', 'uncode_remove_wp_embed_script' );

/**
 * Dequeue default Gutenberg style
 */
function uncode_remove_default_wp_block_style( $wp_scripts ) {
	if ( is_admin() ) {
		return;
	}

	$is_frontend_editor = function_exists( 'vc_is_page_editable' ) && vc_is_page_editable() ? true : false;

	if ( $is_frontend_editor ) {
		return;
	}

	$remove_gutenberg_style = ot_get_option( '_uncode_remove_wp_block_style' ) === 'on' ? true : false;

	if ( $remove_gutenberg_style ) {
		wp_deregister_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library' );
	}
}
add_action( 'wp_enqueue_scripts', 'uncode_remove_default_wp_block_style', 999 );

/**
 * Optimize third party plugins assets
 */
function uncode_optimize_third_party_plugins_assets() {
	if ( is_admin() ) {
		return;
	}

	if ( ! function_exists( 'uncode_deregister_script' ) ) {
		return;
	}

	global $uncode_check_asset;

	$is_frontend_editor = function_exists( 'vc_is_page_editable' ) && vc_is_page_editable() ? true : false;

	if ( $is_frontend_editor ) {
		return;
	}

	$split_css = $is_frontend_editor ? false : uncode_can_split_css();
	$split_js  = $is_frontend_editor ? false : uncode_can_split_js();

	if ( ! $split_css && ! $split_js ) {
		// Get an array that contains all the raw content attached to the page
		$content_array = uncode_get_post_data_content_array();
	}

	// Flags
	$remove_woocommerce_assets   = false;
	$remove_cf7_assets           = false;
	$remove_yith_wishlist_assets = false;
	$remove_livesearch_assets    = false;

	// WooCommerce
	if ( class_exists( 'WooCommerce' ) ) {
		$optimize_woocommerce_assets = ot_get_option( '_uncode_optimize_woocommerce_assets' ) === 'on' ? true : false;

		if ( $optimize_woocommerce_assets ) {
			if ( ! $split_css && ! $split_js ) {
				if ( uncode_page_require_asset_woocommerce( $content_array ) ) {
					$uncode_check_asset['woocommerce'] = true;
					$uncode_check_asset['wishlist']    = true;
				}
			}

			if ( ! isset( $uncode_check_asset['woocommerce'] ) ) {
				$remove_woocommerce_assets = true;
			}
		}
	}

	// CF7
	if ( class_exists( 'WPCF7' ) ) {
		$optimize_cf7_assets = ot_get_option( '_uncode_optimize_cf7_assets' ) === 'on' ? true : false;

		if ( $optimize_cf7_assets ) {
			if ( ! $split_css && ! $split_js ) {
				if ( uncode_page_require_asset_cf7( $content_array ) ) {
					$uncode_check_asset['cf7'] = true;
				}
			}

			if ( ! isset( $uncode_check_asset['cf7'] ) ) {
				$remove_cf7_assets = true;
			}
		}
	}

	// Wishlist
	if ( class_exists( 'YITH_WCWL' ) ) {
		$optimize_yith_wishlist_assets = ot_get_option( '_uncode_optimize_yith_wishlist_assets' ) === 'on' ? true : false;

		if ( $optimize_yith_wishlist_assets ) {
			if ( ! $split_css && ! $split_js ) {
				if ( uncode_page_require_asset_wishlist( $content_array ) ) {
					$uncode_check_asset['wishlist'] = true;
				}
			}

			if ( ! isset( $uncode_check_asset['wishlist'] ) ) {
				$remove_yith_wishlist_assets = true;
			}
		}
	}

	// Livesearch
	if ( class_exists( 'DWLS_Util' ) ) {
		$optimize_dwls_assets = ot_get_option( '_uncode_optimize_dwls_assets' ) === 'on' ? true : false;

		if ( $optimize_dwls_assets ) {
			if ( ! $split_css && ! $split_js ) {
				if ( uncode_page_require_asset_livesearch( $content_array ) ) {
					$uncode_check_asset['livesearch'] = true;
				}
			}

			if ( ! isset( $uncode_check_asset['livesearch'] ) ) {
				$remove_livesearch_assets = true;
			}
		}
	}

	if ( $remove_woocommerce_assets ) {
		wp_deregister_style( 'wc-blocks-style' );
		wp_deregister_style( 'wc-block-vendors-style' );
		wp_dequeue_style( 'wc-blocks-style' );
		wp_dequeue_style( 'wc-block-vendors-style' );

		if ( apply_filters( 'uncode_dequeue_wc_cart_fragments', true ) ) {
			uncode_deregister_script( 'wc-cart-fragments' );
		}

		uncode_deregister_script( 'wc-add-to-cart' );
		uncode_deregister_script( 'jquery-blockui' );
	}

	if ( $remove_cf7_assets ) {
		uncode_deregister_script( 'contact-form-7' );
		wp_dequeue_style( 'contact-form-7' );
	}

	if ( $remove_yith_wishlist_assets ) {
		uncode_deregister_script( 'jquery-selectBox' );
	}

	if ( $remove_livesearch_assets ) {
		uncode_deregister_script( 'daves-wordpress-live-search' );
		wp_dequeue_style( 'daves-wordpress-live-search' );
	}

	if ( $remove_livesearch_assets && $remove_woocommerce_assets && apply_filters( 'uncode_dequeue_wp_underscore', false ) ) {
		uncode_deregister_script( 'underscore' );
	}
}
add_action( 'wp_enqueue_scripts', 'uncode_optimize_third_party_plugins_assets', 999 );

/**
 * Remove jQuery migrate
 */
function uncode_remove_jquery_migrate( $scripts ) {
	$remove_jquery_migrate = ot_get_option( '_uncode_remove_wp_jquery_migrate' ) === 'on' ? true : false;

	if ( $remove_jquery_migrate && ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
		$script = $scripts->registered['jquery'];

		if ( $script->deps ) {
			$script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
		}
	}
}
add_action( 'wp_default_scripts', 'uncode_remove_jquery_migrate' );
