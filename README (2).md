# CodeIgniter 2
Open Source PHP Framework (originally from EllisLab)

For more info, please refer to the user-guide at http://www.codeigniter.com/userguide2/  
(also available within the download package for offline use)

**WARNING:** *CodeIgniter 2.x is no longer under development and only receives security patches until October 31st, 2015.
Please update your installation to the latest CodeIgniter 3.x version available
(upgrade instructions [here](http://www.codeigniter.com/userguide3/installation/upgrade_300.html)).*


Dejo registro de la creacion de la tabla, todo fue creado por el framework codeIgniter 2

CREATE TABLE `productos` (
  `ID` int(12) NOT NULL,
  `nombre_producto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'campo del nombre producto',
  `referencia` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'referencia',
  `precio` int(11) NOT NULL COMMENT 'precio del producto',
  `peso` int(11) NOT NULL COMMENT 'peso del producto',
  `categoria` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'categorÃ­a del producto',
  `stock` int(11) NOT NULL COMMENT 'Cantidad del producto en bodega ',
  `fecha_creacion` date NOT NULL COMMENT 'Fecha de la creaciÃ³n del producto',
  `fecha_ultima_venta` datetime DEFAULT NULL COMMENT 'Fecha de la ultima venta del producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Tabla de producto konecta';

