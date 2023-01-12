<?php
/**
 * Register Sidebars
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
namespace Backdrop\Theme\Menu;

use Backdrop\Contracts\Bootable;

/**
 * Regiser Menu Class
 * 
 * @since  1.0.0
 * @access public
 */
class Component implements Bootable {

    /**
     * $menu_id
     * 
     * @since  1.0.0
     * @access public
     * @return array
     */
    public array $menu_id;

    /**
     * $menu_id
     *
     * @since  1.0.0
     * @access public
     * @param array $menu_id
     * @return void
     */
    public function __construct( array  $menu_id = [] ) {

        $this->menu_id = $this->menus();
    }

    /**
     * Register Menus
     * 
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function register(): void {
        foreach ( $this->menu_id as $key => $value ) {

            $this->create( $value, $key );
        }
    }

	/**
	 * Create Menus
	 *
     * @since  1.0.0
     * @access public
	 * @param string $name outputs name.
	 * @param string $id output id.
     * @return void
	 */
	public function create( string $name, string $id ): void {
		$args = [
			$id => $name,
		];

		register_nav_menus( apply_filters( 'backdrop/theme/menu', $args ) );
	}

	public function boot() : void {

		add_action( 'after_setup_theme', [ $this, 'register' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue' ] );
	}
}