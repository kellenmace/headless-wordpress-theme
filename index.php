<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <!-- Render a link that points to the wp-admin. -->
        <a href="<?php echo esc_url( admin_url() ); ?>">
            <?php echo esc_html( get_bloginfo( 'name' ) ); ?> admin
        </a>
    </body>
</html>
