<?php

/**
 * REST API methods to retreive data for WordPress rules.
 *
 * @since 0.1
 */
final class BB_Logic_REST_MemberPressRules {

	/**
	 * REST API namespace
	 *
	 * @since 0.1
	 * @var string $namespace
	 */
	static protected $namespace = 'bb-cl-memberpress/v1';

	public function __construct() {

		add_action( 'rest_api_init' 			, __CLASS__ . '::register_routes' );

	}


	/**
	 * Register routes.
	 *
	 * @since  0.1
	 * @return void
	 */
	static public function register_routes() {

        if ( !class_exists( 'MeprCptModel' ) ) return;

		register_rest_route(
			self::$namespace, '/rules/', array(
				array(
					'methods'  => WP_REST_Server::READABLE,
					'permission_callback' => '__return_true',
					'callback' => __CLASS__ . '::rules',
				),
			)
		);

	}

	/**
	 * Returns an array of posts with each item
	 * containing a label and value.
	 *
	 * @since  0.1
	 * @param object $request
	 * @return array
	 */
	static public function rules( $request ) {

		$response = [];

        // Assemble MP Rules into an options array
        foreach ( \MeprCptModel::all( 'MeprRule' ) as $rule ) {
            $response[] = [ 'label' => $rule->post_title , 'value' => $rule->ID ];
        }
    

		//$response = array( array( 'label'=> 'veld 1', 'value'=>'veld1' ), array( 'label'=> 'veld 2', 'value'=>'veld2' ) );

		return rest_ensure_response( $response );
	}
}