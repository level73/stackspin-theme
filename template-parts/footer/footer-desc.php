<?php
/**
 * Displays the widget for description in footer.
 *
 * @package WordPress
 * @subpackage stackspin
 * @since Twenty Twenty-One 1.0
 */

if ( is_active_sidebar( 'sidebar-desc' ) ) : ?>

	<aside class="site-name__description">
		<?php dynamic_sidebar( 'sidebar-desc' ); ?>
	</aside><!-- .widget-area -->

<?php endif; ?>
