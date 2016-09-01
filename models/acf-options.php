<?php namespace Models;

/**
 * Advanced Custom Fields PRO options page
 * @link https://www.advancedcustomfields.com/resources/acf_add_options_page/
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
    /*
    $args = [
        'page_title' 	=> 'Theme General Settings',
  		  'menu_title' 	=> 'Theme Settings',
  		  'menu_slug' 	=> 'theme-general-settings',
  		  'capability' 	=> 'edit_posts',
  		  'redirect' 	=> false,
	      'position' => false,
	      'parent_slug' => '',
	      'icon_url' => false,
	      'redirect' => true,
	      'post_id' => 'options',
	      'autoload' => false,
    ]
    acf_add_options_page($args);
    */
}
