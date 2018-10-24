<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">

  <?php while ( have_posts() ) : the_post(); ?>
    <h1> <?php echo wp_title(); ?> </h1>

    <div class="EventHeader">
      
    </div>

  <?php endwhile; ?>
</div><!-- .wrap -->

<?php get_footer();
