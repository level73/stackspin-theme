<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage stackspin
 * @since Twenty Twenty-One 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function stackspin_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'stackspin-columns-overlap',
				'label' => esc_html__( 'Overlap', 'stackspin' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'stackspin-border',
				'label' => esc_html__( 'Borders', 'stackspin' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'stackspin-border',
				'label' => esc_html__( 'Borders', 'stackspin' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'stackspin-border',
				'label' => esc_html__( 'Borders', 'stackspin' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'stackspin-image-frame',
				'label' => esc_html__( 'Frame', 'stackspin' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'stackspin-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'stackspin' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'stackspin-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'stackspin' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'stackspin-border',
				'label' => esc_html__( 'Borders', 'stackspin' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'stackspin-separator-thick',
				'label' => esc_html__( 'Thick', 'stackspin' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'stackspin-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'stackspin' ),
			)
		);
	}
	add_action( 'init', 'stackspin_register_block_styles' );
}
