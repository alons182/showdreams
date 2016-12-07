<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package showdreams
 */

if ( ! is_active_sidebar( 'sidebar-blog' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area widgets" role="complementary">
	
	<?php dynamic_sidebar( 'sidebar-blog' ); ?>
</div><!-- #secondary -->