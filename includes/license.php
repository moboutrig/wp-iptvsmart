<?php
/**
 * License Page
 *
 * @package iptvsmart
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add the license page to the admin menu.
 */
function iptvsmart_add_license_page() {
	add_menu_page(
		__( 'License', 'iptvsmart' ),
		__( 'License', 'iptvsmart' ),
		'manage_options',
		'iptvsmart-license',
		'iptvsmart_render_license_page',
		'dashicons-admin-network',
		99
	);
}
add_action( 'admin_menu', 'iptvsmart_add_license_page' );

/**
 * Render the license page.
 */
function iptvsmart_render_license_page() {
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'License', 'iptvsmart' ); ?></h1>
		<form method="post" action="options.php">
			<?php
			settings_fields( 'iptvsmart_license_group' );
			do_settings_sections( 'iptvsmart-license' );
			submit_button();
			?>
		</form>
		<form method="post" action="">
			<?php
			$license_status = get_option( 'iptvsmart_license_status' );
			if ( $license_status && 'valid' === $license_status ) {
				?>
				<p>
					<input type="submit" name="iptvsmart_license_deactivate" value="<?php esc_attr_e( 'Deactivate License', 'iptvsmart' ); ?>" class="button button-secondary">
				</p>
				<?php
			}
			?>
		</form>
	</div>
	<?php
}

/**
 * Register the license settings.
 */
function iptvsmart_register_license_settings() {
	register_setting(
		'iptvsmart_license_group',
		'iptvsmart_license_key',
		'iptvsmart_sanitize_license_key'
	);

	add_settings_section(
		'iptvsmart_license_section',
		__( 'License Settings', 'iptvsmart' ),
		'iptvsmart_render_license_section',
		'iptvsmart-license'
	);

	add_settings_field(
		'iptvsmart_license_key',
		__( 'License Key', 'iptvsmart' ),
		'iptvsmart_render_license_key_field',
		'iptvsmart-license',
		'iptvsmart_license_section'
	);
}
add_action( 'admin_init', 'iptvsmart_register_license_settings' );

/**
 * Sanitize the license key.
 *
 * @param string $license_key The license key to sanitize.
 * @return string The sanitized license key.
 */
function iptvsmart_sanitize_license_key( $license_key ) {
	return sanitize_text_field( $license_key );
}

/**
 * Render the license section.
 */
function iptvsmart_render_license_section() {
	esc_html_e( 'Enter your license key to activate the theme.', 'iptvsmart' );
}

/**
 * Render the license key field.
 */
function iptvsmart_render_license_key_field() {
	$license_key = get_option( 'iptvsmart_license_key' );
	?>
	<input type="text" name="iptvsmart_license_key" id="iptvsmart_license_key" value="<?php echo esc_attr( $license_key ); ?>" class="regular-text">
	<?php
	$license_status = get_option( 'iptvsmart_license_status' );
	if ( $license_status && 'valid' === $license_status ) {
		?>
		<p class="description" style="color: green;"><?php esc_html_e( 'License is active.', 'iptvsmart' ); ?></p>
		<?php
	} else {
		?>
		<p class="description" style="color: red;"><?php esc_html_e( 'License is not active.', 'iptvsmart' ); ?></p>
		<?php
	}
}

/**
 * Activate the license key.
 */
function iptvsmart_activate_license() {
	if ( isset( $_POST['iptvsmart_license_key'] ) ) {
		$license_key = sanitize_text_field( $_POST['iptvsmart_license_key'] );

		// Make a request to the license server to activate the license.
		$api_params = array(
			'edd_action' => 'activate_license',
			'license'    => $license_key,
			'item_name'  => urlencode( 'iptvsmart' ),
			'url'        => home_url(),
		);

		$response = wp_remote_post(
			'https://example.com',
			array(
				'timeout'   => 15,
				'sslverify' => false,
				'body'      => $api_params,
			)
		);

		if ( is_wp_error( $response ) ) {
			return;
		}

		$license_data = json_decode( wp_remote_retrieve_body( $response ) );

		if ( 'valid' === $license_data->license ) {
			update_option( 'iptvsmart_license_status', 'valid' );
		} else {
			update_option( 'iptvsmart_license_status', 'invalid' );
		}
	}
}
add_action( 'admin_init', 'iptvsmart_activate_license' );

/**
 * Deactivate the license key.
 */
function iptvsmart_deactivate_license() {
	if ( isset( $_POST['iptvsmart_license_deactivate'] ) ) {
		$license_key = get_option( 'iptvsmart_license_key' );

		// Make a request to the license server to deactivate the license.
		$api_params = array(
			'edd_action' => 'deactivate_license',
			'license'    => $license_key,
			'item_name'  => urlencode( 'iptvsmart' ),
			'url'        => home_url(),
		);

		$response = wp_remote_post(
			'https://example.com',
			array(
				'timeout'   => 15,
				'sslverify' => false,
				'body'      => $api_params,
			)
		);

		if ( is_wp_error( $response ) ) {
			return;
		}

		$license_data = json_decode( wp_remote_retrieve_body( $response ) );

		if ( 'deactivated' === $license_data->license ) {
			delete_option( 'iptvsmart_license_status' );
		}
	}
}
add_action( 'admin_init', 'iptvsmart_deactivate_license' );
