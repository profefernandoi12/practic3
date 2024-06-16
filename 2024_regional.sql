-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2024 a las 05:24:22
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
-- Base de datos: `2024_regional`
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distrito`
--

CREATE TABLE `distrito` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `distrito`
--

INSERT INTO `distrito` (`id`, `nombre`) VALUES
(1, 'La Plata'),
(3, 'CABA'),
(4, 'Berisso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituto`
--

CREATE TABLE `instituto` (
  `id` int(11) NOT NULL,
  `localidad_id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `url_instituto` varchar(100) DEFAULT NULL,
  `tipo` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `altura` varchar(10) NOT NULL,
  `clave` varchar(10) NOT NULL,
  `numero_cue` varchar(15) NOT NULL,
  `instituto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `instituto`
--

INSERT INTO `instituto` (`id`, `localidad_id`, `nombre`, `numero`, `url_instituto`, `tipo`, `email`, `calle`, `altura`, `clave`, `numero_cue`, `instituto`) VALUES
(1, 1, 'ISFT Crucero ARA Gral. Belgrano', '12', 'www.i12.gov.ar', 'et', 'gfghjj@retyu.com', '7', '2148', '1212121212', '345678', 'ewrtyu'),
(2, 1, 'ISFT', '202', 'www.i202.gov.ar', 'ewr', 'wertyu@retyu.com', '46', '312', '3456', '98765', 'ewrtyu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id` int(11) NOT NULL,
  `provincia_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `distrito_id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `codigo_postal` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id`, `provincia_id`, `region_id`, `distrito_id`, `nombre`, `codigo_postal`) VALUES
(1, 1, 1, 1, 'La Plata', '1900');

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
(2, 'Virtual'),
(3, 'SemiPresencial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta_educativa`
--

CREATE TABLE `oferta_educativa` (
  `id` int(11) NOT NULL,
  `tecnicatura_id` int(11) NOT NULL,
  `turno_id` int(11) NOT NULL,
  `instituto_id` int(11) NOT NULL,
  `ciclo_lectivo` int(11) NOT NULL,
  `cupo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Argentina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `pais_id` int(11) NOT NULL,
  `localidad_id` int(11) NOT NULL,
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
  `pasillo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preinscripcion`
--

CREATE TABLE `preinscripcion` (
  `id` int(11) NOT NULL,
  `alumno_id` int(11) DEFAULT NULL,
  `oferta_educativa_id` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `id` int(11) NOT NULL,
  `pais_id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id`, `pais_id`, `descripcion`) VALUES
(1, 1, 'Buenos Aires');

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
(1, 'I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicatura`
--

CREATE TABLE `tecnicatura` (
  `id` int(11) NOT NULL,
  `modalidad_id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `duracion` int(11) NOT NULL,
  `cantidad_asignaturas` int(11) DEFAULT NULL,
  `numero_resolucion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tecnicatura`
--

INSERT INTO `tecnicatura` (`id`, `modalidad_id`, `nombre`, `duracion`, `cantidad_asignaturas`, `numero_resolucion`) VALUES
(1, 1, 'Analisis de Sistemas', 3, 21, '43567/34'),
(2, 1, 'Seguridad e Higiene', 3, 32, '43567/34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `id` int(11) NOT NULL,
  `instituto_id` int(11) NOT NULL,
  `numero` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'admin@gmail.com', '[\"ROLE_SUPER_ADMIN\"]', '$2y$13$Z2PnDBMwzOvHBezAeNz/HO8tTC1sWHib3XXTcadfKsls.iqEXAsmy', 'rr', 'gg');

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
-- Indices de la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `IDX_4F68E01098260155` (`region_id`),
  ADD KEY `IDX_4F68E010E557397E` (`distrito_id`);

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
-- Indices de la tabla `oferta_educativa`
--
ALTER TABLE `oferta_educativa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_21B7C831E2D74A4D` (`tecnicatura_id`),
  ADD KEY `IDX_21B7C83169C5211E` (`turno_id`),
  ADD KEY `IDX_21B7C8316C6EF28` (`instituto_id`);

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
-- Indices de la tabla `preinscripcion`
--
ALTER TABLE `preinscripcion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A9543049FC28E5EE` (`alumno_id`),
  ADD KEY `IDX_A954304915CE31DF` (`oferta_educativa_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `distrito`
--
ALTER TABLE `distrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `instituto`
--
ALTER TABLE `instituto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `oferta_educativa`
--
ALTER TABLE `oferta_educativa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preinscripcion`
--
ALTER TABLE `preinscripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `FK_1435D52DF5F88DB9` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`);

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
  ADD CONSTRAINT `FK_4F68E01098260155` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`),
  ADD CONSTRAINT `FK_4F68E010E557397E` FOREIGN KEY (`distrito_id`) REFERENCES `distrito` (`id`);

--
-- Filtros para la tabla `oferta_educativa`
--
ALTER TABLE `oferta_educativa`
  ADD CONSTRAINT `FK_21B7C83169C5211E` FOREIGN KEY (`turno_id`) REFERENCES `turno` (`id`),
  ADD CONSTRAINT `FK_21B7C8316C6EF28` FOREIGN KEY (`instituto_id`) REFERENCES `instituto` (`id`),
  ADD CONSTRAINT `FK_21B7C831E2D74A4D` FOREIGN KEY (`tecnicatura_id`) REFERENCES `tecnicatura` (`id`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `FK_51E5B69B67707C89` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`),
  ADD CONSTRAINT `FK_51E5B69BC604D5C6` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`);

--
-- Filtros para la tabla `preinscripcion`
--
ALTER TABLE `preinscripcion`
  ADD CONSTRAINT `FK_A954304915CE31DF` FOREIGN KEY (`oferta_educativa_id`) REFERENCES `oferta_educativa` (`id`),
  ADD CONSTRAINT `FK_A9543049FC28E5EE` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
