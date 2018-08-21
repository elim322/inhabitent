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
			
		<div class="single-posts-body">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="single-posts-content">
			<?php get_template_part( 'template-parts/content', 'single' ); ?>
		</div>
<div class="social-buttons">
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
</div> <!-- end special buttons --> 
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();

				endif;
			?>

		<?php endwhile; // End of the loop. ?>
			</div> <!-- end of single posts body --> 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
