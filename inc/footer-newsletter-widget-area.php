<?php
/**
 * The sidebar containing the footer newsletter widget area
 *
 * @package giftstarter
 */

if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>

<div id="footer-newsletter" class="newsletter-cta widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-3' ); ?>
</div><!-- #footer-newsletter -->