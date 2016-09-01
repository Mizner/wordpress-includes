<?php namespace Backend;

/**
 * Update dashboard layout to 1 column
 * @link https://developer.wordpress.org/reference/hooks/screen_layout_columns/
 * @return array
 */
add_filter('screen_layout_columns', function () {
    $columns['dashboard'] = 1;
    return $columns;
});

/**
 * Update dashboard layout to 1 column
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/admin_head-(plugin_page)
 */
add_action('admin_head-index.php', function () {
    echo '<style>.postbox-container {min-width: 100% !important;}</style>';
    echo '<style>.meta-box-sortables.ui-sortable.empty-container {display: none;}</style>';
});
