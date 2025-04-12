<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://farhansadik01.com
 * @since             1.0.0
 * @package           Heal_Track
 *
 * @wordpress-plugin
 * Plugin Name:       Heal Track
 * Plugin URI:        https://wordpress.org/heal-track
 * Description:       Simplify doctor appointments with real-time booking, automated notifications, and easy schedule management.
 * Version:           1.0.0
 * Author:            Md. Farhan Sadik
 * Author URI:        https://farhansadik01.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       heal-track
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
define( 'HEAL_TRACK_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-heal-track-activator.php
 */
function activate_heal_track() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-heal-track-activator.php';
	Heal_Track_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-heal-track-deactivator.php
 */
function deactivate_heal_track() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-heal-track-deactivator.php';
	Heal_Track_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_heal_track' );
register_deactivation_hook( __FILE__, 'deactivate_heal_track' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-heal-track.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_heal_track() {

	$plugin = new Heal_Track();
	$plugin->run();

}
run_heal_track();
