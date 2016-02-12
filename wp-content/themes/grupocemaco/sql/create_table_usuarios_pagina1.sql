create table if not exists `gc_usuarios_pagina1`(
  `ID` int(4),
  `UserId` int(4),
  `p1_PrimerNombre` varchar(20),
  `p1_SegundoNombre` varchar(20),
  `p1_PrimerApellido` varchar(20),
  `p1_SegundoApellido` varchar(20),
  `p1_ApellidoCasada` varchar(20),
  `p1_PaisNacimiento` smallint(4),
  `p1_DepartamentoNacimiento` smallint(4),
  `p1_MunicipioNacimiento` smallint(4),
  `p1_Nacionalidad` varchar(20),
  `p1_FechaNacimiento` date,
  `p1_EstadoCivil` varchar(20),
  `p1_Sexo` varchar(20),
  `p1_Direccion` varchar(20),
  `p1_ColonaDireccion` varchar(20),
  `p1_ZonaDireccion` int(4),
  `p1_PaisDireccion`smallint(4),
  `p1_DepartamentoDireccion` smallint(4),
  `p1_MunicipioDireccion` smallint(4),
  `p1_DocumentoIdentificacion` varchar(20),
  `p1_NumeroIdentificacion` varchar(20),
  `p1_ExtendidoEnPais` varchar(20),
  `p1_ExtendidoEnDepartamento` varchar(20),
  `p1_ExtendidoEnMunicipio` varchar(20),
  `p1_FechaCreacion` datetime,
  `p1_FechaModificacion` datetime
)ENGINE=InnoDB DEFAULT CHARSET=latin1;;

alter table `gc_usuarios_pagina1`
  ADD PRIMARY KEY (`Id`),
  CHANGE `ID` `ID` INT(4) NOT NULL AUTO_INCREMENT;
