<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package giftstarter
 */

if ( ! function_exists( 'giftstarter_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function giftstarter_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav"></span>Older', 'giftstarter' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer<span class="meta-nav"></span>', 'giftstarter' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'giftstarter_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function giftstarter_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', _x( '<span class="meta-nav"></span>Previous', 'Previous post link', 'giftstarter' ) );
				next_post_link(     '<div class="nav-next">%link</div>',     _x( 'Next<span class="meta-nav"></span>', 'Next post link',     'giftstarter' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'giftstarter_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function giftstarter_posted_on() {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		_x( ' on %s', 'post date', 'giftstarter' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		_x( '%s', 'post author', 'giftstarter' ),
		'<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . '<span class="author-avatar">' . get_avatar( get_the_author_meta('ID')) . esc_html( get_the_author() ) . '</span></a>'
	);


	echo '<span class="byline"> ' . $byline . '<span class="posted-on">' . $posted_on . '</span>';

}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function giftstarter_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'giftstarter_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'giftstarter_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so giftstarter_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so giftstarter_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in giftstarter_categorized_blog.
 */
function giftstarter_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'giftstarter_categories' );
}
add_action( 'edit_category', 'giftstarter_category_transient_flusher' );
add_action( 'save_post',     'giftstarter_category_transient_flusher' );
