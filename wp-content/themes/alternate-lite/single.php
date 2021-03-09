<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Alternate Lite
 */

get_header(); ?>

<div id="contentwrapper">
<?php if (has_post_thumbnail()): ?>
  		<?php the_post_thumbnail('alternate-singlethumb'); ?>
    <?php endif; ?>
  <div id="content">
    <?php while ( have_posts() ) : the_post(); ?>
    <div <?php post_class(); ?>>
      <h1 class="entry-title">
        <?php the_title(); ?>
      </h1>
      <div class="entry">
        <?php the_content(); ?>
        <?php wp_link_pages(array('before' => '<p><strong>'. __( 'Pages:', 'alternate-lite' ) .'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        <?php echo get_the_tag_list('<p class="singletags">',' ','</p>'); ?>
        <?php comments_template(); ?>
      </div>
    </div>
    <?php the_post_navigation(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</div>
<?php get_footer(); ?>
