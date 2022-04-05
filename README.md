# Composer Installer for Pro WordPress Plugins.

A Composer plugin that makes it easy to install commercial WordPress plugins.

Sensitive credentials (license keys, tokens) are read from environment variables or a `.env` file.

## Supported Plugins

1. Advanced Custom Fields Pro
2. Gravity Forms / Add-Ons
3. Polylang Pro
4. WP All Import / Export Pro / Add-Ons

## Overview

> ⚠️ Note: Most EDD plugins, and Gravity Forms, only allow downloading the latest versions of their plugins, even if you request for a specific version.

- Packages must use the names defined below otherwise they are ignored by this plugin.
- When installing or updating a package, the package version is appended to the dist URL.
  This versioned dist URL is used as the cache key to store ZIP archives of the package.
  In Composer 1, the versioned dist URL is added to `composer.lock`.
- Before downloading the package, the package's real download URL is retrieved and formatted with their corresponding environment variables, as defined below.
  Environment variables will never be stored inside `composer.lock`.
- If an environment variable can't be resolved, the download will fail and Composer will abort.

## Usage

This Composer plugin requires [Composer](https://getcomposer.org/):

- 1.0.0 and newer, or
- 2.0.2 and newer

Create a `.env` file in the root of your WordPress site, where the `composer.json` file lives, which has all the license keys and settings:

```
ACF_PRO_KEY="<acf_pro_license_key>"
AME_PRO_KEY="<ame_pro_license_key>"
GRAVITY_FORMS_KEY="<gravity_forms_license_key>"
POLYLANG_PRO_KEY="<polylang_pro_license_key>"
POLYLANG_PRO_URL="<registered_url_for_polylang_pro>"
WP_ALL_IMPORT_PRO_KEY="<wp_all_import_license_key>"
WP_ALL_IMPORT_PRO_URL="<registered_url_for_wpai_pro>"
WP_ALL_EXPORT_PRO_KEY="<wp_all_export_license_key>"
WP_ALL_EXPORT_PRO_URL="<registered_url_for_wpae_pro>"
```

Add the following to your composer.json file:

```json
"repositories": [
  {
    "type": "package",
    "package": {
      "name": "admin-menu-editor-pro",
      "version": "<version_number>",
      "type": "wordpress-plugin",
      "dist": {
        "type": "zip",
        "url": "https://adminmenueditor.com/"
      },
      "require": {
          "arjendejong12/composer-wp-pro-plugins": "*"
      }
    }
  },
  {
    "type": "package",
    "package": {
      "name": "arjendejong12/advanced-custom-fields-pro",
      "version": "<version_number>",
      "type": "wordpress-plugin",
      "dist": {
        "type": "zip",
        "url": "https://www.advancedcustomfields.com/"
      },
      "require": {
          "arjendejong12/composer-wp-pro-plugins": "*"
      }
    }
  },
  {
    "type": "package",
    "package": {
      "name": "arjendejong12/gravityforms",
      "version": "<version_number>",
      "type": "wordpress-plugin",
      "dist": {
        "type": "zip",
        "url": "https://www.gravityforms.com/"
      },
      "require": {
        "arjendejong12/composer-wp-pro-plugins": "*"
      }
    }
  },
  {
    "type": "package",
    "package": {
      "name": "arjendejong12/gravityforms",
      "version": "<version_number>",
      "type": "wordpress-plugin",
      "dist": {
        "type": "zip",
        "url": "https://www.gravityforms.com/"
      },
      "require": {
        "arjendejong12/composer-wp-pro-plugins": "*"
      }
    }
  },
  {
    "type": "package",
    "package": {
      "name": "arjendejong12/polylang-pro",
      "version": "<version_number>",
      "type": "wordpress-plugin",
      "dist": {
        "type": "zip",
        "url": "https://www.polylang.pro/"
      },
      "require": {
        "arjendejong12/composer-wp-pro-plugins": "*"
      }
    }
  },
  {
    "type": "package",
    "package": {
      "name": "arjendejong12/wp-all-import-pro",
      "version": "<version_number>",
      "type": "wordpress-plugin",
      "dist": {
        "type": "zip",
        "url": "https://www.wpallimport.com/"
      },
      "require": {
        "arjendejong12/composer-wp-pro-plugins": "*"
      }
    }
  },
  {
    "type": "package",
    "package": {
      "name": "arjendejong12/wp-all-export-pro",
      "version": "<version_number>",
      "type": "wordpress-plugin",
      "dist": {
        "type": "zip",
        "url": "https://www.wpallimport.com/"
      },
      "require": {
        "arjendejong12/composer-wp-pro-plugins": "*"
      }
    }
  },
  {
    "type": "package",
    "package": {
      "name": "arjendejong12/wpai-acf-add-on",
      "version": "<version_number>",
      "type": "wordpress-plugin",
      "dist": {
        "type": "zip",
        "url": "https://www.wpallimport.com/"
      },
      "require": {
        "arjendejong12/composer-wp-pro-plugins": "*"
      }
    }
  }
],
"require": {
  "arjendejong12/admin-menu-editor-pro": "*",
  "arjendejong12/advanced-custom-fields-pro": "*",
  "arjendejong12/gravityforms": "*",
  "arjendejong12/gravityformspolls": "*",
  "arjendejong12/polylang-pro": "*",
  "arjendejong12/wp-all-import-pro": "*",
  "arjendejong12/wp-all-export-pro": "*",
  "arjendejong12/wpai-acf-add-on": "*"
},
```

### Gravity Forms Add-Ons

You can use any Gravity Forms add-on by simply adding it's slug like so:

`arjendejong12/<plugin-slug>`

For example:

`arjendejong12/gravityformspolls`

Here's a list of all Gravity Forms add-on slugs: [https://docs.gravityforms.com/gravity-forms-add-on-slugs/](https://docs.gravityforms.com/gravity-forms-add-on-slugs/)

### WP All Import Pro Add-Ons

You can use any WP All Import Pro add-on by simply adding it's slug like so:

`arjendejong12/<plugin-slug>`

For example:

`arjendejong12/wpai-acf-add-on`
