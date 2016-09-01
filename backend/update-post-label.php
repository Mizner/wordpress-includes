<?php
namespace Backend;

/**
 * Update posts label
 * @link https://developer.wordpress.org/reference/hooks/init/
 * @link https://developer.wordpress.org/reference/hooks/admin_menu/
 * @link https://codex.wordpress.org/Global_Variables
 * @link https://developer.wordpress.org/resource/dashicons/
 */
add_action('init', function () {
    global $wp_post_types;
    $label_singular = '[Name Singular]';
    $label_plural = '[Name Plural]';
    // Change labels
    $labels = $wp_post_types['post']->labels;
    $labels->name = $label_plural;
    $labels->singular_name = 'Add New ' . $label_singular;
    $labels->add_new = 'Add ' . $label_singular;
    $labels->add_new_item = 'Add ' . $label_singular;
    $labels->edit_item = 'Edit ' . $label_singular;
    $labels->new_item = 'New ' . $label_singular;
    $labels->view_item = 'View ' . $label_singular;
    $labels->search_items = 'Search ' . $label_plural;
    $labels->not_found = 'No ' . $label_plural . ' Found';
    $labels->not_found_in_trash = 'No ' . $label_plural . ' found in Trash';
});

add_action('admin_menu', function () {
    global $menu;
    global $submenu;
    $label_plural = '[Name Plural]';
    // Change labels
    $menu[5][0] = $label_plural;
    //$menu[5][6] = 'dashicons-name';
    $submenu['edit.php'][5][0] = $label_plural;
});
