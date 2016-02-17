--
-- Pagina 5 Experiencia
--
create table if not exists `gc_usuarios_loUltimo`(
  `ID` int(4),
  `UserId` int(4),
  `u_Pregunta1` varchar(400) comment '¿Por qué quieres trabajar en CEMACO?',
  `u_Pregunta2` varchar(400) comment '¿Qué persona, en el pasado, te gustaría conocer?',
  `u_Pregunta3` varchar(400) comment '¿Porque?',
  `u_FechaCreacion` datetime,
  `u_FechaModificacion` datetime
);
alter table `gc_usuarios_loUltimo`
  ADD PRIMARY KEY (`Id`),
  CHANGE `ID` `ID` INT(4) NOT NULL AUTO_INCREMENT;
