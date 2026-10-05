<?php
/**
 * Loads the plugin's translation files.
 *
 * @package ZepBlocks
 */

namespace ZepBlocks;

defined( 'ABSPATH' ) || exit;

/**
 * Support language
 *
 * @since    1.0.0
 */
class ZepBlocks_i18n {

	/**
	 * Hooks the text domain loader into `plugins_loaded`.
	 *
	 * @since	1.0.0
	 * @access	public
	 * @return	void
	 */
	public function __construct() {
		add_action( 'plugins_loaded', array( $this, 'load_plugin_textdomain' ) );
	}

	/**
	 * Load language file from directory
	 *
	 * @since	1.0.0
	 * @access	public
	 * @return	void
	 */
	public function load_plugin_textdomain() {
		load_plugin_textdomain( 'zepblocks', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}
}
