-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2024 a las 23:28:12
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `local2024`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `titulo_sec` varchar(100) DEFAULT NULL,
  `escuela_sec` varchar(100) DEFAULT NULL,
  `anio_egreso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `persona_id`, `titulo_sec`, `escuela_sec`, `anio_egreso`) VALUES
(1, 1, 'Albañil', 'la 21 papa', 1998),
(2, 2, 'Artes visorias', 'Tecnica 69', 2050),
(3, 4, 'bachillerato en', 'alla', 2090);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `anio` int(11) NOT NULL,
  `programa` varchar(255) NOT NULL,
  `tecnicatura_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`id`, `nombre`, `anio`, `programa`, `tecnicatura_id`) VALUES
(1, 'Base de Datos', 1, '123', 1),
(2, 'Algoritmos I', 1, '123', 1),
(4, '7357', 1, '123', 2),
(5, 'Ingenieria Software', 2, '123', 1),
(6, 'Algoritmos II', 2, '123', 1),
(7, 'Algoritmos III', 3, '123', 1),
(8, 'Practicas1', 1, '123', 1),
(9, 'Practicas 2', 2, '123', 1),
(10, 'Practicas 3', 3, '123', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comision`
--

CREATE TABLE `comision` (
  `id` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `comision` varchar(5) NOT NULL,
  `turno_id` int(11) NOT NULL,
  `tecnicatura_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comision`
--

INSERT INTO `comision` (`id`, `anio`, `comision`, `turno_id`, `tecnicatura_id`) VALUES
(1, 1, '1ra', 1, 1),
(2, 2, '1ra', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correlativa`
--

CREATE TABLE `correlativa` (
  `id` int(11) NOT NULL,
  `asignatura_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `correlativa`
--

INSERT INTO `correlativa` (`id`, `asignatura_id`, `nombre`) VALUES
(1, 6, 'Algoritmos I'),
(2, 7, 'Algoritmos II, Análisis Matemático I'),
(3, 9, 'Practicas 1, Sistemas y Organizaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursada`
--

CREATE TABLE `cursada` (
  `id` int(11) NOT NULL,
  `ciclo_lectivo` int(11) NOT NULL,
  `alumno_id` int(11) DEFAULT NULL,
  `comision_id` int(11) NOT NULL,
  `asignatura_id` int(11) DEFAULT NULL,
  `libre` tinyint(1) NOT NULL,
  `nota1` int(11) DEFAULT NULL,
  `nota2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cursada`
--

INSERT INTO `cursada` (`id`, `ciclo_lectivo`, `alumno_id`, `comision_id`, `asignatura_id`, `libre`, `nota1`, `nota2`) VALUES
(1, 2023, 2, 1, 5, 0, 7, 8),
(2, 1029, 2, 2, 2, 0, 8, 9),
(3, 2023, 3, 2, 5, 0, 1, 10),
(4, 2023, 2, 1, 1, 0, 7, 8),
(5, 2023, 2, 1, 4, 0, 7, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursada_docente`
--

CREATE TABLE `cursada_docente` (
  `id` int(11) NOT NULL,
  `toma` date NOT NULL,
  `sece` date DEFAULT NULL,
  `docente_id` int(11) NOT NULL,
  `revista_id` int(11) NOT NULL,
  `cursada_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id`, `persona_id`, `fecha_ingreso`) VALUES
(1, 3, '2019-01-01'),
(2, 2, '2024-06-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_alumno`
--

CREATE TABLE `examen_alumno` (
  `id` int(11) NOT NULL,
  `examen_final_id` int(11) NOT NULL,
  `cursada_id` int(11) NOT NULL,
  `nota` int(11) NOT NULL,
  `tomo` varchar(20) DEFAULT NULL,
  `folio` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `examen_alumno`
--

INSERT INTO `examen_alumno` (`id`, `examen_final_id`, `cursada_id`, `nota`, `tomo`, `folio`) VALUES
(2, 3, 1, 10, '3213', '355'),
(3, 4, 3, 2, '23123', '4235');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_final`
--

CREATE TABLE `examen_final` (
  `id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `presidente_id` int(11) DEFAULT NULL,
  `vocal1_id` int(11) DEFAULT NULL,
  `vocal2_id` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `examen_final`
--

INSERT INTO `examen_final` (`id`, `asignatura_id`, `presidente_id`, `vocal1_id`, `vocal2_id`, `fecha`) VALUES
(3, 1, 1, 1, 1, '2023-03-02'),
(4, 5, 1, 1, 1, '2019-01-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilitante`
--

CREATE TABLE `habilitante` (
  `id` int(11) NOT NULL,
  `anio_egreso` int(11) NOT NULL,
  `promedio` double NOT NULL,
  `titulo_id` int(11) NOT NULL,
  `docente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `localidad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituto`
--

CREATE TABLE `instituto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `url_instituto` varchar(100) DEFAULT NULL,
  `tipo` varchar(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `altura` varchar(10) NOT NULL,
  `numero_cue` varchar(15) NOT NULL,
  `localidad_id` int(11) NOT NULL,
  `instituto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `codigo_postal` varchar(10) DEFAULT NULL,
  `provincia_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id`, `nombre`, `codigo_postal`, `provincia_id`, `region_id`) VALUES
(1, 'O baiacu', '1099', 1, 3),
(2, 'A mehueque', '2827', 2, 1),
(3, 'la balandra', '9999', 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `modalidad`
--

INSERT INTO `modalidad` (`id`, `descripcion`) VALUES
(1, 'Presencial'),
(2, 'Virtual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `descripcion`) VALUES
(1, 'Argentina'),
(2, 'mypais'),
(3, 'ddds');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `dni_pasaporte` varchar(20) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(25) DEFAULT NULL,
  `partido` varchar(50) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `piso` int(11) DEFAULT NULL,
  `departamento` varchar(2) DEFAULT NULL,
  `pasillo` varchar(50) DEFAULT NULL,
  `pais_id` int(11) NOT NULL,
  `localidad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `apellido`, `fecha_nacimiento`, `dni_pasaporte`, `genero`, `email`, `telefono`, `partido`, `calle`, `numero`, `piso`, `departamento`, `pasillo`, `pais_id`, `localidad_id`) VALUES
(1, 'Julian', 'apelido', '2019-02-26', '438372', 'No binario', 'yahoo@google.com', '2219847368', 'que es un partido', '23', '23', 23, '23', 'no teno', 1, 1),
(2, 'Pepe', 'Osvaldo', '2028-04-01', '42555999', 'Mujer', 'hola@hotmail.org', '911', '1900', '23 y 34', '225', 5, '22', 'blanco', 1, 3),
(3, 'Señor', 'Señora', '2020-07-06', '15985215', 'Si binario', 'gov.ar.org.pais.edu@org.com', '2323232323', '232', 'los alamos', '21', 99, '35', '1', 1, 2),
(4, 'Iralda', 'Tapia', '2029-01-01', '9321839', 'mujer', '???', '212121212', '???', 'alla', '2', 1, '-1', '-1', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `pais_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id`, `descripcion`, `pais_id`) VALUES
(1, 'La palta', 1),
(2, 'La Villa', 1),
(3, 'El Chinchulin', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `numero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id`, `numero`) VALUES
(1, 'I'),
(3, '2233');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revista`
--

CREATE TABLE `revista` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicatura`
--

CREATE TABLE `tecnicatura` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `duracion` int(11) NOT NULL,
  `cantidad_asignaturas` int(11) DEFAULT NULL,
  `numero_resolucion` varchar(30) NOT NULL,
  `modalidad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tecnicatura`
--

INSERT INTO `tecnicatura` (`id`, `nombre`, `duracion`, `cantidad_asignaturas`, `numero_resolucion`, `modalidad_id`) VALUES
(1, 'Analisis en Sistemas', 3, 25, '2834/3', 1),
(2, 'Lic en precintos', 777, 6, '201', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `id` int(11) NOT NULL,
  `numero` varchar(25) NOT NULL,
  `instituto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulo`
--

CREATE TABLE `titulo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `institucion_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`id`, `descripcion`) VALUES
(1, 'Mañana'),
(2, 'Tarde'),
(3, 'Noche');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `nombre`, `apellido`) VALUES
(1, 'admin@gmail.com', '[\"ROLE_SUPER_ADMIN\"]', '$2y$13$B76ZCx40jsX2QGxQSkSPqOwP4U1/dqhcrTBW3kwAw8QFecOoJljKy', 'admin', 'admin'),
(2, 'docente@gmail.com', '[\"ROLE_DOCENTE\"]', '$2y$13$2UEefs5zI/.UjmUM2axGRO2TRQKwLDdyIdz4xBuU4lCnKhPiJI2J6', 'docente', 'docente'),
(3, 'alumno@gmail.com', '[\"ROLE_ALUMNO\"]', '$2y$13$QA4QvrvRKbkIWQht.hdoEOU7jnYNGC58U.9rK1Ec0Cn/WJIm2rkbu', 'alumno', 'alumno'),
(4, 'preceptor@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$PGjCqErgtlqkY5eyH.U0dO4HzNuf51a79e7vSH9QHqfrks.fJVliG', 'preceptor', 'preceptor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1435D52DF5F88DB9` (`persona_id`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9243D6CEE2D74A4D` (`tecnicatura_id`);

--
-- Indices de la tabla `comision`
--
ALTER TABLE `comision`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1013896F69C5211E` (`turno_id`),
  ADD KEY `IDX_1013896FE2D74A4D` (`tecnicatura_id`);

--
-- Indices de la tabla `correlativa`
--
ALTER TABLE `correlativa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_501CD9D2C5C70C5B` (`asignatura_id`);

--
-- Indices de la tabla `cursada`
--
ALTER TABLE `cursada`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F474F7D3FC28E5EE` (`alumno_id`),
  ADD KEY `IDX_F474F7D34B352BE1` (`comision_id`),
  ADD KEY `IDX_F474F7D3C5C70C5B` (`asignatura_id`);

--
-- Indices de la tabla `cursada_docente`
--
ALTER TABLE `cursada_docente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8D9BE23B94E27525` (`docente_id`),
  ADD KEY `IDX_8D9BE23BE8ADDD3D` (`revista_id`),
  ADD KEY `IDX_8D9BE23BE51B8CF2` (`cursada_id`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_FD9FCFA4F5F88DB9` (`persona_id`);

--
-- Indices de la tabla `examen_alumno`
--
ALTER TABLE `examen_alumno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2852854F2F747F9B` (`examen_final_id`),
  ADD KEY `IDX_2852854FE51B8CF2` (`cursada_id`);

--
-- Indices de la tabla `examen_final`
--
ALTER TABLE `examen_final`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8861EFE2C5C70C5B` (`asignatura_id`),
  ADD KEY `IDX_8861EFE297B7E846` (`presidente_id`),
  ADD KEY `IDX_8861EFE298D88FCB` (`vocal1_id`),
  ADD KEY `IDX_8861EFE28A6D2025` (`vocal2_id`);

--
-- Indices de la tabla `habilitante`
--
ALTER TABLE `habilitante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DA63DA0861AD3496` (`titulo_id`),
  ADD KEY `IDX_DA63DA0894E27525` (`docente_id`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F751F7C367707C89` (`localidad_id`);

--
-- Indices de la tabla `instituto`
--
ALTER TABLE `instituto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2A805CCE67707C89` (`localidad_id`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4F68E0104E7121AF` (`provincia_id`),
  ADD KEY `IDX_4F68E01098260155` (`region_id`);

--
-- Indices de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indices de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_51E5B69BC604D5C6` (`pais_id`),
  ADD KEY `IDX_51E5B69B67707C89` (`localidad_id`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D39AF213C604D5C6` (`pais_id`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `revista`
--
ALTER TABLE `revista`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tecnicatura`
--
ALTER TABLE `tecnicatura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_17FAADB41E092B9F` (`modalidad_id`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C1E70A7F6C6EF28` (`instituto_id`);

--
-- Indices de la tabla `titulo`
--
ALTER TABLE `titulo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_17713E5AB239FBC6` (`institucion_id`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `comision`
--
ALTER TABLE `comision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `correlativa`
--
ALTER TABLE `correlativa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cursada`
--
ALTER TABLE `cursada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cursada_docente`
--
ALTER TABLE `cursada_docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `examen_alumno`
--
ALTER TABLE `examen_alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `examen_final`
--
ALTER TABLE `examen_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `habilitante`
--
ALTER TABLE `habilitante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `instituto`
--
ALTER TABLE `instituto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `revista`
--
ALTER TABLE `revista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tecnicatura`
--
ALTER TABLE `tecnicatura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `telefono`
--
ALTER TABLE `telefono`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `titulo`
--
ALTER TABLE `titulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `FK_1435D52DF5F88DB9` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`);

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `FK_9243D6CEE2D74A4D` FOREIGN KEY (`tecnicatura_id`) REFERENCES `tecnicatura` (`id`);

--
-- Filtros para la tabla `comision`
--
ALTER TABLE `comision`
  ADD CONSTRAINT `FK_1013896F69C5211E` FOREIGN KEY (`turno_id`) REFERENCES `turno` (`id`),
  ADD CONSTRAINT `FK_1013896FE2D74A4D` FOREIGN KEY (`tecnicatura_id`) REFERENCES `tecnicatura` (`id`);

--
-- Filtros para la tabla `correlativa`
--
ALTER TABLE `correlativa`
  ADD CONSTRAINT `FK_501CD9D2C5C70C5B` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`id`);

--
-- Filtros para la tabla `cursada`
--
ALTER TABLE `cursada`
  ADD CONSTRAINT `FK_F474F7D34B352BE1` FOREIGN KEY (`comision_id`) REFERENCES `comision` (`id`),
  ADD CONSTRAINT `FK_F474F7D3C5C70C5B` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`id`),
  ADD CONSTRAINT `FK_F474F7D3FC28E5EE` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`);

--
-- Filtros para la tabla `cursada_docente`
--
ALTER TABLE `cursada_docente`
  ADD CONSTRAINT `FK_8D9BE23B94E27525` FOREIGN KEY (`docente_id`) REFERENCES `docente` (`id`),
  ADD CONSTRAINT `FK_8D9BE23BE51B8CF2` FOREIGN KEY (`cursada_id`) REFERENCES `cursada` (`id`),
  ADD CONSTRAINT `FK_8D9BE23BE8ADDD3D` FOREIGN KEY (`revista_id`) REFERENCES `revista` (`id`);

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `FK_FD9FCFA4F5F88DB9` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`);

--
-- Filtros para la tabla `examen_alumno`
--
ALTER TABLE `examen_alumno`
  ADD CONSTRAINT `FK_2852854F2F747F9B` FOREIGN KEY (`examen_final_id`) REFERENCES `examen_final` (`id`),
  ADD CONSTRAINT `FK_2852854FE51B8CF2` FOREIGN KEY (`cursada_id`) REFERENCES `cursada` (`id`);

--
-- Filtros para la tabla `examen_final`
--
ALTER TABLE `examen_final`
  ADD CONSTRAINT `FK_8861EFE2AF1D1CBB` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`id`),
  ADD CONSTRAINT `FK_8861EFE2CFA8626B` FOREIGN KEY (`vocal1_id`) REFERENCES `docente` (`id`),
  ADD CONSTRAINT `FK_8861EFE2D1F46B1E` FOREIGN KEY (`presidente_id`) REFERENCES `docente` (`id`),
  ADD CONSTRAINT `FK_8861EFE2FE4078F6` FOREIGN KEY (`vocal2_id`) REFERENCES `docente` (`id`);

--
-- Filtros para la tabla `habilitante`
--
ALTER TABLE `habilitante`
  ADD CONSTRAINT `FK_DA63DA0861AD3496` FOREIGN KEY (`titulo_id`) REFERENCES `titulo` (`id`),
  ADD CONSTRAINT `FK_DA63DA0894E27525` FOREIGN KEY (`docente_id`) REFERENCES `docente` (`id`);

--
-- Filtros para la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD CONSTRAINT `FK_F751F7C367707C89` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`);

--
-- Filtros para la tabla `instituto`
--
ALTER TABLE `instituto`
  ADD CONSTRAINT `FK_2A805CCE67707C89` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`);

--
-- Filtros para la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD CONSTRAINT `FK_4F68E0104E7121AF` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`),
  ADD CONSTRAINT `FK_4F68E01098260155` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `FK_51E5B69B67707C89` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`),
  ADD CONSTRAINT `FK_51E5B69BC604D5C6` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`);

--
-- Filtros para la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `FK_D39AF213C604D5C6` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`);

--
-- Filtros para la tabla `tecnicatura`
--
ALTER TABLE `tecnicatura`
  ADD CONSTRAINT `FK_17FAADB41E092B9F` FOREIGN KEY (`modalidad_id`) REFERENCES `modalidad` (`id`);

--
-- Filtros para la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `FK_C1E70A7F6C6EF28` FOREIGN KEY (`instituto_id`) REFERENCES `instituto` (`id`);

--
-- Filtros para la tabla `titulo`
--
ALTER TABLE `titulo`
  ADD CONSTRAINT `FK_17713E5AB239FBC6` FOREIGN KEY (`institucion_id`) REFERENCES `institucion` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
