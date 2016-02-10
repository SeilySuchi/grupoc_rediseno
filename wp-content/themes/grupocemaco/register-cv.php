<?php
/**
 * Template Name: Register
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div class="maincontent">
<?php get_header();	?>
</div></div>

<div class="wrapper">
  <div class="greyback">

  <?php if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content-register', 'page' ); ?>

      <?php endwhile; ?>

    <?php else : ?>

      <?php get_template_part( 'loop-error' ); ?>

    <?php endif; ?>

  </div>
</div>

<?php get_footer(); ?>
