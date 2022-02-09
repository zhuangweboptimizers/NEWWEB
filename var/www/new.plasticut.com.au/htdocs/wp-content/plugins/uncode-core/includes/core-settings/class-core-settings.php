<?php
/**
 * Core settings page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! class_exists( 'Uncode_Menu_Core_Settings_Page' ) ) :

/**
 * Uncode_Menu_Core_Settings_Page Class
 *
 * Creates the Core Settings page.
 */
class Uncode_Menu_Core_Settings_Page {
	/**
	 * Constructor.
	 */
	public function __construct() {
		// Include files
		$this->includes();

		// Add page to WP menu
		add_action( 'admin_menu', array( $this, 'add_to_menu' ), 100 );

		// Load assets
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );

		// Save option via AJAX
		add_action( 'wp_ajax_uncode_core_setttings_update_option', array( $this, 'save_option' ) );
	}

	/**
	 * Enqueue scripts
	 */
	public function admin_scripts() {
		$core_settings_parameters = array(
			'enable_debug' => apply_filters( 'uncode_enable_debug_on_js_scripts', false ),
			'nonce'      => wp_create_nonce( 'uncode-core-settings-nonce' ),
			'locale'     => array(
				'button_confirm'  => esc_html__( 'Save', 'uncode-core' ),
			)
		);

		wp_enqueue_script( 'uncode-core-settings', UNCODE_CORE_PLUGIN_URL . 'includes/core-settings/js/uncode-core-settings.js', array( 'jquery' ), UncodeCore_Plugin::VERSION, true );

		wp_localize_script( 'uncode-core-settings', 'CoreSettingsParameters', $core_settings_parameters );
	}

	/**
	 * Include files
	 */
	public function includes() {
		require_once UNCODE_CORE_PLUGIN_DIR . '/includes/core-settings/utils.php';
	}

	/**
	 * Add page
	 */
	public function add_to_menu() {
		add_submenu_page( 'uncode-system-status', esc_html__( 'Core Settings', 'uncode' ),  esc_html__( 'Core Settings', 'uncode' ) , 'edit_theme_options', 'uncode-core-settings', array( $this, 'output' ) );
	}

	/**
	 * Handles the display of the page in admin.
	 */
	public function output() {
		?>
		<div class="wrap uncode-wrap" id="uncode-core-settings">

			<?php echo uncode_admin_panel_page_title( 'core-settings' ); ?>

			<div class="uncode-admin-panel">
				<?php echo uncode_admin_panel_menu( 'core-settings' ); ?>

				<div class="uncode-admin-panel__content">
					<div class="uncode-admin-panel__left">
						<h2 class="uncode-admin-panel__heading"><?php esc_html_e( 'Notes', 'uncode-core' ); ?></h2>

						<div class="uncode-info-box">
							<p class="uncode-admin-panel__description"><?php esc_html_e( 'In the Core Settings panel, it’s possible to disable legacy features or activate better or up-to-date functionalities. Please be careful because changing these parameters may result in changes to existing installations.', 'uncode-core' ) ?></p>

							<h4 class="uncode-import-description__heading"><?php echo esc_html__( 'Important', 'uncode-core' ); ?></h4>

							<ul class="uncode-import-description__list checklist">
								<li><?php echo esc_html__( 'Using these switches is recommended for fresh installations.', 'uncode-core' ); ?></li>
								<li><?php echo esc_html__( 'Please note that this could break things on existing installations.', 'uncode-core' ); ?></li>
								<li><?php echo esc_html__( 'Before proceeding, it’s suggested to perform a backup.', 'uncode-core' ); ?></li>
							</ul>
						</div><!-- .uncode-info-box -->
					</div><!-- .uncode-admin-panel__left -->

					<div class="uncode-admin-panel__right">
						<?php
						uncode_core_settings_page_on_off_input(
							array(
								'title'   => esc_html__( 'Disable Default Header', 'uncode-core' ),
								'desc'    => sprintf( wp_kses_post( __( 'This option deactivates from the Theme Options and Page Options the legacy Default Header primarily used in the first version of Uncode. <a href="%s" target="_blank">Read More...</a>', 'uncode-core' ) ), 'https://support.undsgn.com/hc/en-us/articles/4407819456273-Core-Settings-Panel#disable-default-header' ),
								'id'      => 'uncode_core_settings_opt_disable_basic_header',
								'warning' => esc_html__( 'Enable this option to deactivate possible Default Headers. If you are using a Default Header on some pages, it is recommended to recreate it with a different header method.', 'uncode-core' ),
							)
						);

						uncode_core_settings_page_on_off_input(
							array(
								'title'   => esc_html__( 'Simplify Single Block Tab', 'uncode-core' ),
								'desc'    => sprintf( wp_kses_post( __( 'This option simplifies the loop of settings of the Single Block tab by presenting only the essential options needed to create diversifications. <a href="%s" target="_blank">Read More...</a>', 'uncode-core' ) ), 'https://support.undsgn.com/hc/en-us/articles/4407819456273-Core-Settings-Panel#simplify-single-block-tab' ),
								'id'      => 'uncode_core_settings_opt_simplify_single_block_tab',
								'warning' => esc_html__( 'Enable this option to simplify the loop of settings of the Single Block tab. If you are using advanced Posts or Media Gallery thumbnails diversifications on some pages, it is recommended to recreate them.', 'uncode-core' ),
							)
						);
						?>
					</div><!-- .uncode-admin-panel__right -->
				</div><!-- .uncode-admin-panel__content -->
			</div><!-- .uncode-admin-panel -->

		</div><!-- .uncode-wrap -->
		<?php
	}

	/**
	 * Save option
	 */
	public function save_option() {
		if ( isset( $_POST['nonce'] ) && wp_verify_nonce( $_POST['nonce'], 'uncode-core-settings-nonce' ) ) {
			if ( isset( $_POST['value'] ) && $_POST['value'] && isset( $_POST['option_id'] ) && $_POST['option_id'] ) {
				update_option( $_POST['option_id'], $_POST['value'] );

				wp_send_json_success(
					array(
						'message' => esc_html__( 'Option saved.', 'uncode-core' )
					)
				);
			} else {
				// Invalid data
				wp_send_json_error(
					array(
						'message' => esc_html__( 'Invalid data.', 'uncode-core' )
					)
				);
			}
		} else {
			// Invalid nonce
			wp_send_json_error(
				array(
					'message' => esc_html__( 'Invalid nonce.', 'uncode-core' )
				)
			);
		}
	}
}

endif;

return new Uncode_Menu_Core_Settings_Page();
