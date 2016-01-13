
<div class="maincontent">
  <?php get_header();	?>
    <main>

	  <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'content', 'page' ); ?>

        <?php endwhile; ?>

      <?php else : ?>

        <?php get_template_part( 'loop-error' ); ?>

      <?php endif; ?>

    </main> <!-- end #content -->

  <?php get_footer(); ?>
</div> <!-- end .container_16 -->
