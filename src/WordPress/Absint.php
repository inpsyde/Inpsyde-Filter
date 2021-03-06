<?php

namespace Inpsyde\Filter\WordPress;

use Inpsyde\Filter\AbstractFilter;

/**
 * Class Absint
 *
 * @package Inpsyde\Filter\WordPress
 */
class Absint extends AbstractFilter {

	/**
	 * {@inheritdoc}
	 */
	public function filter( $value ) {

		if ( ! is_scalar( $value ) || empty( $value ) ) {
			do_action( 'inpsyde.filter.error', 'The given value is not scalar or empty.', [ 'method' => __METHOD__, 'value' => $value ] );

			return $value;
		}

		return absint( $value );
	}

}