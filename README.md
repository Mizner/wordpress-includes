# WordPress Function Includes

Remove, add and update WordPress CMS includes to used in functions.php

I use Sage9 so the includes are moved to src/backend/ and then included in functions.php

All files are PSR-2 as per Sage9 coding standards.

```php
$backend_includes = [
    'src/backend/add-dashboard-item.php',
    'src/backend/add-svg-upload.php',
    'src/backend/remove-dashboard-items.php',
    'src/backend/remove-default-taxonomies.php',
    'src/backend/remove-default-taxonomy-category.php',
    'src/backend/remove-default-taxonomy-tag.php',
    'src/backend/remove-emoji-icons.php',
    'src/backend/remove-help-tab.php',
    'src/backend/remove-howdy.php',
    'src/backend/remove-menu-items.php',
    'src/backend/remove-singular-support.php',
    'src/backend/remove-toolbar-frontend.php',
    'src/backend/remove-toolbar-items.php',
    'src/backend/remove-update-notice.php',
    'src/backend/remove-user-fields.php',
    'src/backend/remove-user-schemes.php',
    'src/backend/remove-user-roles.php',
    'src/backend/update-dashboard-columns.php',
    'src/backend/update-footer-label.php',
    'src/backend/update-page-label.php',
    'src/backend/update-post-label.php',
    'src/backend/update-media-label.php'
];

$model_includes = [
    'src/models/acf-options.php',
    'src/models/custom-post-type.php',
    'src/models/custom-taxonomy.php',
    'src/models/navigation-primary.php'
];

$includes = array_merge($sage_includes, $model_includes, $backend_includes);
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
└── models/
    ├── acf-options.php
    ├── custom-post-type.php
    ├── custom-taxonomy.php
    └── navigation-primary.php

```
