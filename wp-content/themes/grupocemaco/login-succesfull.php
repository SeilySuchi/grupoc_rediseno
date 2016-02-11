<?php
/**
 * Template Name: Login Successfull
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php get_header();	?>
<?php
  global $wbpd;
  $wpdb->show_errors();
  // $user = get_current_user_id();
	$table_name = "users";
	$wpdb->insert( $table_name, array( 'name' => $_POST['name_user'], 'password' => $_POST['password']))
?>
Guardado!

<?php get_footer(); ?>
