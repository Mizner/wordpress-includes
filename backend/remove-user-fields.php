<?php namespace Roots\Backend;

/**
 * Remove user fields
 * @link https://developer.wordpress.org/reference/hooks/admin_head/
 */
function remove_user_fields()
{
?>
    <style>
    /* Personal options */
    #your-profile h2:first-of-type,
    #your-profile .form-table:first-of-type,
    /* Name */
    #your-profile tr.user-first-name-wrap,
    #your-profile tr.user-last-name-wrap,
    #your-profile tr.user-nickname-wrap,
    #your-profile tr.user-display-name-wrap,
    /* Contact information */
    #your-profile tr.user-url-wrap,
    /* About the user */
    #your-profile h2:nth-of-type(4),
    #your-profile .form-table:nth-of-type(4) {
      display: none;
    }
  </style>
<?php
}

add_action('admin_head-user-edit.php', __NAMESPACE__ . '\\remove_user_fields');
add_action('admin_head-profile.php', __NAMESPACE__ . '\\remove_user_fields');
