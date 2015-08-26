-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-08-2015 a las 17:37:55
-- Versión del servidor: 5.5.42-37.1
-- Versión de PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `liam_gestioncrud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `rut` varchar(15) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`rut`, `nombre`, `apellidos`, `sexo`, `email`) VALUES
('17.174.648-5', 'Patricio', 'Contreras', 'Masculino', 'patrojascontreras@gmail.com'),
('6.499.884-6', 'Marcela', 'Perez Perez', 'Femenino', 'mperez64@gmail.com'),
('8.949.091-K', 'Diego Sebastian', 'Goncalves Morales', 'Femenino', 'dgoncalvesfutbol09@hotmail.com'),
('16.444.666-2', 'Marcos', 'Rojo Gutierrez', 'Masculino', 'mrojomu@gmail.com'),
('17.666.666-8', 'Juanito', 'Perez Perez', 'Masculino', 'juanitoperez89@hotmail.cl'),
('17.984.114-2', 'Victoria', 'Morales Vasquez', 'Femenino', 'abogadamorales@hotmail.cl'),
('17.224.984-1', 'Noelia', 'Mosquera Vega', 'Femenino', 'noeliamosquera70@gmail.com'),
('17.184.092-9', 'Jose Miguel', 'Gonzalez Morales', 'Masculino', 'jmgonzalez@hotmail.com'),
('16.214.666-1', 'Angelo Andres', 'Nieme Contreras', 'Masculino', 'drnieme@gmail.com'),
('15.982.873-5', 'Sebastian', 'Rozental Igualt', 'Masculino', 'sebarozental@directvsports.cl'),
('17.619.920-2', 'Felipe', 'Pino', 'Masculino', 'felipepinoredes@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`rut`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
