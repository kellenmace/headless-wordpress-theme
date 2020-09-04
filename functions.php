<?php

/**
 * Redirect WP frontend page requests to the decoupled frontend app URL.
 * You must define the FRONTEND_APP_URL constant for this to work.
 */
add_action( 'template_redirect', function() {
    $frontend_url = defined('FRONTEND_APP_URL') ? trailingslashit( FRONTEND_APP_URL ) : '';

    if ( $frontend_url ) {
        wp_redirect( $frontend_url );
        die();
    }
} );
