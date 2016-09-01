<?php namespace Backend;

/**
 * Remove singular post type support
 * @link https://developer.wordpress.org/reference/hooks/init/
 * @link https://developer.wordpress.org/reference/functions/taxonomy_exists/
 */
add_action('init', function () {
    global $wp_taxonomies;
    $taxonomy = 'category';
    if (taxonomy_exists($taxonomy)) {
        unset($wp_taxonomies[$taxonomy]);
    }
});
