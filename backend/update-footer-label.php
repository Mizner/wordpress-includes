<?php
namespace Backend;

/**
 * Update admin footer label
 * @link https://developer.wordpress.org/reference/hooks/admin_footer_text/
 * @return string
 */
add_filter('admin_footer_text', function () {
    return '<span id="footer-thankyou">Developed by <a href="http://www.name.com">Name</a></span>';
});
