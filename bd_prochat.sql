-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-01-2017 a las 17:42:21
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_prochat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_mensajes`
--

CREATE TABLE `tb_mensajes` (
  `id_mensaje` int(11) NOT NULL,
  `mensaje` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `hora_mensaje` time DEFAULT NULL,
  `nick` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_mensajes`
--

INSERT INTO `tb_mensajes` (`id_mensaje`, `mensaje`, `hora_mensaje`, `nick`) VALUES
(1, 'hola', NULL, 'stmendozza'),
(2, 's', NULL, 'stmendozza'),
(3, 'sdsa', '01:32:05', 'stmendozza'),
(4, 'wewe', '01:32:12', 'stmendozza'),
(5, 'hola', '01:34:31', 'stmendozza'),
(6, 'sd', '01:47:16', 'stmendozza'),
(7, 'prueba', '01:47:50', 'stmendozza'),
(8, 'hola', '01:49:26', 'ulindas'),
(9, 'r', '01:50:11', 'ulindas'),
(10, 'bn', '01:50:21', 'stmendozza'),
(11, 'bn', '01:51:30', 'stmendozza'),
(12, 'hola', '01:52:06', 'ulindas'),
(13, 'hola', '01:52:27', 'stmendozza'),
(14, 'hola mami como estas', '02:03:12', 'stmendozza'),
(15, 'bn mijo', '02:03:30', 'ulindas'),
(16, 'chevere ', '02:03:44', 'ulindas'),
(17, 'prueba', '07:09:24', 'stmendozza'),
(18, 'hola', '12:59:58', 'stmendozza'),
(19, 'drgdff', '05:36:01', 'stmendozza'),
(20, 'hola', '04:22:50', 'stmendozza'),
(22, 'hola', '05:00:59', 'fernan'),
(24, 'hola', '05:05:56', 'mafe'),
(26, 'hols', '06:09:18', 'stmendozza'),
(27, 'hols', '06:13:52', 'stmendozza'),
(28, 'funciona', '06:13:59', 'stmendozza'),
(29, 'prueba', '06:14:35', 'stmendozza'),
(30, 'quiubo', '06:15:23', 'demon'),
(32, 's', '08:10:33', 'stmendozza'),
(33, 'hol', '02:31:30', 'stmendozza'),
(34, 'hola', '02:51:07', 'xxx'),
(35, 'fddf', '03:21:16', 'sdsdsd'),
(36, 'wsfd', '03:29:26', 'sd'),
(37, 'hdfgkd', '03:39:37', 'desedsse'),
(38, 'sdsdf', '04:09:45', 'stmendozza'),
(39, 'jsdnsfa', '04:10:27', 'stmendozza'),
(40, 'sdsdsd', '04:10:31', 'stmendozza'),
(41, 'dsdsds', '04:10:34', 'stmendozza'),
(42, 'sddss', '04:10:35', 'stmendozza'),
(43, 'dsdsd', '04:10:37', 'stmendozza'),
(44, 'DGVGSD', '04:43:29', 'stmendozza'),
(45, 'lkefjaskfjasfjsal', '09:29:24', 'stmendozza'),
(46, 'kuwehiekf', '09:30:02', 'ulinadassasd'),
(47, 'ksdkdlc', '10:40:40', 'stmendozza'),
(48, 'prueba', '11:15:26', 'stmendozza'),
(49, 'mas prueba', '11:18:43', 'stmendozza'),
(50, 'hoa', '11:19:25', 'stmendozza12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `nick` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contraseña` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`nick`, `nombre`, `contraseña`) VALUES
('1212', 'stmendozza', '1033752674'),
('d', 'w', '12345'),
('demon', 'danilo carrillo', '123456789'),
('desedsse', 'sdsd', 'sdsd'),
('fernan', 'fernando anzola', '12345'),
('jjjjjj', 'stmendozza', '1033752674'),
('mafe', 'maria fernanda', 'papito'),
('saas', 'stmendozza', '1033752674'),
('sd', 'MENDOZA', '3133957636'),
('sdsdd', 'stmendozza', '1033752674'),
('sdsdsd', 'ds', '12345'),
('stmendozz', 'df', 'sdsd'),
('stmendozza', 'cristhian mendoza', '1033752674'),
('stmendozza12', 'stmendozza', '12'),
('stmendozza2', 'cristhian danilo carrillo mendoza', 'mimama'),
('stmendozzadddssf', 'MENDOZA', '1234'),
('stmendozzaew', 'stmendozza', '1033752674'),
('stmendozzasdsd', '1033752674', '12345'),
('ulinadassasd', 'stmendozza', '1033752674'),
('ulindas', 'rosa elena mendoza', '35260166'),
('xxx', 'x', '1033752674');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_mensajes`
--
ALTER TABLE `tb_mensajes`
  ADD PRIMARY KEY (`id_mensaje`),
  ADD KEY `nick` (`nick`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`nick`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_mensajes`
--
ALTER TABLE `tb_mensajes`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_mensajes`
--
ALTER TABLE `tb_mensajes`
  ADD CONSTRAINT `tb_mensajes_ibfk_1` FOREIGN KEY (`nick`) REFERENCES `tb_usuarios` (`nick`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
