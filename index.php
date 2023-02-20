<?php
/**
 * Plugin Name:       FSD-WP-PLUGIN-STARTER
 * Plugin URI:        https://fullstackdigital.io
 * Description:       A starter for plugin development on wordpress
 * Version:           1.0.0
 * Requires at least: 5.9
 * Requires PHP:      7.2
 * Author:            Full Stack Digital
 * Author URI:        https://fullstackdigital.io
 * Text Domain:       fsd-wp
 */

if(!function_exists('add_action')) {
  echo 'Seems like you stumbled here by accident. 😛';
  exit;
}

// Setup
define('FSD_DIR', plugin_dir_path(__FILE__));
define('FSD_FILE', __FILE__);

// Includes
$rootFiles = glob(FSD_DIR . 'includes/*.php');
$subdirectoryFiles = glob(FSD_DIR . 'includes/**/*.php');
$allFiles = array_merge($rootFiles, $subdirectoryFiles);

foreach($allFiles as $filename) {
  include_once($filename);
}

// Hooks
add_action('init', 'fsd_register_assets');
add_action('init', 'fsd_register_blocks');
add_action( 'enqueue_block_editor_assets', 'fsd_enqueue_block_editor_assets');


// Register Blocks
function fsd_register_blocks(){
  
}


// Enqueues
function fsd_enqueue_block_editor_assets() {
  $current_screen = get_current_screen(  );

  // var_dump($current_screen);
  // die();
}
