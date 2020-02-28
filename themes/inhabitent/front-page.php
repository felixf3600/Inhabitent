<?php
/**
 * The template for front page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<div class="banner-image">

<?php // check if the pafe is front page and has image
if (is_front_page()) { 
	if ( has_post_thumbnail() ) {
	// adds thumbnail url to class
	the_post_thumbnail('full');
}}
?>	
</div>
<div class = "inner-logo">
</div>


	<div id="primary" class="content-area">
		<main id="main" class="site-main front-page" role="main">
			<h2>SHOP STUFF</h2>
			<div class="loop-containers">
				<div class="single-container shop">
					<img src="<?php echo get_template_directory_uri();?>/assets/logos/do.svg">
					<p>Get back to nature with all the tools and toys you need to enj.oy the great outdoors.</p>
					<button type="buton">DO STUFF</button>
				</div>
				<div class="single-container shop">
				<img src="<?php echo get_template_directory_uri();?>/assets/logos/eat.svg">
					<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
					<button type="buton">EAT STUFF</button>
				</div>
				<div class="single-container shop">
				<img src="<?php echo get_template_directory_uri();?>/assets/logos/sleep.svg">
					<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
					<button type="buton">SLEEP STUFF</button>
				</div>
				<div class="single-container shop">
				<img src="<?php echo get_template_directory_uri();?>/assets/logos/wear.svg">
					<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
					<button type="buton">WEAR STUFF</button>
				</div>
 			</div>
			<h2>INHABITENT JOURNAL</h2>
			<?php
			   $journal_args = array( 
				 'numberposts' => '3'
			);
   			$journal_posts = get_posts( $journal_args ); // returns an array of posts
			?>

			<div class="loop-containers">
			<?php 
			foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
				<div class= "single-container journal">
					<?php /* Content from your array of post results goes here */ ?>
					<?php the_post_thumbnail();the_date();get_default_comment_status(); ?>
					<h3> <?php the_title(); ?> </h3>
					<a href= "<?php the_permalink(); ?>">				
					<botton	type="button">Read Entry</button>
					</a>
				</div>
			<?php endforeach; wp_reset_postdata(); ?>
			</div>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
