<?php namespace Backend;

/**
 * Remove toolbar/admin bar from frontend
 * @link https://developer.wordpress.org/reference/functions/show_admin_bar/
 */
add_filter('show_admin_bar', '__return_false');
