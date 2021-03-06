<?php

namespace Inpsyde\Filter\WordPress;

use Inpsyde\Filter\AbstractFilter;

/**
 * Class SanitizeTitleWithDashes
 *
 * @package Inpsyde\Filter\WordPress
 */
class SanitizeTitleWithDashes extends AbstractFilter {

	/**
	 * @var array
	 */
	protected $options = [
		'raw_title' => '',
		'context'   => 'display'
	];

	/**
	 * {@inheritdoc}
	 */
	public function filter( $value ) {

		if ( ! is_string( $value ) || empty( $value ) ) {
			do_action( 'inpsyde.filter.error', 'The given value is not string or empty.', [ 'method' => __METHOD__, 'value' => $value ] );
			return $value;
		}

		$raw_title = (string) $this->options[ 'raw_title' ];
		$context   = (string) $this->options[ 'context' ];

		return sanitize_title_with_dashes( $value, $raw_title, $context );
	}

}