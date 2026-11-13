# Restrict WP Upload Type

Restrict WP Upload Type gives you complete control over which files your users can upload to WordPress.

## Plugin Details

| Field | Value |
| --- | --- |
| Contributors | kushang78 |
| Tags | file-type, media, mime, upload-restrictions, security |
| Tested up to | WordPress 7.0 |
| Stable tag | 1.1.1 |
| License | GPLv2 |
| License URI | <http://www.gnu.org/licenses/gpl-2.0.html> |

## Description

Restrict WP Upload Type gives you complete control over which files your users can upload to WordPress. Prevent security risks, maintain brand standards, and eliminate media library chaos with granular file type controls.

## Why You Need Upload Restrictions

Uncontrolled uploads create serious problems:

- Security vulnerabilities from unvetted file types.
- Brand inconsistency from mixed formats.
- Media library bloat from oversized files.
- Wasted time managing user uploads.
- Compliance violations with upload policies.

## What This Plugin Does

- Control over **97 file extensions and MIME types**.
- Allow or block any format with a single click.
- Dedicated SVG file management with security.
- Real-time upload validation to prevent bad uploads before they happen.
- Clear, customizable file type error messages that guide users to approved formats.
- Global file size limit controls.
- Zero configuration complexity; works instantly.

## Who Should Use This

- WordPress site owners wanting better media management.
- Teams needing consistent upload policies.
- Digital agencies managing multiple client sites.
- Organizations with compliance requirements.
- Anyone managing user permissions on WordPress.

## Key Features

- **Comprehensive Format Support**: Images (PNG, JPG, GIF, WebP, SVG, HEIC), documents (PDF, DOCX, XLSX, PPT), audio/video (MP3, MP4, WAV, AVI), archives (ZIP, RAR, 7Z), and more.
- **Flexible Controls**: Whitelist allowed formats or blacklist restricted ones.
- **SVG Security**: Dedicated toggle for SVG files with proper MIME type handling.
- **Lightweight Design**: Minimal server overhead and zero performance impact.
- **User Feedback**: Clear, customizable messages when file type uploads are blocked.
- **File Size Limits**: Set a global maximum upload size from the plugin settings.
- **WordPress Integrated**: Works with Gutenberg, Classic Editor, REST API uploads, and block-based themes.

## How It Works

1. Install and activate the plugin.
2. Visit **Media > Restrict Files**.
3. Check the boxes for file types you want to allow.
4. Click **Save**.
5. Done! Your restrictions are immediately active.

## Performance Impact

This plugin adds minimal overhead. It uses lightweight MIME type filtering without database bloat. Your site's speed remains unaffected.

## Future Roadmap

Restrict WP Upload Type is actively developed based on user feedback. Planned features include role-based restrictions, custom MIME management, and upload logs.

## Support

Have questions? Visit the support forum on WordPress.org.

## Learn More

