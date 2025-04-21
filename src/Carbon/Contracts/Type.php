<?php
/**
 * Type interface.
 *
 * Defines the interface for types (methods to search for images).
 *
 * @package   Backdrop
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2019 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/backdrop-dev/theme
 */

namespace  Backdrop\Theme\Carbon\Contracts;

/**
 * Type interface.
 *
 * @since  1.0.0
 * @access public
 */
interface Type {

	/**
	 * Must return an `Image` object or `false` if no image was found.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @return Image|bool
	 */
	public function make();
}