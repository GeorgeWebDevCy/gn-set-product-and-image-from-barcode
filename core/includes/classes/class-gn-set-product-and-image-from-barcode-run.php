<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class Gn_Set_Product_And_Image_From_Barcode_Run
 *
 * Thats where we bring the plugin to life
 *
 * @package		GNSETPRODU
 * @subpackage	Classes/Gn_Set_Product_And_Image_From_Barcode_Run
 * @author		George Nicolaou
 * @since		1.0.0
 */
class Gn_Set_Product_And_Image_From_Barcode_Run{

	/**
	 * Our Gn_Set_Product_And_Image_From_Barcode_Run constructor 
	 * to run the plugin logic.
	 *
	 * @since 1.0.0
	 */
	function __construct(){
		$this->add_hooks();
	}

	/**
	 * ######################
	 * ###
	 * #### WORDPRESS HOOKS
	 * ###
	 * ######################
	 */

	/**
	 * Registers all WordPress and plugin related hooks
	 *
	 * @access	private
	 * @since	1.0.0
	 * @return	void
	 */
	private function add_hooks(){
	
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_backend_scripts_and_styles' ), 20 );
	
	}

	/**
	 * ######################
	 * ###
	 * #### WORDPRESS HOOK CALLBACKS
	 * ###
	 * ######################
	 */

	/**
	 * Enqueue the backend related scripts and styles for this plugin.
	 * All of the added scripts andstyles will be available on every page within the backend.
	 *
	 * @access	public
	 * @since	1.0.0
	 *
	 * @return	void
	 */
	public function enqueue_backend_scripts_and_styles() {
		wp_enqueue_style( 'gnsetprodu-backend-styles', GNSETPRODU_PLUGIN_URL . 'core/includes/assets/css/backend-styles.css', array(), GNSETPRODU_VERSION, 'all' );
		wp_enqueue_script( 'gnsetprodu-backend-scripts', GNSETPRODU_PLUGIN_URL . 'core/includes/assets/js/backend-scripts.js', array(), GNSETPRODU_VERSION, false );
		wp_localize_script( 'gnsetprodu-backend-scripts', 'gnsetprodu', array(
			'plugin_name'   	=> __( GNSETPRODU_NAME, 'gn-set-product-and-image-from-barcode' ),
		));
	}

}
