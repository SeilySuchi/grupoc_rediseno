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

// $wpdb->query(" DELETE FROM gc_usuarios_sobreTi WHERE UserId = $userID ");

// Page 1 - Sobre Ti
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
    's_Nacionalidad' => $_POST['nacionalidad'],
    's_FechaNacimiento' => date($born),
    's_Direccion' => $_POST['Direccion'],
    's_ColonaDireccion' => $_POST['Colonia'],
    's_ZonaDireccion' => $_POST['Zona'],
    's_PaisDireccion' => $_POST['PaisDireccion'],
    's_DepartamentoDireccion' => $_POST['DeptoDireccion'],
    's_MunicipioDireccion' => $_POST['MunicipioDireccion'],
    's_DocumentoIdentificacion' => $_POST['tipoDocomento'],
    's_NumeroIdentificacion' => $_POST['NumeroIdentificacion'],
    's_Telefono' => $_POST['Telefono'],
    's_Celular' => $_POST['Celular'],
    's_ExtendidoEnPais' => $_POST['PaisExtendidoEn'],
    's_ExtendidoEnDepartamento' => $_POST['DepartamentoExtendidoEn'],
    's_ExtendidoEnMunicipio' => $_POST['MunicipioExtendidoEn'],
    's_FechaCreacion' => date( "{$date_format} {$time_format}", current_time( 'timestamp' ) )
  )
);

// Page 2 - Estudios
for($i=0 ;$i < count($_POST['titulo']); $i++) {
  $insert_values = array(
    'UserId' => $userID,
    'e_Titulo' => $_POST['titulo'][$i],
    'e_NivelEstudios' => $_POST['nivelEstudios'][$i],
    'e_NombreCentroEstudios' => $_POST['nombreCentroEstudios'][$i],
    'e_PaisCentroEstudios' => $_POST['pais'][$i],
    'e_FechaInicio' => $_POST['fechaInicio'][$i],
    'e_FechaFinal' => $_POST['fechaFinal'][$i],
    'e_HastaLaFecha' => $_POST['hastaLaFecha'][$i],
    'e_Estado' => $_POST['estado'][$i],
    'e_FechaCreacion' => date( "{$date_format} {$time_format}", current_time( 'timestamp' ) )
  );
  $wpdb->insert(
    'gc_usuarios_estudios', $insert_values
  );
}

// Page 2 - Conocimientos y cursos
for($i=0 ;$i < count($_POST['conocimientoNombre']); $i++) {
  $insert_values = array(
    'UserId' => $userID,
    'ec_NombreCursoOConocimiento' => $_POST['conocimientoNombre'][$i],
    'ec_Nivel' => $_POST['conocimientoNivel'][$i],
    'ec_Descripcion' => $_POST['conocimientoDescripcion'][$i],
    'ec_FechaCreacion' => date( "{$date_format} {$time_format}", current_time( 'timestamp' ) )
  );
  $wpdb->insert(
    'gc_usuarios_estudios_cursos', $insert_values
  );
}

// Page 2 - Idiomas
for($i=0 ;$i < count($_POST['idiomaNombre']); $i++) {
  $insert_values = array(
    'UserId' => $userID,
    'ei_DominasIdioma' => $_POST['idiomaSiNo'][$i],
    'ei_TipoIdioma' => $_POST['idiomaNombre'][$i],
    'ei_NivelLeido' => $_POST['lectura'][$i],
    'ei_NivelEscrito' => $_POST['escritura'][$i],
    'ei_NivelConversacion' => $_POST['conversacion'][$i],
    'ei_FechaCreacion' => date( "{$date_format} {$time_format}", current_time( 'timestamp' ) )
  );
  $wpdb->insert(
    'gc_usuarios_estudios_idioma', $insert_values
  );
}

// Page 3 - Experiencia Laboral
for($i=0 ;$i < count($_POST['nombreEmpresa']); $i++) {
  $insert_values = array(
    'UserId' => $userID,
    't_NombreEmpresa' => $_POST['nombreEmpresa'][$i],
    't_TipoIndustria' => $_POST['tipoIndustria'][$i],
    't_Direccion' => $_POST['direccionTrabajo'][$i],
    't_Telefono' => $_POST['telefonoTrabajo'][$i],
    't_Puesto' => $_POST['puestoTrabajo'][$i],
    't_FechaIngreso' => $_POST['fechaIngreso'][$i],
    't_HastaLaFecha' => $_POST['hasta_fecha_egreso'][$i],
    't_FechaEgreso' => $_POST['fechaEgreso'][$i],
    't_PromedioIngresos' => $_POST['promedioIngresos'][$i],
    't_NombreJefeInmediato' => $_POST['nombreJefeInmediato'][$i],
    't_TelefonoJefeInmediato' => $_POST['telefonoJefeInmediato'][$i],
    't_Responsabilidades' => $_POST['responsavilidadesTrabajo'][$i],
    't_FechaCreacion' => date( "{$date_format} {$time_format}", current_time( 'timestamp' ) )
  );
  $wpdb->insert(
    'gc_usuarios_trabajos', $insert_values
  );
}

// Page 3 - Referencias
for($i=0 ;$i < count($_POST['nombreReferencia']); $i++) {
  $insert_values = array(
    'UserId' => $userID,
    'tr_Nombre' => $_POST['nombreReferencia'][$i],
    'tr_Correo' => $_POST['correoReferencia'][$i],
    'tr_Telefono' => $_POST['telefonoReferencia'][$i],
    'tr_Ocupacion' => $_POST['ocupacionReferencia'][$i],
    'tr_TiempoConocerlos' => $_POST['tiempoAniosReferencia'][$i],
    'tr_FechaCreacion' => date( "{$date_format} {$time_format}", current_time( 'timestamp' ) )
  );
  $wpdb->insert(
    'gc_usuarios_trabajos_refencias', $insert_values
  );
}
?>

<div class="guardado-completo">
<h1>&#161;Aplicación completada!</h1>
</div>

<?php get_footer(); ?>

	<script>
window.location.href = document.referrer;
	</script>
