-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2026 a las 01:18:28
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blogejercicio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `articulo` text NOT NULL,
  `autor` varchar(100) NOT NULL,
  `fecha` datetime NOT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `editado` tinyint(1) DEFAULT 0,
  `fechaEdicion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `articulo`, `autor`, `fecha`, `categoria`, `editado`, `fechaEdicion`) VALUES
(5, 'LABORATORIO SEMANA 8 APLICACIONES DISTRIBUIDAS', 'Hoy nos dejaron hacer un blog con phpmyadmin', 'AQUINO RUMUALDO ANTONY JAMPOL', '2025-10-27 18:40:25', 'Cursos', 1, '0000-00-00 00:00:00'),
(7, 'LABORATORIO SEMANA 8 APLICACIONES DISTRIBUIDAS', 'Hoy nos hicieron hacer un blog y vincularlo a mysql', 'AQUINO RUMUALDO ANTONY JAMPOL', '2025-10-27 12:45:13', 'Cursos', 1, '0000-00-00 00:00:00'),
(8, 'HOLA', 'Prueba', 'AQUINO RUMUALDO ANTONY JAMPOL', '2025-10-27 12:48:58', 'Cursos', 0, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
