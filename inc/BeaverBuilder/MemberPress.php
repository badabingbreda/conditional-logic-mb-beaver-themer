<?php

require_once( 'Rules/LogicRules.php' );

class CLMemberPress {
	
	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {

		add_action( 'bb_logic_init'				, __CLASS__ . '::logic_init' );
		add_action( 'bb_logic_enqueue_scripts'	, __CLASS__ . '::enqueue_scripts' );

	}
	
	/**
	 * logic_init
	 *
	 * @return void
	 */
	public static function logic_init() {
		new \CLMemberPress\LogicRules();
	}
	
	/**
	 * Enqueue the script necessary for the easy_acf rules
	 * @return void
	 */
	public static function enqueue_scripts() {

		wp_enqueue_script(

			'bb-logic-rules-bb-cl-memberpress',
			CLMETHEMER_URL . 'inc/BeaverBuilder/Rules/build/index.js',
			array( 'bb-logic-core' ),
			CLMETHEMER_VERSION,
			true

		);

		// maybe add this later
		// wp_localize_script( 'bb-logic-rules-bb-acf-wpml', 'bada_wpml' ,
		// 						array(
		// 						) );

	}	

}