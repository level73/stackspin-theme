<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage stackspin
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( ! is_front_page() ) : ?>
		<header class="entry-header alignwide">
			<?php get_template_part( 'template-parts/header/entry-header' ); ?>
			<?php stackspin_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php elseif ( has_post_thumbnail() ) : ?>
		<header class="entry-header alignwide">
			<?php stackspin_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'stackspin' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'stackspin' ),
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer default-max-width">
			<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'stackspin' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
