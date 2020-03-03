<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'full' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php Inhabitent_starter_posted_on(); ?> / <?php Inhabitent_starter_comment_count(); ?> / <?php Inhabitent_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php Inhabitent_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
	<div class='social-media'>
				<a href="http://www.facebook"><button><i class="fab fa-facebook-square"></i> LIKE </button></a>
				<a href="http://www.twitter.com"><button><i class="fab fa-twitter-square"></i> TWEET </button></a>
				<a href="http://www.pinterest.com"><button><i class="fab fa-pinterest"></i> PIN </button></a>
			</div>
