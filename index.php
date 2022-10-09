<?php
/**
 * Plugin Name:       Username Shortcode
 * Plugin URI:        https://satrio.dev
 * Description:       Basic shortcode for username.
 * Version:           0.1.0
 * Requires at least: 5.2
 * Requires PHP:      8.1
 * Author:            Satriyo Unggul Wicaksono
 * Author URI:        https://satrio.dev
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

function username_login() {
    $current_user = wp_get_current_user();
    return $current_user->user_login;
}

add_shortcode( 'username_login', 'username_login' );

function addToMenu()
{
    add_menu_page(
        'Username Shortcode',
        'Username Shortcode',
        'manage_options',
        'username-shortcode',
        'username_shortcode',
        'dashicons-admin-users',
        6
    );
}

add_action('admin_menu', 'addToMenu');

function username_shortcode()
{
    echo '<h1>Username Shortcode</h1>';
    echo '<p>Use this shortcode to display username: <code>[username_login]</code></p>';
}