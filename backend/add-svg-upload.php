<?php namespace Backend;

/**
 * Enable svg uploads
 * @link https://developer.wordpress.org/reference/hooks/upload_mimes/
 * @return array
 */
add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});
