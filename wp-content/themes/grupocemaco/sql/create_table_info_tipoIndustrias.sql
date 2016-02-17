CREATE TABLE IF NOT EXISTS `gc_info_tipoIndustrias` (
  `Codigo` int(5) NOT NULL,
  `Empresa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `gc_info_tipoIndustrias` (`Codigo`, `Empresa`) VALUES
(1, 'Agricultura'),
(2, 'Bancos'),
(3, 'Call center'),
(4, 'Comercial'),
(5, 'Educacion'),
(6, 'Gobierno'),
(7, 'Hotelera'),
(8, 'Industrial'),
(9, 'Otros'),
(10, 'Restaurantes');

ALTER TABLE `gc_info_tipoIndustrias`
  ADD PRIMARY KEY (`Codigo`);
