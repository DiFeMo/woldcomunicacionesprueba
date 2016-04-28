-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2016 a las 16:43:37
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdwold`
--

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `cscompra`
--
CREATE TABLE IF NOT EXISTS `cscompra` (
`numero_compra` int(11)
,`fecha` date
,`proveedor` varchar(12)
,`nombre` varchar(50)
,`descripcion` varchar(10)
,`telefono` varchar(20)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `cscompraproductos`
--
CREATE TABLE IF NOT EXISTS `cscompraproductos` (
`numero_compra` int(11)
,`referencia` varchar(20)
,`nombre` varchar(40)
,`valor` int(11)
,`cantidad` int(11)
,`SUBTOTAL` bigint(21)
,`idmovimiento` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `cscompratotal`
--
CREATE TABLE IF NOT EXISTS `cscompratotal` (
`numero_compra` int(11)
,`fecha` date
,`SumaDeSUBTOTAL` decimal(42,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csdevolucion`
--
CREATE TABLE IF NOT EXISTS `csdevolucion` (
`iddevolucion` int(11)
,`referencia` varchar(20)
,`fecha` date
,`motivo` varchar(50)
,`numero_compra` int(11)
,`fecha_compra` date
,`cantidad` int(11)
,`costo` int(11)
,`TOTAL_DEVOLUCION` bigint(21)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csdiatotalcompra`
--
CREATE TABLE IF NOT EXISTS `csdiatotalcompra` (
`fecha` date
,`TOTALCOMPRADIA` decimal(64,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csdiatotaldevo`
--
CREATE TABLE IF NOT EXISTS `csdiatotaldevo` (
`fecha` date
,`SumaDecosto` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csdiatotalotros`
--
CREATE TABLE IF NOT EXISTS `csdiatotalotros` (
`fecha` date
,`SumaDesalida_total` decimal(32,0)
,`SumaDeentrada_total` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csdiatotalst`
--
CREATE TABLE IF NOT EXISTS `csdiatotalst` (
`fecha` date
,`costo_st` int(11)
,`abono` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csdiatotalstentreg`
--
CREATE TABLE IF NOT EXISTS `csdiatotalstentreg` (
`fecha` date
,`SumaDesaldo_cancel` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csdiatotalventas`
--
CREATE TABLE IF NOT EXISTS `csdiatotalventas` (
`fecha` date
,`TOTALVENTADIA` decimal(64,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csexistencia`
--
CREATE TABLE IF NOT EXISTS `csexistencia` (
`referencia` varchar(20)
,`nombre` varchar(40)
,`marca` varchar(20)
,`SumaDecantidad` decimal(32,0)
,`precio` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csmestotalentra`
--
CREATE TABLE IF NOT EXISTS `csmestotalentra` (
`Mes` int(2)
,`Año` int(4)
,`TOTALMESENTRA` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csmestotalotros`
--
CREATE TABLE IF NOT EXISTS `csmestotalotros` (
`Mes` int(2)
,`Año` int(4)
,`MESTOTALSALIDA` decimal(54,0)
,`MESTOTALENTRA` decimal(54,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csmestotalsale`
--
CREATE TABLE IF NOT EXISTS `csmestotalsale` (
`Mes` int(2)
,`Año` int(4)
,`TOTALMESSALE` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csmestotalst`
--
CREATE TABLE IF NOT EXISTS `csmestotalst` (
`Mes` int(2)
,`Año` int(4)
,`SumaDecosto_st` decimal(32,0)
,`SumaDeabono` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csmestotalstentreg`
--
CREATE TABLE IF NOT EXISTS `csmestotalstentreg` (
`Mes` int(2)
,`Año` int(4)
,`TOTALSALDOCANCEL` decimal(54,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csmestotalventas`
--
CREATE TABLE IF NOT EXISTS `csmestotalventas` (
`Mes` int(2)
,`Año` int(4)
,`TOTALMESVENTAS` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csst`
--
CREATE TABLE IF NOT EXISTS `csst` (
`numero_orden` int(11)
,`nombre` varchar(50)
,`marca` varchar(20)
,`referencia` varchar(20)
,`descripcion_st` varchar(100)
,`observacion` varchar(50)
,`precio_cliente` int(11)
,`fecha` date
,`id_cliente` int(11)
,`empleado` varchar(10)
,`abono` int(11)
,`SALDO_PENDIENTE` bigint(12)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `cssubtotalcompra`
--
CREATE TABLE IF NOT EXISTS `cssubtotalcompra` (
`numero_compra` int(11)
,`referencia` varchar(20)
,`cantidad` int(11)
,`valor` int(11)
,`SUBTOTAL` bigint(21)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `cstotalentradia`
--
CREATE TABLE IF NOT EXISTS `cstotalentradia` (
`fecha` date
,`VAL_POSITIVO` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `cstotalsaledia`
--
CREATE TABLE IF NOT EXISTS `cstotalsaledia` (
`fecha` date
,`VAL_NEGATIVO` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csuniondia`
--
CREATE TABLE IF NOT EXISTS `csuniondia` (
`fecha` date
,`VALORES` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csuniondiaentra`
--
CREATE TABLE IF NOT EXISTS `csuniondiaentra` (
`fecha` date
,`DIAENTRA` decimal(64,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csuniondiasale`
--
CREATE TABLE IF NOT EXISTS `csuniondiasale` (
`fecha` date
,`DIASALE` decimal(64,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csutilidadtotaldia`
--
CREATE TABLE IF NOT EXISTS `csutilidadtotaldia` (
`fecha` date
,`UTILIDADDIA` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csutilidadtotalmes`
--
CREATE TABLE IF NOT EXISTS `csutilidadtotalmes` (
`Mes` int(2)
,`Año` int(4)
,`UTILIDADTOTALMES` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csventa`
--
CREATE TABLE IF NOT EXISTS `csventa` (
`numero_venta` int(11)
,`fecha` date
,`idempleado` varchar(10)
,`empleado` varchar(50)
,`idcliente` int(11)
,`nombre` varchar(50)
,`detalle` varchar(10)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csventaproductos`
--
CREATE TABLE IF NOT EXISTS `csventaproductos` (
`numero_venta` int(11)
,`referencia` varchar(20)
,`nombre` varchar(40)
,`precio_venta` int(11)
,`cantidad` int(11)
,`SUBTOTAL` bigint(21)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csventatotal`
--
CREATE TABLE IF NOT EXISTS `csventatotal` (
`numero_venta` int(11)
,`fecha` date
,`SumaDeSUBTOTAL` decimal(42,0)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcliente`
--

CREATE TABLE IF NOT EXISTS `tbcliente` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `detalle` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbcliente`
--

INSERT INTO `tbcliente` (`idcliente`, `nombre`, `telefono`, `direccion`, `email`, `detalle`) VALUES
(1, 'Anonimo', '', '', '', 'No aplica'),
(2, 'pedro torres', '6469639', 'cra 10', 'pedro@gamil.com', 'Cliente'),
(3, 'alan brito', '3131666', 'calle 4', 'alan@gamil.com', 'Cliente'),
(4, 'gina gomez', '6334996', 'cra 8', 'gina@gamil.com', 'Cliente'),
(5, 'Chia1', '9445321', 'calle 3', 'chia1@gamil.com', 'Traspaso'),
(6, 'Diego', '', '', '', 'Cliente'),
(7, 'Leonardo', '8498468', 'cll 11', 'l@gmail.com', 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcompra`
--

CREATE TABLE IF NOT EXISTS `tbcompra` (
  `numero_compra` int(11) NOT NULL,
  `proveedor` varchar(12) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbcompra`
--

INSERT INTO `tbcompra` (`numero_compra`, `proveedor`, `fecha`) VALUES
(15, '001', '2015-05-08'),
(16, '002', '2015-05-28'),
(17, '001', '2015-06-24'),
(18, '002', '2015-06-24'),
(19, '002', '2015-07-14'),
(20, '002', '2016-03-10'),
(21, '003', '2016-03-09'),
(22, '004', '2016-03-09'),
(24, '004', '2016-03-16'),
(25, '003', '2016-04-05'),
(26, '001', '2016-04-06'),
(27, '002', '2016-04-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcompraxproducto`
--

CREATE TABLE IF NOT EXISTS `tbcompraxproducto` (
  `numero_compra` int(11) NOT NULL,
  `movimiento` int(11) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbcompraxproducto`
--

INSERT INTO `tbcompraxproducto` (`numero_compra`, `movimiento`, `valor`) VALUES
(15, 36, 180000),
(15, 37, 2000),
(15, 38, 190000),
(16, 39, 170000),
(16, 40, 2500),
(16, 41, 180000),
(16, 42, 200000),
(16, 43, 5000),
(16, 44, 9000),
(17, 45, 8000),
(17, 46, 4900),
(18, 47, 170000),
(18, 48, 180000),
(20, 63, 2400),
(21, 64, 200000),
(21, 65, 220000),
(24, 66, 9000),
(24, 67, 200000),
(24, 68, 6000),
(25, 75, 180000),
(26, 81, 170000),
(27, 87, 100000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbdevolucionirregular`
--

CREATE TABLE IF NOT EXISTS `tbdevolucionirregular` (
  `iddevolucion` int(11) NOT NULL,
  `movimiento` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `motivo` varchar(50) DEFAULT NULL,
  `numero_compra` int(11) NOT NULL,
  `costo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbdevolucionirregular`
--

INSERT INTO `tbdevolucionirregular` (`iddevolucion`, `movimiento`, `fecha`, `motivo`, `numero_compra`, `costo`) VALUES
(3, 59, '2015-07-01', 'no prenden', 15, 20000),
(4, 60, '0000-00-00', 'rayadas las pantallas', 16, 15000),
(5, 71, '2016-03-31', 'no funciona la pantalla', 17, 0),
(6, 72, '2016-04-06', 'no se sabe', 18, 180000),
(7, 73, '2016-04-07', 'klhljkj', 18, 170000),
(8, 75, '2016-04-07', 'roto', 18, 170000),
(9, 80, '2016-04-06', 'daÃ±ado', 18, 170500),
(10, 82, '2016-04-06', 'sssss', 18, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbempleado`
--

CREATE TABLE IF NOT EXISTS `tbempleado` (
  `idempleado` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `sueldo` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `telefono_emple` varchar(20) NOT NULL,
  `telefono_refe` varchar(20) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `estado` varchar(8) NOT NULL,
  `fecha_ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbempleado`
--

INSERT INTO `tbempleado` (`idempleado`, `nombre`, `sueldo`, `direccion`, `ciudad`, `telefono_emple`, `telefono_refe`, `email`, `estado`, `fecha_ingreso`) VALUES
('01', 'cristina rojas', 600000, 'cra4', 'Chia', '324324323', '45635245', 'cris@gamil', '', '0000-00-00'),
('02', 'sandra perez', 600000, 'cra5', 'Zipa', '453453453', '45646242', 'sand@gamil', '', '0000-00-00'),
('03', 'wilson diaz', 0, 'cra6', 'Cajica', '123123133', '23423444', 'wil@gamil', '', '0000-00-00'),
('10000000', 'aa', 100000, 'cra4', 'Chia', '12312312', '23234234', '', 'Activo', '0000-00-00'),
('1072888999', 'Francisco', 300000, 'cra 6', 'Chia', '100000', '55555', '55555', '', '0000-00-00'),
('123123123', 'bb', 0, 'cra3', 'chia', '12312312', '111111', '', 'Inactivo', '0000-00-00'),
('222222', 'ccc', 0, 'cra4', 'Chia', '111111', '666666', '', 'Inactivo', '0000-00-00'),
('333333', 'zzzz', 0, 'cra 1', 'chia', '590809', '21312312', '', 'Inactivo', '2015-08-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbminutos`
--

CREATE TABLE IF NOT EXISTS `tbminutos` (
  `idminutos` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `compra` int(11) NOT NULL,
  `venta` int(11) NOT NULL,
  `utilidad` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbminutos`
--

INSERT INTO `tbminutos` (`idminutos`, `fecha`, `cantidad`, `compra`, `venta`, `utilidad`) VALUES
(5, '2016-04-12', 30, 3000, 4500, 1500),
(6, '2016-04-12', 30, 7500, 10500, 3000),
(7, '2016-04-12', 15, 1500, 2250, 750),
(8, '2016-04-14', 210, 31500, 42000, 10500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbminutosvalor`
--

CREATE TABLE IF NOT EXISTS `tbminutosvalor` (
  `idminutosvalor` int(11) NOT NULL,
  `costo_compra` int(11) NOT NULL,
  `valor_venta` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbminutosvalor`
--

INSERT INTO `tbminutosvalor` (`idminutosvalor`, `costo_compra`, `valor_venta`) VALUES
(1, 150, 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbmovimiento`
--

CREATE TABLE IF NOT EXISTS `tbmovimiento` (
  `idmovimiento` int(11) NOT NULL,
  `motivo` varchar(30) NOT NULL,
  `referencia` varchar(20) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbmovimiento`
--

INSERT INTO `tbmovimiento` (`idmovimiento`, `motivo`, `referencia`, `cantidad`) VALUES
(36, 'Compra', 'a100', 6),
(37, 'Compra', 'b100', 4),
(38, 'Compra', 'c100', 8),
(39, 'Compra', 'a100', 3),
(40, 'Compra', 'b100', 3),
(41, 'Compra', 'c100', 3),
(42, 'Compra', 'a200', 6),
(43, 'Compra', 'b200', 7),
(44, 'Compra', 'c200', 5),
(45, 'Compra', 'c200', 7),
(46, 'Compra', 'b200', 3),
(47, 'Compra', 'a100', 2),
(48, 'Compra', 'c100', 3),
(49, 'Venta', 'a100', -1),
(50, 'Venta', 'c200', -3),
(51, 'Venta', 'b100', -1),
(52, 'Venta', 'b200', -2),
(54, 'Venta', 'a100', -2),
(55, 'Venta', 'a200', -1),
(56, 'Venta', 'c100', -2),
(57, 'Venta', 'c200', -2),
(58, 'Venta', 'c100', -3),
(59, 'Devolucion', 'a100', -4),
(60, 'Devolucion', 'c200', -2),
(61, 'VENTA', 'c100', -2),
(62, 'VENTA', 'b200', 2),
(63, 'Compra', 'b100', 6),
(64, 'Compra', 'c100', 2),
(65, 'Compra', 'a200', 2),
(66, 'Compra', 'a200', 1),
(67, 'Compra', 'c100', 1),
(68, 'Compra', 'b200', 2),
(71, 'DevoluciÃ³n', 'b100', -2),
(72, 'DevoluciÃ³n', 'c100', -1),
(73, 'DevoluciÃ³n', 'c100', -2),
(74, 'DevoluciÃ³n', 'c100', -4),
(75, 'Compra', 'c100', 2),
(76, 'DevoluciÃ³n', 'c100', -1),
(77, 'DevoluciÃ³n', 'b100', -2),
(78, 'DevoluciÃ³n', 'b100', -1),
(79, 'DevoluciÃ³n', 'b100', -1),
(80, 'DevoluciÃ³n', 'b100', -1),
(81, 'Compra', 'b100', 2),
(82, 'DevoluciÃ³n', 'b100', -1),
(83, 'Compra', 'b100', 2),
(84, 'Venta', 'b100', -1),
(85, 'Venta', 'b200', -2),
(87, 'Compra', 'b100', 2),
(88, 'Venta', 'b200', -2),
(89, 'Venta', 'a100', -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbotros`
--

CREATE TABLE IF NOT EXISTS `tbotros` (
  `idreporte` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `salida_total` int(11) NOT NULL,
  `entrada_total` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbotros`
--

INSERT INTO `tbotros` (`idreporte`, `fecha`, `descripcion`, `salida_total`, `entrada_total`) VALUES
(1, '2015-06-10', 'Cortada de Simcard', 0, 5000),
(2, '2015-06-30', 'Cortada de simcard', 0, 7000),
(3, '2015-07-01', 'apertura de bandas', 0, 12000),
(4, '2015-07-01', 'cortada de sim card', 0, 8000),
(5, '2015-06-10', 'apertura de bandas', 0, 15000),
(6, '2015-07-01', 'reparacion vitrina', 10000, 0),
(7, '2015-07-01', 'compra productos aseo', 21000, 0),
(8, '2015-08-11', ' compra de vidrio', 0, 11000),
(9, '2016-03-31', ' Reparacion de pc', 40000, 0),
(10, '2016-03-31', ' asasd', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbproducto`
--

CREATE TABLE IF NOT EXISTS `tbproducto` (
  `referencia` varchar(20) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbproducto`
--

INSERT INTO `tbproducto` (`referencia`, `nombre`, `marca`, `precio`) VALUES
('a100', 'Celular', 'xiaomi', 210000),
('a200', 'Tablet', 'Lenovo', 260000),
('b100', 'Auricular', 'Flixer', 3000),
('b200', 'Cable datos', 'Soni', 7000),
('c100', 'Celular', 'Nokia', 230000),
('c200', 'Tarjeta memoria', 'Wix', 12000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbproveedor`
--

CREATE TABLE IF NOT EXISTS `tbproveedor` (
  `idproveedor` varchar(12) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contacto` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) NOT NULL,
  `telefono2` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `descripcion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbproveedor`
--

INSERT INTO `tbproveedor` (`idproveedor`, `nombre`, `contacto`, `telefono`, `telefono2`, `email`, `descripcion`) VALUES
('001', 'chia1', 'empleado2', '9445321', '3209876543', 'Chia1@gmail.com', 'Proveedor'),
('002', 'telefonia ramos', 'Pedro Ramos', '8889999', '3109999999', 'lalo@gmail.com', 'Proveedor'),
('003', 'teleinsumos', 'Jaime Garzon', '6411699', '3245654645', 'telein@gmail.com', 'Proveedor'),
('004', 'Dario Sanchez', 'Dario Sanchez', '7567345', '3575678678', 'dario@gmail.com', 'Proveedor'),
('177646', 'Chia2', 'Empleado3', '888888', '43534543', 'chia222@gmail.com', 'Local');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbrecargas`
--

CREATE TABLE IF NOT EXISTS `tbrecargas` (
  `idrecargas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `venta_recarga` int(11) NOT NULL,
  `utilidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbreposicion`
--

CREATE TABLE IF NOT EXISTS `tbreposicion` (
  `idreposicion` int(11) NOT NULL,
  `movimiento` int(11) NOT NULL,
  `numero_compra` int(11) NOT NULL,
  `fecha` date NOT NULL COMMENT 'fecha en la cual se hizo la reposiciòn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbservicioentregado`
--

CREATE TABLE IF NOT EXISTS `tbservicioentregado` (
  `numero_orden` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `saldo_cancel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbservicioentregado`
--

INSERT INTO `tbservicioentregado` (`numero_orden`, `fecha`, `saldo_cancel`) VALUES
(1, '2015-06-12', 20000),
(2, '2015-06-28', 0),
(3, '2015-07-02', 16000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbserviciotecnico`
--

CREATE TABLE IF NOT EXISTS `tbserviciotecnico` (
  `numero_orden` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `referencia` varchar(20) NOT NULL,
  `descripcion_st` varchar(100) NOT NULL,
  `observacion` varchar(50) DEFAULT NULL,
  `costo_st` int(11) NOT NULL,
  `precio_cliente` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `empleado` varchar(10) NOT NULL,
  `abono` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbserviciotecnico`
--

INSERT INTO `tbserviciotecnico` (`numero_orden`, `nombre`, `marca`, `referencia`, `descripcion_st`, `observacion`, `costo_st`, `precio_cliente`, `fecha`, `id_cliente`, `empleado`, `abono`) VALUES
(1, 'Celular', 'Nokia', 'z400', 'arrreglo del display', 'viene con pijama azul', 30000, 40000, '2015-06-10', 1, '01', 20000),
(2, 'Tablet', 'Lanix', 'c20-23', 'puerto', 'forro', 10000, 15000, '2015-06-27', 2, '02', 15000),
(3, 'Portatil', 'toshiba', 'C85d', 'teclado da', 'traia caragador', 20000, 28000, '2015-07-01', 1, '01', 12000),
(4, 'celular', 'nokia', 'a600', 'apertura de bandas', '', 10000, 12000, '2015-07-01', 2, '01', 12000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuario`
--

CREATE TABLE IF NOT EXISTS `tbusuario` (
  `idusuario` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbventa`
--

CREATE TABLE IF NOT EXISTS `tbventa` (
  `numero_venta` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idempleado` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbventa`
--

INSERT INTO `tbventa` (`numero_venta`, `idcliente`, `fecha`, `idempleado`) VALUES
(10, 1, '2015-05-12', '01'),
(11, 3, '2015-06-24', '02'),
(12, 4, '2015-07-01', '03'),
(13, 1, '2015-07-01', '03'),
(14, 1, '2015-06-28', '02'),
(15, 3, '2015-07-30', '02'),
(16, 3, '2015-08-01', '02'),
(17, 3, '2016-04-06', '03'),
(18, 1, '2016-04-07', '02'),
(19, 1, '2016-04-14', '02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbventaxproducto`
--

CREATE TABLE IF NOT EXISTS `tbventaxproducto` (
  `numero_venta` int(11) NOT NULL,
  `movimiento` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbventaxproducto`
--

INSERT INTO `tbventaxproducto` (`numero_venta`, `movimiento`, `precio_venta`) VALUES
(10, 49, 200000),
(10, 50, 12000),
(11, 51, 3000),
(11, 52, 7000),
(12, 54, 200000),
(12, 55, 260000),
(13, 56, 230000),
(13, 57, 12000),
(14, 58, 230000),
(15, 61, 250000),
(16, 62, 5000),
(18, 84, 3000),
(18, 85, 100000),
(19, 88, 2000),
(19, 89, 100000);

-- --------------------------------------------------------

--
-- Estructura para la vista `cscompra`
--
DROP TABLE IF EXISTS `cscompra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cscompra` AS select `tbcompra`.`numero_compra` AS `numero_compra`,`tbcompra`.`fecha` AS `fecha`,`tbcompra`.`proveedor` AS `proveedor`,`tbproveedor`.`nombre` AS `nombre`,`tbproveedor`.`descripcion` AS `descripcion`,`tbproveedor`.`telefono` AS `telefono` from (`tbproveedor` join `tbcompra` on((`tbproveedor`.`idproveedor` = `tbcompra`.`proveedor`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `cscompraproductos`
--
DROP TABLE IF EXISTS `cscompraproductos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cscompraproductos` AS select `tbcompra`.`numero_compra` AS `numero_compra`,`tbmovimiento`.`referencia` AS `referencia`,`tbproducto`.`nombre` AS `nombre`,`tbcompraxproducto`.`valor` AS `valor`,`tbmovimiento`.`cantidad` AS `cantidad`,`cssubtotalcompra`.`SUBTOTAL` AS `SUBTOTAL`,`tbmovimiento`.`idmovimiento` AS `idmovimiento` from (`tbmovimiento` join (((`tbproducto` join `cssubtotalcompra` on((`tbproducto`.`referencia` = `cssubtotalcompra`.`referencia`))) join `tbcompra` on((`cssubtotalcompra`.`numero_compra` = `tbcompra`.`numero_compra`))) join `tbcompraxproducto` on((`tbcompra`.`numero_compra` = `tbcompraxproducto`.`numero_compra`))) on(((`tbmovimiento`.`idmovimiento` = `tbcompraxproducto`.`movimiento`) and (`tbproducto`.`referencia` = `tbmovimiento`.`referencia`)))) group by `tbcompra`.`numero_compra`,`tbmovimiento`.`referencia`,`tbproducto`.`nombre`,`tbcompraxproducto`.`valor`,`tbmovimiento`.`cantidad`,`cssubtotalcompra`.`SUBTOTAL`,`tbmovimiento`.`idmovimiento`;

-- --------------------------------------------------------

--
-- Estructura para la vista `cscompratotal`
--
DROP TABLE IF EXISTS `cscompratotal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cscompratotal` AS select `cscompraproductos`.`numero_compra` AS `numero_compra`,`tbcompra`.`fecha` AS `fecha`,sum(`cscompraproductos`.`SUBTOTAL`) AS `SumaDeSUBTOTAL` from (`tbcompra` join `cscompraproductos` on((`tbcompra`.`numero_compra` = `cscompraproductos`.`numero_compra`))) group by `cscompraproductos`.`numero_compra`,`tbcompra`.`fecha`;

-- --------------------------------------------------------

--
-- Estructura para la vista `csdevolucion`
--
DROP TABLE IF EXISTS `csdevolucion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csdevolucion` AS select `tbdevolucionirregular`.`iddevolucion` AS `iddevolucion`,`tbmovimiento`.`referencia` AS `referencia`,`tbdevolucionirregular`.`fecha` AS `fecha`,`tbdevolucionirregular`.`motivo` AS `motivo`,`tbdevolucionirregular`.`numero_compra` AS `numero_compra`,`tbcompra`.`fecha` AS `fecha_compra`,`tbmovimiento`.`cantidad` AS `cantidad`,`tbdevolucionirregular`.`costo` AS `costo`,(`tbdevolucionirregular`.`costo` * `tbmovimiento`.`cantidad`) AS `TOTAL_DEVOLUCION` from ((`tbmovimiento` join `tbdevolucionirregular` on((`tbmovimiento`.`idmovimiento` = `tbdevolucionirregular`.`movimiento`))) join `tbcompra` on((`tbdevolucionirregular`.`numero_compra` = `tbcompra`.`numero_compra`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `csdiatotalcompra`
--
DROP TABLE IF EXISTS `csdiatotalcompra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csdiatotalcompra` AS select `cscompratotal`.`fecha` AS `fecha`,sum(`cscompratotal`.`SumaDeSUBTOTAL`) AS `TOTALCOMPRADIA` from `cscompratotal` group by `cscompratotal`.`fecha`;

-- --------------------------------------------------------

--
-- Estructura para la vista `csdiatotaldevo`
--
DROP TABLE IF EXISTS `csdiatotaldevo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csdiatotaldevo` AS select `tbdevolucionirregular`.`fecha` AS `fecha`,sum(`tbdevolucionirregular`.`costo`) AS `SumaDecosto` from `tbdevolucionirregular` group by `tbdevolucionirregular`.`fecha`;

-- --------------------------------------------------------

--
-- Estructura para la vista `csdiatotalotros`
--
DROP TABLE IF EXISTS `csdiatotalotros`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csdiatotalotros` AS select `tbotros`.`fecha` AS `fecha`,sum(`tbotros`.`salida_total`) AS `SumaDesalida_total`,sum(`tbotros`.`entrada_total`) AS `SumaDeentrada_total` from `tbotros` group by `tbotros`.`fecha`;

-- --------------------------------------------------------

--
-- Estructura para la vista `csdiatotalst`
--
DROP TABLE IF EXISTS `csdiatotalst`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csdiatotalst` AS select `tbserviciotecnico`.`fecha` AS `fecha`,`tbserviciotecnico`.`costo_st` AS `costo_st`,`tbserviciotecnico`.`abono` AS `abono` from `tbserviciotecnico` group by `tbserviciotecnico`.`fecha`,`tbserviciotecnico`.`costo_st`,`tbserviciotecnico`.`abono`;

-- --------------------------------------------------------

--
-- Estructura para la vista `csdiatotalstentreg`
--
DROP TABLE IF EXISTS `csdiatotalstentreg`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csdiatotalstentreg` AS select `tbservicioentregado`.`fecha` AS `fecha`,sum(`tbservicioentregado`.`saldo_cancel`) AS `SumaDesaldo_cancel` from `tbservicioentregado` group by `tbservicioentregado`.`fecha`;

-- --------------------------------------------------------

--
-- Estructura para la vista `csdiatotalventas`
--
DROP TABLE IF EXISTS `csdiatotalventas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csdiatotalventas` AS select `csventatotal`.`fecha` AS `fecha`,sum(`csventatotal`.`SumaDeSUBTOTAL`) AS `TOTALVENTADIA` from `csventatotal` group by `csventatotal`.`fecha`;

-- --------------------------------------------------------

--
-- Estructura para la vista `csexistencia`
--
DROP TABLE IF EXISTS `csexistencia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csexistencia` AS select `tbproducto`.`referencia` AS `referencia`,`tbproducto`.`nombre` AS `nombre`,`tbproducto`.`marca` AS `marca`,sum(`tbmovimiento`.`cantidad`) AS `SumaDecantidad`,`tbproducto`.`precio` AS `precio` from (`tbproducto` join `tbmovimiento` on((`tbproducto`.`referencia` = `tbmovimiento`.`referencia`))) group by `tbproducto`.`referencia`,`tbproducto`.`nombre`,`tbproducto`.`marca`,`tbproducto`.`precio`;

-- --------------------------------------------------------

--
-- Estructura para la vista `csmestotalentra`
--
DROP TABLE IF EXISTS `csmestotalentra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csmestotalentra` AS select month(`cstotalentradia`.`fecha`) AS `Mes`,year(`cstotalentradia`.`fecha`) AS `Año`,sum(`cstotalentradia`.`VAL_POSITIVO`) AS `TOTALMESENTRA` from `cstotalentradia` group by month(`cstotalentradia`.`fecha`),year(`cstotalentradia`.`fecha`);

-- --------------------------------------------------------

--
-- Estructura para la vista `csmestotalotros`
--
DROP TABLE IF EXISTS `csmestotalotros`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csmestotalotros` AS select month(`csdiatotalotros`.`fecha`) AS `Mes`,year(`csdiatotalotros`.`fecha`) AS `Año`,sum(`csdiatotalotros`.`SumaDesalida_total`) AS `MESTOTALSALIDA`,sum(`csdiatotalotros`.`SumaDeentrada_total`) AS `MESTOTALENTRA` from `csdiatotalotros` group by month(`csdiatotalotros`.`fecha`),year(`csdiatotalotros`.`fecha`);

-- --------------------------------------------------------

--
-- Estructura para la vista `csmestotalsale`
--
DROP TABLE IF EXISTS `csmestotalsale`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csmestotalsale` AS select month(`cstotalsaledia`.`fecha`) AS `Mes`,year(`cstotalsaledia`.`fecha`) AS `Año`,sum(`cstotalsaledia`.`VAL_NEGATIVO`) AS `TOTALMESSALE` from `cstotalsaledia` group by month(`cstotalsaledia`.`fecha`),year(`cstotalsaledia`.`fecha`);

-- --------------------------------------------------------

--
-- Estructura para la vista `csmestotalst`
--
DROP TABLE IF EXISTS `csmestotalst`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csmestotalst` AS select month(`csdiatotalst`.`fecha`) AS `Mes`,year(`csdiatotalst`.`fecha`) AS `Año`,sum(`csdiatotalst`.`costo_st`) AS `SumaDecosto_st`,sum(`csdiatotalst`.`abono`) AS `SumaDeabono` from `csdiatotalst` group by month(`csdiatotalst`.`fecha`),year(`csdiatotalst`.`fecha`);

-- --------------------------------------------------------

--
-- Estructura para la vista `csmestotalstentreg`
--
DROP TABLE IF EXISTS `csmestotalstentreg`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csmestotalstentreg` AS select month(`csdiatotalstentreg`.`fecha`) AS `Mes`,year(`csdiatotalstentreg`.`fecha`) AS `Año`,sum(`csdiatotalstentreg`.`SumaDesaldo_cancel`) AS `TOTALSALDOCANCEL` from `csdiatotalstentreg` group by month(`csdiatotalstentreg`.`fecha`),year(`csdiatotalstentreg`.`fecha`);

-- --------------------------------------------------------

--
-- Estructura para la vista `csmestotalventas`
--
DROP TABLE IF EXISTS `csmestotalventas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csmestotalventas` AS select month(`csdiatotalventas`.`fecha`) AS `Mes`,year(`csdiatotalventas`.`fecha`) AS `Año`,sum(`csdiatotalventas`.`TOTALVENTADIA`) AS `TOTALMESVENTAS` from `csdiatotalventas` group by month(`csdiatotalventas`.`fecha`),year(`csdiatotalventas`.`fecha`);

-- --------------------------------------------------------

--
-- Estructura para la vista `csst`
--
DROP TABLE IF EXISTS `csst`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csst` AS select `tbserviciotecnico`.`numero_orden` AS `numero_orden`,`tbserviciotecnico`.`nombre` AS `nombre`,`tbserviciotecnico`.`marca` AS `marca`,`tbserviciotecnico`.`referencia` AS `referencia`,`tbserviciotecnico`.`descripcion_st` AS `descripcion_st`,`tbserviciotecnico`.`observacion` AS `observacion`,`tbserviciotecnico`.`precio_cliente` AS `precio_cliente`,`tbserviciotecnico`.`fecha` AS `fecha`,`tbserviciotecnico`.`id_cliente` AS `id_cliente`,`tbserviciotecnico`.`empleado` AS `empleado`,`tbserviciotecnico`.`abono` AS `abono`,(`tbserviciotecnico`.`precio_cliente` - `tbserviciotecnico`.`abono`) AS `SALDO_PENDIENTE` from `tbserviciotecnico`;

-- --------------------------------------------------------

--
-- Estructura para la vista `cssubtotalcompra`
--
DROP TABLE IF EXISTS `cssubtotalcompra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cssubtotalcompra` AS select `tbcompra`.`numero_compra` AS `numero_compra`,`tbmovimiento`.`referencia` AS `referencia`,`tbmovimiento`.`cantidad` AS `cantidad`,`tbcompraxproducto`.`valor` AS `valor`,(`tbcompraxproducto`.`valor` * `tbmovimiento`.`cantidad`) AS `SUBTOTAL` from (`tbmovimiento` join (`tbcompra` join `tbcompraxproducto` on((`tbcompra`.`numero_compra` = `tbcompraxproducto`.`numero_compra`))) on((`tbmovimiento`.`idmovimiento` = `tbcompraxproducto`.`movimiento`))) group by `tbcompra`.`numero_compra`,`tbmovimiento`.`referencia`,`tbmovimiento`.`cantidad`,`tbcompraxproducto`.`valor`,(`tbcompraxproducto`.`valor` * `tbmovimiento`.`cantidad`);

-- --------------------------------------------------------

--
-- Estructura para la vista `cstotalentradia`
--
DROP TABLE IF EXISTS `cstotalentradia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cstotalentradia` AS select `csuniondiaentra`.`fecha` AS `fecha`,sum(`csuniondiaentra`.`DIAENTRA`) AS `VAL_POSITIVO` from `csuniondiaentra` group by `csuniondiaentra`.`fecha`;

-- --------------------------------------------------------

--
-- Estructura para la vista `cstotalsaledia`
--
DROP TABLE IF EXISTS `cstotalsaledia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cstotalsaledia` AS select `csuniondiasale`.`fecha` AS `fecha`,sum((`csuniondiasale`.`DIASALE` * -(1))) AS `VAL_NEGATIVO` from `csuniondiasale` group by `csuniondiasale`.`fecha`;

-- --------------------------------------------------------

--
-- Estructura para la vista `csuniondia`
--
DROP TABLE IF EXISTS `csuniondia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csuniondia` AS select `csuniondiaentra`.`fecha` AS `fecha`,sum(`csuniondiaentra`.`DIAENTRA`) AS `VALORES` from `csuniondiaentra` group by `csuniondiaentra`.`fecha` union all select `csuniondiasale`.`fecha` AS `fecha`,sum((`csuniondiasale`.`DIASALE` * -(1))) AS `VAL_NEGATIVO` from `csuniondiasale` group by `csuniondiasale`.`fecha` order by `fecha` desc;

-- --------------------------------------------------------

--
-- Estructura para la vista `csuniondiaentra`
--
DROP TABLE IF EXISTS `csuniondiaentra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csuniondiaentra` AS select `tbotros`.`fecha` AS `fecha`,sum(`tbotros`.`entrada_total`) AS `DIAENTRA` from `tbotros` group by `tbotros`.`fecha` union all select `tbserviciotecnico`.`fecha` AS `fecha`,sum(`tbserviciotecnico`.`abono`) AS `SumaDeabono` from `tbserviciotecnico` group by `tbserviciotecnico`.`fecha` union all select `tbservicioentregado`.`fecha` AS `fecha`,sum(`tbservicioentregado`.`saldo_cancel`) AS `SumaDesaldo_cancel` from `tbservicioentregado` group by `tbservicioentregado`.`fecha` union all select `csventatotal`.`fecha` AS `fecha`,sum(`csventatotal`.`SumaDeSUBTOTAL`) AS `SumaDeSumaDeSUBTOTAL` from `csventatotal` group by `csventatotal`.`fecha` order by `fecha` desc;

-- --------------------------------------------------------

--
-- Estructura para la vista `csuniondiasale`
--
DROP TABLE IF EXISTS `csuniondiasale`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csuniondiasale` AS select `cscompratotal`.`fecha` AS `fecha`,sum(`cscompratotal`.`SumaDeSUBTOTAL`) AS `DIASALE` from `cscompratotal` group by `cscompratotal`.`fecha` union all select `csdevolucion`.`fecha` AS `fecha`,sum(`csdevolucion`.`TOTAL_DEVOLUCION`) AS `SumaDeTOTAL_DEVOLUCION` from `csdevolucion` group by `csdevolucion`.`fecha` union all select `tbotros`.`fecha` AS `fecha`,sum(`tbotros`.`salida_total`) AS `SumaDesalida_total` from `tbotros` group by `tbotros`.`fecha` union all select `csst`.`fecha` AS `fecha`,sum(`tbserviciotecnico`.`costo_st`) AS `SumaDecosto_st` from (`csst` join `tbserviciotecnico` on((`csst`.`numero_orden` = `tbserviciotecnico`.`numero_orden`))) group by `csst`.`fecha`;

-- --------------------------------------------------------

--
-- Estructura para la vista `csutilidadtotaldia`
--
DROP TABLE IF EXISTS `csutilidadtotaldia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csutilidadtotaldia` AS select `csuniondia`.`fecha` AS `fecha`,sum(`csuniondia`.`VALORES`) AS `UTILIDADDIA` from `csuniondia` group by `csuniondia`.`fecha`;

-- --------------------------------------------------------

--
-- Estructura para la vista `csutilidadtotalmes`
--
DROP TABLE IF EXISTS `csutilidadtotalmes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csutilidadtotalmes` AS select month(`csutilidadtotaldia`.`fecha`) AS `Mes`,year(`csutilidadtotaldia`.`fecha`) AS `Año`,sum(`csutilidadtotaldia`.`UTILIDADDIA`) AS `UTILIDADTOTALMES` from `csutilidadtotaldia` group by month(`csutilidadtotaldia`.`fecha`),year(`csutilidadtotaldia`.`fecha`);

-- --------------------------------------------------------

--
-- Estructura para la vista `csventa`
--
DROP TABLE IF EXISTS `csventa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csventa` AS select `tbventa`.`numero_venta` AS `numero_venta`,`tbventa`.`fecha` AS `fecha`,`tbventa`.`idempleado` AS `idempleado`,`tbempleado`.`nombre` AS `empleado`,`tbventa`.`idcliente` AS `idcliente`,`tbcliente`.`nombre` AS `nombre`,`tbcliente`.`detalle` AS `detalle` from (`tbempleado` join (`tbcliente` join `tbventa` on((`tbcliente`.`idcliente` = `tbventa`.`idcliente`))) on((`tbempleado`.`idempleado` = `tbventa`.`idempleado`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `csventaproductos`
--
DROP TABLE IF EXISTS `csventaproductos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csventaproductos` AS select `tbventaxproducto`.`numero_venta` AS `numero_venta`,`tbmovimiento`.`referencia` AS `referencia`,`tbproducto`.`nombre` AS `nombre`,`tbventaxproducto`.`precio_venta` AS `precio_venta`,`tbmovimiento`.`cantidad` AS `cantidad`,(`tbventaxproducto`.`precio_venta` * -(`tbmovimiento`.`cantidad`)) AS `SUBTOTAL` from (`tbproducto` join (`tbmovimiento` join `tbventaxproducto` on((`tbmovimiento`.`idmovimiento` = `tbventaxproducto`.`movimiento`))) on((`tbproducto`.`referencia` = `tbmovimiento`.`referencia`))) order by `tbventaxproducto`.`numero_venta`;

-- --------------------------------------------------------

--
-- Estructura para la vista `csventatotal`
--
DROP TABLE IF EXISTS `csventatotal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csventatotal` AS select `csventaproductos`.`numero_venta` AS `numero_venta`,`tbventa`.`fecha` AS `fecha`,sum(`csventaproductos`.`SUBTOTAL`) AS `SumaDeSUBTOTAL` from (`tbventa` join `csventaproductos` on((`tbventa`.`numero_venta` = `csventaproductos`.`numero_venta`))) group by `csventaproductos`.`numero_venta`,`tbventa`.`fecha`;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `tbcompra`
--
ALTER TABLE `tbcompra`
  ADD PRIMARY KEY (`numero_compra`), ADD KEY `proveedor` (`proveedor`);

--
-- Indices de la tabla `tbcompraxproducto`
--
ALTER TABLE `tbcompraxproducto`
  ADD PRIMARY KEY (`numero_compra`,`movimiento`), ADD KEY `movimiento` (`movimiento`);

--
-- Indices de la tabla `tbdevolucionirregular`
--
ALTER TABLE `tbdevolucionirregular`
  ADD PRIMARY KEY (`iddevolucion`), ADD KEY `movimiento` (`movimiento`,`numero_compra`);

--
-- Indices de la tabla `tbempleado`
--
ALTER TABLE `tbempleado`
  ADD PRIMARY KEY (`idempleado`);

--
-- Indices de la tabla `tbminutos`
--
ALTER TABLE `tbminutos`
  ADD PRIMARY KEY (`idminutos`);

--
-- Indices de la tabla `tbminutosvalor`
--
ALTER TABLE `tbminutosvalor`
  ADD PRIMARY KEY (`idminutosvalor`);

--
-- Indices de la tabla `tbmovimiento`
--
ALTER TABLE `tbmovimiento`
  ADD PRIMARY KEY (`idmovimiento`), ADD KEY `referencia` (`referencia`);

--
-- Indices de la tabla `tbotros`
--
ALTER TABLE `tbotros`
  ADD PRIMARY KEY (`idreporte`);

--
-- Indices de la tabla `tbproducto`
--
ALTER TABLE `tbproducto`
  ADD PRIMARY KEY (`referencia`);

--
-- Indices de la tabla `tbproveedor`
--
ALTER TABLE `tbproveedor`
  ADD PRIMARY KEY (`idproveedor`);

--
-- Indices de la tabla `tbrecargas`
--
ALTER TABLE `tbrecargas`
  ADD PRIMARY KEY (`idrecargas`);

--
-- Indices de la tabla `tbreposicion`
--
ALTER TABLE `tbreposicion`
  ADD PRIMARY KEY (`idreposicion`), ADD KEY `movimiento` (`movimiento`);

--
-- Indices de la tabla `tbservicioentregado`
--
ALTER TABLE `tbservicioentregado`
  ADD PRIMARY KEY (`numero_orden`);

--
-- Indices de la tabla `tbserviciotecnico`
--
ALTER TABLE `tbserviciotecnico`
  ADD PRIMARY KEY (`numero_orden`), ADD KEY `nombre` (`nombre`), ADD KEY `id_cliente` (`id_cliente`), ADD KEY `empleado` (`empleado`);

--
-- Indices de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `tbventa`
--
ALTER TABLE `tbventa`
  ADD PRIMARY KEY (`numero_venta`), ADD KEY `idempleado` (`idempleado`,`idcliente`), ADD KEY `idcliente` (`idcliente`);

--
-- Indices de la tabla `tbventaxproducto`
--
ALTER TABLE `tbventaxproducto`
  ADD PRIMARY KEY (`numero_venta`,`movimiento`), ADD KEY `movimiento` (`movimiento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tbcompra`
--
ALTER TABLE `tbcompra`
  MODIFY `numero_compra` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `tbdevolucionirregular`
--
ALTER TABLE `tbdevolucionirregular`
  MODIFY `iddevolucion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tbminutos`
--
ALTER TABLE `tbminutos`
  MODIFY `idminutos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tbminutosvalor`
--
ALTER TABLE `tbminutosvalor`
  MODIFY `idminutosvalor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbmovimiento`
--
ALTER TABLE `tbmovimiento`
  MODIFY `idmovimiento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT de la tabla `tbotros`
--
ALTER TABLE `tbotros`
  MODIFY `idreporte` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tbrecargas`
--
ALTER TABLE `tbrecargas`
  MODIFY `idrecargas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbreposicion`
--
ALTER TABLE `tbreposicion`
  MODIFY `idreposicion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbserviciotecnico`
--
ALTER TABLE `tbserviciotecnico`
  MODIFY `numero_orden` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbventa`
--
ALTER TABLE `tbventa`
  MODIFY `numero_venta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbcompra`
--
ALTER TABLE `tbcompra`
ADD CONSTRAINT `tbcompra_ibfk_1` FOREIGN KEY (`proveedor`) REFERENCES `tbproveedor` (`idproveedor`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbcompraxproducto`
--
ALTER TABLE `tbcompraxproducto`
ADD CONSTRAINT `tbcompraxproducto_ibfk_1` FOREIGN KEY (`numero_compra`) REFERENCES `tbcompra` (`numero_compra`) ON UPDATE CASCADE,
ADD CONSTRAINT `tbcompraxproducto_ibfk_2` FOREIGN KEY (`movimiento`) REFERENCES `tbmovimiento` (`idmovimiento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbdevolucionirregular`
--
ALTER TABLE `tbdevolucionirregular`
ADD CONSTRAINT `tbdevolucionirregular_ibfk_1` FOREIGN KEY (`movimiento`) REFERENCES `tbmovimiento` (`idmovimiento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbmovimiento`
--
ALTER TABLE `tbmovimiento`
ADD CONSTRAINT `tbmovimiento_ibfk_1` FOREIGN KEY (`referencia`) REFERENCES `tbproducto` (`referencia`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbreposicion`
--
ALTER TABLE `tbreposicion`
ADD CONSTRAINT `tbreposicion_ibfk_1` FOREIGN KEY (`movimiento`) REFERENCES `tbmovimiento` (`idmovimiento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbservicioentregado`
--
ALTER TABLE `tbservicioentregado`
ADD CONSTRAINT `tbservicioentregado_ibfk_1` FOREIGN KEY (`numero_orden`) REFERENCES `tbserviciotecnico` (`numero_orden`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbserviciotecnico`
--
ALTER TABLE `tbserviciotecnico`
ADD CONSTRAINT `tbserviciotecnico_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tbcliente` (`idcliente`) ON UPDATE CASCADE,
ADD CONSTRAINT `tbserviciotecnico_ibfk_2` FOREIGN KEY (`empleado`) REFERENCES `tbempleado` (`idempleado`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbventa`
--
ALTER TABLE `tbventa`
ADD CONSTRAINT `tbventa_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `tbcliente` (`idcliente`) ON UPDATE CASCADE,
ADD CONSTRAINT `tbventa_ibfk_2` FOREIGN KEY (`idempleado`) REFERENCES `tbempleado` (`idempleado`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbventaxproducto`
--
ALTER TABLE `tbventaxproducto`
ADD CONSTRAINT `tbventaxproducto_ibfk_1` FOREIGN KEY (`numero_venta`) REFERENCES `tbventa` (`numero_venta`) ON UPDATE CASCADE,
ADD CONSTRAINT `tbventaxproducto_ibfk_2` FOREIGN KEY (`movimiento`) REFERENCES `tbmovimiento` (`idmovimiento`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
