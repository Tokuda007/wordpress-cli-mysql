<?php

/**
 * Plugin Name: WP10 Sample
 * Description: カリキュラム用プラグインです
 * Version: 1.0.0
 * Requires at least: 5.5.1
 * Requires PHP: 7.2
 * Author: Your name
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('ABSPATH')) {
    exit;
}

class Wp10_Sample
{
    // ②
    private static $instance;

    public static function get_instance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __construct()
    {
        add_action('admin_menu', array($this, 'add_menu_page'), 10);
    }

    public function view_sample_page()
    {
?>
        <h1>Sample Page</h1>
        <p>WP10カリキュラムのサンプルページです</p>
<?php
    }

    public function add_menu_page()
    {
        add_menu_page(
            __('Sample Page', ''),
            __("Sample Page", ''),
            'administrator',
            'wp10_sample',
            array($this, 'view_sample_page'),
        );
    }
}
Wp10_Sample::get_instance();
