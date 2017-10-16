-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2017 at 08:20 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `presidencia`
--

-- --------------------------------------------------------

--
-- Table structure for table `control_presupuesto`
--

CREATE TABLE IF NOT EXISTS `control_presupuesto` (
  `id_orden` int(8) NOT NULL,
  `id_departamento` varchar(8) DEFAULT NULL,
  `monto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cuentas`
--

CREATE TABLE IF NOT EXISTS `cuentas` (
  `id_cuenta` int(8) NOT NULL,
  `cuenta` varchar(20) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `cantidad` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cuentas`
--

INSERT INTO `cuentas` (`id_cuenta`, `cuenta`, `nombre`, `cantidad`) VALUES
(1, '1-2-4-0-000-0000-000', 'CUENTA11', '1000000.00'),
(2, '1-2-4-1-000-0000-000', 'CUENTA 2', '1000000.00');

-- --------------------------------------------------------

--
-- Table structure for table `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `id_departamento` int(8) NOT NULL,
  `departamento` char(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departamentos`
--

INSERT INTO `departamentos` (`id_departamento`, `departamento`) VALUES
(1, 'OFICIALIA MAYOR'),
(2, 'CATASTRO'),
(3, 'SINDICATURA'),
(4, 'NUEVO DEPA'),
(5, 'SINDICATURA');

-- --------------------------------------------------------

--
-- Table structure for table `obras`
--

CREATE TABLE IF NOT EXISTS `obras` (
  `id_obra` int(8) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `id_cuenta` varchar(8) NOT NULL,
  `costo` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `obras`
--

INSERT INTO `obras` (`id_obra`, `descripcion`, `id_cuenta`, `costo`) VALUES
(1, 'AVISOS OFICIALES', '1', ' 1740.00 '),
(4, 'OBRA1', '2', '100'),
(6, 'GRATIFICACIONES', '1', '1110123');

-- --------------------------------------------------------

--
-- Table structure for table `orden`
--

CREATE TABLE IF NOT EXISTS `orden` (
  `ord_id` int(8) NOT NULL,
  `fecha` date DEFAULT NULL,
  `fecha_deveng` date DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `id_obra` varchar(8) DEFAULT NULL,
  `id_cuenta` varchar(8) DEFAULT NULL,
  `total_compromet` varchar(8) DEFAULT NULL,
  `poliza_dev` varchar(8) DEFAULT NULL,
  `ppto_dev` decimal(10,0) DEFAULT NULL,
  `poliza_pag` varchar(8) DEFAULT NULL,
  `ppto_pag` decimal(10,0) DEFAULT NULL,
  `observaciones` varchar(40) DEFAULT NULL,
  `ord_numfactura` varchar(25) DEFAULT NULL,
  `ord_vehiculo` varchar(30) DEFAULT NULL,
  `status` char(10) DEFAULT NULL,
  `id_departamento` varchar(8) DEFAULT NULL,
  `id_proveedor` int(8) NOT NULL,
  `material` varchar(30) NOT NULL,
  `cantidad` varchar(5) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `activo` varchar(2) NOT NULL DEFAULT 'si'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orden`
--

INSERT INTO `orden` (`ord_id`, `fecha`, `fecha_deveng`, `fecha_pago`, `id_obra`, `id_cuenta`, `total_compromet`, `poliza_dev`, `ppto_dev`, `poliza_pag`, `ppto_pag`, `observaciones`, `ord_numfactura`, `ord_vehiculo`, `status`, `id_departamento`, `id_proveedor`, `material`, `cantidad`, `precio`, `activo`) VALUES
(1, '2017-09-01', '2017-09-19', '2017-09-26', '1', '1', '100', 'PD345', '100', 'Pd234', '70', 'wwn', 'wwryntu', 'ryum', 'pagada', '1', 2, 'Lámina', '2', '100', 'si'),
(2, '2017-10-06', '2017-10-06', '2017-10-06', '1', '1', '1500', 'POOL', '1', 'POL', '1', 'JOSE ALONSO GONZALEZ RASCON COMANDANTE', '466', 'VIAJE A CHIHUAHUA', 'PAGADA', '1', 0, '', '', '', 'si'),
(3, '2017-10-06', '2017-10-06', '2017-10-06', '1', '1', '500', 'POOL', '500', 'POL', '500', 'JOSE ALONSO GONZALEZ RASCON COMANDANTE', '466', 'VIAJE A CHIHUAHUA', 'PAGADA', '1', 0, '', '', '', 'si'),
(4, '0000-00-00', '0000-00-00', '0000-00-00', '', '', '0', '', '0', '', '0', '', '', '', '', '', 0, '', '', '', ''),
(5, '0000-00-00', '0000-00-00', '0000-00-00', '', '', '0', '', '0', '', '0', '', '', '', '', '', 0, '', '', '', ''),
(6, '0000-00-00', '0000-00-00', '0000-00-00', '', '', '0', '', '0', '', '0', '', '', '', '', '', 0, '', '', '', ''),
(7, '0000-00-00', '0000-00-00', '0000-00-00', '', '', '0', '', '0', '', '0', '', '', '', '', '', 0, '', '', '', ''),
(8, '0000-00-00', '0000-00-00', '0000-00-00', '', '', '0', '', '0', '', '0', '', '', '', '', '1', 0, '', '', '', ''),
(9, '0000-00-00', '0000-00-00', '0000-00-00', 'adsd', '1', '12', '', '0', '', '0', 'asdsd', '12312', 'nissna', '', '1', 3, 'asd', '1,000', '12', ''),
(14, '0000-00-00', '0000-00-00', '0000-00-00', '1', '1', '204', '', '0', '', '0', 'observaciones', '41', 'vei', '', '1', 3, 'mat', '12', '17', 'si'),
(15, '0000-00-00', '0000-00-00', '0000-00-00', '1', '1', '18660', '', '0', '', '0', 'casa', '', 'otro', '', '1', 2, 'chescos', '12', '1555', 'si'),
(16, '2017-10-16', '0000-00-00', '0000-00-00', '1', '1', '18660', '', '0', '', '0', 'casa', '', 'otro', '', '1', 2, 'chescos', '12', '1555', 'si'),
(17, '2017-10-16', '0000-00-00', '0000-00-00', '1', '1', '0', '', '0', '', '0', '', '', '', '', '1', 2, '', '', '', 'no'),
(18, '2017-10-16', '0000-00-00', '0000-00-00', '1', '1', '0', '', '0', '', '0', '', '', '', '', '1', 2, '', '', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `presupuestos`
--

CREATE TABLE IF NOT EXISTS `presupuestos` (
  `id_presupuesto` varchar(8) NOT NULL DEFAULT '',
  `id_cuenta` varchar(8) DEFAULT NULL,
  `anio` decimal(10,0) DEFAULT NULL,
  `monto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `presupuestos`
--

INSERT INTO `presupuestos` (`id_presupuesto`, `id_cuenta`, `anio`, `monto`) VALUES
('1', '1', '2017', '193050187.51 ');

-- --------------------------------------------------------

--
-- Table structure for table `presupuesto_depa`
--

CREATE TABLE IF NOT EXISTS `presupuesto_depa` (
  `id_presupuesto_depa` int(8) NOT NULL,
  `id_departamento` varchar(8) DEFAULT NULL,
  `id_cuenta` varchar(8) DEFAULT NULL,
  `anio` varchar(4) DEFAULT NULL,
  `monto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `presupuesto_depa`
--

INSERT INTO `presupuesto_depa` (`id_presupuesto_depa`, `id_departamento`, `id_cuenta`, `anio`, `monto`) VALUES
(1, '1', '1', '2017', '1000000'),
(3, '2', '2', '2017', '10000000'),
(4, '2', '1', '2017', '500');

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_proveedor` int(8) NOT NULL,
  `nombre` char(30) DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre`, `direccion`, `telefono`) VALUES
(2, 'CAM', 'Provedor 1', '569851561'),
(3, 'Saul', 'Provedor 2', '6361024875');

-- --------------------------------------------------------

--
-- Table structure for table `reportes`
--

CREATE TABLE IF NOT EXISTS `reportes` (
  `id_reporte` varchar(8) NOT NULL,
  `id_departamento` varchar(8) DEFAULT NULL,
  `id_cuenta` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` varchar(8) NOT NULL,
  `nombre` char(20) DEFAULT NULL,
  `correo` varchar(35) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `foto` text NOT NULL,
  `nivel` char(15) DEFAULT NULL,
  `puesto` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `password`, `foto`, `nivel`, `puesto`) VALUES
('1', 'Admin', 'admin@gmail.com', '1234', 'img.jpg', 'Admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `control_presupuesto`
--
ALTER TABLE `control_presupuesto`
  ADD PRIMARY KEY (`id_orden`);

--
-- Indexes for table `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id_cuenta`);

--
-- Indexes for table `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indexes for table `obras`
--
ALTER TABLE `obras`
  ADD PRIMARY KEY (`id_obra`);

--
-- Indexes for table `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `presupuestos`
--
ALTER TABLE `presupuestos`
  ADD PRIMARY KEY (`id_presupuesto`);

--
-- Indexes for table `presupuesto_depa`
--
ALTER TABLE `presupuesto_depa`
  ADD PRIMARY KEY (`id_presupuesto_depa`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indexes for table `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id_reporte`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `control_presupuesto`
--
ALTER TABLE `control_presupuesto`
  MODIFY `id_orden` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id_cuenta` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_departamento` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `obras`
--
ALTER TABLE `obras`
  MODIFY `id_obra` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orden`
--
ALTER TABLE `orden`
  MODIFY `ord_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `presupuesto_depa`
--
ALTER TABLE `presupuesto_depa`
  MODIFY `id_presupuesto_depa` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
