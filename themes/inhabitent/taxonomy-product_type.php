<?php
/**
 * The template for displaying shop page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php if ( have_posts() ) : ?>
	
			<header class="page-header container">
			<h1 class="page-title taxonomy-product-title"><?php single_term_title(); ?></h1>
			<?php the_archive_description(); ?>
			</header><!-- .page-header -->
			<div class="product-grid">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
<div class="product-grid-items">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'large' ); ?>
		</a>
		<?php endif; ?>
		<div class="product-info">
		<p><?php the_title(); ?> ............... <?php echo CFS()->get( 'price' ); ?></p>
		</div>
</div>
	</header><!-- .entry-header -->

</article><!-- #post-## -->
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
