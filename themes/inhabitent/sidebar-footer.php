<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package Inhabitent_Theme
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>


<div id="secondary" class="widget-area-footer" role="complementary">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
		<div class="footer-logo">
		</div>

</div><!-- #secondary -->

