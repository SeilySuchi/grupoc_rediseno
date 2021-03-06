create table if not exists `gc_usuarios_sobreTi`(
  `ID` int(4),
  `UserId` int(4),
  `s_PrimerNombre` varchar(20),
  `s_SegundoNombre` varchar(20),
  `s_PrimerApellido` varchar(20),
  `s_SegundoApellido` varchar(20),
  `s_ApellidoCasada` varchar(20),
  `s_PaisNacimiento` smallint(4),
  `s_DepartamentoNacimiento` smallint(4),
  `s_MunicipioNacimiento` smallint(4),
  `s_Nacionalidad` varchar(20),
  `s_FechaNacimiento` varchar(10),
  `s_EstadoCivil` varchar(20),
  `s_Sexo` varchar(20),
  `s_Direccion` varchar(20),
  `s_ColonaDireccion` varchar(20),
  `s_ZonaDireccion` int(4),
  `s_PaisDireccion`smallint(4),
  `s_DepartamentoDireccion` smallint(4),
  `s_MunicipioDireccion` smallint(4),
  `s_Telefono` varchar(15),
  `s_Celular` varchar(15),
  `s_DocumentoIdentificacion` varchar(20),
  `s_NumeroIdentificacion` varchar(20),
  `s_ExtendidoEnPais` varchar(20),
  `s_ExtendidoEnDepartamento` varchar(20),
  `s_ExtendidoEnMunicipio` varchar(20),
  `s_FechaCreacion` datetime,
  `s_FechaModificacion` datetime
)ENGINE=InnoDB DEFAULT CHARSET=latin1;;

alter table `gc_usuarios_sobreTi`
  ADD PRIMARY KEY (`Id`),
  CHANGE `ID` `ID` INT(4) NOT NULL AUTO_INCREMENT;
