<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wonkasoft.com
 * @since             1.0.0
 * @package           Manage_Ws
 *
 * @wordpress-plugin
 * Plugin Name:       Manage WS
 * Plugin URI:        https://wonkasoft.com/manage-ws
 * Description:       At Wonkasoft, LLC, we are thrilled to introduce our exclusive manage-ws plugin, designed to enhance your website's login page with a touch of professionalism and trust. With this powerful tool, your website will proudly display the message "Managed by Wonkasoft, LLC" on the login screen, instilling confidence in your users from the very first interaction.
 * Version:           1.0.0
 * Author:            Wonkasoft LLC
 * Author URI:        https://wonkasoft.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       manage-ws
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
define( 'MANAGE_WS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-manage-ws-activator.php
 */
function activate_manage_ws() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-manage-ws-activator.php';
	Manage_Ws_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-manage-ws-deactivator.php
 */
function deactivate_manage_ws() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-manage-ws-deactivator.php';
	Manage_Ws_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_manage_ws' );
register_deactivation_hook( __FILE__, 'deactivate_manage_ws' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-manage-ws.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_manage_ws() {

	$plugin = new Manage_Ws();
	$plugin->run();

}
run_manage_ws();
