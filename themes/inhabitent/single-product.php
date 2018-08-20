<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="home-logo">
				<img src="/Applications/MAMP/htdocs/inhabitent/wp-content/themes/inhabitent/logos" alt="inhabitent-logo">
			</section>
			

		<?php while ( have_posts() ) : the_post(); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header single-product-pages">
		<div class="thumbnail-image">
			<?php the_post_thumbnail( 'large' ); ?>
</div>

	</header><!-- .entry-header -->

	<div class="entry-content single-product-entry-content">
	<div class="single-product-title">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</div>
  <?php echo CFS()->get( 'price' ); ?>
		<?php the_content(); ?>
		<div class="social-media-btn">
		<button type="button" class="single-page-btn">
	<i class="fab fa-facebook-f"></i>
		LIKE
</button>
<button type="button" class="single-page-btn">
	<i class="fab fa-twitter"></i>
		TWEET
</button>
<button type="button" class="single-page-btn">
	<i class="fab fa-pinterest"></i>
		PIN
</button>
</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
