<?php
/**
 * Blog page specific content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Stackspin
 * @since Stackspin 1.0
 */

?>

<div class="wp-block-columns alignfull are-vertically-aligned-center limit-width">
    <div class="wp-block-column is-vertically-aligned-center">
        <h2 class="no-padding">From the blog</h2>
    </div>
    <!-- <div class="wp-block-column is-vertically-aligned-center"><form role="search" method="get" action="http://localhost:8080/wpsite/" class="wp-block-search__button-outside wp-block-search__text-button wp-block-search"><div class="wp-block-search__inside-wrapper"><input type="search" id="wp-block-search__input-1" class="wp-block-search__input" name="s" value="" placeholder="Search article" required=""><button type="submit" class="wp-block-search__button ">Sort</button></div></form></div> -->
    <?php get_search_form(); ?>
</div>