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
<div class="shop-stuff">
<?php foreach ( $shop_stuff as $term ): ?>
<div class="stuff">
<h1><?php echo $term->name ?></h1>
<img src="<?php echo get_template_directory_uri()?>/product-type-icons/<?php echo $term->name?>.svg">
<?php echo $term->description?>
</div>

<?php endforeach; ?>
</div>


<?php
   $args = array( 'post_type' => 'post', 'order' => 'ASC', 'numberposts' => 3 );
   $journal_posts = get_posts( $args ); // returns an array of posts
?>
<div class="featured-posts">
<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
<div class="post">
      <?php the_post_thumbnail() ?>
      <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> 
      <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1>
      <input class="button" type="button" value="READ ENTRY"></a>
</div>

    

<?php endforeach; wp_reset_postdata(); ?>
</div>


<?php get_footer(); ?>



