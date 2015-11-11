<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package giftstarter
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		
		<div class="featured-image">
			<span class="gradient-overlay"></span>
			<?php
			// Must be inside a loop.

			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			else {
				echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/article-header-default.png" />';
			}
			?>
		</div>
		
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php giftstarter_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'giftstarter' ), __( '1 Comment', 'giftstarter' ), __( '% Comments', 'giftstarter' ) ); ?></span>
		<?php endif; ?>


	</footer><!-- .entry-footer -->
</article><!-- #post-## -->