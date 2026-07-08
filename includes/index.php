<?php
/**
 * Admin settings page template.
 *
 * @package Restrict_Wp_Upload_Type
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$extensions = array(
	'.jpg / .jpeg / .jpe',
	'.gif',
	'.svg',
	'.png',
	'.bmp',
	'.tiff / .tif',
	'.webp',
	'.ico',
	'.heic',
	'.asf / .asx',
	'.wmv',
	'.wmx',
	'.wm',
	'.avi',
	'.divx',
	'.flv',
	'.mov / .qt',
	'.mpeg / .mpg / .mpe',
	'.mp4 / .m4v',
	'.ogv',
	'.webm',
	'.mkv',
	'.3gp / .3gpp',
	'.3g2 / .3gp2',
	'.txt / .asc / .c / .cc / .h / .srt',
	'.csv',
	'.tsv',
	'.ics',
	'.rtx',
	'.css',
	'.htm / .html',
	'.vtt',
	'.dfxp',
	'.mp3 / .m4a / .m4b',
	'.aac',
	'.ra / .ram',
	'.wav',
	'.ogg / .oga',
	'.flac',
	'.mid / .midi',
	'.wma',
	'.wax',
	'.mka',
	'.rtf',
	'.js',
	'.json',
	'.pdf',
	'.epub',
	'.swf',
	'.class',
	'.tar',
	'.zip',
	'.gz / .gzip',
	'.rar',
	'.7z',
	'.exe',
	'.psd',
	'.xcf',
	'.doc',
	'.pot / .pps / .ppt',
	'.wri',
	'.xla / .xls / .xlt / .xlw',
	'.xlsx',
	'.mdb',
	'.mpp',
	'.docx',
	'.docm',
	'.dotx',
	'.dotm',
	'.xlsm',
	'.xlsb',
	'.xltx',
	'.xltm',
	'.xlam',
	'.pptx',
	'.pptm',
	'.ppsx',
	'.ppsm',
	'.potx',
	'.potm',
	'.onetoc / .onetoc2 / .onetmp / .onepkg',
	'.ppam',
	'.sldx',
	'.sldm',
	'.oxps',
	'.xps',
	'.odt',
	'.odp',
	'.ods',
	'.odg',
	'.odc',
	'.odb',
	'.odf',
	'.wp / .wpd',
	'.key',
	'.numbers',
	'.pages',
);

$check_extension    = rwut_get_meta_value_by_key( 'rwut_check_extension_key' );
$checked_extensions = array();
$max_file_size_mb   = (float) get_option( 'rwut_max_file_size_mb', 0 );
$block_message      = (string) get_option( 'rwut_block_message', '' );
if ( ! empty( $check_extension ) ) {
	$checked_extensions = array_map( 'trim', explode( ',', $check_extension ) );
}
?>

<div class="wrap">
	<div class="rwut-page-header">
		<div>
			<h1><?php esc_html_e( 'Restrict Files', 'restrict-wp-upload-type' ); ?></h1>
			<p><?php esc_html_e( 'Control which file types can be uploaded and how failed uploads are explained to users.', 'restrict-wp-upload-type' ); ?></p>
		</div>

		<div class="rwut-summary">
			<div class="rwut-summary-item">
				<span><?php esc_html_e( 'Total', 'restrict-wp-upload-type' ); ?></span>
				<strong><?php echo esc_html( count( $extensions ) ); ?></strong>
			</div>
			<div class="rwut-summary-item is-active">
				<span><?php esc_html_e( 'Allowed', 'restrict-wp-upload-type' ); ?></span>
				<strong><?php echo esc_html( count( $checked_extensions ) ); ?></strong>
			</div>
		</div>
	</div>

	<form class="form-horizontal" action="" method="post" name="restrict_wp_form" id="restrict_wp_form" enctype="multipart/form-data">
		<?php wp_nonce_field( 'rwut_save_settings', 'rwut_nonce' ); ?>

		<section class="rwut-panel">
			<div class="rwut-section-heading">
				<h2><?php esc_html_e( 'Upload Policy', 'restrict-wp-upload-type' ); ?></h2>
				<p><?php esc_html_e( 'Set the global limits that apply before files are added to the media library.', 'restrict-wp-upload-type' ); ?></p>
			</div>

			<div class="rwut-settings-grid">
			<div class="rwut-field">
				<label for="rwut-max-file-size"><?php esc_html_e( 'Maximum file size (MB)', 'restrict-wp-upload-type' ); ?></label>
				<input type="number" min="0" step="0.1" id="rwut-max-file-size" name="rwut_max_file_size_mb" value="<?php echo esc_attr( $max_file_size_mb ); ?>">
				<p class="description"><?php esc_html_e( 'Use 0 to follow the server and WordPress upload limits.', 'restrict-wp-upload-type' ); ?></p>
			</div>

			<div class="rwut-field">
				<label for="rwut-block-message"><?php esc_html_e( 'Blocked file type message', 'restrict-wp-upload-type' ); ?></label>
				<textarea id="rwut-block-message" name="rwut_block_message" rows="3" placeholder="<?php esc_attr_e( 'Upload blocked by Restrict WP Upload Type. This file type is not allowed on this site.', 'restrict-wp-upload-type' ); ?>"><?php echo esc_textarea( $block_message ); ?></textarea>
				<p class="description"><?php esc_html_e( 'Shown when this plugin blocks a file type. Leave empty to use the default message with the blocked extension.', 'restrict-wp-upload-type' ); ?></p>
			</div>
			</div>
		</section>

		<section class="rwut-panel">
			<div class="rwut-extension-head">
				<div class="rwut-section-heading">
					<h2><?php esc_html_e( 'Allowed File Extensions', 'restrict-wp-upload-type' ); ?></h2>
					<p><?php esc_html_e( 'Checked extensions are allowed. Unchecked extensions are blocked.', 'restrict-wp-upload-type' ); ?></p>
				</div>

				<div class="rwut-toolbar">
					<div class="rwut-filters">
						<label class="screen-reader-text" for="rwut-extension-search"><?php esc_html_e( 'Search extensions', 'restrict-wp-upload-type' ); ?></label>
						<input type="search" id="rwut-extension-search" placeholder="<?php esc_attr_e( 'Search extensions...', 'restrict-wp-upload-type' ); ?>">
						<select id="rwut-extension-filter" aria-label="<?php esc_attr_e( 'Filter extensions', 'restrict-wp-upload-type' ); ?>">
							<option value="all"><?php esc_html_e( 'All extensions', 'restrict-wp-upload-type' ); ?></option>
							<option value="enabled"><?php esc_html_e( 'Enabled only', 'restrict-wp-upload-type' ); ?></option>
							<option value="disabled"><?php esc_html_e( 'Disabled only', 'restrict-wp-upload-type' ); ?></option>
						</select>
					</div>

					<div class="rwut-bulk-actions">
						<button type="button" class="button select-all"><?php esc_html_e( 'Select all', 'restrict-wp-upload-type' ); ?></button>
						<button type="button" class="button clear-all"><?php esc_html_e( 'Clear', 'restrict-wp-upload-type' ); ?></button>
					</div>
				</div>
			</div>

			<div class="input-row">
				<?php
				foreach ( $extensions as $index => $extension ) :
					?>
					<label class="container-checkbox" for="check-extension-<?php echo esc_attr( $index ); ?>" data-extension="<?php echo esc_attr( strtolower( $extension ) ); ?>">
						<input type="checkbox"
							id="check-extension-<?php echo esc_attr( $index ); ?>"
							class="rwut-checkboxes"
							name="check_extension[]"
							value="<?php echo esc_attr( $extension ); ?>"
							<?php checked( in_array( $extension, $checked_extensions, true ) ); ?>
						>
						<span class="checkmark"></span>
						<span class="rwut-extension-name"><?php echo esc_html( $extension ); ?></span>
					</label>
				<?php endforeach; ?>
			</div>
		</section>

		<div class="rwut-form-actions">
			<button type="submit" id="submit" name="save" value="Submit" class="button button-primary btn-submit"><?php esc_html_e( 'Save Changes', 'restrict-wp-upload-type' ); ?></button>
			<div class="spinner"></div>
		</div>
	</form>
</div>
