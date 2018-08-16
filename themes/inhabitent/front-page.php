<?php 
/**
 * The front-page file.
 *
 * @package RED_Starter_Theme
 */

get_header()?>


<div class="cover">
  <img class="hero-logo" src="<?php echo get_template_directory_uri() ?>/logos/inhabitent-logo-full.svg" alt="inhabitent-logo">
</div>

<?php
   $arg = array( 'taxonomy' => 'product_type');
   $shop_stuff = get_terms( $arg ); // returns an array of posts
?>
<section class="product-info container">
<h1 class="shop-title">SHOP STUFF</h1>
<div class="shop-stuff">
<?php foreach ( $shop_stuff as $term ): ?>
<div class="stuff">
<img src="<?php echo get_template_directory_uri()?>/product-type-icons/<?php echo $term->name?>.svg">
<p><?php echo $term->description?></p>
<a href="<?php  echo get_term_link($term)?>" class="btn"><?php echo $term->name ?></a>
</div>

<?php endforeach; ?>
</div>
</section>


<?php
   $args = array( 'post_type' => 'post', 'order' => 'ASC', 'numberposts' => 3 );
   $journal_posts = get_posts( $args ); // returns an array of posts
?>
<section class="latest-entries">
  <div class="container">
  <h1 class="entries-title">INHABITENT JOURNAL</h1>
<ul class="featured-posts">
<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
<li class="post">
      <?php the_post_thumbnail() ?>
    <div class="post-info-wrapper">
      <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> 
      <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3>
      <input class="button" type="button" value="READ ENTRY"></a>
    </div>
</li>


    

<?php endforeach; wp_reset_postdata(); ?>
</ul>
</div>
</div>
</section>


<?php get_footer(); ?>



