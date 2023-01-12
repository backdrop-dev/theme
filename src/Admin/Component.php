<?php
/**
 * Add Menu Page
 *
 * @package   Backdrop
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2019-2023. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/backdrop-theme
 */

/**
 * Define namespace
 */
namespace Backdrop\Theme\Admin;

use Backdrop\Contracts\Bootable;


class Component implements Bootable {
	/**
	 * menu()
	 * 
	 * @since  1.0.0
	 * @access public
	 */
	public function menu() {}

	/**
	 * callback()
	 * 
	 * @since  1.0.0
	 * @access public
	 */
	public function callback() {}

	/**
	 * tabs()
	 * 
	 * @since  1.0.0
	 * @access public
	 */
	public function tabs() {}

	/**
	 * pages()
	 * 
	 * @since  1.0.0
	 * @access public
	 */
	public function pages() {}

    public function boot() {
		add_action( 'admin_menu', array( $this, 'menu' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue' ), true, '1.0.0' );
    }
}