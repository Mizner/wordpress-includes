# [WordPress Includes]

Remove, add and update WordPress CMS includes to used in functions.php

_includes.php file can be used with Sage9 and then merged with $sage_includes

```php
$includes = array_merge($sage_includes, $backend_includes, $model_includes);
```

## Structure

```shell
wordpress-includes/
├── backend/
│   ├── add-dashboard-item.php
│   ├── add-svg-upload.php
│   ├── remove-dashboard-items.php
│   ├── remove-default-taxonomies.php
│   ├── remove-default-taxonomy-category.php
│   ├── remove-default-taxonomy-tag.php
│   ├── remove-emoji-icons.php
│   ├── remove-help-tab.php
│   ├── remove-howdy.php
│   ├── remove-menu-items.php
│   ├── remove-singular-support.php
│   ├── remove-toolbar-frontend.php
│   ├── remove-toolbar-items.php
│   ├── remove-update-notice.php
│   ├── remove-user-fields.php
│   ├── remove-user-roles.php
│   ├── remove-user-schemes.php
│   ├── update-dashboard-columns.php
│   ├── update-footer-label.php
│   ├── update-media-label.php
│   ├── update-page-label.php
│   └── update-post-label.php
├── models/
```
