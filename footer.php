<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Stackspin
 * @since Stackspin 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer__main limit-width">
			<div class="site-name">
				<?php if ( has_custom_logo() ) : ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
					<?php if ( get_bloginfo( 'description' ) ) : ?>
						<?php if ( is_front_page() && ! is_paged() ) : ?>
							<p class="site-name__description"><?php bloginfo( 'description' ); ?></p>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			</div><!-- .site-name -->
			<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
			<form class="site-footer__form">
				<h3 class="site-footer__form-header">Subscribe to our newsletter</h3>
				<p class="site-footer__form-desc">
					The latest news, articles, and resources, sent to your inbox weekly.
				</p>
				<div class="site-footer__form-wrapper">
					<input type="text" class="site-footer__form-input" placeholder="Enter your email" />
					<input type="submit" class="site-footer__form-submit" value="Subscribe" />
				</div>
			</form>
		</div>
		<div class="site-info limit-width">
			<label class="site-info__copyright">© 2021 Stackspin. All rights reserved.</label>
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'stackspin' ); ?>" class="footer-navigation">
					<ul class="footer-navigation-wrapper">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'items_wrap'     => '%3$s',
								'container'      => false,
								'depth'          => 1,
								'link_before'    => '<span>',
								'link_after'     => '</span>',
								'fallback_cb'    => false,
							)
						);
						?>
					</ul><!-- .footer-navigation-wrapper -->
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
		</div> <!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
