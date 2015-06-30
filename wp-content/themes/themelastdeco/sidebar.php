<?php
/**
* The Sidebar containing the main widget areas.
*
* @package Last Deco
*/
?>
<div class="side">
  <?php get_search_form(); ?>

  <?php if ( has_nav_menu( 'social' ) ) : ?>
    <div id="secondary" class="secondary">
      <nav id="social-navigation" class="social-navigation" role="navigation">
        <?php
        // Social links navigation menu.
        wp_nav_menu( array(
          'theme_location' => 'social',
          'depth'          => 1,
          'link_before'    => '<span class="screen-reader-text">',
          'link_after'     => '</span>',
        ) );
        ?>
      </nav>
    <?php endif; ?>
  </div>
  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <div id="secondary" role="complementary">
      <a href="#" class="widgets-trigger"><span class="screen-reader-text"><?php _e( 'Widgets', 'illustratr' ); ?></span></a>
      <div class="widgets-wrapper">
        <div class="widgets-area clear">
          <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div><!-- .widgets-area -->
      </div><!-- .widgets-wrapper -->
    </div><!-- #secondary -->
  <?php endif; ?>
  <?php the_widget( 'WP_Widget_Calendar'); ?>
</div>
