--
-- Pagina 2 Estudios
--
create table if not exists `gc_usuarios_estudios`(
  `ID` int(4),
  `UserId` int(4),
  `e_Titulo` varchar(80),
  `e_NivelEstudios` varchar(20),
  `e_NombreCentroEstudios` varchar(50),
  `e_PaisCentroEstudios` smallint(4),
  `e_FechaInicio` varchar(10),
  `e_FechaFinal` varchar(10),
  `e_HastaLaFecha` varchar(20),
  `e_Estado` varchar(15),
  `e_FechaCreacion` datetime,
  `e_FechaModificacion` datetime
);
alter table `gc_usuarios_estudios`
  ADD PRIMARY KEY (`Id`),
  CHANGE `ID` `ID` INT(4) NOT NULL AUTO_INCREMENT;


--
-- Pagina 2 Cursos
--
create table if not exists `gc_usuarios_estudios_cursos`(
  `ID` int(4),
  `UserId` int(4),
  `ec_NombreCursoOConocimiento` varchar(80),
  `ec_Nivel` varchar(20),
  `ec_Descripcion` varchar(300),
  `ec_FechaCreacion` datetime,
  `ec_FechaModificacion` datetime
);
alter table `gc_usuarios_estudios_cursos`
  ADD PRIMARY KEY (`Id`),
  CHANGE `ID` `ID` INT(4) NOT NULL AUTO_INCREMENT;


--
-- Pagina 2 Idioma
--
create table if not exists `gc_usuarios_estudios_idioma`(
  `ID` int(4),
  `UserId` int(4),
  `ei_DominasIdioma` varchar(2),
  `ei_TipoIdioma` varchar(20),
  `ei_NivelLeido` text,
  `ei_NivelEscrito` text,
  `ei_NivelConversacion` text,
  `ei_FechaCreacion` datetime,
  `ei_FechaModificacion` datetime
);
alter table `gc_usuarios_estudios_idioma`
  ADD PRIMARY KEY (`Id`),
  CHANGE `ID` `ID` INT(4) NOT NULL AUTO_INCREMENT;
