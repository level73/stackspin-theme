<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage stackspin
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php stackspin_post_thumbnail(); ?>
	<?php if ( !is_singular() ) : ?>
	<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if ( is_home() ) {
			stackspin_get_excerpt();
		}
		else {
			the_content(
				stackspin_continue_reading_text()
			);
		}

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

	<?php if (is_home()) : ?>
	<footer class="entry-footer default-max-width">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ) ?>
		<div class="entry-footer__details">
			<span class="post-author"> <?php the_author(); ?> </span>
			<?php stackspin_entry_meta_footer(); ?>
		</div>
	</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
