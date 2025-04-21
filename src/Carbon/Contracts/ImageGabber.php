
<?php
/**
 * Image grabber contract.
 *
 * Defines a contract for a class that grabs an image.
 *
 * @package   Backdrop
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2019 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/backdrop-dev/theme
 */

namespace Backdrop\Theme\Carbon\Contracts;

/**
 * Image grabber interface.
 *
 * @since  1.0.0
 * @access public
 */
interface ImageGrabber {

	/**
	 * Builds or finds an image object.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return ImageGrabber
	 */
	public function make();

	/**
	 * Returns an object implementing the `Image` contract.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return Image
	 */
	public function image();

	/**
	 * Returns a specific option or `false` if the option doesn't exist.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  string  $name
	 * @return mixed
	 */
	public function option( $name );
}
