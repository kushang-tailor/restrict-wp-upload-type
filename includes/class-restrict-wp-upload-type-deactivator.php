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
	 * Deactivation must preserve settings so they are available when the plugin
	 * is activated again.
	 *
	 * @since    1.1.1
	 */
	public static function deactivate() {
		// Intentionally retain settings. Permanent cleanup belongs in uninstall.php.
	}
}
