CREATE TABLE IF NOT EXISTS `gc_info_gradoEstudios` (
  `Codigo` smallint(2) NOT NULL,
  `Descripcion` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `gc_info_gradoEstudios` (`Codigo`, `Descripcion`) VALUES
(1, 'PROFESIONAL'),
(2, 'TECNICO'),
(3, 'BACHILLERATO'),
(4, 'UNIVERSITARIO'),
(5, 'MAESTRIA'),
(6, 'POSGRADO'),
(7, 'DOCTORADO'),
(9, 'PRIMARIA'),
(10, 'PERITO CONTADOR'),
(12, 'EDUCACION MEDIA O DIVERSIFICADO'),
(13, 'SECUNDARIA'),
(14, 'MILITAR'),
(15, 'SEMINARIO'),
(16, 'CURSO'),
(17, 'DIPLOMADO'),
(18, 'OTROS'),
(19, 'SECRETARIADO');

ALTER TABLE `gc_info_gradoEstudios`
  ADD PRIMARY KEY (`Codigo`);
