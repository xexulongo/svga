-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-03-2014 a las 12:39:39
-- Versión del servidor: 5.5.35-0ubuntu0.13.10.2
-- Versión de PHP: 5.5.3-1ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `SVGA`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Match`
--

CREATE TABLE IF NOT EXISTS `Match` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `looser_id` int(8) DEFAULT NULL,
  `winner_id` int(8) DEFAULT NULL,
  `Teams_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Match_Teams1` (`Teams_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comment`
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
-- Volcado de datos para la tabla `tbl_comment`
--

INSERT INTO `tbl_comment` (`author_id`, `id`, `content`, `status`, `create_time`, `author`, `email`, `url`, `post_id`) VALUES
(NULL, 1, 'This is a test comment.', 2, 1230952187, 'Tester', 'tester@example.com', NULL, 2),
(NULL, 2, 'Probando', 2, 1376396478, 'demo', 'zherlonlogistics@gmail.com', '', 2),
(NULL, 3, 'Probando nuevo formulario', 2, 1376401276, 'jose', 'zherlonlogistics@gmail.com', '', 2),
(NULL, 4, 'Comentariooo', 2, 1376402135, 'edopasda', 'dasdsada@gmail.com', '', 1),
(NULL, 5, 'Que suerte! Yo participe en el sorteo pero no me toco :( Un besito a los de SVGA!', 2, 1378815534, 'Vanesa', 'meloinvento@gmail.com', NULL, 4),
(NULL, 6, '<p>Esto es un comentario</p>', 2, 1379159331, 'demo', 'demo@demo.com', NULL, 4),
(NULL, 7, '<p>dasdasd</p>', 2, 1379258995, 'asdas', 'qweqwe@email.com', NULL, 4),
(NULL, 8, '<p>Este es un comentario de demo!</p>', 2, 1380237231, 'username', '', NULL, 4),
(NULL, 9, '<p>Demo comentando</p>', 2, 1380237605, '1', '', NULL, 4),
(NULL, 10, '<p>Comentando desde demo</p>', 2, 1380238224, NULL, '', NULL, 4),
(NULL, 11, '<p>Comentando desde demo</p>', 2, 1380238363, NULL, '', NULL, 4),
(NULL, 12, '<p>Comentando desde demo</p>', 2, 1380238718, NULL, '', NULL, 4),
(NULL, 13, '<p>comentando desde usuario demo</p>', 2, 1380238758, NULL, '', NULL, 4),
(NULL, 14, '<p>coment demo user 1</p>', 2, 1380239013, '1', '', NULL, 4),
(NULL, 15, '<p>x&lt;zx&lt;zxz&lt;</p>', 2, 1380239451, NULL, '', NULL, 4),
(NULL, 16, '<p>sdadaqweq</p>', 2, 1380240555, NULL, '', NULL, 4),
(NULL, 17, '<p>dqweqweq</p>', 2, 1380241197, NULL, '', NULL, 4),
(NULL, 18, '<p>qweqewsadqdwashyukl</p>', 2, 1380241305, 'Guest', '', NULL, 4),
(NULL, 19, '<p>dsadasdqxz</p>', 2, 1380241318, 'demo', '', NULL, 4),
(NULL, 20, '<p>sdasdqweq</p>', 2, 1380322468, 'Guest', '', NULL, 4),
(NULL, 21, '<p>sadasdaeqweqasda</p>', 2, 1380322921, 'Guest', '', NULL, 4),
(NULL, 22, '<p>dsadaseqwewq</p>', 2, 1380323122, 'Guest', '', NULL, 4),
(1, 23, '<p>Comentando!</p>', 2, 1380323914, 'demo', '', NULL, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_lookup`
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
  `destacado` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `tbl_post`
--

