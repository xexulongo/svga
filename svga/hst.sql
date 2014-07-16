-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-07-2014 a las 21:31:07
-- Versión del servidor: 5.5.37-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `hst`
--
CREATE DATABASE IF NOT EXISTS `hst` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hst`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Seccions`
--
-- Creación: 05-07-2014 a las 19:20:12
--

CREATE TABLE IF NOT EXISTS `Seccions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `Seccions`
--

INSERT INTO `Seccions` (`id`, `name`) VALUES
(6, 'hst2'),
(2, 'junta'),
(5, 'svga'),
(1, 'web');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Seccions_has_Usuaris`
--
-- Creación: 10-07-2014 a las 21:49:07
--

CREATE TABLE IF NOT EXISTS `Seccions_has_Usuaris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Seccions_id` int(11) NOT NULL,
  `Usuaris_id` int(11) NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_u_s` (`Usuaris_id`,`Seccions_id`),
  KEY `fk_Seccions_has_Usuaris_Usuaris1_idx` (`Usuaris_id`),
  KEY `fk_Seccions_has_Usuaris_Seccions_idx` (`Seccions_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- RELACIONES PARA LA TABLA `Seccions_has_Usuaris`:
--   `Usuaris_id`
--       `Usuaris` -> `id`
--   `Seccions_id`
--       `Seccions` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuaris`
--
-- Creación: 06-07-2014 a las 17:15:08
--

CREATE TABLE IF NOT EXISTS `Usuaris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `activated` tinyint(4) NOT NULL DEFAULT '0',
  `email_activated` tinyint(4) NOT NULL DEFAULT '0',
  `email_token` varchar(45) DEFAULT NULL,
  `recovery_token` varchar(45) DEFAULT NULL,
  `recovery_timestamp` int(8) DEFAULT NULL,
  `created` varchar(45) DEFAULT NULL,
  `last_login` varchar(45) DEFAULT NULL,
  `current_login` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;


--
-- Estructura de tabla para la tabla `tbl_comment`
--
-- Creación: 29-06-2014 a las 21:38:06
--

CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `author_id` decimal(10,0) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `content` text,
  `status` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `author` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `url` varchar(128) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2;



--
-- Estructura de tabla para la tabla `tbl_lookup`
--
-- Creación: 29-06-2014 a las 21:38:06
--

CREATE TABLE IF NOT EXISTS `tbl_lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(128) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tbl_lookup`
--

INSERT INTO `tbl_lookup` (`id`, `name`, `code`, `type`, `position`) VALUES
(1, 'Borrador', 1, 'PostStatus', 1),
(2, 'Publicado', 2, 'PostStatus', 2),
(3, 'Archivado', 3, 'PostStatus', 3),
(4, 'Pendiente de Aprobación', 1, 'CommentStatus', 1),
(5, 'Aprobado', 2, 'CommentStatus', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_post`
--
-- Creación: 06-07-2014 a las 16:05:04
--

CREATE TABLE IF NOT EXISTS `tbl_post` (
  `image` text,
  `description` char(20) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT NULL,
  `content` text,
  `tags` text,
  `status` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `destacado` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=10 ;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tag`
--
-- Creación: 29-06-2014 a las 21:38:06
--

CREATE TABLE IF NOT EXISTS `tbl_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `frequency` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=14 ;



--
-- Filtros para la tabla `Seccions_has_Usuaris`
--
ALTER TABLE `Seccions_has_Usuaris`
  ADD CONSTRAINT `fk_PerOrders` FOREIGN KEY (`Usuaris_id`) REFERENCES `Usuaris` (`id`),
  ADD CONSTRAINT `fk_Seccions_has_Usuaris_Seccions` FOREIGN KEY (`Seccions_id`) REFERENCES `Seccions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Seccions_has_Usuaris_Usuaris1` FOREIGN KEY (`Usuaris_id`) REFERENCES `Usuaris` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
