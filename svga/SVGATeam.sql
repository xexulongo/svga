-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-03-2014 a las 12:39:59
-- Versión del servidor: 5.5.35-0ubuntu0.13.10.2
-- Versión de PHP: 5.5.3-1ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `SVGATeam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Seccions`
--

CREATE TABLE IF NOT EXISTS `Seccions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `Seccions`
--

INSERT INTO `Seccions` (`id`, `name`) VALUES
(1, 'web'),
(2, 'junta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Seccions_has_Usuaris`
--

CREATE TABLE IF NOT EXISTS `Seccions_has_Usuaris` (
  `Seccions_id` int(11) NOT NULL,
  `Usuaris_id` int(11) NOT NULL,
  PRIMARY KEY (`Seccions_id`,`Usuaris_id`),
  KEY `fk_Seccions_has_Usuaris_Usuaris1_idx` (`Usuaris_id`),
  KEY `fk_Seccions_has_Usuaris_Seccions_idx` (`Seccions_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Seccions_has_Usuaris`
--

INSERT INTO `Seccions_has_Usuaris` (`Seccions_id`, `Usuaris_id`) VALUES
(1, 19),
(2, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuaris`
--

CREATE TABLE IF NOT EXISTS `Usuaris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `activated` tinyint(4) NOT NULL DEFAULT '1',
  `email_activated` tinyint(4) NOT NULL DEFAULT '0',
  `email_token` varchar(45) DEFAULT NULL,
  `recovery_token` varchar(45) DEFAULT NULL,
  `recovery_timestamp` int(8) DEFAULT NULL,
  `created` varchar(45) DEFAULT NULL,
  `last_login` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `Usuaris`
--

INSERT INTO `Usuaris` (`id`, `name`, `username`, `password`, `email`, `activated`, `email_activated`, `email_token`, `recovery_token`, `recovery_timestamp`, `created`, `last_login`) VALUES
(19, 'xexu', 'xexu', '5cd78bec0d91d172ea1b0e3d32b770af', 'jlexposito7@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL),
(20, 'xexu', 'xexu', '2412fa40f4826387c893856d34972219', 'jlexposito7@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Seccions_has_Usuaris`
--
ALTER TABLE `Seccions_has_Usuaris`
  ADD CONSTRAINT `fk_Seccions_has_Usuaris_Seccions` FOREIGN KEY (`Seccions_id`) REFERENCES `Seccions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Seccions_has_Usuaris_Usuaris1` FOREIGN KEY (`Usuaris_id`) REFERENCES `Usuaris` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
