<?php namespace Cronos;
/**
 * Plugin Name: Cronos
 * Plugin URI: https://gh0st.host/cronos
 * Description: Cronos is a tool for managing cron jobs in WordPress, allowing even low-traffic sites to run cron jobs reliably and on time.
 * Version: 1.0.0
 * Author: gh0st
 * Author URI: https://gh0st.host
 * Text Domain: cronos
 * Domain Path: /langs
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Requires at least: 5.0
 * Requires PHP: 7.4+
 * Tested up to: 6.3
 */

defined('ABSPATH') || exit;

define('CRONOS_VERSION', '1.0.0');
define('CRONOS_FILE', __FILE__);
define('CRONOS_BASENAME', plugin_basename(CRONOS_FILE));
define('CRONOS_DIR', plugin_dir_path(CRONOS_FILE));
define('CRONOS_URL', plugin_dir_url(CRONOS_FILE));
define('CRONOS_ASSETS_URL', CRONOS_URL . 'assets/');
define('CRONOS_ASSETS_DIR', CRONOS_DIR . 'assets/');
define('CRONOS_LANG_DIR', CRONOS_DIR . 'langs/');
define('CRONOS_I18N', 'cronos');

spl_autoload_register(function ($class) {
    // Define a mapping between namespaces and directories
    $namespace_map = [
        'Cronos\\' => CRONOS_DIR . '/includes',
    ];

    // Loop through each namespace in the mapping
    foreach ($namespace_map as $namespace => $directory) {
        // If the class being loaded starts with this namespace
        if (strpos($class, $namespace) === 0) {
            // Remove the namespace from the class name
            $class_name = str_replace($namespace . '\\', '', $class);

            // Construct the file path
            $file = $directory . '/' . $class_name . '.php';

            // Require the file if it exists
            if (file_exists($file)) {
                require_once($file);
                return;
            }
        }
    }
});