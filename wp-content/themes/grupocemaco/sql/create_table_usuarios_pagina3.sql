--
-- Pagina 3 Experiencia
--
create table if not exists `gc_usuarios_pagina3_experiencia`(
  `ID` int(4),
  `UserId` int(4),
  `p3_exp_NombreEmpresa` varchar(20),
  `p3_exp_TipoIndustria` int(5),
  `p3_exp_Direccion` varchar(150),
  `p3_exp_Telefono` varchar(40),
  `p3_exp_Puesto` varchar(80),
  `p3_exp_FechaIngreso` date,
  `p3_exp_FechaEgreso` date,
  `p3_exp_HastaLaFecha` varchar(20),
  `p3_exp_PromedioIngresos` decimal(9,2),
  `p3_exp_NombreJefeInmediato` varchar(80),
  `p3_exp_TelefonoJefeInmediato` varchar(20),
  `p3_exp_Responsabilidades` text
);
alter table `gc_usuarios_pagina3_experiencia`
  ADD PRIMARY KEY (`Id`),
  CHANGE `ID` `ID` INT(4) NOT NULL AUTO_INCREMENT;


--
-- Pagina 3 Referencias
--
create table if not exists `gc_usuarios_pagina3_refencias`(
  `ID` int(4),
  `UserId` int(4),
  `p3_ref_Nombre` varchar(20),
  `p3_ref_Correo` varchar(255),
  `p3_ref_Telefono` varchar(20),
  `p3_ref_Ocupacion` varchar(40),
  `p3_ref_TiempoConocerlos` smallint(4)
);
alter table `gc_usuarios_pagina3_refencias`
  ADD PRIMARY KEY (`Id`),
  CHANGE `ID` `ID` INT(4) NOT NULL AUTO_INCREMENT;
