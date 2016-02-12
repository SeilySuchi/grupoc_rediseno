CREATE TABLE IF NOT EXISTS `gc_info_tiendas` (
  `Codigo` varchar(5) NOT NULL,
  `Tienda` varchar(50) NOT NULL,
  `Orden` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `gc_info_tiendas` (`Codigo`, `Tienda`, `Orden`) VALUES
('T004', 'Zona 4', 5),
('T007', 'Peri- Roosvelt (zona 7)', 1),
('T010', 'Plaza Cemaco (zona 10)', 2),
('T015', 'Zona 15 (C.C Metro 15)', 12),
('T017', 'Portales (zona 17)', 3),
('T0AM', 'Amatitlán', 13),
('T0B', 'Bodega (zona 5)', 18),
('T0CA', 'Cayalá', 11),
('T0FT', 'El Frutal', 6),
('T0MA', 'Plaza Madero (Km. 21)', 14),
('T0MZ', 'Mazatenango', 8),
('T0NA', 'Naranjo Mall', 10),
('T0PC', 'Pradera Concepción', 7),
('T0SC', 'San Cristóbal', 15),
('T0SJ', 'San Juan', 16),
('T0SK', 'SanKris Mall', 4),
('T0XE', 'Quetzaltenango', 9),
('TOAL', 'Ecocentro (Álamos)', 17);

ALTER TABLE `gc_info_tiendas`
  ADD PRIMARY KEY (`Codigo`);
