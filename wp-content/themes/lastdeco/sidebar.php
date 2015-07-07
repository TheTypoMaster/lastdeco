<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Illustratr
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="secondary" role="complementary">
		<div class="widgets-wrapper">
			<div class="widgets-area clear">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div><!-- .widgets-area -->
		</div><!-- .widgets-wrapper -->
	</div><!-- #secondary -->
<?php endif; ?>
