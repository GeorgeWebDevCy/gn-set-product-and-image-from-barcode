<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;
if ( ! class_exists( 'Gn_Set_Product_And_Image_From_Barcode' ) ) :

	/**
	 * Main Gn_Set_Product_And_Image_From_Barcode Class.
	 *
	 * @package		GNSETPRODU
	 * @subpackage	Classes/Gn_Set_Product_And_Image_From_Barcode
	 * @since		1.0.0
	 * @author		George Nicolaou
	 */
	final class Gn_Set_Product_And_Image_From_Barcode {

		/**
		 * The real instance
		 *
		 * @access	private
		 * @since	1.0.0
		 * @var		object|Gn_Set_Product_And_Image_From_Barcode
		 */
		private static $instance;

		/**
		 * GNSETPRODU helpers object.
		 *
		 * @access	public
		 * @since	1.0.0
		 * @var		object|Gn_Set_Product_And_Image_From_Barcode_Helpers
		 */
		public $helpers;

		/**
		 * GNSETPRODU settings object.
		 *
		 * @access	public
		 * @since	1.0.0
		 * @var		object|Gn_Set_Product_And_Image_From_Barcode_Settings
		 */
		public $settings;

		/**
		 * Throw error on object clone.
		 *
		 * Cloning instances of the class is forbidden.
		 *
		 * @access	public
		 * @since	1.0.0
		 * @return	void
		 */
		public function __clone() {
			_doing_it_wrong( __FUNCTION__, __( 'You are not allowed to clone this class.', 'gn-set-product-and-image-from-barcode' ), '1.0.0' );
		}

		/**
		 * Disable unserializing of the class.
		 *
		 * @access	public
		 * @since	1.0.0
		 * @return	void
		 */
		public function __wakeup() {
			_doing_it_wrong( __FUNCTION__, __( 'You are not allowed to unserialize this class.', 'gn-set-product-and-image-from-barcode' ), '1.0.0' );
		}

		/**
		 * Main Gn_Set_Product_And_Image_From_Barcode Instance.
		 *
		 * Insures that only one instance of Gn_Set_Product_And_Image_From_Barcode exists in memory at any one
		 * time. Also prevents needing to define globals all over the place.
		 *
		 * @access		public
		 * @since		1.0.0
		 * @static
		 * @return		object|Gn_Set_Product_And_Image_From_Barcode	The one true Gn_Set_Product_And_Image_From_Barcode
		 */
		public static function instance() {
			if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Gn_Set_Product_And_Image_From_Barcode ) ) {
				self::$instance					= new Gn_Set_Product_And_Image_From_Barcode;
				self::$instance->base_hooks();
				self::$instance->includes();
				self::$instance->helpers		= new Gn_Set_Product_And_Image_From_Barcode_Helpers();
				self::$instance->settings		= new Gn_Set_Product_And_Image_From_Barcode_Settings();

				//Fire the plugin logic
				new Gn_Set_Product_And_Image_From_Barcode_Run();

				/**
				 * Fire a custom action to allow dependencies
				 * after the successful plugin setup
				 */
				do_action( 'GNSETPRODU/plugin_loaded' );
			}

			return self::$instance;
		}

		/**
		 * Include required files.
		 *
		 * @access  private
		 * @since   1.0.0
		 * @return  void
		 */
		private function includes() {
			require_once GNSETPRODU_PLUGIN_DIR . 'core/includes/classes/class-gn-set-product-and-image-from-barcode-helpers.php';
			require_once GNSETPRODU_PLUGIN_DIR . 'core/includes/classes/class-gn-set-product-and-image-from-barcode-settings.php';

			require_once GNSETPRODU_PLUGIN_DIR . 'core/includes/classes/class-gn-set-product-and-image-from-barcode-run.php';
		}

		/**
		 * Add base hooks for the core functionality
		 *
		 * @access  private
		 * @since   1.0.0
		 * @return  void
		 */
		private function base_hooks() {
			add_action( 'plugins_loaded', array( self::$instance, 'load_textdomain' ) );
		}

		/**
		 * Loads the plugin language files.
		 *
		 * @access  public
		 * @since   1.0.0
		 * @return  void
		 */
		public function load_textdomain() {
			load_plugin_textdomain( 'gn-set-product-and-image-from-barcode', FALSE, dirname( plugin_basename( GNSETPRODU_PLUGIN_FILE ) ) . '/languages/' );
		}

	}

endif; // End if class_exists check.