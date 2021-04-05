<?php 
/**
 * @package  WooMultiProducts
 */
namespace Inc\Base;

class BaseController
{
	public $plugin_path;

	public $plugin_url;

	public $plugin;

	public $plugin_slug;

	public function __construct() {
		$this->plugin_path = plugin_dir_path( dirname( __FILE__, 2 ) );
		$this->plugin_url = plugin_dir_url( dirname( __FILE__, 2 ) );
		$this->plugin = plugin_basename( dirname( __FILE__, 3 ) ) . '/woo-multi-products.php';

		$this->plugin_slug = '/woo_multi_products';
		$this->plugin_title = 'Woo Multi Products';
		// $this->plugin_name = 'Echo Plus';
		$this->plugin_name = 'WooMultiProducts';
	}
}