<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package fourenergy
 */

if ( ! is_active_sidebar( 'sidebar-language' ) ) {
    return;
}
?>

    <?php dynamic_sidebar( 'sidebar-language' ); ?>

