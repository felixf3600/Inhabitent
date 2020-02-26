<?php
/**
 * The template for front page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<!--?php // check if the post or page has a Featured Image assigned to it.
if ( has_post_thumbnail() ) {
    /* grab the url for the full size featured image */
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
	// adds thumbnail url to class
	echo "<style> 
	.site-header {
	background-image: url($featured_img_url);
	width: 100vw;
	height: 100vh;
	};
	</style>";
}?-->
<div class="banner-image">
<?php
	the_post_thumbnail('large');
?>
</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
