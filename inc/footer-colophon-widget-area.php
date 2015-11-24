<?php
/**
 * The sidebar containing the footer cta widget area
 *
 * @package giftstarter
 */

if ( ! is_active_sidebar( 'sidebar-5' ) ) {
	return;
}
?>

<div id="footer-colophon" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-5' ); ?>
</div><!-- #footer-cta -->