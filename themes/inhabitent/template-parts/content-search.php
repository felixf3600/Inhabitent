<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php $perma=get_the_permalink()?>
		<?php the_title( sprintf( '<a href="%s" rel="bookmark"><h1 class="entry-title">', esc_url( $perma ) ), '</h1></a>' ); ?>
	
		
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php Inhabitent_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php Inhabitent_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<a class="submit-button" href="<?php echo esc_url($perma);?>"> READ MORE -></a>

</article><!-- #post-## -->
