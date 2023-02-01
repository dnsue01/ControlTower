-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2022 a las 02:04:18
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `Id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`Id_usuario`) VALUES
(16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estandar`
--

CREATE TABLE `estandar` (
  `Id_estandar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estandar`
--

INSERT INTO `estandar` (`Id_estandar`) VALUES
(19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estandarytest`
--

CREATE TABLE `estandarytest` (
  `Id_test` int(11) NOT NULL,
  `proteccion` varchar(250) NOT NULL,
  `puntuacion` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estandarytest`
--

INSERT INTO `estandarytest` (`Id_test`, `proteccion`, `puntuacion`) VALUES
(1, '62c1c489a83e0', 50),
(1, '62c1c489a83e0', 50),
(1, '62c1c489a83e0', 33),
(1, '62c1c489a83e0', 33),
(1, '62c1c489a83e0', 33),
(1, '62c1c489a83e0', 33),
(1, '62c1c489a83e0', 50),
(1, '62c1c489a83e0', 0),
(1, '62c1c489a83e0', 50),
(1, '62c1c489a83e0', 0),
(1, '62c1c489a83e0', 67),
(1, '62c1c489a83e0', 33),
(1, '62c1c489a83e0', 33),
(1, '62c1c489a83e0', 67),
(1, '62c1c489a83e0', 0),
(1, '62c1c489a83e0', 0),
(1, '62c1c489a83e0', 33),
(1, '62c1c489a83e0', 33),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 0),
(1, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 100),
(1, '62c1c489a83e0', 0),
(1, '62c1c489a83e0', 0),
(1, '62c1c489a83e0', 33),
(3, '62c1c489a83e0', 100),
(3, '62c1c489a83e0', 0),
(1, '62c1c489a83e0', 67),
(1, '62c1c489a83e0', 0),
(1, '62c1c489a83e0', 100),
(1, '62c1c489a83e0', 33),
(1, '62c1c489a83e0', 33),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 100),
(1, '62c1c489a83e0', 0),
(1, '62c1c489a83e0', 33),
(1, '62c1c489a83e0', 0),
(1, '62c1c489a83e0', 0),
(1, '62c1c489a83e0', 33),
(3, '62c1c489a83e0', 100),
(3, '62c1c489a83e0', 100),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 200),
(3, '62c1c489a83e0', 100),
(3, '62c1c489a83e0', 22),
(3, '62c1c489a83e0', 89),
(3, '62c1c489a83e0', 44),
(3, '62c1c489a83e0', 100),
(3, '62c1c489a83e0', 50),
(3, '62c1c489a83e0', 100),
(3, '62c1c489a83e0', 100),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 50),
(3, '62c1c489a83e0', 100),
(3, '62c1c489a83e0', 50),
(3, '62c1c489a83e0', 50),
(3, '62c1c489a83e0', 50),
(3, '62c1c489a83e0', 50),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 100),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 50),
(3, '62c1c489a83e0', 50),
(3, '62c1c489a83e0', 50),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 50),
(3, '62c1c489a83e0', 50),
(1, '62c1c489a83e0', 67),
(3, '62c1c489a83e0', 50),
(3, '62c1c489a83e0', 50),
(3, '62c1c489a83e0', 0),
(1, '62c1c489a83e0', 0),
(1, '62c1c489a83e0', 0),
(1, '62c1c489a83e0', 100),
(3, '62c1c489a83e0', 160),
(3, '62c1c489a83e0', 240),
(3, '62c1c489a83e0', 160),
(3, '62c1c489a83e0', 20),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 200),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 300),
(3, '62c1c489a83e0', 100),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 100),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 100),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 50),
(3, '62c1c489a83e0', 100),
(3, '62c1c489a83e0', 100),
(3, '62c1c489a83e0', 100),
(3, '62c1c489a83e0', 50),
(3, '62c1c489a83e0', 0),
(3, '62c1c489a83e0', 100),
(3, '62c1c489a83e0', 50),
(3, '62c1c489a83e0', 100),
(3, '62e3b639d7d4e', 100),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 100),
(3, '62e3b639d7d4e', 0),
(1, '62e3b639d7d4e', 0),
(1, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 50),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 50),
(3, '62e3b639d7d4e', 33),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 33),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 33),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 67),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 33),
(3, '62e3b639d7d4e', 0),
(1, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 33),
(3, '62e3b639d7d4e', 0),
(3, '62e3b639d7d4e', 0),
(1, '62e3b639d7d4e', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `Id_pregunta` int(11) NOT NULL,
  `texto` varchar(250) NOT NULL,
  `Img` varchar(250) NOT NULL,
  `ayuda` varchar(250) DEFAULT NULL,
  `id_test` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`Id_pregunta`, `texto`, `Img`, `ayuda`, `id_test`) VALUES
