<?php
/**
 * The sidebar containing the main widget area for main cta
 *
 * @package giftstarter
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<div id="main-cta-large" class="newsletter-cta-large widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div><!-- #main-cta-large -->