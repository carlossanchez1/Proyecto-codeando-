-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2015 a las 21:41:33
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `temas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_tema` int(11) NOT NULL,
  `comentario` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`ID`, `ID_tema`, `comentario`) VALUES
(7, 1, '  jppasd'),
(8, 0, ''),
(9, 5, '  dasdas'),
(10, 1, '  '),
(11, 4, '  '),
(12, 0, ''),
(13, 4, '  ldjlkasjdlkas'),
(14, 1, 'hola hola'),
(15, 1, ''),
(16, 1, ''),
(17, 1, ''),
(18, 1, ''),
(19, 1, ''),
(20, 1, '  xz<xz<'),
(21, 1, '  xz<xz<'),
(22, 1, '  xzx<z'),
(23, 1, '  xzx<z'),
(24, 0, '  jnjn'),
(25, 1, '  kmdlasd'),
(26, 1, '  kmdlasd'),
(27, 1, '  x<zx<zx'),
(28, 1, '  czxczxcjhcxz'),
(29, 1, '  czxczxcjhcxz'),
(30, 1, '  '),
(31, 1, '  '),
(32, 1, '  '),
(33, 1, '  '),
(34, 1, ' dasdas'),
(35, 1, ' dasdas'),
(36, 33, '  hola amiguitos'),
(37, 1, '  mh,kh,kh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE IF NOT EXISTS `tema` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`ID`, `titulo`, `descripcion`) VALUES
(1, 'fsd', '  dasd'),
(2, '', ''),
(3, '', ''),
(4, 'kljlkjlk', '  nklnkl'),
(5, 'jadsad', '  dasdas'),
(6, '', ''),
(7, '', ''),
(8, '', ''),
(9, 'dasdsa', 'dsadsadsa'),
(10, '', ''),
(11, 'xasdas', '  asdsadsadsa'),
(12, '', ''),
(13, '', ''),
(14, 'dasdsa', 'dsadsadsa'),
(15, '', ''),
(16, 'dasdsa', 'dsadsadsa'),
(17, '', '  '),
(18, '', '  '),
(19, '', '  '),
(20, 'xz<xx', '  x<zx<z'),
(21, 'hola', '  dasdas'),
(22, '', '  '),
(23, 'sas', '  dasdas'),
(24, '', ''),
(25, 'dasdsa', '  xdasd'),
(26, '', ''),
(27, 'dasdsa', '  xdasd'),
(28, 'dasdsa', '  xdasd'),
(29, 'dasdsa', '  xdasd'),
(30, 'dasdsa', '  xdasd'),
(31, '', ''),
(32, 'xz<x<zx', '  z<xz<xz<'),
(33, 'no nos dejemos', '  ahora'),
(34, ',jhkvh', '  mjg,jh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
