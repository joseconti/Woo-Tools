<?php

/**
 * Woo Tools
 *
 * @package Woo Tools
 * @author José Conti
 * @copyright 2019 José Conti
 * @license GPL-3.0+
 *
 * Plugin Name: Woo Tools
 * Plugin URI: https://github.com/joseconti/Woo-Tools
 * Description: Extends WooCommerce with littel tools
 * Version: 1.0.0
 * Author: José Conti
 * Author URI: https://www.joseconti.com/
 * Tested up to: 5.2
 * WC requires at least: 3.0
 * WC tested up to: 3.6
 * Text Domain: woo-tools
 * Domain Path: /languages/
 * Copyright: (C) 2017 José Conti.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

define( 'WOO_TOOLS_VERSION', '1.0.0' );
define( 'WOO_TOOLS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WOO_TOOLS_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'WOO_TOOLS_INCLUDES', WOO_TOOLS_PLUGIN_PATH . 'includes/' );

include_once WOO_TOOLS_INCLUDES . 'remove-category-name.php';

//add_action( 'plugins_loaded', 'woocommerce_gateway_redsys_init', 0 );



