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
				 <h2> <?php single_term_title(); ?> </h2>;
				<?php
				 					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
					<div class="loop-containers">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<div class= "single-container product-shop">
						<?php /* Content from your array of post results goes here */ ?>
						<?php 
						$term = get_field('price');
						?>
					 
						<a href=" <?php the_permalink() ?> "><img src="<?php the_field('featured_image');?>"/></a>
						<h3> <?php the_title(); echo "...........".$term?> </h3>
				
						</a>
				</div>
				<?php endwhile; ?>
				</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
