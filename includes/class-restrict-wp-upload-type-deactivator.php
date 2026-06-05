<?php
/**
 * Fired during plugin deactivation
 *
 * @link       https://wordpress.org/plugins/restrict-wp-upload-type/
 * @since      1.0.0
 *
 * @package    Restrict_Wp_Upload_Type
 * @subpackage Restrict_Wp_Upload_Type/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Restrict_Wp_Upload_Type
 * @subpackage Restrict_Wp_Upload_Type/includes
 * @author     Kushang Tailor <admin@gmail.com>
 */
class Restrict_Wp_Upload_Type_Deactivator {

	/**
	 * Remove plugin settings stored in post meta when the plugin is deactivated.
	 *
	 * This keeps the database clean while still preserving user data until
	 * the plugin is fully uninstalled.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		if ( function_exists( 'delete_post_meta_by_key' ) ) {
			delete_post_meta_by_key( 'rwut_check_extension_key' );
		}
	}
}
