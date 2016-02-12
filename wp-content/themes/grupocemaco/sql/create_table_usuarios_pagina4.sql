--
-- Pagina 4 Plazas
--
create table if not exists `gc_usuarios_pagina4_plazas`(
  `ID` int(4),
  `UserId` int(4),
  `p4_Asesor` varchar(20),
  `p4_Cajas` varchar(20),
  `p4_Empaque` varchar(20),
  `p4_ServicioCliente` varchar(20),
  `p4_Colocador` varchar(20),
  `p4_Merchandasign` varchar(20),
  `p4_Supervisor` varchar(20),
  `p4_JefeArea` varchar(20),
  `p4_AuxiliarBodega` varchar(20),
  `p4_Pilotos` varchar(20),
  `p4_Finanzas` varchar(20),
  `p4_Importaciones` varchar(20),
  `p4_Compras` varchar(20),
  `p4_Informatica` varchar(20),
  `p4_Desarrollo` varchar(20),
  `p4_MediosDigitales` varchar(20),
  `p4_Mercadeo` varchar(20),
  `p4_RecursosHumanos` varchar(20),
  `p4_Operaciones` varchar(20),
  `p4_Logistica` varchar(20)
);
alter table `gc_usuarios_pagina4_plazas`
  ADD PRIMARY KEY (`Id`),
  CHANGE `ID` `ID` INT(4) NOT NULL AUTO_INCREMENT;


--
-- Pagina 4 Plazas
--
create table if not exists `gc_usuarios_pagina4`(
  `ID` int(4),
  `UserId` int(4),
  `p4_AniosExperiencia` varchar(20),
  `p4_PretensionSalarial` varchar(20),
  `p4_ConocesEmpleado` varchar(20),
  `p4_NombreEmpleado` varchar(20),
  `p4_RelacionEmpleado` varchar(20),
  `p4_Especificar` text,
  `p4_ComoTeEnteraste` varchar(20),
  `p4_Tienda1` varchar(20),
  `p4_Tienda2` varchar(20),
  `p4_Tienda3` varchar(20)
);
alter table `gc_usuarios_pagina4`
  ADD PRIMARY KEY (`Id`),
  CHANGE `ID` `ID` INT(4) NOT NULL AUTO_INCREMENT;
