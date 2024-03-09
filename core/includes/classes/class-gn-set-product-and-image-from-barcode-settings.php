<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class Gn_Set_Product_And_Image_From_Barcode_Settings
 *
 * This class contains all of the plugin settings.
 * Here you can configure the whole plugin data.
 *
 * @package		GNSETPRODU
 * @subpackage	Classes/Gn_Set_Product_And_Image_From_Barcode_Settings
 * @author		George Nicolaou
 * @since		1.0.0
 */
class Gn_Set_Product_And_Image_From_Barcode_Settings{

	/**
	 * The plugin name
	 *
	 * @var		string
	 * @since   1.0.0
	 */
	private $plugin_name;

	/**
	 * Our Gn_Set_Product_And_Image_From_Barcode_Settings constructor 
	 * to run the plugin logic.
	 *
	 * @since 1.0.0
	 */
	function __construct(){

		$this->plugin_name = GNSETPRODU_NAME;
	}

	/**
	 * ######################
	 * ###
	 * #### CALLABLE FUNCTIONS
	 * ###
	 * ######################
	 */

	/**
	 * Return the plugin name
	 *
	 * @access	public
	 * @since	1.0.0
	 * @return	string The plugin name
	 */
	public function get_plugin_name(){
		return apply_filters( 'GNSETPRODU/settings/get_plugin_name', $this->plugin_name );
	}
}
