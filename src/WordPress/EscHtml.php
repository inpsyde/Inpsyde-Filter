<?php

namespace Inpsyde\Filter\WordPress;

use Inpsyde\Filter\AbstractFilter;

/**
 * Class EscHtml
 *
 * @package Inpsyde\Filter\WordPress
 */
class EscHtml extends AbstractFilter {

	/**
	 * {@inheritdoc}
	 */
	public function filter( $value ) {

		if ( ! is_scalar( $value ) || empty( $value ) ) {

			_doing_it_wrong(
				__METHOD__,
				'The given value is not scalar or empty,',
				'0.1'
			);

			return $value;
		}

		return esc_html( (string) $value );
	}

}