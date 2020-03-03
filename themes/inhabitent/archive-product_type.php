<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="shop-search-bar">	
			<h1>SHOP STUFF</h1>
			<div class="shop-categories">	
				<a href="<?php echo get_site_url();?>/product_taxonomy/do/">DO </a>
				<a href="<?php echo get_site_url();?>/product_taxonomy/eat/">EAT </a>
				<a href="<?php echo get_site_url();?>/product_taxonomy/sleep/">SLEEP </a>
				<a href="<?php echo get_site_url();?>/product_taxonomy/wear/"	>WEAR </a>
			</div>	
		</div>

		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<?php
			   $args = array( 
				   'numberposts' => "16",
				 'post_type' => "product_type"
			);
   			$product_posts = get_posts( $args ); // returns an array of posts
			?>

			<div class="loop-containers">
			<?php 
			foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
				<div class= "single-container product-shop">
					<?php /* Content from your array of post results goes here */ ?>
					<?php 
					$term = get_field('price');
					?>
					 
					<a href=" <?php the_permalink() ?> "><img src="<?php the_field('featured_image');?>"/></a>
					<h3> <?php the_title(); echo "...........".$term?> </h3>
				
					</a>
				</div>
			<?php endforeach; wp_reset_postdata(); ?>
			</div>

			<!-- <?php the_posts_navigation(); ?> -->

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
