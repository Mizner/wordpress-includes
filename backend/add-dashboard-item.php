<?php namespace Backend;

/**
 * Add Dashboard Item
 * @link https://developer.wordpress.org/reference/functions/wp_dashboard_setup/
 * @link https://developer.wordpress.org/reference/functions/wp_add_dashboard_widget/
 */
add_action('wp_dashboard_setup', function () {
    wp_add_dashboard_widget(
        'item_slug',
        'Dashboard Item Header',
        __NAMESPACE__ . '\dashboard_item' // display function
    );
});

// Function to echo content
function dashboard_item()
{
    echo 'Dashboard Item Content';
}
