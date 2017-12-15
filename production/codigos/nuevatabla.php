<?php  
include '../conexion.php';
$mysqli->query("TRUNCATE TABLE orden") or die($mysqli->error);
$mysqli->query("TRUNCATE TABLE departamentos")or die($mysqli->error);
$mysqli->query("TRUNCATE TABLE cuentas")or die($mysqli->error);
$mysqli->query("TRUNCATE TABLE presupuesto_depa")or die($mysqli->error);
$mysqli->query("TRUNCATE TABLE programaorden")or die($mysqli->error);
$mysqli->query("TRUNCATE TABLE programas")or die($mysqli->error);



/*
CREATE  DATABASE 'Presidencia';
# | Estructura de la tabla 'cuentas'
# +------------------------------------->
CREATE TABLE `cuentas` (
  `id_cuenta` int(8) NOT NULL AUTO_INCREMENT,
  `cuenta` varchar(20) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `cantidad` mediumtext NOT NULL,
  PRIMARY KEY (`id_cuenta`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
 
 
# | Estructura de la tabla 'departamentos'
# +------------------------------------->
CREATE TABLE `departamentos` (
  `id_departamento` int(8) NOT NULL AUTO_INCREMENT,
  `departamento` char(25) DEFAULT NULL,
  `presupuesto` varchar(10000) NOT NULL,
  PRIMARY KEY (`id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
 

 
# | Estructura de la tabla 'orden'
# +------------------------------------->
CREATE TABLE `orden` (
  `ord_id` int(8) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `fecha_deveng` date DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
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
  `activo` varchar(2) NOT NULL DEFAULT 'si',
  PRIMARY KEY (`ord_id`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;
 
 
 
# | Estructura de la tabla 'presupuesto_depa'
# +------------------------------------->
CREATE TABLE `presupuesto_depa` (
  `id_presupuesto_depa` int(8) NOT NULL AUTO_INCREMENT,
  `id_departamento` varchar(8) DEFAULT NULL,
  `id_cuenta` varchar(8) DEFAULT NULL,
  `anio` varchar(4) DEFAULT NULL,
  `monto` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_presupuesto_depa`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;
 

 
# | Estructura de la tabla 'presupuestos'
# +------------------------------------->
CREATE TABLE `presupuestos` (
  `id_presupuesto` int(11) NOT NULL AUTO_INCREMENT,
  `anio` decimal(10,0) DEFAULT NULL,
  `monto` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_presupuesto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

# | Estructura de la tabla 'programaorden'
# +------------------------------------->
CREATE TABLE `programaorden` (
  `id_prog_orden` int(11) NOT NULL AUTO_INCREMENT,
  `id_orden` int(8) NOT NULL,
  `id_programa` int(8) NOT NULL,
  PRIMARY KEY (`id_prog_orden`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
 
# | Estructura de la tabla 'programas'
# +------------------------------------->
CREATE TABLE `programas` (
  `id_programa` int(11) NOT NULL AUTO_INCREMENT,
  `programa` varchar(25) NOT NULL,
  PRIMARY KEY (`id_programa`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
 
 
# | Estructura de la tabla 'proveedores'
# +------------------------------------->
CREATE TABLE `proveedores` (
  `id_proveedor` int(8) NOT NULL AUTO_INCREMENT,
  `nombre` char(30) DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

 
# | Estructura de la tabla 'usuarios'
# +------------------------------------->
CREATE TABLE `usuarios` (
  `id_usuario` int(8) NOT NULL AUTO_INCREMENT,
  `nombre` char(20) NOT NULL DEFAULT '',
  `correo` varchar(35) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `foto` text NOT NULL,
  `nivel` char(15) DEFAULT NULL,
  `puesto` char(25) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
*/
 ?>