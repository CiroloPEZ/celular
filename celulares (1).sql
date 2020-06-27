-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2013 a las 01:49:16
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `celulares`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE IF NOT EXISTS `almacen` (
  `id_almacen` int(11) NOT NULL,
  `pasillo` int(11) DEFAULT '11',
  PRIMARY KEY (`id_almacen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celular`
--

CREATE TABLE IF NOT EXISTS `celular` (
  `id_celular` int(11) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `color` varchar(50) NOT NULL,
  `imei` int(30) NOT NULL,
  `estatus` varchar(10) NOT NULL,
  `compania` varchar(20) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  KEY `id_modelo` (`modelo`,`compania`),
  KEY `id_compania` (`compania`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `celular`
--

INSERT INTO `celular` (`id_celular`, `modelo`, `color`, `imei`, `estatus`, `compania`, `imagen`) VALUES
(2, 'nokia', 'black', 3847347, '2', 'telcel', '../content/images/fotos/experia_ZL.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` varchar(30) NOT NULL,
  `nom_cliente` varchar(25) DEFAULT NULL,
  `credito` int(30) DEFAULT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nom_cliente`, `credito`, `imagen`) VALUES
('1', 'kmmkm', 122323, '../content/images/fotos/lg.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compania`
--

CREATE TABLE IF NOT EXISTS `compania` (
  `id_compania` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`id_compania`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compania`
--

INSERT INTO `compania` (`id_compania`, `nombre`, `direccion`, `imagen`) VALUES
('1', 'bjbjb', 'kllklk', '../content/images/fotos/nokia900lte.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE IF NOT EXISTS `modelo` (
  `id_modelo` int(20) NOT NULL,
  `almacen` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `costo` int(10) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`id_modelo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`id_modelo`, `almacen`, `nombre`, `costo`, `imagen`) VALUES
(1, '1', 'ggfh', 23423434, '../content/images/fotos/lg_optimusg.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE IF NOT EXISTS `vendedor` (
  `id_vendedor` varchar(30) NOT NULL,
  `num_vendedor` varchar(30) NOT NULL,
  `nombre` int(11) NOT NULL,
  `apellido` int(11) NOT NULL,
  PRIMARY KEY (`id_vendedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `id_celular` varchar(30) NOT NULL,
  `id_vendedor` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `total` int(15) NOT NULL,
  `id_cliente` varchar(30) NOT NULL,
  `num_venta` int(10) NOT NULL,
  PRIMARY KEY (`num_venta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
