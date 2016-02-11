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
<link rel="stylesheet" href="wp-content/themes/grupocemaco/css/select2.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="wp-content/themes/grupocemaco/js/select2.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<div class="maincontent">
  <?php get_header();	?>
</div></div>

<div class="wrapper cemaco">
<div class="main-form tabbable">

  <form action="?page_id=55" method="post">
  <!-- Página 1 -->
  <?php require_once('wp-content/themes/grupocemaco/form/page1.phtml') ?>

  </form>

</div></div>

<?php get_footer(); ?>
