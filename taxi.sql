-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2014 a las 06:28:56
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `taxi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `idP` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `idUnidad` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `origen` varchar(100) NOT NULL,
  `destino` varchar(100) NOT NULL,
  PRIMARY KEY (`idP`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idP`, `usuario`, `idUnidad`, `fecha`, `origen`, `destino`) VALUES
(1, 'Desconocido', 2, '2014-04-29', 'patzcuaro', 'morelia'),
(2, 'Desconocido', 2, '2014-04-29', 'patzcuaro', 'morelia'),
(3, 'Desconocido', 2, '2014-04-29', 'patzcuaro', 'morelia'),
(4, 'Desconocido', 2, '2014-04-29', 'patzcuaro', 'morelia'),
(5, 'Desconocido', 3, '2014-04-29', 'morelia', 'mexico'),
(6, 'Desconocido', 1, '2014-04-29', 'primo tapia morelia', 'prados verdes morelia'),
(7, 'Desconocido', 2, '2014-04-29', 'las flores morelia ', 'av ventura puente morelia'),
(8, 'Desconocido', 4, '2014-04-29', 'morelia', 'patzcuaro'),
(9, 'Desconocido', 4, '2014-04-29', 'morelia', 'tarimbaro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE IF NOT EXISTS `unidad` (
  `idUn` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(100) NOT NULL,
  `placa` varchar(100) NOT NULL,
  `conductor` varchar(100) NOT NULL,
  PRIMARY KEY (`idUn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `unidad`
--

INSERT INTO `unidad` (`idUn`, `modelo`, `placa`, `conductor`) VALUES
(3, 'camaro', 'y67-88-hu', 'pancho denigris'),
(4, 'hummer deportiva', 'eer-87-99', 'Nazario Gomez'),
(5, 'charger', 'gg6-99-00', 'Luis Ruiz'),
(6, 'Mustang ', 'l6p-99-5m', 'Jose KIKI'),
(7, 'Ferrari', 'ttt6-98-99', 'Pablo Montero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idU` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  PRIMARY KEY (`idU`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idU`, `nombre`, `direccion`, `telefono`, `user`, `pass`, `tipo`) VALUES
(1, 'Christian', 'canteras del barreno', '4431111219', 'dinamiqo', 'miseguridad', 'normal'),
(5, 'zox', 'jaripeo', '4433443344', 'zox', 'qwerty', 'administrador');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
