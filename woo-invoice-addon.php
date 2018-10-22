<?php
/*
Plugin Name: WooCommerce Invoice - Addon
Plugin URI: http://pickplugins.com
Description: Send invoices to your WooCommerce customers
Version: 1.0.0
WC requires at least: 3.0.0
WC tested up to: 3.3
Text Domain: woo-invoice-addon
Author: PickPlugins
Author URI: http://pickplugins.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 




// Add New template from other directory
function add_custom_template( $templates ){

    $templates[ 'custom-template' ] = array(
        'label' 		=> __( 'Custom Template', 'text-domain' ),
        'thumb' 		=> plugins_url('/', __FILE__).'templates/template-1/thumb.png',
        'stylesheet' 	=> plugins_url('/', __FILE__).'templates/template-1/style.css',
        'template' 		=> plugin_dir_path( __FILE__ ).'templates/template-1/template.php',
    );
    return $templates;
}
add_filter( 'wooin_invoice_templates', 'add_custom_template' );


