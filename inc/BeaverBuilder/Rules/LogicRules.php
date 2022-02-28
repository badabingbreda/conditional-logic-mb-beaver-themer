<?php
namespace CLMemberPress;
/**
 * Server side processing for Twig compare
 *
 * @since 0.1
 */
final class LogicRules {
	/**
	 * Sets up callbacks for conditional logic rules.
	 *
	 * @since  1.0.0
	 * @return void
	 */
	public function __construct() {

		\BB_Logic_Rules::register( array(
			'bb-cl-memberpress/rule' 		=> __CLASS__ . '::node_is_visible',
		) );

	}

	/**
	 * Field Compare rule.
	 *
	 * @since  1.0.0
	 * @param object $rule
	 * @return bool
	 */
	static public function node_is_visible( $rule ) {

        if ( !class_exists( 'MeprRule' ) ) return false;

        $mepr_rule = ! empty( $rule->compare ) ? new \MeprRule( $rule->compare ) : false;

        $value = ! empty( $mepr_rule->ID ) && ! current_user_can( 'mepr-active', "rule:{$rule->compare}" ) ? false : true;

		return self::evaluate_rule( $rule , $value );
	}



	/**
	 * Process rule, compare 
	 *
	 * @since  1.0.4
	 * @param string $object_id
	 * @param object $rule
	 * @return bool
	 */
	static public function evaluate_rule( $rule , $data ) {

		return \BB_Logic_Rules::evaluate_rule( array(
			'value' 	=> $data,
			'operator' 	=> $rule->operator,
            'isset' => $data,
		) );

	}


}