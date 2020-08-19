<?php 
/**
 * WP_Rig\WP_Rig\Scripts\Component class
 * 
 * @package wp_rig
 */

 namespace WP_Rig\WP_Rig\Scripts;

 use WP_Rig\WP_Rig\Component_Interface;
 use function WP_Rig\WP_Rig\wp_rig;
 use function add_action;


/**
 * Class for adding general scripts to the theme
 */

 class Component implements Component_Interface {

  /**
   * Gets the unique identifier for the theme component.
   * 
   * @return string Component slug
   */
  public function get_slug() : string {
    return 'scripts';
  }

  /**
   * Adds the action and filter hooks to integrate with WordPress
   */
  public function initialize() {
    add_action ( 'wp_enqueue_scripts', [ $this, 'action_register_herovideo_script' ] );
  }

  public function action_register_herovideo_script() {
    wp_register_script( 
      'wp-rig-herovideo-script', 
      get_theme_file_uri( 'assets/js/herovideo.min.js' ),
      [],
      wp_rig()->get_asset_version( get_theme_file_path( '/assets/js/herovideo.min.js' ) ),
      false 
    );
    wp_script_add_data( 'wp-rig-herovideo-script', 'defer', true );
    wp_script_add_data( 'wp-rig-herovideo-script', 'precache', true );
  }

  
  
}