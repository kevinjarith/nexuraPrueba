-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2021 a las 01:10:17
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nexura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `idareas` int(11) NOT NULL COMMENT 'Identificador de la tabla area',
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre del area a la que pertenece el empleado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`idareas`, `nombre`) VALUES
(1, 'Tecnologia'),
(2, 'Recursos Humanas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL COMMENT 'Identificador del empleado',
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre completo del Empleado, Campo tipo Text. solo debe permitir letras con o sin tilde y espacios. No se admiten Caracteres especiales ni numeros. Obligatorio',
  `email` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Correo electronico del empleado. Campo de tipo Text|Email. solo permite una estructura de correo. Obligatorio',
  `sexo` char(1) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Campo de tipo Radio Button. m para Masculino. F para Femenino. Obligatorio',
  `area_id` int(11) NOT NULL COMMENT 'Area de la empresa a la que pertenece el empleado. Campo select. Obligatorio',
  `boletin` int(11) NOT NULL COMMENT '1 para Recibir boletin, 0 para no recibir boletin Campo de tipo Checkbok. Opcional',
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Se describe la experiencia del empleado. Campo de Tipo textarea. Obligatorio'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `email`, `sexo`, `area_id`, `boletin`, `descripcion`) VALUES
(1, 'asfasf', 'kevinjarith031016@gmail.com', '', 0, 0, '0'),
(2, 'asf', 'neilfernan611@gmail.com', '', 0, 0, '0'),
(3, 'asf', 'kevinjarith031016@gmail.com', '', 0, 0, '0'),
(4, 'asfasf', 'kevinjarith031016@gmail.com', '', 0, 0, '0'),
(5, 'asffasasf', 'kevinjarith031016@gmail.com', 'F', 0, 0, 'safasf'),
(10, '', '', '', 0, 0, ''),
(11, 'asfasf', 'neilfernan611@gmail.com', 'F', 2, 0, 'safasf'),
(12, 'pedro', 'saf@gmail.com', 'M', 1, 0, 'Pilas'),
(13, 'pilas', 'saf@gmail.com', 'M', 1, 1, 'pilas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_rol`
--

CREATE TABLE `empleado_rol` (
  `empleado_id` int(11) NOT NULL COMMENT 'Identificador del empleado',
  `rol_id` int(11) NOT NULL COMMENT 'Identificador de rol'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `empleado_rol`
--

INSERT INTO `empleado_rol` (`empleado_id`, `rol_id`) VALUES
(1, 2),
(2, 2),
(3, 1),
(4, 2),
(5, 3),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 0),
(11, 1),
(12, 1),
(13, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL COMMENT 'Identificador del rol',
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre del rol'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'Profesional de proyectos - Desarrollador'),
(2, 'Gerente estrategico'),
(3, 'Auxiliar administrativo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`idareas`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado_rol`
--
ALTER TABLE `empleado_rol`
  ADD PRIMARY KEY (`empleado_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `idareas` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla area', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del empleado', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador del rol', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
