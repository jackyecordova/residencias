-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Aug 23, 2017 at 08:51 PM
=======
-- Generation Time: Oct 30, 2017 at 08:44 PM
>>>>>>> 6a89b877e83efa9e06b1f38d5f69c3ad07ec3928
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
  `id_orden` varchar(8) DEFAULT NULL,
  `id_departamento` varchar(8) DEFAULT NULL,
  `monto` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cuentas`
--

CREATE TABLE IF NOT EXISTS `cuentas` (
  `id_cuenta` varchar(8) NOT NULL,
  `cuenta` varchar(20) DEFAULT NULL,
  `nombre` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `id_departamento` varchar(8) NOT NULL,
  `departamento` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Table structure for table `obras`
--

CREATE TABLE IF NOT EXISTS `obras` (
  `id_obra` varchar(8) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `costo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
=======
>>>>>>> 6a89b877e83efa9e06b1f38d5f69c3ad07ec3928
-- Table structure for table `orden`
--

CREATE TABLE IF NOT EXISTS `orden` (
  `ord_id` varchar(8) NOT NULL,
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
  `ord_status` char(2) DEFAULT NULL,
  `status` char(10) DEFAULT NULL,
<<<<<<< HEAD
  `id_departamento` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
=======
  `id_departamento` varchar(8) DEFAULT NULL,
  `id_proveedor` int(8) NOT NULL,
  `material` varchar(30) NOT NULL,
  `cantidad` varchar(5) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `activo` varchar(2) NOT NULL DEFAULT 'si'
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orden`
--

INSERT INTO `orden` (`ord_id`, `fecha`, `fecha_deveng`, `fecha_pago`, `id_cuenta`, `total_compromet`, `poliza_dev`, `ppto_dev`, `poliza_pag`, `ppto_pag`, `observaciones`, `ord_numfactura`, `ord_vehiculo`, `status`, `id_departamento`, `id_proveedor`, `material`, `cantidad`, `precio`, `activo`) VALUES
(29, '2017-10-24', '0000-00-00', '0000-00-00', '6', '250', '', '0', '', '0', 'ALIEMTOS PERSONAL DE OFICIALIA', '271', 'Nissan', 'Emitido', '1', 3, 'Papitas y sodas', '10', '25', 'si'),
(30, '2017-10-24', '0000-00-00', '0000-00-00', '5', '143', '', '0', '', '0', 'CHAPA DE BOLA PARA BAÃ‘O', '24130', '', 'Emitido', '1', 3, 'Chapa para zapato', '1', ' 143.00 ', 'si'),
(31, '2017-10-24', '0000-00-00', '0000-00-00', '3', '200', '', '0', '', '0', 'fgvhbjn', '123', '', 'Emitido', '1', 4, 'cemento', '1', '200', 'si'),
(32, '2017-10-27', '0000-00-00', '0000-00-00', '3', '20', '', '0', '', '0', 'La cuenta esta vacia', '201', 'ram', 'Emitido', '1', 2, 'Sopa', '1', '20.00', 'si'),
(33, '2017-10-27', '0000-00-00', '0000-00-00', '2', '100', '', '0', '', '0', '5465465465465', '1', 'rftyu', 'Emitido', '1', 4, 'Paleta', '5', '20', 'si'),
(34, '2017-10-29', '0000-00-00', '0000-00-00', '5 \r\n		 a', '50000000', '', '0', '', '0', 'Listas las observaciones', '23', 'sdsfsef', 'Emitido', '4', 3, 'Chicles', '50', '1000000', 'si'),
(35, '2017-10-29', '0000-00-00', '0000-00-00', '1 \r\n		 a', '120', '', '0', '', '0', 'aaa', '10', 'aa', 'Emitido', '3', 2, 'as', '1', '120', 'si'),
(36, '2017-10-29', '0000-00-00', '0000-00-00', '1 \r\n		 a', '10000000', '', '0', '', '0', 'lknlk', '56', 'jhbj', 'Emitido', '5', 2, 'jbjk', '1', '10000000', 'si'),
(37, '2017-10-29', '0000-00-00', '0000-00-00', '1 \r\n		 a', '2100000', '', '0', '', '0', 'jhub', '5465', 'ui', 'Emitido', '3', 2, 'jnik', '20', '105000', 'si');
>>>>>>> 6a89b877e83efa9e06b1f38d5f69c3ad07ec3928

-- --------------------------------------------------------

--
-- Table structure for table `presupuestos`
--

CREATE TABLE IF NOT EXISTS `presupuestos` (
  `id_presupuesto` varchar(8) DEFAULT NULL,
  `id_cuenta` varchar(8) DEFAULT NULL,
  `anio` decimal(10,0) DEFAULT NULL,
  `monto` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `presupuesto_depa`
--

CREATE TABLE IF NOT EXISTS `presupuesto_depa` (
<<<<<<< HEAD
  `id_presupeusto_depa` varchar(8) DEFAULT NULL,
  `id_presupuesto` varchar(8) DEFAULT NULL,
  `id_duenta` varchar(8) DEFAULT NULL,
  `anio` date DEFAULT NULL,
  `monto` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
=======
  `id_presupuesto_depa` int(8) NOT NULL,
  `id_departamento` varchar(8) DEFAULT NULL,
  `id_cuenta` varchar(8) DEFAULT NULL,
  `anio` varchar(4) DEFAULT NULL,
  `monto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `presupuesto_depa`
--

INSERT INTO `presupuesto_depa` (`id_presupuesto_depa`, `id_departamento`, `id_cuenta`, `anio`, `monto`) VALUES
(1, '1', '1', '2017', '1000000'),
(5, '5', '2', '1132', '1111111'),
(7, '4', '3', '2017', '10'),
(9, '3', '1', '2017', '200'),
(11, '5', '1', '2017', '1000000'),
(12, '5', '1', '2017', '1000000'),
(14, '5', '5', '2017', '200000');

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_proveedor` int(8) NOT NULL,
  `nombre` char(30) DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre`, `direccion`, `telefono`) VALUES
(2, 'CAM', 'Provedor 1', '569851561'),
(3, 'Saul', 'Provedor 2', '6361024875'),
(4, 'Proveedor', 'papas Fritas', '(636)-789-52-41');
>>>>>>> 6a89b877e83efa9e06b1f38d5f69c3ad07ec3928

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
  `password` varchar(80) DEFAULT NULL,
  `foto` text NOT NULL,
  `nivel` char(15) DEFAULT NULL,
  `puesto` char(25) DEFAULT NULL
<<<<<<< HEAD
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
=======
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `password`, `foto`, `nivel`, `puesto`) VALUES
(3, 'Jacky', 'jackye@gmail.com', '7110eda4', 'foto.jpg', 'Admin', 'Admin'),
(4, 'Saul', 'saul@hotmail.com', '7110eda4', 'foto.jpg', 'Admin', 'Admin'),
(5, 'Jaky', 'jacky@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'foto.jpg', 'Admin', 'Admin');
>>>>>>> 6a89b877e83efa9e06b1f38d5f69c3ad07ec3928

--
-- Indexes for dumped tables
--

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
-- Indexes for table `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`ord_id`);

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

<<<<<<< HEAD
=======
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
  MODIFY `id_cuenta` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_departamento` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `orden`
--
ALTER TABLE `orden`
  MODIFY `ord_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `presupuesto_depa`
--
ALTER TABLE `presupuesto_depa`
  MODIFY `id_presupuesto_depa` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
>>>>>>> 6a89b877e83efa9e06b1f38d5f69c3ad07ec3928
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
