<?php
/**
 * The template for displaying posts on index view
 *
 * @package Alternate Lite
 */
?>

<div <?php post_class(); ?>>
  <?php if (has_post_thumbnail()): ?>
		<a href="<?php the_permalink() ?>">
      		<?php the_post_thumbnail('alternate-singlethumb') ?>
    	</a>
    <?php endif; ?>
  	<div class="postdate">
    	<?php echo get_the_date(); ?>
  	</div>
  	<h2 class="entry-title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark">
    	<?php the_title(); ?>
    </a></h2>
  	<div class="entry">
    	<?php the_excerpt(); ?>
  	</div>
</div>
