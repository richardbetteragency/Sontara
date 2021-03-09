<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package Alternate Lite
 */
?>

</div>
</div>
</div>

<div id="footer">
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
  		<div id="bottomwidgets">
    		<div id="bottominner">
      			<?php dynamic_sidebar( 'sidebar-2' ); ?>
    		</div>
  		</div>
    <?php endif ?>

	<?php if ( has_nav_menu( 'social' ) ) {
					wp_nav_menu(
						array(
							'theme_location'  => 'social',
							'container'       => 'div',
							'container_id'    => 'menu-social',
							'container_class' => 'menu',
							'menu_id'         => 'menu-social-items',
							'menu_class'      => 'menu-items',
							'depth'           => 1,
							'link_before'     => '<span class="screen-reader-text">',
							'link_after'      => '</span>',
							'fallback_cb'     => '',
						)
					);
	} ?>
  	<div id="copyinfo"> &copy; <?php echo date_i18n(__('Y','alternate-lite')); ?>
    <?php bloginfo('name'); ?>
    . <a href="<?php echo esc_url( esc_html__( 'http://wordpress.org/', 'alternate-lite' ) ); ?>"> <?php printf( esc_html__( 'Powered by %s.', 'alternate-lite' ), 'WordPress' ); ?> </a> <?php printf( esc_html__( 'Theme by %1$s.', 'alternate-lite' ), '<a href="http://www.vivathemes.com/" rel="designer">Viva Themes</a>' ); ?></div>
</div>
<?php wp_footer(); ?>
</body></html>