--
-- Pagina 5 Experiencia
--
create table if not exists `gc_usuarios_pagina5`(
  `ID` int(4),
  `UserId` int(4),
  `p5_Pregunta1` varchar(400) comment '¿Por qué quieres trabajar en CEMACO?',
  `p5_Pregunta2` varchar(400) comment '¿Qué persona, en el pasado, te gustaría conocer?',
  `p5_Pregunta3` varchar(400) comment '¿Porque?'  
);
alter table `gc_usuarios_pagina5`
  ADD PRIMARY KEY (`Id`),
  CHANGE `ID` `ID` INT(4) NOT NULL AUTO_INCREMENT;
