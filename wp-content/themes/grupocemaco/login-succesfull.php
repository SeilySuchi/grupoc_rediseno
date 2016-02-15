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
global $wpdb;
$wpdb->show_errors();
$userID = get_current_user_id();
// Page 1
$time = current_time( $type, $gmt = 0 );
$day = $_POST['DiaNacimiento'];
$month = $_POST['MesNacimiento'];
$year =  $_POST['AnioNacimiento'];
$born = $year.'-'.$month.'-'.$day;

$wpdb->insert(
  'gc_usuarios_pagina1',
  array(
    'UserId' => $userID,
    'p1_PrimerNombre' => $_POST['PrimerNombre'],
    'p1_SegundoNombre' => $_POST['SegundoNombre'],
    'p1_PrimerApellido' => $_POST['PrimerApellido'],
    'p1_SegundoApellido' => $_POST['SegundoApellido'],
    'p1_ApellidoCasada' => $_POST['ApellidoCasada'],
    'p1_PaisNacimiento' => $_POST['PaisNacimiento'],
    'p1_DepartamentoNacimiento' => $_POST['DepartamentoNacimiento'],
    'p1_MunicipioNacimiento' => $_POST['MunicipioNacimiento'],
    'p1_FechaNacimiento' => date($born),
    'p1_Direccion' => $_POST['Direccion'],
    'p1_ColonaDireccion' => $_POST['Colonia'],
    'p1_ZonaDireccion' => $_POST['Zona'],

    'p1_PaisDireccion' => $_POST['PaisDireccion'],
    'p1_DepartamentoDireccion' => $_POST['DeptoDireccion'],
    'p1_MunicipioDireccion' => $_POST['MunicipioDireccion'],
    'p1_NumeroIdentificacion' => $_POST['NumeroIdentificacion'],

    'p1_ExtendidoEnPais' => $_POST['PaisExtendidoEn'],
    'p1_ExtendidoEnDepartamento' => $_POST['DepartamentoExtendidoEn'],
    'p1_ExtendidoEnMunicipio' => $_POST['MunicipioExtendidoEn'],

    'p1_FechaCreacion' => $time
  )
);


$values = array();
for($i=0 ;$i < count($_POST['Estudios']); $i++) {
  $values[] = '("' . $_POST['Estudios']['titulo'][$i] . '")';
}
  // foreach ($values as $row) {
  //   $insert = array(
  //     'UserId' => $userID,
  //     'p2_e_Titulo' => $_POST['titulo']
  //   );
  // }
$wpdb->insert(
  'gc_usuarios_pagina2_estudios',
  array(
    'UserId' => $userID,
    'p2_e_Titulo' => $values
  )
);

?>

Guardado!

<?php get_footer(); ?>
