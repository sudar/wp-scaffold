<?php
/**
 * Plugin Name:       WP Ignition
 * Description:       Adds Laravel Ignition to WordPress to aid with debugging.
 * Version:           1.0.0
 * Author:            10up
 * Author URI:        https://10up.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-ignition
 * Update URI:        https://yourwebsite.com/wp-ignition
 * Requires at least: 5.0
 * Requires PHP:      8.0
 *
 * @package WP_Ignition
 */

require __DIR__ . '/vendor/autoload.php';

\Spatie\Ignition\Ignition::make()
	->setTheme( 'dark' )
	->shouldDisplayException( 'production' !== wp_get_environment_type() ) // Ensure it's disabled in production
	->register();
