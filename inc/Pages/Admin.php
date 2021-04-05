<?php 
/**
 * @package  WooMultiProducts
 */
namespace Inc\Pages;

use \Inc\Base\BaseController;

/**
* 
*/
class Admin extends BaseController
{
	public function register() {
		add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
	}

	public function add_admin_pages() {
		add_menu_page( 
            $this->plugin_title,
            $this->plugin_name,
            'manage_options',
            $this->plugin_slug,
            array( $this, 'admin_index' ),
            'dashicons-store',
            110 );
			
		add_submenu_page(
			$this->plugin_slug,
			'Tools', //page title
			'Tools', //menu title
			'manage_options', //capability
			'echoplus_tools', //menu slug
			array( $this, 'get_page_tools' ),
		);
	}

	public function admin_index() {
		require_once $this->plugin_path . 'templates/admin.php';
	}

	public function get_page_tools() {
		require_once $this->plugin_path . 'templates/tools.php';
	}
}