<?php namespace Models;

/**
 * Register custom post type
 * @link https://developer.wordpress.org/reference/hooks/init/
 * @link https://developer.wordpress.org/reference/functions/register_taxonomy/
 * @link https://generatewp.com/taxonomy/
 */

// Register Custom Taxonomy
add_action('init', function () {
    // Set label variables
    $label_plural = '[Taxonomies Name]';
    $label_singular = '[Taxonomy Name]';
    // Set labels
    $labels = [
        'name'                       => _x($label_plural, 'Taxonomy General Name', 'sage'),
        'singular_name'              => _x($label_singular, 'Taxonomy Singular Name', 'sage'),
        'menu_name'                  => __($label_singular, 'sage'),
        'all_items'                  => __('All ' . $label_plural, 'sage'),
        'parent_item'                => __('Parent ' . $label_singular, 'sage'),
        'parent_item_colon'          => __('Parent ' . $label_singular . ':', 'sage'),
        'new_item_name'              => __('New ' . $label_singular . ' Name', 'sage'),
        'add_new_item'               => __('Add New ' . $label_singular, 'sage'),
        'edit_item'                  => __('Edit ' . $label_singular, 'sage'),
        'update_item'                => __('Update ' . $label_singular, 'sage'),
        'view_item'                  => __('View ' . $label_singular, 'sage'),
        'separate_items_with_commas' => __('Separate ' . strtolower($label_plural) . ' with commas', 'sage'),
        'add_or_remove_items'        => __('Add or remove '  . strtolower($label_plural), 'sage'),
        'choose_from_most_used'      => __('Choose from the most used', 'sage'),
        'popular_items'              => __('Popular ' . $label_plural, 'sage'),
        'search_items'               => __('Search ' . $label_plural, 'sage'),
        'not_found'                  => __('Not Found', 'sage'),
        'no_terms'                   => __('No ' . strtolower($label_plural), 'sage'),
        'items_list'                 => __($label_plural . ' list', 'sage'),
        'items_list_navigation'      => __($label_plural . ' list navigation', 'sage')
    ];
    // Set arguments/config
    $config = [
        'labels'                     => $labels,
        'hierarchical'               => true, // Set to false for tag behaviour
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true
    ];
    // Register taxonomy
    register_taxonomy('taxonomy', ['post'], $config); // Add post/page/post-type to array to include taxonomy
});
