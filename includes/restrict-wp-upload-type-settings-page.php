<?php
/**
 * Admin settings page functions.
 *
 * @link       https://wordpress.org/plugins/restrict-wp-upload-type/
 * @since      1.1.0
 *
 * @package    Restrict_Wp_Upload_Type
 * @subpackage Restrict_Wp_Upload_Type/includes
 */

/**
 * Sanitize a text field or a nested array of text fields.
 *
 * @param string|array $array_or_string Text value or array of text values.
 * @return string|array
 */
function sanitize_text_or_array_field( $array_or_string ) {
	if ( is_string( $array_or_string ) ) {
		$array_or_string = sanitize_text_field( $array_or_string );
	} elseif ( is_array( $array_or_string ) ) {
		foreach ( $array_or_string as &$value ) {
			if ( is_array( $value ) ) {
				$value = sanitize_text_or_array_field( $value );
			} else {
				$value = sanitize_text_field( $value );
			}
		}
	}

	return $array_or_string;
}

add_action( 'admin_menu', 'restrict_wp_upload_files_menu_page' );

/**
 * Register the plugin settings page under Media.
 *
 * @return void
 */
function restrict_wp_upload_files_menu_page() {
	add_submenu_page(
		'upload.php',
		__( 'Restrict Files', 'restrict-wp-upload-type' ),
		__( 'Restrict Files', 'restrict-wp-upload-type' ),
		'manage_options',
		'restrict_file_type',
		'restrict_wp_upload_files_exe_callback'
	);
}

/**
 * Render and save the plugin settings page.
 *
 * @return void
 */
function restrict_wp_upload_files_exe_callback() {
	if ( isset( $_POST['save'] ) ) {
		check_admin_referer( 'rwut_save_settings', 'rwut_nonce' );

		$max_file_size_mb = isset( $_POST['rwut_max_file_size_mb'] )
			? max( 0, (float) sanitize_text_field( wp_unslash( $_POST['rwut_max_file_size_mb'] ) ) )
			: 0;
		$block_message    = isset( $_POST['rwut_block_message'] )
			? sanitize_textarea_field( wp_unslash( $_POST['rwut_block_message'] ) )
			: '';

		update_option( 'rwut_max_file_size_mb', $max_file_size_mb );
		update_option( 'rwut_block_message', $block_message );

		if ( isset( $_POST['check_extension'] ) ) {
			// phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- The array is unslashed here and sanitized recursively below.
			$unslashed_extensions = wp_unslash( $_POST['check_extension'] );
			$prev_value           = sanitize_text_or_array_field( $unslashed_extensions );
			$new_value            = implode( ',', $prev_value );
			$new_value2           = implode( ' , ', $prev_value );

			update_post_meta( 49, 'rwut_check_extension_key', $new_value );
			?>
			<div id="rwut_message" class="updated notice is-dismissible"><p><?php esc_html_e( 'Restrict WP Upload Type settings saved.', 'restrict-wp-upload-type' ); ?> <strong><?php echo esc_html( $new_value2 ); ?></strong></p></div>
			<?php
		} else {
			update_post_meta( 49, 'rwut_check_extension_key', '' );
			?>
			<div id="rwut_message" class="updated notice is-dismissible"><p><?php esc_html_e( 'Settings saved. No file extensions are currently allowed.', 'restrict-wp-upload-type' ); ?></p></div>
			<?php
		}
	}

	require_once plugin_dir_path( __DIR__ ) . 'includes/index.php';
}
