-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-11-2015 a las 06:20:15
-- Versión del servidor: 1.0.21
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `foro1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foros`
--

CREATE TABLE IF NOT EXISTS `foros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autor` varchar(30) DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `mensaje` text,
  `fecha` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `foros`
--

INSERT INTO `foros` (`id`, `autor`, `titulo`, `mensaje`, `fecha`) VALUES
(1, 'Rene', 'rgrtg', 'vfvf', 'dcfrf'),
(2, 'DFVF', 'DDFIK', 'WEFÃ‘RELG', 'ERYTR'),
(3, 'NB', 'GHYJ', 'GTYUJH', '98'),
(4, 'diana', 'DFGTHGS', 'SKJDHKUVHFKJUHKDJUAHDKIH', '30/10/2015');
