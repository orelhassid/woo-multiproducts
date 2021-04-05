<?php 
/**
 * @package  WooMultiProducts
 */
namespace Inc\Shortcode;

use \Inc\Base\BaseController;

class Shortcode extends BaseController {
    function __construct()
    {
        
        add_shortcode( 'echoplus_hello', 'print_hello' );
    }

    function print_hello() {
        return "Hello World";
    }
}