INSERT INTO `tbl_post` (`image`, `description`, `id`, `title`, `content`, `tags`, `status`, `create_time`, `update_time`, `author_id`, `destacado`) VALUES
('avatar.jpg', '', 1, 'Welcome!', 'This blog system is developed using Yii. It is meant to demonstrate how to use Yii to build a complete real-world application. Complete source code may be found in the Yii releases.\n\nFeel free to try this system by writing new posts and leaving comments.', 'yii, blog', 2, 1230952187, 1230952187, 1, 1),
(NULL, 'Lorem ipsum dolor si', 2, 'A Test Post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'test', 2, 1230952187, 1230952187, 1, 0),
('winner.jpg', 'Aqui podéis ver a En', 4, 'Sorteig entrada Telecogresca 2013', 'Aqui podéis ver a Enric, uno de los ganadores del sorteo de entradas para Telecogresca 2013!!', 'sorteo, svga, entradas', 2, 1376403046, 1376403046, 1, 1),
('lolwin.jpg', 'Aqui podéis ver los', 5, 'Ganadores del Primer Torneo de LOL', 'El primer torneo de LOL realizado por SVGA ha tenido más éxito del que esperabamos y un gran nivel como han demostrado los equipos, en la foto podéis ver los ganadores del torneo que consiguieron 12e^23 puntos riot...', 'torneo, lol, svga', 2, 1376403046, 1376403046, 1, 0),
('torneos.jpg', 'SVGA prepara nuevos', 6, 'SVGA prepara nuevos torneos para el siguiente cuadrimestre', 'SVGA se encuentra a día de hoy preparando varios torneos de diferentes modalidades de juego en los que podréis participar, pasarlo bien y ganar algo de dinero. Os deseamos mucha suerte a todos!', 'svga, torneo', 2, 1376403046, 1391134148, 1, 1),
(NULL, 'Relleno del bueno co', 7, 'Articulo de relleno\n', 'Este es un articulo de relleno sin importancia. dsadlkasdlkajklsda?sdmasda asdl?asdkl?adas satan!', 'relleno, prueba, test', 2, 1230952187, 1230952187, 1, 0),
(NULL, 'Esto es un ejemplo d', 8, 'Este es un título fictício', 'Aqui esta el contenido real de la notícia', 'prueba, test, demo', 2, 1230952187, 1230952187, 1, 0),
('svgaviejunos.jpg', 'Probamos foto', 9, 'PostPrueba con foto', 'Estamos probando la noticia con una foto...', 'foto, photo, prueba', 2, 1376403046, 1376403046, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tag`
--

CREATE TABLE IF NOT EXISTS `tbl_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `frequency` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `tbl_tag`
--

INSERT INTO `tbl_tag` (`id`, `name`, `frequency`) VALUES
(1, 'yii', 1),
(2, 'blog', 1),
(3, 'test', 2),
(4, 'esto', 1),
(5, 'prueba', 2),
(6, 'demo', 1),
(7, 'foto', 1),
(8, 'photo', 1),
(9, 'tags', 1),
(10, 'eqweq', 1),
(11, 'straesa', 1),
(12, 'asdada', 1),
(13, 'das', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Teams`
--

CREATE TABLE IF NOT EXISTS `Teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `profile` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `Teams`
--

INSERT INTO `Teams` (`id`, `name`, `profile`) VALUES
(8, 'Desperados', 'Desperados'),
(9, 'Toxic Crub', 'Liga bronce'),
(10, 'Revenge', 'Liga oro'),
(11, 'Revolution', 'Liga principiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Torneos`
--

CREATE TABLE IF NOT EXISTS `Torneos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `enabled` int(11) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `Torneos`
--

INSERT INTO `Torneos` (`id`, `name`, `type`, `enabled`, `image`) VALUES
(1, 'SCII', '0', 1, 'sc'),
(2, 'LoL', '1', 1, 'lol1'),
(7, 'Street Fighter', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Torneos_has_Match`
--

CREATE TABLE IF NOT EXISTS `Torneos_has_Match` (
  `Torneos_id` int(11) NOT NULL,
  `Match_id` int(11) NOT NULL,
  PRIMARY KEY (`Torneos_id`,`Match_id`),
  KEY `fk_Torneos_has_Match_Match1` (`Match_id`),
  KEY `fk_Torneos_has_Match_Torneos1` (`Torneos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Torneos_has_Teams`
--

CREATE TABLE IF NOT EXISTS `Torneos_has_Teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Torneos_id` int(11) NOT NULL,
  `Teams_id` int(11) NOT NULL,
  `Paid` int(2) DEFAULT NULL COMMENT 'Pagado',
  PRIMARY KEY (`id`),
  KEY `fk_Torneos_has_Teams_Teams1` (`Teams_id`),
  KEY `fk_Torneos_has_Teams_Torneos1` (`Torneos_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `Torneos_has_Teams`
--

INSERT INTO `Torneos_has_Teams` (`id`, `Torneos_id`, `Teams_id`, `Paid`) VALUES
(1, 1, 8, 1),
(2, 2, 8, 0),
(3, 2, 9, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `activated` tinyint(4) NOT NULL DEFAULT '1',
  `email_activated` tinyint(4) NOT NULL DEFAULT '0',
  `email_token` varchar(45) NOT NULL,
  `recovery_token` varchar(45) DEFAULT NULL,
  `recovery_timestamp` int(8) DEFAULT NULL,
  `avatar` varchar(45) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `last_login` int(8) DEFAULT NULL,
  `created` int(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Users`
--

INSERT INTO `Users` (`id`, `username`, `password`, `email`, `activated`, `email_activated`, `email_token`, `recovery_token`, `recovery_timestamp`, `avatar`, `birthday`, `last_login`, `created`) VALUES
(1, 'xexu', '2412fa40f4826387c893856d34972219', 'jlexposito7@gmail.com', 1, 1, 'HpppWT1bZivLkyC8N1yH6lDQiCfljKIL3LstrlMz', NULL, NULL, NULL, '0000-00-00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Users_has_Teams`
--

CREATE TABLE IF NOT EXISTS `Users_has_Teams` (
  `Users_id` int(11) NOT NULL,
  `Teams_id` int(11) NOT NULL,
  PRIMARY KEY (`Users_id`,`Teams_id`),
  KEY `fk_Users_has_Teams_Teams1` (`Teams_id`),
  KEY `fk_Users_has_Teams_Users` (`Users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Match`
--
ALTER TABLE `Match`
  ADD CONSTRAINT `fk_Match_Teams1` FOREIGN KEY (`Teams_id`) REFERENCES `Teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Torneos_has_Match`
--
ALTER TABLE `Torneos_has_Match`
  ADD CONSTRAINT `fk_Torneos_has_Match_Match1` FOREIGN KEY (`Match_id`) REFERENCES `Match` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Torneos_has_Match_Torneos1` FOREIGN KEY (`Torneos_id`) REFERENCES `Torneos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Torneos_has_Teams`
--
ALTER TABLE `Torneos_has_Teams`
  ADD CONSTRAINT `Torneos_has_Teams_ibfk_3` FOREIGN KEY (`Torneos_id`) REFERENCES `Torneos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Torneos_has_Teams_ibfk_4` FOREIGN KEY (`Teams_id`) REFERENCES `Teams` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `Users_has_Teams`
--
ALTER TABLE `Users_has_Teams`
  ADD CONSTRAINT `fk_Users_has_Teams_Teams1` FOREIGN KEY (`Teams_id`) REFERENCES `Teams` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Users_has_Teams_Users` FOREIGN KEY (`Users_id`) REFERENCES `Users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
