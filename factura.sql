-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2022 a las 06:35:56
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `factura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `inNombre` varchar(50) DEFAULT NULL,
  `inEmail` varchar(150) DEFAULT NULL,
  `inContacto` varchar(50) DEFAULT NULL,
  `inMensaje` varchar(200) DEFAULT NULL,
  `slSolicitud` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`inNombre`, `inEmail`, `inContacto`, `inMensaje`, `slSolicitud`) VALUES
('Maria', NULL, NULL, NULL, NULL),
('Cesilia', NULL, NULL, NULL, NULL),
('Libardo', NULL, NULL, NULL, NULL),
('Martha', NULL, NULL, NULL, NULL),
('Pedro', NULL, NULL, NULL, NULL),
('ggdgdfg', 'tefy@gmail', '316', 'nnvb', NULL),
('gustavo', 'gustavo@hotmail.com', '225', ' el precio poker ', NULL),
('HENRY', 'hepeco1009@hotmail.com', '316', 'prueba', NULL),
('HENRY', 'hepeco1009@hotmail.com', '316', 'prueba de ingreso', NULL),
('HENRY', 'hepeco1009@hotmail.com', '316', 'prueba', NULL),
('HENRY', 'hepeco1009@hotmail.com', '316', 'prueba', NULL),
('HENRY', 'hpenuelac@gmail.com', '316', 'prueba', 'Precios'),
('teffy', 'hepeco1009@hotmail.com', '225', 'prueba asdfa', 'Factura'),
('gustavo', 'hepeco1009@hotmail.com', '225', 'prueba', 'Factura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `EmpNombre` varchar(50) DEFAULT NULL,
  `EmpIdentificacion` int(30) NOT NULL,
  `EmplCargo` varchar(20) DEFAULT NULL,
  `EmpSalario` int(50) DEFAULT NULL,
  `EmpTelefono` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`EmpNombre`, `EmpIdentificacion`, `EmplCargo`, `EmpSalario`, `EmpTelefono`) VALUES
('Luz Dary Gutierrez', 8012354, 'Jefe de nomina', 1800000, 7854125),
('Cesa augusto arias ', 75214523, 'Bodeguero', 1010000, 7458536),
('Oscar Leonardo Villalba Lopez', 1012441406, 'Repartidor', 1085000, 3042523),
('Julia rincon icasa', 1013254258, 'Vendedora', 1500000, 4521256),
('Masiel Andrea Pedreros ', 1233693235, 'Representante Legal', 3500000, 3045856);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `FacNumerodefactura` int(70) DEFAULT NULL,
  `FacIdentificacion` int(30) NOT NULL,
  `FactNumerodepago` int(40) DEFAULT NULL,
  `FactCantidad` int(40) DEFAULT NULL,
  `FactGanancia` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`FacNumerodefactura`, `FacIdentificacion`, `FactNumerodepago`, `FactCantidad`, `FactGanancia`) VALUES
(2569, 852135, 12345635, 110, 350),
(2541, 8025412, 12345612, 40, 55),
(785, 10212453, 12345653, 95, 150),
(2145, 10254888, 12345688, 85, 110),
(1235, 101526325, 12345625, 20, 48);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prodcuto`
--

CREATE TABLE `prodcuto` (
  `ProCodigo` int(20) NOT NULL,
  `ProDescripcion` varchar(70) DEFAULT NULL,
  `ProProveedor` varchar(30) DEFAULT NULL,
  `ProPreciocliente` int(30) DEFAULT NULL,
  `ProPreciodeventa` int(30) DEFAULT NULL,
  `Procantidadenbodega` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prodcuto`
--

INSERT INTO `prodcuto` (`ProCodigo`, `ProDescripcion`, `ProProveedor`, `ProPreciocliente`, `ProPreciodeventa`, `Procantidadenbodega`) VALUES
(25479, 'Gaseosa PACA DE 6 UNIDADES 1.5L', 'Bavaria', 25000, 38000, 15),
(45698, 'Nectar 1L', 'Licores sas', 28000, 45000, 30),
(123654, 'Ron 1L', 'Licores sas', 58000, 72000, 90),
(123665, 'Cerveza PETACO', 'Bavaria', 35000, 47000, 50),
(254789, 'Whisky 1L', 'Distribuccion el mejor whisky', 90000, 110000, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `ProCodigo` int(30) NOT NULL,
  `ProNombre` varchar(30) DEFAULT NULL,
  `ProTelefono` varchar(20) DEFAULT NULL,
  `ProEmail` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`ProCodigo`, `ProNombre`, `ProTelefono`, `ProEmail`) VALUES
(80025236, 'Licores sas', '7858222', 'licoressas@gmail.com'),
(80025428, 'Distribuccion el mejor whisky', '4452525', 'Bavaria@gmail.com'),
(90025256, 'Bavaria', '4405852', 'Barvaria123@gmail.com'),
(123456789, 'StikeBmx', '104', 'prueba@prueba.com'),
(1013599987, 'StikeBmx', '3162671645', 'prueba@prueba.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `inUsuario` varchar(20) DEFAULT NULL,
  `inPassword` varchar(20) DEFAULT NULL,
  `inRol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`inUsuario`, `inPassword`, `inRol`) VALUES
('Henry', '123456', 'Administrador'),
('Stefy', '1234567', 'Empleado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`EmpIdentificacion`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`FacIdentificacion`);

--
-- Indices de la tabla `prodcuto`
--
ALTER TABLE `prodcuto`
  ADD PRIMARY KEY (`ProCodigo`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`ProCodigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
