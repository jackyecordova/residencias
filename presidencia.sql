-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 11:50 PM
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
  `monto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cuentas`
--

CREATE TABLE IF NOT EXISTS `cuentas` (
  `id_cuenta` varchar(8) NOT NULL,
  `cuenta` varchar(20) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `cantidad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cuentas`
--

INSERT INTO `cuentas` (`id_cuenta`, `cuenta`, `nombre`, `cantidad`) VALUES
('1', '1-2-4-0-000-0000-000', 'BIENES MUEBLES', '1,000,000.00'),
('2', '1-2-4-1-000-0000-000', 'MOBILIARIO Y EQUIPO DE ADMINISTRACION', '1,000,000.00');

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
-- Table structure for table `obras`
--

CREATE TABLE IF NOT EXISTS `obras` (
  `id_obra` varchar(8) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `costo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
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
  `status` char(10) DEFAULT NULL,
  `id_departamento` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orden`
--

INSERT INTO `orden` (`ord_id`, `fecha`, `fecha_deveng`, `fecha_pago`, `id_obra`, `id_cuenta`, `total_compromet`, `poliza_dev`, `ppto_dev`, `poliza_pag`, `ppto_pag`, `observaciones`, `ord_numfactura`, `ord_vehiculo`, `status`, `id_departamento`) VALUES
('1', '2017-09-01', '2017-09-19', '2017-09-26', '1', '1', '100', 'PD345', '100', 'Pd234', '70', 'wwn', 'wwryntu', 'ryum', 'pagada', '1');

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
('1', '1', '2017', '193,050,187.51 ');

-- --------------------------------------------------------

--
-- Table structure for table `presupuesto_depa`
--

CREATE TABLE IF NOT EXISTS `presupuesto_depa` (
  `id_presupuesto_depa` varchar(8) DEFAULT NULL,
  `id_departamento` varchar(8) DEFAULT NULL,
  `id_cuenta` varchar(8) DEFAULT NULL,
  `anio` varchar(4) DEFAULT NULL,
  `monto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `presupuesto_depa`
--

INSERT INTO `presupuesto_depa` (`id_presupuesto_depa`, `id_departamento`, `id_cuenta`, `anio`, `monto`) VALUES
('1', '1', '1', '2017', '1');

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_proveedor` varchar(8) NOT NULL,
  `nombre` char(30) DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
