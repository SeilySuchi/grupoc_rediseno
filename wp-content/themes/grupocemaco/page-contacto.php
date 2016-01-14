<?php
/**
 * Template Name: Contacto
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div class="maincontent">
  <?php get_header();	?>
  </div></div>
      <div class="espaciadormin"></div>


<div class="wrapper">
<div class="maincontent">
    <?php get_template_part( 'loop-meta' ); ?>
      <main>

	<h1>CONT&aacute;CTANOS</h1><div class="linea-azul"></div>
	<section>
	      <div class="espaciador-boton-contacto">
		<h4>SI QUIERES UNIRTE A NUESTRO EQUIPO, APLICA AQU&iacute;</h4>
		<a class="boton-verde" href="<?php echo site_url(); ?>/rrhh" target="_blank">APLICA AQU&iacute;</a>
	      </div>
	      <div class="contactform">
		<?php
		if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
		?>
	      </div>
	</section>
      </main> <!-- end #content -->
      	    <div class="espaciador"></div>
  </div> </div> <!-- end .container_16 -->
<?php get_footer(); ?>