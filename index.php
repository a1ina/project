<?php
/**
 * Index page
 *
 * @package /*name*/
 * @since /*name*/
 *
 *
 */
get_header(); ?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'front-page' ); ?>
<?php else : ?>
   <?php get_template_part( 'page' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
