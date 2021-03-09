<?php
/**
 * The main template file.
 *
 *
 * @package Alternate Lite
 */

get_header(); ?>

<div id="contentwrapper">
  <div id="content">
    <?php if (have_posts()) : ?>
      			<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
					endwhile;
				?>
      		<?php the_posts_pagination(); ?>
      
	  	<?php else : ?>
      
      		<h2 class="center">
        		<?php esc_html_e( 'You don&#39;t have any posts yet.', 'alternate-lite' ); ?>
      		</h2>
      
	  	<?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
