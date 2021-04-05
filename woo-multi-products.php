<?php
/**
* @package WooMultiProducts
*/
/*
Plugin Name: Woo Multi Products
Plugin URI: http://alecaddd.com/plugin
Description: Powerful WooCommerce Widget for multi products slider
Version: 1.0.0
Author: Orel Hassid
Author URI: https://orelhassid.com
License: GPLv2 or later
Text Domain: multiproducts-plugin
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
Copyright 2005-2015 Automattic, Inc.
*/


defined('ABSPATH') or die( 'You can\t acces this file.');

// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * The code that runs during plugin activation
 */
function activate_alecaddd_plugin() {
	Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_alecaddd_plugin' );

/**
 * The code that runs during plugin deactivation
 */
function deactivate_alecaddd_plugin() {
	Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_alecaddd_plugin' );

/**
 * Initialize all the core classes of the plugin
 */
if ( class_exists( 'Inc\\Init' ) ) {
	Inc\Init::register_services();
}


// class BookPlugin {
    
//     // public $plugin_name;
//     function __construct()
//     {
//         // add_action('init', array($this, 'customPostType'));
//         // $this->plugin_name = plugin_basename( FILE );
//         // Search customPostType in the current class
//     }
//     function register()
//     {
//         // echo 'Register Method';
//         add_action( 'admin_enqueue_scripts', array($this, 'enqueue'));
//         // add_action( 'wp_enqueue_scripts', array($this, 'enqueue'));

//         add_action('admin_menu', array($this, 'add_admin_pages'));

//         $plugin_name = plugin_basename( FILE );
        
//         add_filter("plugin_action_links_$plugin_name", array($this, 'create_links'));
//     }

//     function create_links( $links )
//     {
//         // Push new link to the links
//         $link_settings = "<a href='admin.php?page=echoplus-plugin'>Settings</a>";
//         array_push($links, $link_settings);
//         echo "Links $links!";
//         return $links;
//     }

//     function add_admin_pages() {
//         add_menu_page( 'Echo Plus Plugin', 'EchoPlus', 'manage_options', 'echoplus-plugin', array($this, 'admin_index'), 'dashicons-heart', 0 );
//     }

//     function admin_index() {
//         // require template
//         require_once plugin_dir_path( FILE ) . 'templates/admin.php';
//     }

//     // static function activate() {
//     //     $this->customPostType();
//     //     flush_rewrite_rules();
//     // }
//     function deactivate() {}
//     function uninstall() {}

//     function customPostType() {
//         register_post_type('book', ['public' => true, 'label' => 'Book']);
//     }

//     function enqueue() {
//         wp_enqueue_style( 'book_plugin-style', plugins_url( '/css/style.css', __FILE__ ));
//         wp_enqueue_script( 'book_plugin-script', plugins_url( '/js/script.js', __FILE__ ));
//     }
// }

// if (class_exists('BookPlugin')) {
//     $bookPlugin = new BookPlugin();
//     $bookPlugin->register();
//     // BookPlugin::register();
// }

// // activation
// register_activation_hook( __FILE__, array('Activate', 'activate') );

// // deactivation
// register_deactivation_hook( __FILE__, array($bookPlugin, 'deactivation') );

// // uninstall
// register_uninstall_hook( __FILE__, array($bookPlugin, 'uninstall') );