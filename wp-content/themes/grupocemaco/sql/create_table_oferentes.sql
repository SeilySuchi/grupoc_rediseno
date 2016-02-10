create table oferentes
(
  idUser int(4) not null auto_increment,
  oPrimerNombre varchar(60),
  oSegundoNombre varchar(40),
  oPrimerApellido varchar(40),
  oSegundoApellido varchar(40),
  oApellidoCasado varchar(40),
  oNacimientoPais varchar(40),
  oNacimientoDep varchar(40),
  oNacimientoMun varchar(40),
  oNacionalidad varchar(40),
  oFechaNacimiento varchar(40),
  oEstadoCivil varchar(40),
  oSexo varchar(40),
  oDireccion varchar(40),
  oColonia varchar(40),
  oZona varchar(40),
  oPaisDireccion varchar(40),
  oMunDireccion varchar(40),
  oDepDireccion varchar(40),
  oTelefono varchar(40),
  oCelular varchar(40),
  oDocumento varchar(40),
  oNumeroDocumento varchar(40),
  oExtendidoEn varchar(40)

  primary key(idUser)
);
