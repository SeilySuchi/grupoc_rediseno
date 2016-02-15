<?php
$usuario = get_current_user_id();
// Obtiene datos guardados en la db
$primerNombre =  $wpdb->get_var( "SELECT p1_PrimerNombre FROM gc_usuarios_pagina1 WHERE UserId=$usuario LIMIT 1" );
$segundoNombre =  $wpdb->get_var( "SELECT p1_SegundoNombre FROM gc_usuarios_pagina1 WHERE UserId=$usuario LIMIT 1" );
$primerApellido =  $wpdb->get_var( "SELECT p1_PrimerApellido FROM gc_usuarios_pagina1 WHERE UserId=$usuario LIMIT 1" );
$segundoApellido =  $wpdb->get_var( "SELECT p1_SegundoApellido FROM gc_usuarios_pagina1 WHERE UserId=$usuario LIMIT 1" );
$paisNac =  $wpdb->get_var( "SELECT p1_PaisNacimiento FROM gc_usuarios_pagina1 WHERE UserId=$usuario LIMIT 1" );
$departamentoNac =  $wpdb->get_var( "SELECT p1_DepartamentoNacimiento FROM gc_usuarios_pagina1 WHERE UserId=$usuario LIMIT 1" );
$municipioNac =  $wpdb->get_var( "SELECT p1_MunicipioNacimiento FROM gc_usuarios_pagina1 WHERE UserId=$usuario LIMIT 1" );

// Obtiene los datos de la db
$paisNacimiento =  $wpdb->get_results( "SELECT Codigo, Pais FROM gc_info_paises" );
$deptoNacimiento =  $wpdb->get_results( "SELECT Codigo, Descripcion FROM gc_info_departamentos" );
$munNacimiento =  $wpdb->get_results( "SELECT Codigo, Descripcion FROM gc_info_municipios" );
$nacionalidadNac =  $wpdb->get_results( "SELECT Codigo, Nacionalidad FROM gc_info_paises" );
?>
