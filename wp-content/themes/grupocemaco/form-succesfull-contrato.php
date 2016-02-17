<?php
/**
 * Template Name: Form Contrato Successfull
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php get_header();	?>
<?php
global $wpdb;
$wpdb->show_errors();
$userID = get_current_user_id();
$date_format = get_option( 'date_format' );
$time_format = get_option( 'time_format' );
$born = $year.'-'.$month.'-'.$day;

$wpdb->insert(
  'gc_usuarios_contrato',
  array(
    'UserId' => $userID,
    'Acepto' => '1',
    'FechaAceptacionContrato' => date( "{$date_format} {$time_format}", current_time( 'timestamp' ) )
  )
);?>


<div class="guardado-completo">
<h1>&#161;Ha comenzar!</h1>
</div>

<?php get_footer(); ?>

	<script>
window.location.href = document.referrer;
	</script>
