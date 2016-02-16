--
-- Pagina 3 Trabajos
--
create table if not exists `gc_usuarios_trabajos`(
  `ID` int(4),
  `UserId` int(4),
  `t_NombreEmpresa` varchar(20),
  `t_TipoIndustria` int(5),
  `t_Direccion` varchar(150),
  `t_Telefono` varchar(40),
  `t_Puesto` varchar(80),
  `t_FechaIngreso` date,
  `t_FechaEgreso` date,
  `t_HastaLaFecha` varchar(20),
  `t_PromedioIngresos` decimal(9,2),
  `t_NombreJefeInmediato` varchar(80),
  `t_TelefonoJefeInmediato` varchar(20),
  `t_Responsabilidades` text,
  `t_FechaCreacion` datetime,
  `t_FechaModificacion` datetime
);
alter table `gc_usuarios_trabajos`
  ADD PRIMARY KEY (`Id`),
  CHANGE `ID` `ID` INT(4) NOT NULL AUTO_INCREMENT;


--
-- Pagina 3 Referencias
--
create table if not exists `gc_usuarios_trabajos_refencias`(
  `ID` int(4),
  `UserId` int(4),
  `tr_Nombre` varchar(20),
  `tr_Correo` varchar(255),
  `tr_Telefono` varchar(20),
  `tr_Ocupacion` varchar(40),
  `tr_TiempoConocerlos` smallint(4),
  `tr_FechaCreacion` datetime,
  `tr_FechaModificacion` datetime
);
alter table `gc_usuarios_trabajos_refencias`
  ADD PRIMARY KEY (`Id`),
  CHANGE `ID` `ID` INT(4) NOT NULL AUTO_INCREMENT;
