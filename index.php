<?php
/**
 * Render a link that points to the wp-admin.
 */
?>

<a href="<?php echo esc_url( admin_url() ); ?>">
    <?php echo esc_html( get_bloginfo( 'name' ) ); ?> admin
</a>
