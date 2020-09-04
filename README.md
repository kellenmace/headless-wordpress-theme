# Headless WordPress Theme

Theme to use when WordPress is being used as a headless CMS.

## Overview

This theme provides these things:

1. A blank `style.css` file (required for any WP theme) and a theme screenshot of the WP logo
2. A `functions.php` file that contains a single function for redirecting requests for frontend WP pages to the decoupled frontend app
3. An `index.php` file that renders out a link to the wp-admin as a fallback, if the redirect described in #2 has not been set up

This theme does not provide any templates or styles, since it is meant to be used for headless setups.

## Getting Started

Install and activate, just as you would any WP theme
Define a `FRONTEND_APP_URL` constant in your project (wp-config.php usually works best), specifying where the frontend app lives, like this:

```php
define( 'FRONTEND_APP_URL', 'https://example.com' );
```

Once you define this constant, requests to frontend WP pages will be redirected to the decoupled frontend app URL.
If you do not define it, then for all requests to frontend WP pages, a `<site title> admin` link will be rendered out that points to the wp-admin.
