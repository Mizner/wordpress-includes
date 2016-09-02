<?php namespace Backend;

/**
 * Add dashboard redirect
 * @link https://developer.wordpress.org/reference/functions/wp_dashboard_setup/
 * @link https://developer.wordpress.org/reference/functions/wp_redirect/
 * @link https://developer.wordpress.org/reference/functions/admin_url/
 * @link https://developer.wordpress.org/reference/hooks/admin_init/
 * @link https://developer.wordpress.org/reference/functions/remove_menu_page/
 */
 // Redirect
add_action('wp_dashboard_setup', function () {
    wp_redirect(admin_url('edit.php')); // for pages use edit.php?post_type=page
});

// Remove menu item
add_action('admin_init', function () {
    remove_menu_page('index.php');
});
