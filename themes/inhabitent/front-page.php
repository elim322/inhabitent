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
<section class="latest-entries container">
  <h1 class="entries-title">INHABITENT JOURNAL</h1>
<ul class="featured-posts">
<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
<li class="post">
      <?php the_post_thumbnail('large') ?>
      <p><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p> 
      <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
      <a class="black-btn" href="<?php the_permalink(); ?>">READ ENTRY</a>
</li>


    

<?php endforeach; wp_reset_postdata(); ?>
</div>
</ul>

</section>
<h2 class="adventures-title">Latest Adventures</h2>
<section class="adventures container"> 
<div class="canoe">
  <div class="canoe-image">
  <h3>A girl paddling a canoe Getting Back to Nature in a Canoe</h3>
      <a class="black-btn1" href="<?php the_permalink(); ?>">READ ENTRY</a>
  </div>
  <a class="adventures-button" href="#">MORE ADVENTURES</a>
</div>
<div class="column2">
  <div class="night-friends">
  <h3>A Night with Friends at the Beach</h3>
      <a class="black-btn1" href="<?php the_permalink(); ?>">READ ENTRY</a>
  </div>
  <div class="big-mountain">
  <h3>Taking in the View at Big Mountain</h3>
      <a class="black-btn1" href="<?php the_permalink(); ?>">READ ENTRY</a>
  </div>
  <div class="star-gazing">
  <h3>Star-Gazing at the Night Sky</h3>
      <a class="black-btn1" href="<?php the_permalink(); ?>">READ ENTRY</a>
  </div>
</div>

</section>
<?php get_footer(); ?>



