CREATE TABLE IF NOT EXISTS `gc_info_departamentos` (
  `Codigo` int(11) NOT NULL,
  `CodigoPais` int(11) NOT NULL,
  `Descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

INSERT INTO `gc_info_departamentos` (`Codigo`, `CodigoPais`, `Descripcion`) VALUES
(16, 2, 'GUATEMALA\r'),
(17, 2, 'EL PROGRESO\r'),
(18, 2, 'SACATEPEQUEZ\r'),
(19, 2, 'CHIMALTENANGO\r'),
(20, 2, 'ESCUINTLA\r'),
(21, 2, 'SANTA ROSA\r'),
(22, 2, 'SOLOLÁ\r'),
(23, 2, 'TOTONICAPÁN\r'),
(24, 2, 'QUETZALTENANGO\r'),
(25, 2, 'SUCHITEPEQUEZ\r'),
(26, 2, 'RETALHULEU\r'),
(27, 2, 'SAN MARCOS\r'),
(28, 2, 'HUEHUETENANGO\r'),
(29, 2, 'QUICHÉ\r'),
(30, 2, 'BAJA VERAPAZ\r'),
(31, 2, 'ALTA VERAPAZ\r'),
(32, 2, 'PETÉN\r'),
(33, 2, 'IZABAL\r'),
(34, 2, 'ZACAPA\r'),
(35, 2, 'CHIQUIMULA\r'),
(36, 2, 'JALAPA\r'),
(37, 2, 'JUTIAPA\r');

ALTER TABLE `gc_info_departamentos`
  ADD PRIMARY KEY (`Codigo`),
  ADD UNIQUE KEY `Codigo_UNIQUE` (`Codigo`);

ALTER TABLE `gc_info_departamentos`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
