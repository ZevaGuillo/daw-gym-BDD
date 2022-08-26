-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2022 a las 02:36:45
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `conexion_gym_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id` int(11) NOT NULL,
  `art_nombre` varchar(25) DEFAULT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `cedula` int(10) DEFAULT NULL,
  `correo` varchar(25) DEFAULT NULL,
  `direccion` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id`, `art_nombre`, `nombre`, `apellido`, `cedula`, `correo`, `direccion`) VALUES
(2, 'mancuerna', 'Fernando', 'FDFFFSDF', 955188941, 'nandocse', 'dsdsddsdsds'),
(3, 'pesarusa', 'Fernando', 'FDFFFSDF', 0, 'asasaasasa', 'dsdsddsdsds'),
(4, 'mancuerna', 'FSSFSDFS', 'Marcillo', 955188941, 'nandocse', 'dsdsddsdsds'),
(5, 'mancuerna', 'FSSFSDFS', 'Marcillo', 955188941, 'nandocse', 'dsdsddsdsds'),
(7, 'pesarusa', 'Fernando', 'Marcillo', 909676751, 'nandocse', 'GALLEGOS LARA'),
(8, 'cuerda', 'Fernando', 'Marcillo', 0, 'asasaasasa', 'GALLEGOS LARA'),
(9, 'mancuerna', 'Fernando', 'Marcillo', 955188941, 'nandocse', 'GALLEGOS LARA'),
(10, 'mancuerna', 'Fernando', 'Marcillo', 955188941, 'nandocse', 'GALLEGOS LARA'),
(11, 'mancuerna', 'Fernando', 'Marcillo', 0, 'asasaasasa', 'dsdsddsdsds'),
(12, 'mancuerna', 'Fernando', 'Marcillo', 955188941, 'asasaasasa', 'dsdsddsdsds'),
(13, 'mancuerna', 'Fernando', 'Marcillo', 955188941, 'asasaasasa', 'dsdsddsdsds'),
(14, 'mancuerna', 'Fernando', 'Marcillo', 0, 'nandocse', 'GALLEGOS LARA'),
(15, 'mancuerna', 'FSSFSDFS', 'Marcillo', 955188941, 'nandocse', 'dsdsddsdsds'),
(16, 'mancuerna', 'Fernando', 'Marcillo', 955188941, 'asasaasasa', 'dsdsddsdsds'),
(17, 'mancuerna', 'Fernando', 'FDFFFSDF', 955188941, 'asasaasasa', 'dsdsddsdsds'),
(18, 'mancuerna', 'FSSFSDFS', 'Marcillo', 955188941, 'asasaasasa', 'GALLEGOS LARA'),
(19, 'mancuerna', 'FSSFSDFS', 'Marcillo', 0, 'nandocse', 'dsdsddsdsds'),
(20, 'mancuerna', 'FSSFSDFS', 'Marcillo', 955188941, 'nandocse', 'dsdsddsdsds'),
(21, 'mancuerna', 'FSSFSDFS', 'Marcillo', 955188941, 'nandocse', 'dsdsddsdsds'),
(22, 'mancuerna', 'reteterteter', 'trtertertrtr', 0, 'rtrtertretret', 'tertetrtertret'),
(0, 'mancuerna', 'PACMAN', 'asdf', 2134, 'sf', 'sdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `mensaje` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `telefono`, `email`, `asunto`, `mensaje`) VALUES
(1, 'guillermo', 9444, 'guillo@gmail.com', 'Prueba ', 'quiero probar esto'),
(3, 'David ', 434543, 'guielrmo@g.com', 'Comer', 'Comer rikco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nosotros`
--

CREATE TABLE `nosotros` (
  `id` int(12) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `pagoMensual` int(20) NOT NULL,
  `fecha` date NOT NULL,
  `objetivos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `prd_id` int(11) NOT NULL,
  `prd_nombre` varchar(45) DEFAULT NULL,
  `prd_valor` float DEFAULT NULL,
  `prd_cantidad` int(11) DEFAULT NULL,
  `prd_estado` varchar(3) DEFAULT NULL,
  `prd_codigo_proveedor_producto` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`prd_id`, `prd_nombre`, `prd_valor`, `prd_cantidad`, `prd_estado`, `prd_codigo_proveedor_producto`) VALUES
(2, 'Joe', 2, 1, '1', '100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripcion`
--

CREATE TABLE `suscripcion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `edad` int(3) NOT NULL,
  `genero` varchar(60) NOT NULL,
  `plan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `suscripcion`
--

INSERT INTO `suscripcion` (`id`, `nombre`, `apellido`, `edad`, `genero`, `plan`) VALUES
(1, 'Joe', '0', 21, 'Masculino', 'MENSUAL'),
(2, 'Joe', 'Velez', 21, 'Masculino', 'ANUAL');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`prd_id`);

--
-- Indices de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `prd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
