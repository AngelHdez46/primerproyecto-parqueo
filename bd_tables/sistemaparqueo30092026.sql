-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2026 a las 04:27:29
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
-- Base de datos: `sistemaparqueo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_rol`
--

CREATE TABLE `tb_rol` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_rol`
--

INSERT INTO `tb_rol` (`id_rol`, `nombre`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'ADMINISTRADOR', '2026-09-29 08:57:51', NULL, NULL, '1'),
(2, 'CONTADORES', '2026-09-29 09:09:03', '2026-09-29 09:15:43', '2026-09-29 09:18:26', '0'),
(3, 'CONTADOR', '2026-09-29 09:27:21', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verificado` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nombres`, `email`, `email_verificado`, `contrasena`, `token`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'Angel Hernandez', 'angel@gmail.com', 'Si', '987654321', NULL, '2026-09-20 21:56:15', '2026-09-29 06:42:36', NULL, '1'),
(3, 'Sofia Avila', 'sofi@gmail.com', 'si', '123456789', NULL, '2026-09-28 19:30:42', NULL, NULL, '1'),
(4, 'Benjamon Navarrete', 'benja@gmail.com', NULL, '123456789', NULL, '2026-09-28 09:52:50', NULL, '2026-09-29 07:32:32', '0'),
(6, 'Tony', 'tony@gmail.com', NULL, '123456789', NULL, '2026-09-28 09:52:50', NULL, NULL, '1'),
(9, 'sid el perez', 'sid@gmail.com', NULL, '123456789', NULL, '2026-09-28 09:55:48', NULL, NULL, '1'),
(10, 'Mango', 'mango@gmail.com', NULL, '123456789', NULL, '2026-09-28 09:56:44', NULL, NULL, '1'),
(11, 'Limon', 'limon@gmail.com', NULL, '123456789', NULL, '2026-09-28 09:57:11', NULL, NULL, '1'),
(12, 'Jicama', 'Jicama@gmail.com', NULL, '123456789', NULL, '2026-09-28 09:58:15', NULL, NULL, '1'),
(13, 'Cocardo', 'coca@gmail.com', NULL, '123456789', NULL, '2026-09-28 10:00:46', NULL, NULL, '1'),
(14, 'Dionisio', 'dio@gmail.com', NULL, '123456789', NULL, '2026-09-28 10:01:28', NULL, NULL, '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_rol`
--
ALTER TABLE `tb_rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_rol`
--
ALTER TABLE `tb_rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
