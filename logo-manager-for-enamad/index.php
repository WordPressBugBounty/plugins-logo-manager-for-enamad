<?php
/**
 *Plugin Name:Logo Manager For Enamad -  لوگوی نماد الکترونیکی
 * Plugin URI: https://wp-master.ir
 * Author: wp-master.ir
 * Author URI: https://wp-master.ir
 * Description: جهت قراردادن خودکار لوگوی نماد الکترونیکی (اینماد) در سایت | قابلیت کدکوتاه و ابزارک برای ای نماد | شامد | نماد های دیگر
 * Version: 0.7.5
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: logo-manager-for-enamad
 * Domain Path: /languages
 */

/*
* No script kiddies please!
*/
defined( 'ABSPATH' ) or die( "اللهم صل علی محمد و آل محمد و عجل فرجهم" );

/*
* Defines
*/
$plugins_url = rtrim( plugin_dir_url( __FILE__ ), '/' ) . '/';
define( '_enamadlogo_DIR', dirname( __FILE__ ) . DIRECTORY_SEPARATOR );
define( '_enamadlogo_PATH', $plugins_url );
define( '_enamadlogo_BASENAME', plugin_basename( __FILE__ ) );
define( '_enamadlogo_ver', '0.7.5' );

/**
 * fns
 */
include _enamadlogo_DIR . 'fns.php';

/**
 * activate action
 * redirect to admin settings
 */
register_activation_hook( __FILE__, 'enamadlogo_hook_activate' );


/**
 * Admin panel menu
 */
include _enamadlogo_DIR . 'simple-class-options.php';
/**
 * Widgets
 */
include _enamadlogo_DIR . 'widgets.php';
