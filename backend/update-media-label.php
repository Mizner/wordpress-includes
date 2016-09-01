<?php namespace Backend;

/**
* Update media label
* @link https://developer.wordpress.org/reference/hooks/admin_menu/
* @link https://codex.wordpress.org/Global_Variables
* @link https://developer.wordpress.org/resource/dashicons/
*/
add_action('admin_menu', function () {
    global $menu;
    global $submenu;
    $label_plural = '[Name Plural]';
    // Change labels
    $menu[10][0] = $label_plural;
    //$menu[10][6] = 'dashicons-name';
    $submenu['upload.php'][5][0] = $label_plural;
});
