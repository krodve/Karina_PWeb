-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2014 a las 08:11:41
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `taller3_basededatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sitios`
--

CREATE TABLE IF NOT EXISTS `sitios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `latitud` varchar(100) COLLATE utf8_bin NOT NULL,
  `longitud` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `sitios`
--

INSERT INTO `sitios` (`id`, `tipo`, `nombre`, `latitud`, `longitud`) VALUES
(1, 1, 'Hotel Intercontinental', '3.449795', '-76.539255'),
(2, 1, 'Hotel Imbanaco', '3.425718', '-76.545255'),
(3, 1, 'Hotel Dann Carlton', '3.450666', '-76.540399'),
(4, 2, 'Platillos Voladores', '3.456157', '-76.537545'),
(5, 2, 'La Mansión', '3.421850', '-76.545338'),
(6, 2, 'Romani', '3.435650', '-76.545330'),
(7, 3, 'Centro Comercial Unicentro', '3.374492', '-76.539448'),
(8, 3, 'Centro Comercial Chipichape', '3.477135', '-76.529130'),
(9, 3, 'Centro Comercial Jardín Plaza', '3.380503', '-76.528275');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
