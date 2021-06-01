<?php
/**
 * Admin Menu Editor Pro Plugin.
 *
 * @package arjendejong12\Composer\WPProPlugins\Plugins
 */

namespace arjendejong12\Composer\WPProPlugins\Plugins;

/**
 * AdminMenuEditorPro class.
 */
class AdminMenuEditorPro {

	/**
	 * The version number of the plugin to download.
	 *
	 * @var string Version number.
	 */
	protected $version = '';

	/**
	 * AdminMenuEditorPro constructor.
	 *
	 * @param string $version
	 */
	public function __construct( $version = '' ) {
		$this->version = $version;
	}

	/**
	 * Get the download URL for this plugin.
	 *
	 * @return string
	 */
	public function getDownloadUrl() {
		return 'https://adminmenueditor.com/?get_product=admin-menu-editor-pro&license_key=' . getenv( 'AME_PRO_KEY' );
	}

}