- [Plugin Homepage](https://wordpress.org/plugins/restrict-wp-upload-type/)
- [Support Forum](https://wordpress.org/support/plugin/restrict-wp-upload-type/)

## Installation

### Method 1: Direct Installation

1. Log in to your WordPress admin panel.
2. Go to **Plugins > Add New**.
3. Search for `Restrict WP Upload Type`.
4. Click **Install Now**.
5. Click **Activate**.
6. Visit **Media > Restrict Files** to configure your upload restrictions.

Installation takes less than 1 minute.

### Method 2: Manual Installation via FTP

1. Download the plugin from WordPress.org.
2. Unzip the downloaded file.
3. Upload the `restrict-wp-upload-type` folder to `/wp-content/plugins/` via FTP.
4. Log in to WordPress and go to **Plugins**.
5. Find `Restrict WP Upload Type` in the list.
6. Click **Activate**.
7. Configure the plugin from the **Restrict Files** page.

### Getting Started

After activation:

1. Navigate to **Media > Restrict Files** in your WordPress admin.
2. Review the list of 97 file types.
3. Check the boxes for formats you want to allow, or uncheck formats you want to restrict.
4. Click **Save Changes**.
5. Your upload restrictions are immediately active.

That's it. Wrong formats will now be blocked with a clear error message.

### Need Help?

- Check the FAQ section below.
- Visit the [support forum](https://wordpress.org/support/plugin/restrict-wp-upload-type/).

## Frequently Asked Questions

### How many file types does this plugin support?

Restrict WP Upload Type supports 97 file extensions with their corresponding MIME types. This includes:

- Images: PNG, JPG, GIF, WebP, SVG, HEIC, BMP, TIFF, ICO, JPEG.
- Documents: PDF, DOCX, DOC, XLSX, XLS, PPTX, PPT, ODT, ODP, ODS.
- Audio: MP3, WAV, M4A, FLAC, OGG, AAC, WMA, AIFF.
- Video: MP4, AVI, MOV, WMV, FLV, MKV, WEBM, 3GP.
- Archives: ZIP, RAR, 7Z, TAR, GZ, BZ2, CAB.
- And many more.

### Will this affect my existing uploaded files?

No. This plugin only controls new uploads. Previously uploaded files are unaffected and remain accessible.

### Does this plugin support SVG files?

Yes. SVG files have a dedicated toggle in the plugin settings. This allows you to independently control SVG uploads with proper MIME type validation and security considerations.

### What happens when someone tries to upload a blocked file?

They receive a clear, user-friendly error message indicating the file type is not allowed. You can customize this file type message from **Media > Restrict Files**.

Example:

```text
Upload blocked by Restrict WP Upload Type. This file type is not allowed on this site.
```

### Is this plugin multisite compatible?

Yes. Restrict WP Upload Type works with WordPress multisite installations. Each site can maintain independent upload restrictions.

### Does this plugin slow down my website?

No. The plugin uses lightweight MIME type filtering with minimal server overhead. Performance impact is negligible, so your site's speed remains virtually unchanged.

### Can I restrict uploads for specific user roles?

The current version applies restrictions globally to all users. For role-based restrictions, consider combining it with user role management plugins. This feature is on the roadmap for future versions.

### Where are the plugin settings stored?

Settings are stored in your WordPress options table, `wp_options`. When you uninstall the plugin, all settings are removed. You can back up your configuration through WordPress backup solutions.

### Does this plugin support file size limitations?

Yes. You can set a global maximum file size in MB from **Media > Restrict Files**. Use `0` to follow your server and WordPress upload limits.

### Can I use this with WooCommerce?

Yes. The plugin applies file restrictions to WooCommerce product uploads as well. Configure the allowed file types in the plugin settings.

### What's the difference between allowing and restricting types?

- **Allow**: Check boxes for formats you want to permit. All others are blocked.
- **Restrict**: In future versions, an option may be added to specify blocked formats while allowing everything else.

Currently, the plugin works on an allow-list basis for security.

### Is there a pro or premium version?

Restrict WP Upload Type is 100% free with no upsells or premium tier. All features are available to every user.

### How do I get support?

- Check this FAQ section.
- Visit the [support forum](https://wordpress.org/support/plugin/restrict-wp-upload-type/).
- Review the plugin settings after installation.

### What about security?

The plugin validates both file extensions and MIME types server-side to prevent header manipulation. It follows WordPress security best practices and standards.

### Can I override the restrictions for specific users?

Not in the current version. The plugin applies restrictions globally. This feature is being considered for future versions.

### How often is this plugin updated?

The plugin is actively maintained and updated as needed for WordPress compatibility and bug fixes. Subscribe to the support forum for update notifications.

### What if I find a bug?

Please report issues in the [support forum](https://wordpress.org/support/plugin/restrict-wp-upload-type/). Bug reports are reviewed and handled promptly.

### Does this plugin work with multisite?

Yes. It is fully compatible with WordPress multisite. Each site in the network can have its own upload restrictions.

### Can I test the plugin on a staging site first?

Absolutely. Testing on a staging or development site before deploying to production is recommended.

## Donate

If you would like to support development, please visit [kushang78 on WordPress.org](https://profiles.wordpress.org/kushang78/).

## Screenshots

1. All settings in one page.

## Upgrade Notice

### 1.1.1

Preserves file type settings when the plugin is deactivated and reactivated.

### 1.1.0

Adds Media menu placement, file size limits, customizable upload block messages, and extension search/filter controls.

### 1.0.4

No upgrade notice for this version.

### 1.0.3

No upgrade notice for this version.

## Changelog

### 1.1.1 - November 13, 2026

- Fixed file type settings being deleted during plugin deactivation.
- Settings are now removed only when the plugin is uninstalled.

### 1.1.0 - July 07, 2026

- Added Restrict Files under the WordPress Media menu.
- Added global maximum file size restriction.
- Added customizable blocked file type message.
- Improved blocked upload validation before WordPress shows the generic security error.
- Added settings search and enabled/disabled extension filters.
- Added nonce protection to the settings form.
- Added uninstall cleanup for new settings.

### 1.0.4 - May 24, 2026

- Added support for `.json` and `.epub` upload types.
- Improved plugin cleanup during deactivation and uninstall.
- Converted admin settings JavaScript to vanilla JavaScript.
- Updated plugin version and readme metadata.

### 1.0.3 - December 27, 2024

- Fixed: Checkbox design improvements for better usability.
- Fixed: MIME type value selection issue after form submission.
- Improved: Overall UI responsiveness.

### 1.0.2 - December 3, 2023

- Fixed: SVG MIME type validation and handling.
- Fixed: Multiple minor bugs and edge cases.
- Improved: Error message clarity.

### 1.0.1 - Previous

- Bug fixes and minor improvements.

### 1.0.0 - April 14, 2022

- Initial release: Core functionality for file type restrictions.
- 97 file types supported.
- SVG file management.
- WordPress media library integration.
