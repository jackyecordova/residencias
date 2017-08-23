-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2017 at 08:51 PM
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
  `ord_status` char(2) DEFAULT NULL,
  `status` char(10) DEFAULT NULL,
  `id_departamento` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `id_presupeusto_depa` varchar(8) DEFAULT NULL,
  `id_presupuesto` varchar(8) DEFAULT NULL,
  `id_duenta` varchar(8) DEFAULT NULL,
  `anio` date DEFAULT NULL,
  `monto` decimal(10,0) DEFAULT NULL
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
