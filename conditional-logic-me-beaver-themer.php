<?php
/**
 * Conditional Logic MemberPress for Beaver Themer
 *
 * @package     Package
 * @author      Badabingbreda
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Conditional Logic MemberPress for Beaver Themer
 * Plugin URI:  https://www.badabing.nl
 * Description: Adds Conditional Logic for node control in Beaver Themer
 * Version:     1.0.0
 * Author:      Badabingbreda
 * Author URI:  https://www.badabing.nl
 * Text Domain: textdomain
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

define( 'CLMETHEMER_VERSION' 	, '1.0.0' );
define( 'CLMETHEMER_DIR'		, plugin_dir_path( __FILE__ ) );
define( 'CLMETHEMER_FILE'	, __FILE__ );
define( 'CLMETHEMER_URL' 	, plugins_url( '/', __FILE__ ) );

require_once 'inc/BeaverBuilder/Rest/MemberPressRules.php' ;
require_once 'inc/BeaverBuilder/MemberPress.php' ;
 
new CLMemberPress();
new BB_Logic_REST_MemberPressRules();