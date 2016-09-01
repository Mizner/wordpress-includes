<?php namespace Models;

/**
 * Register custom post type
 * @link https://developer.wordpress.org/reference/hooks/init/
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 * @link https://generatewp.com/post-type/
 */

add_action('init', function () {
    // Set label variables
    $label_plural = '[Posts Name]';
    $label_singular = '[Post Name]';
    $label_description = '[Posts Description]';
    // Set labels
    $labels = [
        'name'                  => _x($label_plural, 'Post Type General Name', 'sage'),
        'singular_name'         => _x($label_singular, 'Post Type Singular Name', 'sage'),
        'menu_name'             => __($label_plural, 'sage'),
        'name_admin_bar'        => __($label_singular, 'sage'),
        'archives'              => __($label_singular . ' Archives', 'sage'),
        'parent_item_colon'     => __('Parent ' . $label_singular . ':', 'sage'),
        'all_items'             => __('All ' . $label_plural, 'sage'),
        'add_new_item'          => __('Add New ' . $label_singular, 'sage'),
        'add_new'               => __('Add New', 'sage'),
        'new_item'              => __('New ' . $label_singular, 'sage'),
        'edit_item'             => __('Edit ' . $label_singular, 'sage'),
        'update_item'           => __('Update ' . $label_singular, 'sage'),
        'view_item'             => __('View ' . $label_singular, 'sage'),
        'search_items'          => __('Search ' . $label_singular, 'sage'),
        'not_found'             => __('Not found', 'sage'),
        'not_found_in_trash'    => __('Not found in Trash', 'sage'),
        'featured_image'        => __('Featured Image', 'sage'),
        'set_featured_image'    => __('Set featured image', 'sage'),
        'remove_featured_image' => __('Remove featured image', 'sage'),
        'use_featured_image'    => __('Use as featured image', 'sage'),
        'insert_into_item'      => __('Insert into ' . strtolower($label_singular), 'sage'),
        'uploaded_to_this_item' => __('Uploaded to this ' . strtolower($label_singular), 'sage'),
        'items_list'            => __($label_plural . ' list', 'sage'),
        'items_list_navigation' => __($label_plural . ' list navigation', 'sage'),
        'filter_items_list'     => __('Filter ' . strtolower($label_plural) . ' list', 'sage')
    ];
    // Set arguments/config
    $config = [
        'label'                 => __($label_plural, 'sage'),
        'description'           => __($label_description, 'sage'),
        'labels'                => $labels,
        'supports'              => ['title', 'thumbnail'], // ['title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats'],
        //'taxonomies'            => ['category', 'post_tag'],
        'hierarchical'          => false, // Set to true for page behaviour
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page'
    ];
    // Register post type
    register_post_type('post_type', $config);
});
