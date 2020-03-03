<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<img src='<?php the_field('featured_image');?>'> 
		<div class="entry-content">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); 
			$term = get_field('price');?>
			<h2 class= "price"><?php echo "$" .$term ?> </h2>
			<?php the_content(); ?>
			<div class='social-media'>
				<a href="http://www.facebook"><button><i class="fab fa-facebook-square"></i> LIKE </button></a>
				<a href="http://www.twitter.com"><button><i class="fab fa-twitter-square"></i> TWEET </button></a>
				<a href="http://www.pinterest.com"><button><i class="fab fa-pinterest"></i> PIN </button></a>
			</div>
		</div><!-- .entry-content -->
	</header><!-- .entry-header -->


	<footer class="entry-footer">
		<?php Inhabitent_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
