-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-08-2015 a las 16:03:10
-- Versión del servidor: 5.5.42-37.1
-- Versión de PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `liam_suparobo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE IF NOT EXISTS `juegos` (
  `id` tinyint(4) NOT NULL,
  `titulo` varchar(55) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `plataforma` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(4) NOT NULL,
  `link` varchar(125) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id`, `titulo`, `plataforma`, `year`, `link`) VALUES
(1, 'Super Robot Taisen', 'Gameboy', 1991, 'http://leitmotif.cl/suparobo/uploads/Super%20Robot%20Taisen%20(Japan).zip'),
(2, 'Super Robot Taisen 2', 'Famicon', 1991, 'http://leitmotif.cl/suparobo/uploads/Dai-2-Ji%20-%20Super%20Robot%20Taisen%20(Japan).zip'),
(3, 'Super Robot Taisen 3', 'Super Famicon', 1993, 'http://leitmotif.cl/suparobo/uploads/Dai-3-ji%20Super%20Robot%20Taisen%20(Japan)%20%5bEn%20by%20Aeon%20Genesis%20v1.0%5d%20(-'),
(4, 'Super Robot Taisen EX', 'Super Famicon', 1994, ''),
(5, 'Super Robot Taisen 4', 'Super Famicon', 1995, ''),
(6, 'Super Robot Taisen Gaiden: Masoukishin', 'Super Famicon', 1996, ''),
(8, 'Super Robot Taisen: Advance', 'GameboyAdvance', 2001, ''),
(9, 'Super robot taisen: A Portable', 'PSP', 2008, ''),
(10, 'Super Robot Taisen: MX', 'PS2', 2004, ''),
(11, 'Super Robot Taisen: MX Portable', 'PSP', 2005, ''),
(12, 'Super Robot Taisen: Original Generation', 'GameboyAdvance', 2002, ''),
(13, 'Super Robot Taisen: Original Generation2', 'GameboyAdvance', 2005, ''),
(14, 'Super Robot Taisen: Original Generations', 'PS2', 2007, ''),
(15, 'Super Robot Taisen: Original Generations Gaiden', 'PS2', 2007, ''),
(17, 'Super Robot Taisen Neo', 'Playstation', 1995, ''),
(18, 'Super Robot Taisen F', 'Sega Saturn', 1996, ''),
(22, 'Super Robot Taisen F Final', 'Sega Saturn', 1998, ''),
(23, 'Super Robot Taisen Compact', 'Wonderswan', 1999, ''),
(24, 'Super Robot Taisen 64', 'Nintendo 64', 1999, ''),
(25, 'Super Robot Taisen Compact 2 Part 1: Earth Crisis', 'Wonderswan', 2000, ''),
(26, 'Super Robot Taisen Alpha', 'Playstation', 2000, ''),
(27, 'Super Robot Taisen Compact 3', 'Wonderswan', 2003, ''),
(28, 'Super robot Taisen: Z2', 'PSP', 2012, ''),
(31, 'Super Robot Taisen Compact 2 Part 3: Galaxy Showdown', 'Wonderswan', 2001, ''),
(32, 'Super Robot Taisen: Alpha', 'PSX, PS1', 2000, ''),
(33, 'Super Robot Taisen: Alpha 2', 'PS2', 2003, ''),
(34, 'Super Robot Taisen: Alpha 3 To the of the galaxy', 'PS2', 2005, ''),
(35, 'Super Robot Taisen: Alpha Gaiden', 'PS2', 2001, ''),
(36, '2nd Super Robot Taisen : Original Generations', 'PS3', 2012, ''),
(37, 'Super Robot Taisen Alpha Gaiden', 'Playstation', 2001, ''),
(38, 'Super Robot Taisen R', 'Gameboy Advance', 2002, ''),
(59, 'sdfsdf', 'sdfsdf', 123213, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagehits`
--

CREATE TABLE IF NOT EXISTS `pagehits` (
  `pageid` int(10) NOT NULL,
  `pagename` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `pagehits` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'jorge', 'password');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagehits`
--
ALTER TABLE `pagehits`
  ADD PRIMARY KEY (`pageid`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT de la tabla `pagehits`
--
ALTER TABLE `pagehits`
  MODIFY `pageid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
