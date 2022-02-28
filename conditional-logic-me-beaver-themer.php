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

require_once 'inc/GithubUpdater.php' ;
require_once 'inc/BeaverBuilder/Rest/MemberPressRules.php' ;
require_once 'inc/BeaverBuilder/MemberPress.php' ;
 
new CLMemberPress();
new BB_Logic_REST_MemberPressRules();

$updater = new \CLMemberPress\GithubUpdater( BBUIENHANCEMENTS_FILE );
$updater->set_username( 'badabingbreda' );
$updater->set_repository( 'conditional-logic-mb-beaver-themer' );
$updater->set_settings( array(
			'requires'			=> '5.8',
			'tested'			=> '5.9.1',
			'rating'			=> '100.0',
			'num_ratings'		=> '10',
			'downloaded'		=> '10',
			'added'				=> '2022-02-28',
		) );
$updater->initialize();