<?php
/**
 * GN Set Product and Image From Barcode
 *
 * @package       GNSETPRODU
 * @author        George Nicolaou
 * @license       gplv2
 * @version       1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:   GN Set Product and Image From Barcode
 * Plugin URI:    https://www.georgenicolaou.me/plugins/gn-set-product-and-image-from-barcode
 * Description:   Get Product Image based on EAN and download it to media library
 * Version:       1.0.0
 * Author:        George Nicolaou
 * Author URI:    https://www.georgenicolaou.me/
 * Text Domain:   gn-set-product-and-image-from-barcode
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 *
 * You should have received a copy of the GNU General Public License
 * along with GN Set Product and Image From Barcode. If not, see <https://www.gnu.org/licenses/gpl-2.0.html/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;
// Plugin name
define( 'GNSETPRODU_NAME',			'GN Set Product and Image From Barcode' );

// Plugin version
define( 'GNSETPRODU_VERSION',		'1.0.0' );

// Plugin Root File
define( 'GNSETPRODU_PLUGIN_FILE',	__FILE__ );

// Plugin base
define( 'GNSETPRODU_PLUGIN_BASE',	plugin_basename( GNSETPRODU_PLUGIN_FILE ) );

// Plugin Folder Path
define( 'GNSETPRODU_PLUGIN_DIR',	plugin_dir_path( GNSETPRODU_PLUGIN_FILE ) );

// Plugin Folder URL
define( 'GNSETPRODU_PLUGIN_URL',	plugin_dir_url( GNSETPRODU_PLUGIN_FILE ) );

/**
 * Load the main class for the core functionality
 */
require_once GNSETPRODU_PLUGIN_DIR . 'core/class-gn-set-product-and-image-from-barcode.php';

/**
 * The main function to load the only instance
 * of our master class.
 *
 * @author  George Nicolaou
 * @since   1.0.0
 * @return  object|Gn_Set_Product_And_Image_From_Barcode
 */
function GNSETPRODU() {
	return Gn_Set_Product_And_Image_From_Barcode::instance();
}

GNSETPRODU();

