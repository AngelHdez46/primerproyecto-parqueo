-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2026 a las 22:08:53
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
-- Estructura de tabla para la tabla `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(255) DEFAULT NULL,
  `nit_ci` varchar(255) DEFAULT NULL,
  `placa_auto` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_clientes`
--

INSERT INTO `tb_clientes` (`id_cliente`, `nombre_cliente`, `nit_ci`, `placa_auto`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'Juan Perez', 'XAXX01010100', '1233TYU', '2026-10-01 22:28:49', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_informaciones`
--

CREATE TABLE `tb_informaciones` (
  `id_informacion` int(11) NOT NULL,
  `nombre_parqueo` varchar(255) DEFAULT NULL,
  `actividad_empresa` varchar(255) DEFAULT NULL,
  `sucursal` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `zona` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `pais` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_informaciones`
--

INSERT INTO `tb_informaciones` (`id_informacion`, `nombre_parqueo`, `actividad_empresa`, `sucursal`, `direccion`, `zona`, `telefono`, `ciudad`, `pais`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'SISTEMA DE PARQUEO BY ANGEL HD', 'SERVICIO DE PARQUEO', '1', 'AVENIDA DEL GOLFO NRO 146', 'MAS MENOS CERCANA', '9841234567', 'PLAYA DEL CARMEN', 'QUINTANA ROO', '2026-10-04 01:42:29', '2026-10-04 02:26:28', '2026-10-04 02:39:59', '0'),
(2, 'SISTEMA DE PARQUEO BY ANGEL HD', 'SERVICIO DE PARQUEO', '1', 'AVENIDA DEL GOLFO NRO 146', 'MUY MUY LEJANA', '9841234567', 'PLAYA DEL CARMEN', 'QUINTANA ROO', '2026-10-04 02:23:16', '2026-10-04 02:23:52', NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_mapeos`
--

CREATE TABLE `tb_mapeos` (
  `id_map` int(11) NOT NULL,
  `nro_espacio` varchar(255) DEFAULT NULL,
  `estado_espacio` varchar(255) DEFAULT NULL,
  `observacion` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_mapeos`
--

INSERT INTO `tb_mapeos` (`id_map`, `nro_espacio`, `estado_espacio`, `observacion`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, '1', 'OCUPADO', NULL, '2026-10-01 18:32:51', NULL, NULL, '1'),
(2, '2', 'OCUPADO', NULL, '2026-10-01 07:03:36', NULL, NULL, '1'),
(3, '3', 'OCUPADO', NULL, '2026-10-01 07:03:37', NULL, NULL, '1'),
(4, '4', 'OCUPADO', NULL, '2026-10-01 07:04:18', NULL, NULL, '1'),
(5, '5', 'OCUPADO', NULL, '2026-10-01 07:11:41', NULL, NULL, '1'),
(6, '6', 'OCUPADO', 'Ninguna', '2026-10-01 07:14:26', NULL, NULL, '1'),
(7, '7', 'LIBRE', 'Ninguno', '2026-10-01 07:16:00', NULL, NULL, '1'),
(8, '8', 'LIBRE', 'No', '2026-10-01 07:16:53', NULL, NULL, '1'),
(9, '9', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(10, '10', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(11, '11', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(12, '12', 'OCUPADO', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(13, '13', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(14, '14', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(15, '15', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(16, '16', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(17, '17', 'OCUPADO', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(18, '18', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(19, '19', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(20, '20', 'OCUPADO', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(21, '21', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(22, '22', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(23, '23', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(24, '24', 'OCUPADO', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(25, '25', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(26, '26', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(27, '27', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(28, '28', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(29, '29', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(30, '30', 'LIBRE', 'No', '2026-10-01 19:18:46', NULL, NULL, '1'),
(31, '31', 'LIBRE', '', '2026-10-01 07:39:29', NULL, NULL, '1'),
(32, '32', 'LIBRE', '', '2026-10-01 07:39:34', NULL, NULL, '1'),
(33, '33', 'LIBRE', '', '2026-10-01 07:39:37', NULL, NULL, '1'),
(34, '34', 'LIBRE', '', '2026-10-01 08:14:44', NULL, NULL, '1'),
(35, '35', 'LIBRE', '', '2026-10-01 08:14:50', NULL, NULL, '1');

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
(3, 'CONTADOR', '2026-09-29 09:27:21', NULL, NULL, '1'),
(4, 'OPERADOR', '2026-09-29 09:31:53', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `rol` varchar(255) DEFAULT NULL,
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

INSERT INTO `tb_usuarios` (`id`, `nombres`, `rol`, `email`, `email_verificado`, `contrasena`, `token`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'Angel Hernandez', 'ADMINISTRADOR', 'angel@gmail.com', 'Si', '987654321', NULL, '2026-09-20 21:56:15', '2026-09-29 06:42:36', NULL, '1'),
(3, 'Sofia Avila', 'CONTADOR', 'sofi@gmail.com', 'si', '123456789', NULL, '2026-09-28 19:30:42', NULL, NULL, '1'),
(4, 'Benjamon Navarrete', NULL, 'benja@gmail.com', NULL, '123456789', NULL, '2026-09-28 09:52:50', NULL, '2026-09-29 07:32:32', '0'),
(6, 'Tony', 'OPERADOR', 'tony@gmail.com', NULL, '123456789', NULL, '2026-09-28 09:52:50', NULL, NULL, '1'),
(9, 'sid el perez', NULL, 'sid@gmail.com', NULL, '123456789', NULL, '2026-09-28 09:55:48', NULL, NULL, '1'),
(10, 'Mango', NULL, 'mango@gmail.com', NULL, '123456789', NULL, '2026-09-28 09:56:44', NULL, NULL, '1'),
(11, 'Limon', NULL, 'limon@gmail.com', NULL, '123456789', NULL, '2026-09-28 09:57:11', NULL, NULL, '1'),
(12, 'Jicama', NULL, 'Jicama@gmail.com', NULL, '123456789', NULL, '2026-09-28 09:58:15', NULL, NULL, '1'),
(13, 'Cocardo', NULL, 'coca@gmail.com', NULL, '123456789', NULL, '2026-09-28 10:00:46', NULL, NULL, '1'),
(14, 'Dionisio', NULL, 'dio@gmail.com', NULL, '123456789', NULL, '2026-09-28 10:01:28', NULL, NULL, '0'),
(15, 'Pedro Marmol', NULL, 'pedro@gmail.com', NULL, '123456pedro', NULL, '2026-09-30 10:19:19', NULL, NULL, '1'),
(16, 'Juventino Cruz', NULL, 'juve@gmail.com', NULL, '1234juve', NULL, '2026-09-30 10:19:55', NULL, NULL, '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `tb_informaciones`
--
ALTER TABLE `tb_informaciones`
  ADD PRIMARY KEY (`id_informacion`);

--
-- Indices de la tabla `tb_mapeos`
--
ALTER TABLE `tb_mapeos`
  ADD PRIMARY KEY (`id_map`);

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
-- AUTO_INCREMENT de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_informaciones`
--
ALTER TABLE `tb_informaciones`
  MODIFY `id_informacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_mapeos`
--
ALTER TABLE `tb_mapeos`
  MODIFY `id_map` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `tb_rol`
--
ALTER TABLE `tb_rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
