-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2022 a las 04:15:54
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `desarrollo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id_tipo` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id_tipo`, `descripcion`) VALUES
(1, 'Cedula'),
(2, 'Pasaporte'),
(3, 'Tarjeta de Identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `ID` int(11) NOT NULL,
  `FICHA` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`ID`, `FICHA`) VALUES
(1, 'SADFASDMNFMASDN'),
(2, 'Hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materias` int(11) NOT NULL,
  `nom_materias` varchar(20) DEFAULT NULL,
  `cant_estudiantes_materia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materias`, `nom_materias`, `cant_estudiantes_materia`) VALUES
(1, 'Español', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta_materia`
--

CREATE TABLE `pregunta_materia` (
  `id_pregunta` int(11) NOT NULL,
  `Pregunta_materia` varchar(200) DEFAULT NULL,
  `id_materias` int(11) NOT NULL,
  `numero` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pregunta_materia`
--

INSERT INTO `pregunta_materia` (`id_pregunta`, `Pregunta_materia`, `id_materias`, `numero`) VALUES
(1, 'Pregunta 1', 1, '1997896452');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_tipo` int(11) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `id_semestre` int(11) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_tipo`, `numero`, `usuario`, `apellido`, `id_semestre`, `telefono`, `correo`, `password`) VALUES
(1, '0', 'Administrador', 'UCC', 1, '5895968', 'administrador@ucc.com.co', 'administradorucc'),
(1, '1001203380', 'Kenner Stivens', 'Ruiz Tangarife', 5, '3208343970', 'kenner.ruiz@campusucc.edu.co', '123'),
(1, '123', 'asdkfj', 'sdkjaf', 5, '2103818237', 'sdahgjhda@campusucc.edu.co', '12837219837'),
(3, '1997896452', 'Mariana Alejandra', 'Pinzon Restrepo', 2, '3125986741', 'mariana.pinzon@ucc.com', '12345'),
(2, 'ZAB00524', 'Juan Carlos', 'Perez Cardozo', 10, '3115986778', 'carlos.p@ucc.com.co', '47474');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_pregunta_materia`
--

CREATE TABLE `respuesta_pregunta_materia` (
  `id_respuesta` int(11) NOT NULL,
  `Respuesta_Pregunta` varchar(200) DEFAULT NULL,
  `id_pregunta` int(11) NOT NULL,
  `numero` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuesta_pregunta_materia`
--

INSERT INTO `respuesta_pregunta_materia` (`id_respuesta`, `Respuesta_Pregunta`, `id_pregunta`, `numero`) VALUES
(1, 'Respuesta 1', 1, '1997896452'),
(2, 'Respuesta 2', 1, 'ZAB00524');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE `semestre` (
  `id_semestre` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `semestre`
--

INSERT INTO `semestre` (`id_semestre`, `descripcion`) VALUES
(1, 'Primero'),
(2, 'Segundo'),
(3, 'Tercero'),
(4, 'Cuarto'),
(5, 'Quinto'),
(6, 'Sexto'),
(7, 'Septimo'),
(8, 'Octavo'),
(9, 'Noveno'),
(10, 'Decimo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutoria_usu`
--

CREATE TABLE `tutoria_usu` (
  `ID` int(11) NOT NULL,
  `CORREO_USU` varchar(500) DEFAULT NULL,
  `NOMBRE_TUTOR` varchar(500) DEFAULT NULL,
  `CLASE` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tutoria_usu`
--

INSERT INTO `tutoria_usu` (`ID`, `CORREO_USU`, `NOMBRE_TUTOR`, `CLASE`) VALUES
(1, 'kenner.ruiz@campusucc.edu.co', 'JOSE DELGADO', 'Sistemas Operativos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materias`),
  ADD UNIQUE KEY `id_materias` (`id_materias`);

--
-- Indices de la tabla `pregunta_materia`
--
ALTER TABLE `pregunta_materia`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD UNIQUE KEY `id_pregunta` (`id_pregunta`),
  ADD KEY `fk_MateriaPregun` (`id_materias`),
  ADD KEY `fk_registropregunta` (`numero`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `fk_registrodocumento` (`id_tipo`),
  ADD KEY `fk_registrosemestre` (`id_semestre`);

--
-- Indices de la tabla `respuesta_pregunta_materia`
--
ALTER TABLE `respuesta_pregunta_materia`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD UNIQUE KEY `id_respuesta` (`id_respuesta`),
  ADD KEY `fk_PregunRespue` (`id_pregunta`),
  ADD KEY `fk_usuariorespuesta` (`numero`);

--
-- Indices de la tabla `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`id_semestre`);

--
-- Indices de la tabla `tutoria_usu`
--
ALTER TABLE `tutoria_usu`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ficha`
--
ALTER TABLE `ficha`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pregunta_materia`
--
ALTER TABLE `pregunta_materia`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `respuesta_pregunta_materia`
--
ALTER TABLE `respuesta_pregunta_materia`
  MODIFY `id_respuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `semestre`
--
ALTER TABLE `semestre`
  MODIFY `id_semestre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tutoria_usu`
--
ALTER TABLE `tutoria_usu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pregunta_materia`
--
ALTER TABLE `pregunta_materia`
  ADD CONSTRAINT `fk_MateriaPregun` FOREIGN KEY (`id_materias`) REFERENCES `materias` (`id_materias`),
  ADD CONSTRAINT `fk_registropregunta` FOREIGN KEY (`numero`) REFERENCES `registro` (`numero`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `fk_registrodocumento` FOREIGN KEY (`id_tipo`) REFERENCES `documento` (`id_tipo`),
  ADD CONSTRAINT `fk_registrosemestre` FOREIGN KEY (`id_semestre`) REFERENCES `semestre` (`id_semestre`);

--
-- Filtros para la tabla `respuesta_pregunta_materia`
--
ALTER TABLE `respuesta_pregunta_materia`
  ADD CONSTRAINT `fk_PregunRespue` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta_materia` (`id_pregunta`),
  ADD CONSTRAINT `fk_usuariorespuesta` FOREIGN KEY (`numero`) REFERENCES `registro` (`numero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
