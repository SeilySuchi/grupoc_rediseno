CREATE TABLE IF NOT EXISTS `gc_info_plazas` (
  `Codigo` int(4) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

INSERT INTO `gc_info_plazas` (`Codigo`, `Descripcion`) VALUES
(1, 'Finanzas'),
(2, 'Importaciones'),
(3, 'Compras '),
(4, 'Informática'),
(5, 'Desarrollo software '),
(6, 'Medios digitales'),
(11, 'Mercadeo'),
(13, 'Recursos Humanos'),
(14, 'Operaciones'),
(15, 'Lógistica'),
(101, 'Cajas'),
(102, 'Asesor de ventas en tienda'),
(103, 'Empaque'),
(104, 'Servicio al cliente (Recepción)'),
(105, 'Colocador'),
(106, 'Merchandising'),
(107, 'Supervisor de caja'),
(108, 'Jefe de área');

ALTER TABLE `gc_info_plazas`
  ADD PRIMARY KEY (`Codigo`);

ALTER TABLE `gc_info_plazas`
  MODIFY `Codigo` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=109;
