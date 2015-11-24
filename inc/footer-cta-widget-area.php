<?php
/**
 * The sidebar containing the footer cta widget area
 *
 * @package giftstarter
 */

if ( ! is_active_sidebar( 'sidebar-4' ) ) {
	return;
}
?>

<div id="footer-cta-large" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-4' ); ?>
</div><!-- #footer-cta -->