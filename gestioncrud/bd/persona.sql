-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 04-06-2015 a las 16:41:46
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `db_gestion_personas`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `persona`
-- 

CREATE TABLE `persona` (
  `rut` varchar(15) NOT NULL,
  `nombre` varchar(45) default NULL,
  `apellidos` varchar(45) default NULL,
  `sexo` varchar(15) default NULL,
  `email` varchar(100) default NULL,
  PRIMARY KEY  (`rut`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `persona`
-- 

INSERT INTO `persona` VALUES ('17.174.648-5', 'Patricio', 'Rojas Contreras', 'Masculino', 'patrojascontreras@gmail.com');
INSERT INTO `persona` VALUES ('6.499.884-6', 'Marcela', 'Perez Perez', 'Femenino', 'mperez64@gmail.com');
INSERT INTO `persona` VALUES ('8.949.091-K', 'Diego Sebastian', 'Goncalves Morales', 'Femenino', 'dgoncalvesfutbol09@hotmail.com');
INSERT INTO `persona` VALUES ('16.444.666-2', 'Marcos', 'Rojo Gutierrez', 'Masculino', 'mrojomu@gmail.com');
INSERT INTO `persona` VALUES ('17.666.666-8', 'Juanito', 'Perez Perez', 'Masculino', 'juanitoperez89@hotmail.cl');
INSERT INTO `persona` VALUES ('17.984.114-2', 'Victoria', 'Morales Vasquez', 'Femenino', 'abogadamorales@hotmail.cl');
INSERT INTO `persona` VALUES ('17.224.984-1', 'Noelia', 'Mosquera Vega', 'Femenino', 'noeliamosquera70@gmail.com');
INSERT INTO `persona` VALUES ('17.184.092-9', 'Jose Miguel', 'Gonzalez Morales', 'Masculino', 'jmgonzalez@hotmail.com');
INSERT INTO `persona` VALUES ('16.214.666-1', 'Angelo Andres', 'Nieme Contreras', 'Masculino', 'drnieme@gmail.com');
INSERT INTO `persona` VALUES ('15.982.873-5', 'Sebastian', 'Rozental Igualt', 'Masculino', 'sebarozental@directvsports.cl');
INSERT INTO `persona` VALUES ('16.734.664-2', 'Marisela', 'Santibanez Perez', 'Femenino', 'mariselasantibanez@hotmail.com');
