<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Alternate Lite
 */

get_header(); ?>

<div id="contentwrapper">
  <div id="content">
    <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'alternate-lite' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
    <?php if (have_posts()) : ?>
     <?php
				while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
				endwhile;
				?>
    <?php the_posts_pagination(); ?>
    <?php else : ?>
    <h2 class="center">
      <?php esc_hmtl_e( 'No Post Found', 'alternate-lite' ); ?>
    </h2>
    <?php get_search_form(); ?>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
