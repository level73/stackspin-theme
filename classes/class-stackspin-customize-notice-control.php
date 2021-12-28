<?php
/**
 * Customize API: stackspin_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage stackspin
 * @since Twenty Twenty-One 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @see WP_Customize_Control
 */
class stackspin_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @var string
	 */
	public $type = 'twenty-twenty-one-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'stackspin' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/twenty-twenty-one/#dark-mode-support', 'stackspin' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'stackspin' ); ?>
			</a></p>
		</div>
		<?php
	}
}
