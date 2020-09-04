<?php
/**
 * @package Blinds
 * @version 0.0.1
 */

/**
 * Plugin Name: Blinds
 * Plugin URI: onslaughtdigital.com/blinds
 * Description: A plugin that enables WordPress end users view a blog or website in night or dark mode
 * Author: Ikenna Felix Isiogu
 * Version: 0.0.1
 * Author URI: ikennaf1.github.io
 * License: GPLv2 or later
 */

/**
 * Runs on activation of the Blinds plugin.
 */
function osd_blinds_activation()
{
    register_activation_hook(__FILE__, 'osd_blinds_activation');
}

/**
 * Runs on plugin deactivation.
 * Deletes any cookies left on browser.
 */
function osd_blinds_deactivation()
{
    register_deactivation_hook(__FILE__, 'osd_blinds_deactivation');
    if (isset($_COOKIE['osd_blinds_cookie'])) {
        setcookie('osd_blinds_cookie', '', time()-3600);
        unset($_COOKIE['osd_blinds_cookie']);
    }
}

if (!function_exists('osd_blinds_filter')) {
    /**
     * The widget (switch or control) position.
     * @param string $content
     * @return string
     */
    function osd_blinds_widget($content)
    {
        $content .= '<div style="position: fixed; top: 3rem; right: 3rem; z-index: 9999999999;" id="osd_blinds_widget_id"></div>';
        if (is_admin() || is_network_admin()) {
            echo $content;
        }
        return $content;
    }

    /**
     * Hooks the widget (switch orcontrol) to the WordPress display.
     */
    function osd_blinds_filter()
    {
        add_filter('the_content', 'osd_blinds_widget');
        add_filter('the_excerpt', 'osd_blinds_widget');
        if (is_admin() || is_network_admin()) {
            add_filter('in_admin_header', 'osd_blinds_widget');
        }
    }
}

//wp_enqueue_script('blinds.js', plugins_url('/blinds/blinds.js'), '', filemtime(dirname(__FILE__, 1).'/blinds.js'));
wp_enqueue_script('blinds.js', plugins_url('/blinds/blinds.js'));
osd_blinds_filter();
