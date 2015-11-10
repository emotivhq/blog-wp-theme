<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package giftstarter
 */

get_header(); ?>

	<div class="newsletter-cta">
    <h1 class="newsletter-cta-h1">Fresh advice on bringing joy to others. Delivered weekly.</h1>
    <h2 class="newsletter-cta-h2">Join 3,262 good-looking folks who get our latest content first :)</h2>
    <form class="newsletter-cta-form" action="//giftstarter.us8.list-manage.com/subscribe/post?u=9d503578c402cdc6d3fa96dd7&amp;id=f208e541be" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    	<input class="newsletter-cta-input" type="email" placeholder="Email Address" id="mce-EMAIL">
		<button class="newsletter-cta-button" alt="Subscribe" type="submit"></button>
    	<div class="newsletter-cta-caption">And don’t worry, we hate spam too! You can unsubscribe at anytime.</div>
		<div style="position: absolute; left: -5000px;"><input type="text" name="b_9d503578c402cdc6d3fa96dd7_f208e541be" tabindex="-1" value=""></div>
    </form>

  </div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php giftstarter_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
