<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.merchantpaymentpro.com
 * @since             1.0.0
 * @package           Merchant_Gateway
 *
 * @wordpress-plugin
 * Plugin Name:       Merchant Gateway
 * Description:		  PayPro Merchant Gateway Integration
 * Version:           1.0.0
 * Author:            Jesse Reese
 * Author URI:        https://jessereese.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       merchant-gateway
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MERCHANT_GATEWAY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-merchant-gateway-activator.php
 */
function activate_merchant_gateway() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-merchant-gateway-activator.php';
	Merchant_Gateway_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-merchant-gateway-deactivator.php
 */
function deactivate_merchant_gateway() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-merchant-gateway-deactivator.php';
	Merchant_Gateway_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_merchant_gateway' );
register_deactivation_hook( __FILE__, 'deactivate_merchant_gateway' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-merchant-gateway.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_merchant_gateway() {

	$plugin = new Merchant_Gateway();
	$plugin->run();

}
run_merchant_gateway();
