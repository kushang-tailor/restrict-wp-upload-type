<?php
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

if ( ! empty( $check_extension ) ) {
	$checked_extensions = array_map( 'trim', explode( ',', $check_extension ) );
}
?>

<div class="wrap">
	<div class="tg-heading">
		<h1><?php esc_html_e( 'Files Extensions & Mime Types', 'restrict-wp-upload-type' ); ?></h1>
		<p class="rwut-ext-items"><span class="rwut-ext-title"><?php esc_html_e( 'Total Extensions:', 'restrict-wp-upload-type' ); ?></span> <strong class="rwut-ext-strong"><?php echo esc_html( count( $extensions ) ); ?></strong></p>
		<p class="rwut-ext-items"><span class="rwut-ext-title" style="border-color: #0f8000;"><?php esc_html_e( 'Active Extensions:', 'restrict-wp-upload-type' ); ?></span> <strong class="rwut-ext-strong" style="background: #0f8000;"><?php echo esc_html( count( $checked_extensions ) ); ?></strong></p>
	</div>

	<ul class="subsubsub" style="float: none;">
		<li class="select-all"><a href="javascript:void(0);"><?php esc_html_e( 'Select all', 'restrict-wp-upload-type' ); ?></a> |</li>
		<li class="clear-all"><a href="javascript:void(0);"><?php esc_html_e( 'Clear', 'restrict-wp-upload-type' ); ?></a></li>
	</ul>

	<form class="form-horizontal" action="" method="post" name="restrict_wp_form" id="restrict_wp_form" enctype="multipart/form-data">
		<div class="input-row">
			<?php foreach ( $extensions as $index => $extension ) : ?>
				<label class="container-checkbox" for="check-extension-<?php echo esc_attr( $index ); ?>">
					<?php echo esc_html( $extension ); ?>
					<input type="checkbox"
						id="check-extension-<?php echo esc_attr( $index ); ?>"
						class="rwut-checkboxes"
						name="check_extension[]"
						value="<?php echo esc_attr( $extension ); ?>"
						<?php checked( in_array( $extension, $checked_extensions, true ) ); ?>
					>
					<span class="checkmark"></span>
				</label>
			<?php endforeach; ?>
		</div>

		<button type="submit" id="submit" name="save" value="Submit" class="btn-submit"><?php esc_html_e( 'Submit', 'restrict-wp-upload-type' ); ?></button>
		<div class="spinner"></div>
	</form>
</div>
