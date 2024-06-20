-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2024 a las 19:27:36
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ilab_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aulas`
--


CREATE TABLE `aulas` (
  `idK` bigint(10) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `isActivo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `aulas`
--

INSERT INTO `aulas` (`idK`, `nombre`, `isActivo`) VALUES
(1, 'K01', 1),
(2, 'K02', 1),
(3, 'K04', 1),
(4, 'CC8', 0),
(10, 'aulamagna', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computadora`
--

CREATE TABLE `computadora` (
  `idK` int(5) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `aula` varchar(5) NOT NULL,
  `caracteristicas` varchar(500) NOT NULL,
  `isActivo` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `computadora`
--

INSERT INTO `computadora` (`idK`, `nombre`, `aula`, `caracteristicas`, `isActivo`) VALUES
(1, 'A', 'k01', 'A', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfildetalle`
--

CREATE TABLE `perfildetalle` (
  `idk` bigint(20) NOT NULL,
  `idPerfil` int(11) NOT NULL,
  `idPermiso` int(11) NOT NULL,
  `consultar` int(11) NOT NULL,
  `insertar` int(11) NOT NULL,
  `actualizar` int(11) NOT NULL,
  `eliminar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `idk` bigint(20) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `isActivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `idk` bigint(20) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `idK` int(10) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `isActivo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticketdetalle`
--

CREATE TABLE `ticketdetalle` (
  `idK` int(10) NOT NULL,
  `id_computadora` int(10) NOT NULL,
  `fecha_registro` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `id_aula` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idK` bigint(20) NOT NULL,
  `userName` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `idPerfil` int(11) NOT NULL,
  `isActivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idK`, `userName`, `password`, `nombre`, `apellidos`, `correo`, `idPerfil`, `isActivo`) VALUES
(1, 'webadmin', 'sis123', 'administrador', 'de sistema', 'martin.anduaga@ues.mx', 1, 1),
(3, 'Laker', 'sis123', 'administrador', 'de sistema', 'joseluiscamachohernandez4@gmail.com', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`idK`);

--
-- Indices de la tabla `computadora`
--
ALTER TABLE `computadora`
  ADD PRIMARY KEY (`idK`);

--
-- Indices de la tabla `perfildetalle`
--
ALTER TABLE `perfildetalle`
  ADD PRIMARY KEY (`idk`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`idk`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`idk`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`idK`);

--
-- Indices de la tabla `ticketdetalle`
--
ALTER TABLE `ticketdetalle`
  ADD PRIMARY KEY (`idK`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idK`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aulas`
--
ALTER TABLE `aulas`
  MODIFY `idK` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `computadora`
--
ALTER TABLE `computadora`
  MODIFY `idK` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `perfildetalle`
--
ALTER TABLE `perfildetalle`
  MODIFY `idk` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `idk` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `idk` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `idK` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ticketdetalle`
--
ALTER TABLE `ticketdetalle`
  MODIFY `idK` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idK` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
