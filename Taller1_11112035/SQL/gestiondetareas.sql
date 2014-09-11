-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2014 a las 19:42:43
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gestiondetareas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfilusuarios`
--

CREATE TABLE IF NOT EXISTS `perfilusuarios` (
  `Perfil` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrados`
--

CREATE TABLE IF NOT EXISTS `registrados` (
  `Nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `Apellido` varchar(50) COLLATE utf8_bin NOT NULL,
  `Contraseña` varchar(50) COLLATE utf8_bin NOT NULL,
  `Correo` varchar(50) COLLATE utf8_bin NOT NULL,
  `Codigo` varchar(8) COLLATE utf8_bin NOT NULL,
  `Carrera` varchar(50) COLLATE utf8_bin NOT NULL,
  `Universidad` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `registrados`
--

INSERT INTO `registrados` (`Nombre`, `Apellido`, `Contraseña`, `Correo`, `Codigo`, `Carrera`, `Universidad`) VALUES
('Karina', 'Rodríguez', 'krodve', 'krodve@gmail.com', '11112035', 'DMI', 'Icesi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE IF NOT EXISTS `tareas` (
  `Nombre Tarea` varchar(50) COLLATE utf8_bin NOT NULL,
  `Descripcion` varchar(70) COLLATE utf8_bin NOT NULL,
  `Fecha de Creacion` varchar(50) COLLATE utf8_bin NOT NULL,
  `Finalizacion` varchar(50) COLLATE utf8_bin NOT NULL,
  `Prioridad` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`Nombre Tarea`, `Descripcion`, `Fecha de Creacion`, `Finalizacion`, `Prioridad`) VALUES
('Taller 1', 'Entrega de Programacion Web', '28/08/14', '09/09/14', 'Alta');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
