<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php
			   $args = array( 
				 'numberposts' => '4',
				 'post_type' => "product_type"
			);
   			$product_posts = get_posts( $args ); // returns an array of posts
			?>

			<div class="loop-containers">
			<?php 
			foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
				<div class= "single-container shop">
					<?php /* Content from your array of post results goes here */ ?>
					<?php 
					$term = get_field('taxonomy_field_name');
					?>
					 
					<img src="<?php the_field('featured_image');?>"/>
					<?php get_default_comment_status(); ?>
					<h3> <?php the_title(); ?> </h3>
					<a href= "<?php the_permalink(); ?>">				
					<botton	type="button"><?php $term->name?> STUFF</button>
					</a>
				</div>
			<?php endforeach; wp_reset_postdata(); ?>
			</div>