(11, 'Which aircraft will land first?', '62e278eb625fd.png', NULL, 1),
(12, 'Which aircraft will be the last to land?', '62e279834cad7.png', NULL, 1),
(13, 'Which aircraft will be the last to land?', '62e27f3a370b4.png', '*RULE*  Slow aircraft are prioritised', 1),
(14, 'primera', '62e2853a66e6b.png', NULL, 3),
(15, 'segunda', '62e2854cdfb65.png', NULL, 3),
(18, 'prueba editada', '62ed534d8162f.png', 'hola editada', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `Id_respuesta` int(11) NOT NULL,
  `texto` varchar(250) NOT NULL,
  `tipo` tinyint(1) NOT NULL,
  `img` varchar(250) DEFAULT NULL,
  `Id_pregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`Id_respuesta`, `texto`, `tipo`, `img`, `Id_pregunta`) VALUES
(31, 'AIRCRAFT 30', 1, NULL, 11),
(32, 'AIRCRAFT 50', 0, NULL, 11),
(33, 'ALTERNATE AEROD.', 0, NULL, 11),
(34, ' NO AIRCRAFT LANDS', 0, NULL, 11),
(35, 'AIRCRAFT 30', 0, NULL, 12),
(36, 'AIRCRAFT 50', 1, NULL, 12),
(37, 'ALTERNATE AERODROME', 0, NULL, 12),
(38, 'NO AIRCRAFT LANDS', 0, NULL, 12),
(39, 'AIRCRAFT 40', 1, NULL, 13),
(40, 'AIRCRAFT 20', 0, NULL, 13),
(41, 'ARCFT 20 LANDS AT ALT AD', 0, NULL, 13),
(42, 'ARCFT 40 LANDS AT ALT AD', 0, NULL, 13),
(43, 'primera', 0, '62e28ac2ba571.png', 14),
(44, 'segunda', 0, '62e28adf34212.png', 14),
(45, 'tercera', 0, '62e28aee7af06.png', 14),
(46, 'cuarta', 1, '62e28b043e406.png', 14),
(47, '5', 1, '62e28b7014ae7.png', 14),
(48, '6', 0, '62e28b87320cf.png', 14),
(49, '7', 0, '62e28b98e0792.png', 14),
(50, '8', 0, '62e28ba5d6708.png', 14),
(51, '10', 1, '62e28bced1c1b.png', 15),
(52, '11', 0, '62e28bced1c1b.png', 15),
(53, '12', 0, '62e28bf376a47.png', 15),
(54, '13', 0, '62e28c0988641.png', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

CREATE TABLE `test` (
  `Id_test` int(11) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `tipo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `test`
--

INSERT INTO `test` (`Id_test`, `Nombre`, `tipo`) VALUES
(1, 'Planning', 0),
(3, 'Aircrafts', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_usuario` int(11) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Correo` varchar(250) NOT NULL,
  `Contrasenna` varchar(250) NOT NULL,
  `Proteccion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_usuario`, `Nombre`, `Correo`, `Contrasenna`, `Proteccion`) VALUES
(16, 'admin', 'admin@gmail.com', '79636988306ad2f23ceba6cf32ad85ff', '62cd7c77d232b'),
(19, 'daniel', 'danielnsuemartinez@gmail.com', 'c86801e158b40f9d98d576df39c09a92', '62e3b639d7d4e');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- Indices de la tabla `estandar`
--
ALTER TABLE `estandar`
  ADD KEY `Id_estandar` (`Id_estandar`);

--
-- Indices de la tabla `estandarytest`
--
ALTER TABLE `estandarytest`
  ADD KEY `Id_test` (`Id_test`),
  ADD KEY `estandarytest_ibfk_2` (`proteccion`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`Id_pregunta`),
  ADD KEY `id_test` (`id_test`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`Id_respuesta`),
  ADD KEY `respuesta_ibfk_1` (`Id_pregunta`);

--
-- Indices de la tabla `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`Id_test`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `Id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `Id_respuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `test`
--
ALTER TABLE `test`
  MODIFY `Id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario` (`Id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estandar`
--
ALTER TABLE `estandar`
  ADD CONSTRAINT `estandar_ibfk_1` FOREIGN KEY (`Id_estandar`) REFERENCES `usuario` (`Id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estandarytest`
--
ALTER TABLE `estandarytest`
  ADD CONSTRAINT `estandarytest_ibfk_1` FOREIGN KEY (`Id_test`) REFERENCES `test` (`Id_test`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `pregunta_ibfk_1` FOREIGN KEY (`id_test`) REFERENCES `test` (`Id_test`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `respuesta_ibfk_1` FOREIGN KEY (`Id_pregunta`) REFERENCES `pregunta` (`Id_pregunta`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
