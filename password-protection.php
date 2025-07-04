<?php 
/*
 * Plugin Name: Blog Password Protection - BPP
 * Description: Add password protection for blog page or post.
 * Version: 1.4.1
 * Author: zamaraievdrdmytro
 * Requires PHP: 7.2
 * Requires at least: 6.6
 * Tested up to: 6.8.1
 * Text Domain: blog-password-protection-bpp
 * License: GPL-3.0
 */

namespace Blog_Password_Protection;

if ( !defined( 'ABSPATH' ) ) {
    exit;
}

define( 'PASSWORD_PROTECTION_PATH', plugin_dir_path(__FILE__) );
define( 'PASSWORD_PROTECTION_URL', plugin_dir_url(__FILE__) );

/* Add styles */
function enqueue_password_protection_styles() {
    wp_enqueue_style( 'bpp_password_protection_style', PASSWORD_PROTECTION_URL . 'assets/style.min.css', [], '1.4.0' );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_password_protection_styles' );

require_once PASSWORD_PROTECTION_PATH . 'include/plugin_settings_page.php';
require_once PASSWORD_PROTECTION_PATH . 'include/validation.php';
require_once PASSWORD_PROTECTION_PATH . 'include/secure_content.php';