<?php namespace Backend;

/**
 * Remove default roles
 * @link https://developer.wordpress.org/reference/hooks/editable_roles/
 * @return array
 */
add_filter('editable_roles', function () {
    if (isset($roles['author'])) {
        unset($roles['author']);
    }
    if (isset($roles['blog'])) {
        unset($roles['blog']);
    }
    if (isset($roles['subscriber'])) {
        unset($roles['subscriber']);
    }
    if (isset($roles['contributor'])) {
        unset($roles['contributor']);
    }
    return $roles;
});
