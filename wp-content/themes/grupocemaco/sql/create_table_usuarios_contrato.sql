--
-- Contrato
--
create table if not exists `gc_usuarios_contrato`(
  `ID` int(6),
  `UserId` int(6),
  `Acepto` varchar(2),
  `u_FechaCreacion` datetime
);
alter table `gc_usuarios_contrato`
  ADD PRIMARY KEY (`ID`),
  CHANGE `ID` `ID` INT(6) NOT NULL AUTO_INCREMENT;
