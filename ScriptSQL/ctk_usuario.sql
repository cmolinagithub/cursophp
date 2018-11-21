-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-11-2018 a las 21:34:34
-- Versión del servidor: 5.5.56-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbctk`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ctk_usuario`
--

CREATE TABLE IF NOT EXISTS `ctk_usuario` (
  `id` int(11) NOT NULL COMMENT 'es un dato seuenial',
  `tipo` varchar(2) NOT NULL COMMENT 'tipo usuario es externo, interno, temporarl, etc: Externo->EX; Interno->IN; Temporal ->TM, etc',
  `tipo_identificacion` varchar(4) NOT NULL,
  `numero_identificacion` varchar(15) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `razon_social` varchar(250) NOT NULL,
  `codigo` varchar(8) NOT NULL,
  `direccion` varchar(500) NOT NULL,
  `telefono1` varchar(15) NOT NULL,
  `telefono2` varchar(15) DEFAULT NULL,
  `celular1` varchar(15) NOT NULL,
  `celular2` varchar(15) DEFAULT NULL,
  `email1` varchar(255) NOT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `fehca_nacimiento` date NOT NULL,
  `profesion` varchar(100) DEFAULT NULL,
  `actividades` varchar(500) DEFAULT NULL,
  `rol` varchar(50) NOT NULL COMMENT 'es para identificar el departamento del usuario interno, TECNICO, PRIYECTOS, ADMINI',
  `fecha_registro` datetime NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `clave` varchar(15) NOT NULL,
  `repetir_clave` varchar(15) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='tabla del usuario externos e internos';

--
-- Volcado de datos para la tabla `ctk_usuario`
--

INSERT INTO `ctk_usuario` (`id`, `tipo`, `tipo_identificacion`, `numero_identificacion`, `apellidos`, `nombres`, `razon_social`, `codigo`, `direccion`, `telefono1`, `telefono2`, `celular1`, `celular2`, `email1`, `email2`, `fehca_nacimiento`, `profesion`, `actividades`, `rol`, `fecha_registro`, `descripcion`, `clave`, `repetir_clave`, `estado`) VALUES
(1, 'IN', 'CI', '0401573100', 'MOLINA BASTIDAS', 'CARLOS VLADIMIR', 'CARLOS VLADIMIR MOLINA BASTIDAS', 'CMOLINA', 'CONOCOTO-QUITO:  REMIGIO CRESPO TORAL Y ORIENTE ', '062604886', NULL, '0994284596', NULL, 'CMOLINABASTIDAS@GMAIL.COM', NULL, '1984-05-20', 'INGENIERO EN SISTEMAS', 'SISTEMAS ', 'PROYECTOS', '2018-11-05 03:05:07', 'DESARROLLO', '194907', '194907', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ctk_usuario`
--
ALTER TABLE `ctk_usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cod_unico` (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ctk_usuario`
--
ALTER TABLE `ctk_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'es un dato seuenial',AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
