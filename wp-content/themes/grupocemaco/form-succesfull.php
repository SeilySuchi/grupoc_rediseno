<?php
/**
 * Template Name: Form Successfull
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
// Page 1
$date_format = get_option( 'date_format' );
$time_format = get_option( 'time_format' );
$day = $_POST['DiaNacimiento'];
$month = $_POST['MesNacimiento'];
$year =  $_POST['AnioNacimiento'];
$born = $year.'-'.$month.'-'.$day;

$wpdb->insert(
  'gc_usuarios_sobreTi',
  array(
    'UserId' => $userID,
    's_PrimerNombre' => $_POST['PrimerNombre'],
    's_SegundoNombre' => $_POST['SegundoNombre'],
    's_PrimerApellido' => $_POST['PrimerApellido'],
    's_SegundoApellido' => $_POST['SegundoApellido'],
    's_ApellidoCasada' => $_POST['ApellidoCasada'],
    's_PaisNacimiento' => $_POST['PaisNacimiento'],
    's_DepartamentoNacimiento' => $_POST['DepartamentoNacimiento'],
    's_MunicipioNacimiento' => $_POST['MunicipioNacimiento'],
    's_FechaNacimiento' => date($born),
    's_Direccion' => $_POST['Direccion'],
    's_ColonaDireccion' => $_POST['Colonia'],
    's_ZonaDireccion' => $_POST['Zona'],
    's_PaisDireccion' => $_POST['PaisDireccion'],
    's_DepartamentoDireccion' => $_POST['DeptoDireccion'],
    's_MunicipioDireccion' => $_POST['MunicipioDireccion'],
    's_NumeroIdentificacion' => $_POST['NumeroIdentificacion'],
    's_Telefono' => $_POST['Telefono'],
    's_Celular' => $_POST['Celular'],
    's_ExtendidoEnPais' => $_POST['PaisExtendidoEn'],
    's_ExtendidoEnDepartamento' => $_POST['DepartamentoExtendidoEn'],
    's_ExtendidoEnMunicipio' => $_POST['MunicipioExtendidoEn'],
    's_FechaCreacion' => date( "{$date_format} {$time_format}", current_time( 'timestamp' ) )
  )
);

// Page 2
for($i=0 ;$i < count($_POST['titulo']); $i++) {
  $insert_values = array(
    'UserId' => $userID,
    'e_Titulo' => $_POST['titulo'][$i],
    'e_NivelEstudios' => $_POST['nivelEstudios'][$i],
    'e_FechaCreacion' => date( "{$date_format} {$time_format}", current_time( 'timestamp' ) )
  );
  $wpdb->insert(
    'gc_usuarios_estudios', $insert_values
  );
}

?>

Guardado!

<?php get_footer(); ?>
