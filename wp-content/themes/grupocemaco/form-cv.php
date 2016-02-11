<?php
/**
 * Template Name: Curriculum
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
  <link rel="stylesheet" href="wp-content/themes/grupocemaco/css/bootstrap.css">
  <link rel="stylesheet" href="wp-content/themes/grupocemaco/css/bootstrap-responsive.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<div class="maincontent">
<?php get_header();	?>
</div></div>

<div class="wrapper cemaco">
<div class="main-form tabbable">

  <!-- Página 1 -->
  <?php require_once('wp-content/themes/grupocemaco/form/page1.phtml') ?>

</div></div>

<?php get_footer(); ?>
