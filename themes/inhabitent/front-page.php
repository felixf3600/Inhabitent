<?php
/**
 * The template for front page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<div class="banner-image">

<?php // check if the pafe is about or front page
if (is_page('page-about')|| is_front_page()) { 
	if ( has_post_thumbnail() ) {
	// adds thumbnail url to class
	the_post_thumbnail('full');
}}
?>	
<div class = "inner-logo">
</div>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			   $args = array( 
				 'numberposts' => '3'
			);
   			$product_posts = get_posts( $args ); // returns an array of posts
			?>
 
			<h2>INHABITENT JOURNAL</h2>;
			<div class="loop-containers">
			<?php 
			foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
				<div class= "single-container">
					<?php /* Content from your array of post results goes here */ ?>
					<?php the_post_thumbnail();the_date();get_default_comment_status(); ?>
					<h3> <?php the_title(); ?> </h3>
					<a href= "<?php the_permalink(); ?>">				
					<botton	type="button">Read Entry</button>
					</a>
				</div>
			<?php endforeach; wp_reset_postdata(); ?>
			</div>
		
			
			<?php// while ( have_posts() ) : the_post(); ?>
				<?php// get_template_part( 'template-parts/content', 'page' ); ?>

			<?php// endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
