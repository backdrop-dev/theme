<?php
/**
 * Featured location type class.
 *
 * Searches for and returns a featured image if the post has one.
 *
 * @package   Backdrop
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2019 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/backdrop-dev/theme
 */

namespace Backdrop\Theme\Carbon\Types;

use Backdrop\Theme\Carbon\Image\Attachment;
use Backdrop\Theme\Carbon\Util\Helpers;

/**
 * Featured location class.
 *
 * @since  1.0.0
 * @access public
 */
class Featured extends Base {

	/**
	 * Returns an `Image` object or `false` if no image is found.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @param  array      $args
	 * @return Image|bool
	 */
	public function make() {

		$image = '';

		// Check for a post image ID (set by WP as a custom field).
		$attachment_id = get_post_thumbnail_id( $this->manager->option( 'post_id' ) );

		if ( 0 < $attachment_id && Helpers::isImageAttachment( $attachment_id ) ) {

			$image = new Attachment( $this->manager, [
				'attachment_id' => $attachment_id
			] );
		}

		return $this->validate( $image ) ? $image : false;
	}
}
