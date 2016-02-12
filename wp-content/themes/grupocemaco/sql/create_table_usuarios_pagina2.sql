--
-- Pagina 2 Estudios
--
create table if not exists `gc_usuarios_pagina2_estudios`(
  `ID` int(4),
  `UserId` int(4),
  `p2_e_Titulo` varchar(80),
  `p2_e_NivelEstudios` varchar(20),
  `p2_e_NombreCentroEstudios` varchar(50),
  `p2_e_PaisCentroEstudios` smallint(4),
  `p2_e_FechaInicio` date,
  `p2_e_FechaFinal` date,
  `p2_e_HastaLaFecha` varchar(20),
  `p2_e_Estado` varchar(15)
);
alter table `gc_usuarios_pagina2_estudios`
  ADD PRIMARY KEY (`Id`),
  CHANGE `ID` `ID` INT(4) NOT NULL AUTO_INCREMENT;


--
-- Pagina 2 Cursos
--
create table if not exists `gc_usuarios_pagina2_cursos`(
  `ID` int(4),
  `UserId` int(4),
  `p2_c_NombreCursoOConocimiento` varchar(80),
  `p2_c_Nivel` varchar(20),
  `p2_c_Descripcion` varchar(300)
);
alter table `gc_usuarios_pagina2_cursos`
  ADD PRIMARY KEY (`Id`),
  CHANGE `ID` `ID` INT(4) NOT NULL AUTO_INCREMENT;


--
-- Pagina 2 Idioma
--
create table if not exists `gc_usuarios_pagina2_idioma`(
  `ID` int(4),
  `UserId` int(4),
  `p2_i_DominasIdioma` varchar(2),
  `p2_i_TipoIdioma` varchar(20),
  `p2_i_NivelLeido` text,
  `p2_i_NivelEscrito` text,
  `p2_i_NivelConversacion` text
);
alter table `gc_usuarios_pagina2_idioma`
  ADD PRIMARY KEY (`Id`),
  CHANGE `ID` `ID` INT(4) NOT NULL AUTO_INCREMENT;
