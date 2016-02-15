--
-- Pagina 4
--
create table if not exists `gc_usuarios_aTrabajar`(
  `ID` int(4),
  `UserId` int(4),
  `at_AniosExperiencia` varchar(20),
  `at_Plazas` varchar(60),
  `at_PretensionSalarial` varchar(20),
  `at_ConocesEmpleado` varchar(20),
  `at_NombreEmpleado` varchar(20),
  `at_RelacionEmpleado` varchar(20),
  `at_Especificar` text,
  `at_ComoTeEnteraste` varchar(20),
  `at_Tiendas` varchar(20),
  `at_FechaCreacion` datetime,
  `at_FechaModificacion` datetime
);
alter table `gc_usuarios_aTrabajar`
  ADD PRIMARY KEY (`Id`),
  CHANGE `ID` `ID` INT(4) NOT NULL AUTO_INCREMENT;
