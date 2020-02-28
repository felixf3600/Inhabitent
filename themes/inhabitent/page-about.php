<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<div class="banner-image">
<?php // check if the pafe is about page and has image
// if (is_page('page-about')):
// 	if ( has_post_thumbnail() ) :
	// adds thumbnail url to class
	the_post_thumbnail('full');
// 	endif;
// endif;
?>	
</div>
<div class = "inner-logo">
	<h1>ABOUT</h1>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main page-about" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
