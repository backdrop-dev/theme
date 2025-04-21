<?php
/**
 * Attached location type class.
 *
 * Grabs the first attached image for a post and returns it.
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
 * Attached location class.
 *
 * @since  1.0.0
 * @access public
 */
class Attached extends Base {

	/**
	 * Returns an `Image` object or `false` if no image is found.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @param  array      $args
	 * @return Image|bool
	 */
	public function make() {

		$image         = '';
		$attachment_id = 0;

		if ( Helpers::isImageAttachment( $this->manager->option( 'post_id' ) ) ) {

			$attachment_id = $this->manager->option( 'post_id' );
		} else {

			$attachments = get_children( [
				'numberposts'    => 1,
				'post_parent'    => $this->manager->option( 'post_id' ),
				'post_status'    => 'inherit',
				'post_type'      => 'attachment',
				'post_mime_type' => 'image',
				'order'          => 'ASC',
				'orderby'        => 'menu_order ID',
				'fields'         => 'ids'
			] );

			// Check if any attachments were found.
			if ( $attachments ) {
				$attachment_id = array_shift( $attachments );
			}
		}

		if ( 0 < $attachment_id && Helpers::isImageAttachment( $attachment_id ) ) {

			$image = new Attachment( $this->manager, [
				'attachment_id' => $attachment_id
			] );
		}

		return $this->validate( $image ) ? $image : false;
	}
}