-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-08-2015 a las 17:41:34
-- Versión del servidor: 5.5.42-37.1
-- Versión de PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `liam_calendario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `body` text COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `class` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `start` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `end` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `body`, `url`, `class`, `start`, `end`) VALUES
(1, 'Reunión en Starbucks', 'Revisar sitio web.', 'http://leitmotif.cl/calendario/descripcion_evento.php?id=1', 'event-important', '1437235200000', '1437238800000'),
(2, 'HOLA MUNDO', 'HOLA MUNDO', 'http://leitmotif.cl/calendario/descripcion_evento.php?id=2', 'event-success', '1440703920000', '1440963120000'),
(3, 'Zorrón Poblete', 'WENA PERRITO LA ZORRA BAKÁN FILETE EJALÉ', 'http://leitmotif.cl/calendario/descripcion_evento.php?id=3', 'event-warning', '1441043640000', '1441475640000'),
(4, 'Aweonao', 'PICOOOOOOOOOOOOOOO', 'http://leitmotif.cl/calendario/descripcion_evento.php?id=4', 'event-info', '1441131120000', '1441645920000'),
(5, 'HOLA', 'aseaes', 'http://leitmotif.cl/calendario/descripcion_evento.php?id=5', 'event-warning', '1440526380000', '1440612780000'),
(6, 'gdfgdf', 'dfgdfg', 'http://leitmotif.cl/calendario/descripcion_evento.php?id=6', 'event-success', '1440526860000', '1440613260000'),
(7, 'TIQUI', 'JOJOJJOJO', 'http://leitmotif.cl/calendario/descripcion_evento.php?id=7', 'evento-privado', '1442339820000', '1442599020000'),
(8, 'rororo', 'losdkjflskdjflsk', 'http://leitmotif.cl/calendario/descripcion_evento.php?id=8', 'velada-romantica', '1442685480000', '1442771880000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
