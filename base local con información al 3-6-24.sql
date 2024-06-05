-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2024 a las 16:39:47
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
-- Base de datos: `local`
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
(1, 'Base de Datos', 2, '304/4', 1),
(2, 'Algoritmos', 1, '3433/3', 1),
(4, '7357', -99999, '-99392193', 2),
(5, 'Ingenieria Software', 2023, 'que es un programa', 1);

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
  `asignatura_id` int(11) NOT NULL,
  `correlativa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `correlativa`
--

INSERT INTO `correlativa` (`id`, `asignatura_id`, `correlativa_id`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursada`
--

CREATE TABLE `cursada` (
  `id` int(11) NOT NULL,
  `ciclo_lectivo` int(11) NOT NULL,
  `alumno_id` int(11) DEFAULT NULL,
  `comision_id` int(11) NOT NULL,
  `asignatura_id` int(11) NOT NULL,
  `libre` tinyint(1) NOT NULL,
  `nota1` int(11) DEFAULT NULL,
  `nota2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cursada`
--

INSERT INTO `cursada` (`id`, `ciclo_lectivo`, `alumno_id`, `comision_id`, `asignatura_id`, `libre`, `nota1`, `nota2`) VALUES
(1, 2023, 1, 1, 1, 1, 4, 6),
(2, 1029, 2, 2, 2, 0, 8, 9),
(3, 2023, 3, 2, 5, 0, -1, -2);

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
(1, 3, '2019-01-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240504175827', '2024-05-04 19:59:35', 341),
('DoctrineMigrations\\Version20240506174131', '2024-05-06 19:44:40', 377),
('DoctrineMigrations\\Version20240507185524', '2024-05-07 20:56:28', 93),
('DoctrineMigrations\\Version20240507190112', '2024-05-07 21:01:23', 83),
('DoctrineMigrations\\Version20240507193011', '2024-05-07 21:30:21', 69);

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

--
-- Volcado de datos para la tabla `instituto`
--

INSERT INTO `instituto` (`id`, `nombre`, `numero`, `url_instituto`, `tipo`, `email`, `calle`, `altura`, `numero_cue`, `localidad_id`, `instituto`) VALUES
(5, 'Instituto Superior de Formación Técnica Nº202', '202', 'https://www.i202.com.ar/berisso/', 'ISFT', 'ISFT202@abc.gob.ar					', 'Montevideo e/ 5 y 6 \r\n', '335', '0221-464-3174', 73, 'gg'),
(6, 'Instituto de Formación Docente y Técnica nro 49', '49', 'https://isfd49-bue.infd.edu.ar/sitio/', 'ISFDYT', 'isfdyt49brandsen@abc.gob.ar					', 'Calle 119 esq.10', '', '02223-442254', 73, NULL),
(7, 'Instituto Superior de Formación Docente y Técnica ', '136', 'https://isfd136-bue.infd.edu.ar', 'ISFDYT', 'isfdyt136ensenada@abc.gob.ar					', 'San Martin y Chile', '', '0221-4691351', 47, NULL),
(10, 'Instituto Superior \"Astillero Río Santiago\"', '193', 'Instituto Superior \"Astillero Río Santiago\" (ISFT 193)', 'ISFT', 'ISFT193@abc.gob.ar					', 'Hipólito Yrigoyen y Don Bosco\r\n', '', '0221-521-7700', 47, NULL),
(11, 'Instituto Superior de Formación Técnica 213', '213', 'https://www.institutosuperior213.edu.ar', 'ISFT', 'ISFT213@abc.gob.ar					', 'Camino Rivadavia entre 127 y 128\r\n', '', '0221-5667383', 47, NULL),
(12, 'Instituto Superior de Formación Docente N° 9', '9', 'https://isfd9-bue.infd.edu.ar/sitio/', 'ISFDYT', 'educacionespecialinstituto9@gmail.com					', 'Calle 2 e/ 44 y 45', '639 ', '0221 4215393/62', 73, NULL),
(13, 'Instituto Superior de Formación Docente Nº 97 - U.', '97', 'https://isfd97-bue.infd.edu.ar/sitio/', 'ISFDYT', 'isfd97@yahoo.com.ar					', 'Calle 8 Esq. 58', '', '0221-421 6514/4', 73, NULL),
(14, 'Instituto Superior de Formación Docente Nº 96', '96', 'https://isfd2-bue.infd.edu.ar/sitio/', 'ISFDYT', 'institutosuperior96@gmail.com					', 'Diag. 78 e/ 4 Y 5\r\n', '', '0221-422 3280/0', 73, NULL),
(15, 'Instituto Superior de Formacion Tecnica Nº 8', '8', 'https://is8.com.ar', 'ISFT', 'ISFT8@abc.gob.ar					', '50 - 35 entre 4 y 5\r\n', '877', '0221-4253102', 73, NULL),
(16, 'Instituto Superior de Formación Docente N° 17', '17', 'https://isfd17-bue.infd.edu.ar/sitio/', 'ISFDYT', 'isfd17@gmail.com					', 'Calle 67 e/11 y 12\n', '828 ', '0221-4512774', 73, NULL),
(17, 'Instituto Superior de Formación Técnica Nº9', '12 - UP N° 9', NULL, 'ISFT', 'ISFT12-upn9@abc.gob.ar					', 'Calle 9 y 76\r\n', '', '0221-451-7370', 73, NULL),
(18, 'Instituto de Formación Técnica Superior N° 12', '12', 'http://www.i12.com.ar/i12/', 'ISFT', 'ISFT12@abc.gob.ar					', 'Calle 7 entre 75 y 76\r\n', '2149 ', '0221-452-3814', 73, NULL),
(19, 'Instituto Superior De Formación Docente N° 94', '94', 'https://des-bue.infd.edu.ar/sitio/institutos/', 'ISFDYT', 'isperoni@yahoo.com.ar					', 'Con. G Belgrano esq 9', '', '0221-4720713/47', 73, NULL),
(20, 'Instituto Superior de Formación Docente N° 9', '9', 'https://isfd9-bue.infd.edu.ar/sitio/', 'ISFDYT', 'isfdyt9laplata@abc.gob.ar					', '2 (46 y 47)', '727 ', '0221-4824056/42', 73, NULL),
(21, ' Instituto Superior de Formación Técnica 6012', '6012', '---', 'ISFT', 'ISFT6012-00@abc.gob.ar					', 'Calle 4 e/51 y 53\r\n', '962', '0221-4838858 in', 73, NULL),
(22, 'Instituto Superior de Formación Docente y Técnica ', '210', 'https://isfdyt210-bue.infd.edu.ar/sitio/', 'ISFDYT', 'isfdyt210laplata@abc.gob.ar					', 'Calle 47 entre 7 y 8', '635 ', '0221-5218363', 73, NULL),
(23, 'Instituto Superior de Formación Docente N° 95', '95', 'https://uanormal1-bue.infd.edu.ar/sitio/nivel-superior/', 'ISFDYT', 'isfd95laplata@gmail.com					', 'Calle 51 e/14 y 15', '975 ', '221- 483 0891/i', 73, NULL),
(24, 'Instituto Superior de Formación Técnica Nº 227', '227', NULL, 'ISFT', 'ISFT227@abc.gob.ar					', '28 bis y 462', '', '221-5548217', 73, NULL),
(25, 'Instituto Superior de Formación Técnica Nº 221', '221', NULL, 'ISFT', 'ISFT221@abc.gob.ar	', '526 entre 7 y 8\r\n', '', '', 73, NULL),
(26, 'INSTITUTO SUPERIOR DE FORMACIÓN DOCENTE N°228', '228', 'https://isfd228-bue.infd.edu.ar/sitio/', 'ISFDYT', 'isfd228laplata@abc.gob.ar', '15 Esq.56', '1048 ', '', 73, NULL),
(27, 'Instituto Superior de Formación Docente y Técnica ', '9 - (Subsede)', 'https://isfd9-bue.infd.edu.ar/sitio/', 'ISFDYT', 'educacionespecialinstituto9@gmail.com					', '5 e/43 y 44', '577 ', '----', 73, NULL),
(28, 'Instituto Superior de Formación Docente y Técnica ', '9 - (Subsede)', 'https://isfd9-bue.infd.edu.ar/sitio/', 'ISFDYT', 'educacionespecialinstituto9@gmail.com					', '6 e/45 y46', '675', '----', 73, NULL),
(29, 'Instituto Superior de Formación Docente y Técnica ', '58', NULL, 'ISFDYT', 'isfdyt58magdalena@abc.gob.ar					', 'Brenan y Pte Perón\r\n', '', '02221-452478', 85, NULL),
(30, 'Instituto Superior de Formación Docente y Técnica ', '58 - UP N°36', NULL, 'ISFDYT', 'isfdytmagdalena@gmail.com					', 'Ruta 11 Km 111', '', '02221-452478', 85, NULL),
(31, 'Instituto Superior de Formación Docente y Técnica ', '90', 'https://isfd90-bue.infd.edu.ar/sitio/', 'ISFDYT', 'isfdyt90puntaindio@abc.gob.ar					', 'Calle 31', '1448', '02221-480589', 113, NULL),
(32, 'Instituto Superior de Formación Técnica Nº 244', '244', NULL, 'ISFT', '', 'calle Belgrano 218', '', '', 92, NULL),
(33, 'Instituto Superior De Formacion Técnica Nº197', 'Anexo 197', 'https://www.ibeltran.com.ar/IS_197.php', 'ISFT', 'anexo197ezeiza@abc.gob.ar				', 'Alfonsina Storni Barrio 1\r\n(UPE)', '41', '011-4203-0222', 179, NULL),
(34, 'Instituto de Formación Docente y Técnica N°44', '44 - Sub Sede', NULL, 'ISFDYT', 'isfdyt44lasheras@abc.gob.ar			', 'Ruta 40 -ES2', '', '0220-4771189', 92, NULL),
(35, 'Instituto Superior de Formación Técnica Nº130', '130 - UP 2', NULL, 'ISFT', 'ISFT130-upn2schica@abc.gob.ar', 'Av. Legorburu SN°, Sierra Chica.\r\n', '', '', 100, NULL),
(36, 'Instituto Superior de Formación Docente y Técnica ', '91', 'https://isfd91-bue.infd.edu.ar/sitio/samba/', 'ISFDYT', 'instituto91tapalque@gmail.com	', 'Avda. San Martin', '97', '02283-420976', 135, NULL),
(37, 'Instituto Superior De Formación Docente Nº160', '160', 'https://isfd160-bue.infd.edu.ar/sitio/', 'ISFDYT', 'vicedireccion-instituto160@hotmail.com', 'Avellaneda ', '426', '02926-425291', 37, NULL),
(38, 'Instituto Superior de Formación Docente y Técnica ', '48', NULL, 'ISFDYT', 'instituto48@elportaldel48.com', 'Uriburu 1472', '', '02926-431665/ t', 37, NULL),
(39, 'Instituto Superior de Formación Docente y Técnica ', '48 - Ext. Huanguelen', NULL, 'ISFDYT', 'isfdyt48csuarez@abc.gob.ar', 'Calle 9 N° 339', '', 'Ext. Huanguelen', 37, NULL),
(40, 'Instituto Superior de Formación Docente y Técnica ', '3', NULL, 'ISFDYT', 'direccionisfd3@gmail.com		', 'Vieytes 51 - 1° Piso', '', '0291-4548131/45', 10, NULL),
(41, 'Instituto Superior de Formación Docente y Técnica ', '86', NULL, 'ISFDYT', 'isfd86@gmail.com		', 'Agustin de Arrieta 1255', '', '291-5134308', 10, NULL),
(44, 'Instituto Superior de Formación Técnica Nº 191', '191', NULL, 'ISFT', 'ISFT191@abc.gob.ar		', '19 de Mayo N° 25\r\n', '', '\"0291-451-7493 ', 10, NULL),
(45, 'Instituto Superior de Formación Técnica Nº 190', 'Extensión 190', NULL, 'ISFT', 'ISFT190ext-bahia@abc.gob.ar		', 'AZARA\r\n', '1250', '0291-4560331/45', 10, NULL),
(46, 'Escuela Normal Superior José Manuel Estrada', '163', 'https://isfd163-bue.infd.edu.ar/sitio/', 'ISFDYT', 'ensjoseestrada@gmail.com			', 'Calle 57', '2646', '02262-422113', 99, NULL),
(47, 'Instituto de Formación Docente y Técnica N°4', '74 - Ext. Pila', NULL, 'ISFDYT', 'isfdyt74gralbelgrano@abc.gob.ar', '6 Esq.17', '', '02243-452192/45', 106, NULL),
(48, 'Instituto Superior de Formación Docente 170', '170', 'https://isfd170-bue.infd.edu.ar', 'ISFDYT', 'liliana_vicondoa@yahoo.com.ar', 'Alsina Este', '180', '02268-421239 fa', 86, NULL),
(49, 'Instituto de Formación Docente y Técnica N°66', '66', NULL, 'ISFDYT', 'isfdyt66monte@abc.gob.ar', 'San Martin 687', '', '02271-443276/ 7', 95, NULL),
(50, 'Instituto de Formación Docente y Técnica N°70', '70', NULL, 'ISFDYT', 'isfdyt66monte@abc.gob.ar', 'Larrea 276', '', '02297-442985', 115, NULL),
(51, 'Instituto Superior de Formación Docente y Técnico ', '87', 'https://isfd87-bue.infd.edu.ar', 'ISFDYT', 'isfdyt87ayacucho@abc.gob.ar', 'Belgrano', '720', '02296-454806', 8, NULL),
(52, 'Instituto de Formación Docente y Técnica N°26', '\"26 - Ext Castelli\"', NULL, 'ISFDYT', 'is029026@gmail.com', 'Avda. 25 de mayo 285', '', '02245-480458', 29, NULL),
(53, 'Instituto Superior de Formación Técnica Nº200', '200', 'http://ist200.webs.com', 'ISFT', 'ISFT200@abc.gob.ar', 'Paseo 137 entre Avenida 6\r\ny 7 ', '658', '02255-464956', 140, NULL),
(54, 'Instituto de Formación Docente y Técnica N°16', '16', NULL, 'ISFDYT', 'direccioninstituto16@gmail.com			', 'Rivadavia 2655', '', '(02344)453205', 120, NULL),
(55, 'Instituto Superior de Formación Técnica Nº 135', '135', 'https://isft135.edu.ar', 'ISFT', 'ISFT135@abc.gob.ar			', 'Álvarez Toledo\r\n', '2650', '02344-433952', 120, NULL),
(56, 'Instituto de Formación Docente y Técnica N° 27', '27', 'https://isfd27-bue.infd.edu.ar/sitio/', 'ISFDYT', 'isfdyt27@speedy.com.ar', 'Güemes', '62', '02314-425248', 15, NULL),
(57, 'Instituto de Formación Docente y Técnica N°218', '218', 'https://isfdyt218-bue.infd.edu.ar', 'ISFDYT', 'isfdyt218@gmail.com			', '9 de Julio y Larraburu\r\n', '1537 ', '02227-492647/49', 118, NULL),
(58, 'Instituto de Formación Docente y Técnica N°28', '28 - Anexo N° 328', NULL, 'ISFDYT', 'isfdyt.n28@gmail.com			', 'Mitre y Güemes', '', '\"02345 463245/0', 1, NULL),
(59, 'Instituto de Formación Docente y Técnica N°28', '28 - Ext. (N de la', NULL, 'ISFDYT', 'isfdyt.n28@gmail.com			', 'Calle 6 e/ 1 y Av. Valdés', '', '02345-463245/49', 1, NULL),
(60, 'Instituto de Formación Docente y Técnica Nº 28', '28', 'https://isfdyt28-bue.infd.edu.ar', 'ISFDYT', 'isfdyt28veinticincodemayo@abc.gob.ar\r\netironi1@abc.gob.ar		', 'Calle 29', '1151', '02345-465880-46', 1, NULL),
(61, 'Instituto de Formación Docente y Técnica N°157', '157', NULL, 'ISFDYT', 'escuelanormalazul@yahoo.com.ar			', '25 de Mayo 777/83', '', '02281 424119/42', 9, NULL),
(62, 'Instituto Superior De Formacion Docente Y Técnica ', '2', 'https://isfdyt2-bue.infd.edu.ar/sitio/', 'ISFDYT', 'profesoresinstituto2@hotmail.com		', 'Colon y Av. Mitre', '498 ', '02281-422468/43', 9, NULL),
(63, 'Instituto de Formación Docente y Técnica N°156', '156', NULL, 'ISFDYT', 'institutosuperior156@gmail.com			', '25 de Mayo 777/83', '', '02281-434636 02', 9, NULL),
(64, 'Instituto de Formación Docente y Técnica N°22', '22', NULL, 'ISFDYT', 'instituto22olavarria@gmail.com			', 'Ayacucho N° 2418 1º P\r\n', '', '02284-422570/02', 100, NULL),
(65, 'Instituto Superior de Formación Técnica Nº130', '130', NULL, 'ISFT', 'ISFT130@abc.gob.ar', 'San Martin N° 3051, Centro.', '', '02284-441887/42', 100, NULL),
(66, 'Instituto de Formación Docente y Técnica N°3', '37', NULL, 'ISFDYT', 'vaninacarluccio@gmail.com carlatomaso@gmail.com', 'Rivadavia N° 41 e/España e Italia', '', '02924-421416', 112, NULL),
(67, 'Instituto Superior de Formación Docente y Técnica ', '236', 'https://isfdyt236.edu.ar', 'ISFDYT', 'isfdyt236ramallo@abc.gob.ar', 'Av. Dr. Bonfiglio ', '561', '03407 48-9152', 114, NULL),
(68, 'Instituto de Formación Docente y Técnica N°152', '152', NULL, 'ISFDYT', 'instituto152@yahoo.com.ar', 'Las Heras N° 577', '', '(2244) 473093', 75, NULL),
(69, 'Instituto de Formación Docente y Técnica N°73', '73', NULL, 'ISFDYT', 'instituto73@yahoo.com.ar', 'San Martin 322', '', '02929-430176', 68, NULL),
(70, 'Instituto de Formación Docente y Técnica N°6', '76', NULL, 'ISFDYT', 'institutosuperior76@gmail.com\r\nISFD76ALVEAR@ABC.GOB.AR', 'Hipolito Irigoyen 690', '', '02344-481731/02', 53, NULL),
(71, 'Instituto de Formación Docente y Técnica N°25', '25 - Anexo H.Ascasubi', NULL, 'ISFDYT', 'isfdyt25patagones@gmail.com', 'Ruta Nacional N° 3', '', '02920-462335', 141, NULL),
(72, 'Instituto de Formación Docente y Técnica N°72', '72', NULL, 'ISFDYT', 'isfd72manuelagoenaga@yahoo.com.ar', 'Moreno N° 353', '', '02286-471292', 187, NULL),
(73, 'Instituto de Formación Docente y Técnica N°43', '43', NULL, 'ISFDYT', 'is43lobos@gmail.com', 'Santamarina N° 183\r\n', '', '02227-430076', 80, NULL),
(74, 'Instituto de Formación Docente y Técnica N°153', '153', NULL, 'ISFDYT', 'isfd153lobos@gmail.com', 'Pte. Perón 276', '', '02227-432067', 80, NULL),
(75, 'Instituto de Formación Docente y Técnica N°162', '162', NULL, 'ISFDYT', 'isfd162tornquist@yahoo.com.ar', 'Avda. E Tornquist 319', '', '0291-4941150', 137, NULL),
(76, 'Instituto de Formación Docente y Técnica N°162', '162 Ext Sierra de la', NULL, 'ISFDYT', 'isfd162tornquist@yahoo.com.ar', 'Alberdi s/n', '', '0291-4941150', 137, NULL),
(77, 'Instituto de Formación Docente y Técnica N°54', '54', NULL, 'ISFDYT', 'isfd54@gmail.com', 'Bulnes 30\r\n', '', '011-4355 2005', 181, NULL),
(78, 'Instituto de Formación Docente y Técnica N°83', '83', NULL, 'ISFDYT', 'isfdt83@gmail.com', 'Calle 844 Nº 2270', '', '\"011-42123210 0', 229, NULL),
(79, 'Instituto de Formación Docente y Técnica N°104', '104', NULL, 'ISFDYT', 'isfd104quilmes@gmail.com', 'Mitre Nº 364', '', 'Sin teléfono', 229, NULL),
(80, 'Instituto de Formación Docente y Técnica N°24', '24', NULL, 'ISFDYT', 'isfd24@yahoo.com', 'Cramer N° 471', '', '(011) 4388-0864', 229, NULL),
(81, 'Instituto de Formación Docente y Técnica N°31', '31', NULL, 'ISFDYT', 'isfd31necochea@abc.gob.ar', 'Jesuita Cardiel 2130', '', '02262-424881', 99, NULL),
(82, 'Instituto de Formación Docente y Técnica N°92', '92', NULL, 'ISFDYT', 'isfdyt92laprida@abc.gob.ar', 'Carlos Pellegrini Nº 1178', '', '02285-421632', 74, NULL),
(83, 'Instituto de Formación Docente y Técnica N°212', '212', NULL, 'ISFDYT', 'is041057@gmail.com', 'Centurion 3220', '', '02241-481021', 62, NULL),
(84, 'Instituto de Formación Docente y Técnica N°59', '59', NULL, 'ISFDYT', 'isfdyt59madariaga@abc.gob.ar', 'Martinez Nº 231', '', '02267-424314 (0', 60, NULL),
(85, 'Instituto de Formación Docente y Técnica N°169', '169', NULL, 'ISFDYT', 'ua169madariaga@yahoo.com.ar', 'Av. Bs As ', '684', '02267-424689', 60, NULL),
(86, 'Instituto de Formación Docente y Técnica N°230', '230 Ext.', 'https://isfd235pinamar-bue.infd.edu.ar/sitio/', 'ISFDYT', 'isfd235pinamar@abc.gob.ar', 'Av. Bartolomé Mitre N°914', '', '02254 51-9626', 59, NULL),
(87, 'Instituto Superior de Formación Docente y Técnica ', '65', 'https://isfd65-bue.infd.edu.ar/sitio/', 'ISFDYT', 'isfdyt65sancayetano@abc.gob.ar', 'Sarmiento', ' 648', '02983-470030', 127, NULL),
(88, 'Instituto de Formación Docente y Técnica N°79', '79 - Anexo Monte', NULL, 'ISFDYT', 'isfd79rosales@gmail.com', 'Calle Rio Neuquen esquina Legh', '', '', 95, NULL),
(89, 'El Instituto Superior de Formación docente y Técni', '165', 'https://isfd165-bue.infd.edu.ar/sitio/', 'ISFDYT', 'isfdyt165loberia@abc.gob.ar			', 'Av. SARMIENTO ', '621', '02261-442053', 79, NULL),
(90, 'Instituto de Formación Docente y Técnica N°32', '32', NULL, 'ISFDYT', 'isfdyt32balcarce@abc.gob.ar			', 'Calle 17 N° 622', '', '02266-421305', 11, NULL),
(91, 'Instituto Superior de Formación Técnica Nº213', 'Anexo 213', NULL, 'ISFT', 'anexo213balcarce@abc.gob.ar			', 'calle 22 N°767 Balcarce', '', '', 11, NULL),
(92, 'Instituto Superior de Formación Técnica Nº238', '238', NULL, 'ISFT', 'ISFT238marchiquita@abc.gob.ar	', 'Sáenz Peña 513, Camet Norte', '', '', 87, NULL),
(93, 'Instituto de Formación Docente y Técnica N°81', '81 (Anexo 2810)', NULL, 'ISFDYT', 'isfdyt81.direccion@gmail.com', 'Paseo Leloir 780', '', '2291-480894', 52, NULL),
(94, 'Instituto Superior de Formación Técnica Nº184', 'Anexo 184', NULL, 'ISFT', 'ISFT184-excruz@abc.gob.ar', 'Rivadavia N° 439', '', '', 49, NULL),
(95, 'Instituto de Formación Docente y Técnica N°138', '138', NULL, 'ISFDYT', 'isfdyt138csarmiento@abc.gob.ar', 'Pte. Peron y Belgrano 604', '', '02478-481927', 21, NULL),
(96, 'Instituto de Formación Docente y Técnica N°164', '164', NULL, 'ISFDYT', 'isfdyt164ameghino@abc.gob.ar				', 'EP N° 4 - Calle 3 Nº 241 e/36 y 38', '', '03388-470310', 50, NULL),
(97, 'Instituto superior de formacion docente y tecnica ', '20 - Extension G.', 'http://www.instituto20.com.ar', 'ISFDYT', 'isfdyt20junin@abc.gob.ar				', 'Moreno 89', '', '02353-494093', 54, NULL),
(98, 'Instituto de Formación Docente y Técnica N°126', '126', NULL, 'ISFDYT', 'isfdyt126salto@abc.gob.ar				', 'Bernardino EsperanzaNº 413', '', '02474-423102', 122, NULL),
(99, 'Instituto de Formación Docente y Técnica N°11', '11', NULL, 'ISFDYT', 'isfd11lanus@gmail.com		', 'Ituzaingó Nº 1770', '', '011-42419671', 202, NULL),
(101, 'Instituto Superior de Formación Técnica Nº175', '175', NULL, 'ISFT', '', '3024, Ministro Brin, Lanús Oeste', '', '011-4241-2124', 202, NULL),
(102, 'Instituto Superior de Formación Técnica Nº 223', '223', 'No tiene', 'ISFT', 'ISFT223@abc.gob.ar		', 'Hipolito Yrigoyen ', '6330', '4288-3868', 202, NULL),
(103, 'Instituto de Formación Docente y Técnica N°52', '52', NULL, 'ISFDYT', 'instituto52@yahoo.com.ar				', 'Rivadavia\r\n', '349', '011- 47430415/4', 239, NULL),
(104, 'Instituto de Formación Docente y Técnica N°18', '18', NULL, 'ISFDYT', 'isfd18lomasdezamora@abc.gob.ar', 'Alsina', '1032', '011-42026462/42', 205, NULL),
(105, 'Instituto Superior de Formación Técnica Nº173', '173', NULL, 'ISFT', 'ISFT173@abc.gob.ar', 'Av. Hipolito Irigoyen ', '9428', '011-4243-4148', 205, NULL),
(106, 'Instituto Superior de Formación Técnica Nº172', '172', NULL, 'ISFT', 'ISFT172@abc.gob.ar', 'Monseñor Piaggio y\r\nEsquina Garona', '402 ', '011-4244-5848', 205, NULL),
(115, 'Instituto de Formación Docente y Técnica N°102', '102', NULL, 'ISFDYT', 'ensamentruyt@gmail.com', 'Manuel Castro', '990', '011-42481700', 205, NULL),
(116, 'Instituto de Formación Docente y Técnica N°103', '103 - Ext Aulica', NULL, 'ISFDYT', 'patricianagy@gmail.com', 'Las Lilas y Robles', '', '011-42761489', 205, NULL),
(117, 'Instituto de Formación Docente y Técnica N°103', '103', NULL, 'ISFDYT', 'unidacadem@ciudad.com.ar', 'Miro 2440 y Baradero', '', '01142864079(T) ', 205, NULL),
(118, 'Instituto de Formación Docente y Técnica N°209', '209', NULL, 'ISFDYT', 'isfdyt209@gmail.com', 'Gorriti \r\n', '3520', '1557575703 (Dir', 192, NULL),
(120, 'Instituto Superior de Formación Técnica Nº226', '226', NULL, 'ISFT', 'ISFT226@abc.gob.ar', 'Sargento Salazar ', '1501', '44522452', 192, NULL),
(121, 'Instituto de Formación Docente y Técnica N°131', '131', NULL, 'ISFDYT', 'instituto131chacabuco@gmail.com', 'Zapiola ', '215', '\"2478-452570/24', 30, NULL),
(122, 'Instituto de Formación Docente y Técnica N°133', '133', NULL, 'ISFDYT', 'isfd133pinto@abc.gob.ar', 'Carlos Pellegrini 15', '', '-', 63, NULL),
(123, 'Instituto de Formación Docente y Técnica N°60', '60', NULL, 'ISFDYT', 'isfd60viamonte@abc.gob.ar', 'Urquiza y Uruguay', '553 ', '02358-443953', 66, NULL),
(124, 'Instituto de Formación Docente y Técnica N°134', '134', NULL, 'ISFDYT', 'isfdyt134lincoln@abc.gob.ar', 'Alem  ', '1950', '2.355.422.220', 78, NULL),
(125, 'Instituto de Formación Docente y Técnica N°14', '14', NULL, 'ISFDYT', 'isfdyt14lincoln@abc.gob.ar', 'Avellaneda 267/Caseros 550', '', '02355-422451/02', 78, NULL),
(126, 'Instituto de Formación Docente y Técnica N°71', '71', NULL, 'ISFDYT', 'isfdyt71pellegrini@abc.gob.ar', 'Roca ', '88', '\"02392-498776/ ', 103, NULL),
(127, 'Instituto de Formación Docente y Técnica N°78', '78', NULL, 'ISFDYT', 'isfdyt78bragado@abc.gob.ar', 'Dr. P. Nuñez', '581', '02342-422135', 16, NULL),
(128, 'Instituto de Formación Docente y Técnica N°69', '69', NULL, 'ISFDYT', 'isfd69.pedroluro@gmail.com', 'Calle 12', '380', '', 141, NULL),
(129, 'Instituto de Formación Docente y Técnica N°69', '69 - Ext. Medanos', NULL, 'ISFDYT', 'institutomedanos@gmail.com', 'Las Heras  ', '80', '', 141, NULL),
(130, 'Instituto Superior de Formación Técnica Nº75', '75', NULL, 'ISFT', 'ISFT75@abc.gob.ar\r\n', 'Aeronáutica Argentina y La\r\nMerced', '', '0249-4423138/44', 134, NULL),
(131, '', 'IAT', NULL, 'ISFT', 'IAT@abc.gob.ar\r\n', 'Ruta N° 30 - Pje. La Porteña, Paraje La Porteña-cc Nº6\r\n', '', '02928-421163/42', 134, NULL),
(132, 'Instituto de Formación Docente y Técnica N°166', '166', NULL, 'ISFDYT', 'isfdyt166tandil@abc.gob.ar', 'Av. Santamarina 851', '', '0249-4423837/44', 134, NULL),
(133, 'Instituto de Formación Docente y Técnica N°10', '10', NULL, 'ISFDYT', 'sandra.mordentti@isfdyt10tandil.edu.ar\r\nisfd10secretaria@gmail.com', 'Belgrano', '1610', '0249-4440637', 134, NULL),
(134, 'Instituto de Formación Docente y Técnica N°166', '166 - Anexo Vela', NULL, 'ISFDYT', 'isfdyt166tandil@abc.gob.ar', 'San Martín y Sarmiento', '', '0249-4491024', 134, NULL),
(135, 'Instituto de Formación Docente y Técnica N°40', '40', NULL, 'ISFDYT', 'isfdyt148pehuajo@abc.gob.ar', 'Quintana 110', '', '02392-430149', 138, NULL),
(136, 'Instituto de Formación Docente y Técnica N°144', '144', NULL, 'ISFDYT', 'ens.isfd144@gmail.com', 'Di Geronimo 650', '', '02392-433220/42', 138, NULL),
(137, 'Instituto de Formación Docente y Técnica N°6', '6', NULL, 'ISFDYT', 'isfdyt6chivilcoy@abc.gob.ar', 'Avda. Jose Leon Suarez Nº 25', '', '02346-422304', 32, NULL),
(138, 'Instituto de Formación Docente y Técnica N°145', '145', NULL, 'ISFDYT', 'isfdyt145villegas@abc.gob.ar', 'Rivadavia', '582', '03388-421262/42', 67, NULL),
(139, 'Instituto de Formación Docente y Técnica N°43', '43 - Ext. Navarro', NULL, 'ISFDYT', 'isfdyt43lobos@abc.gob.ar', 'Calle 11 - esquina 42 bis (ES\r\n3)', '975 ', '', 98, NULL),
(140, 'Instituto Superior de Formación Técnica Nº234', '234', NULL, 'ISFT', 'ISFT234@abc.gob.ar', 'Calle General San Martin  ', '2980', '', 211, NULL),
(141, 'Instituto de Formación Docente y Técnica N°107', '107', NULL, 'ISFDYT', 'estradai107@yahoo.com.ar', 'Mitre 1250 Cañuelas', '', '02226-432543(M)', 19, NULL),
(142, 'Instituto de Formación Docente y Técnica N°44', '44', NULL, 'ISFDYT', 'isfdyt44lasheras@abc.gob.ar', 'Juez Dumont 900', '', '0220-4761279', 58, NULL),
(143, 'Instituto de Formación Docente y Técnica N°214', '214', NULL, 'ISFDYT', '', 'Leandro N. Alem esq. 125', '', '02473-421068', 111, NULL),
(144, 'Instituto Superior de Formación Técnica Nº214', '214', NULL, 'ISFT', 'ISFT214@abc.gob.ar', 'Leandro N. Alem Esq. 125 Guernica.', '', '2224-501576', 111, NULL),
(145, 'Instituto de Formación Docente y Técnica N°99', '99', NULL, 'ISFDYT', 'institutosuperior99@hotmail.com', 'Mitre Nº 400', '', '02225-422853', 131, NULL),
(146, 'Instituto Superior de Formación Técnica Nº93', '93', NULL, 'ISFT', 'ISFT93@abc.gob.ar', 'San Martin ', '101', '02225-481175', 131, NULL),
(147, 'Instituto de Formación Docente y Técnica N°117', '117', NULL, 'ISFDYT', 'ensartigas@gmail.com', 'Tres de Febrero Nº 1810', '', '011-47446381/47', 237, NULL),
(148, 'Instituto Superior de Formación Técnica Nº217', '217', NULL, 'ISFT', 'ISFT217@abc.gob.ar', 'Ayacucho ', '937', '011-4746-9227', 237, NULL),
(149, 'Instituto de Formación Docente y Técnica N°64', '64', NULL, 'ISFDYT', 'isfdn.64@gmail.com', 'La Rioja 125', '', '02337-404700', 116, NULL),
(150, 'Instituto de Formación Docente y Técnica N°57', '57', NULL, 'ISFDYT', 'isfdyt57chascomus@abc.gob.ar', 'Franklin 166 e/Alvear y Libres del Sur\r\nRuta 41 kilometro 272 - Paraje', '', '02241-436710', 31, NULL),
(151, 'Instituto de Formación Docente y Técnica N°98', '98', '', 'ISFDYT', 'isfd98@gmail.com', 'Avda. Raul Alfonsin 552', '', '02241-423266', 31, NULL),
(152, 'Instituto Superior de Formación Técnica Nº203', '203', NULL, 'ISFT', 'ISFT203@abc.gob.ar', 'Mansilla (esquina La\r\nYerra), Villa Gobernador Udaondo', '2324 ', '011-4481-6422', 195, NULL),
(153, '', '', NULL, '', '', '', '', '', 195, NULL),
(154, 'Instituto de Formación Docente y Técnica N°30', '30', NULL, 'ISFDYT', 'isfd30.da.vinci@gmail.com', 'Las Heras 210/Mansilla 877', '', '011-46234207/44', 195, NULL),
(155, 'Instituto de Formación Docente y Técnica N°36', '36', NULL, 'ISFDYT', 'isfd36josecpaz@gmail.com', 'Gelly YObes 4950', '', '02320-333710/44', 196, NULL),
(156, 'Instituto de Formación Docente y Técnica N°36', '36 anex', NULL, 'ISFDYT', 'isfd36josecpaz@gmail.com', 'Chile', '995', '02320-333710/44', 196, NULL),
(157, 'Instituto Superior de Formación Técnica Nº132', '132', NULL, 'ISFT', 'ISFT132@abc.gob.ar', 'Zapiola', '215', '02352-431659/45', 30, NULL),
(158, 'Instituto de Formación Docente y Técnica N°67', '67', NULL, 'ISFDYT', 'Isfdyt67chacabuco@abc.gob.ar', 'Cervantes y San Luis', '', '2.364.578.722', 30, NULL),
(159, 'Instituto de Formación Docente y Técnica N°140', '140', NULL, 'ISFDYT', 'isfd140tigre@abc.gob.ar', 'EES Nº 8: Av H Irigoyen Nº 20 G\r\nPacheco (noche) ', '', '\"011-45129640 (', 249, NULL),
(160, 'Instituto de Formación Docente y Técnica N°140', '140', NULL, 'ISFDYT', 'isfd140tigre@abc.gob.ar', '\"EES Nº 5: LISANDRO DE LA\r\nTORRE N 2895 Don Torcuato\"', '', '011-47271595 (1', 249, NULL),
(161, 'Instituto de Formación Docente y Técnica N°140', '140', NULL, 'ISFDYT', 'isfd140tigre@abc.gob.ar', 'EES Nº 5: LISANDRO DE LA\r\nTORRE N 2895 Don Torcuato', '', '011-47272037', 249, NULL),
(162, 'Instituto Superior de Formación Técnica Nº199', '199', NULL, 'ISFT', 'ISFT199@abc.gob.ar', 'Celina Voena N° 1750, El Talar', '', '011-4736-0013', 249, NULL),
(163, 'Instituto de Formación Docente y Técnica N°124', '124', NULL, 'ISFDYT', 'isfdyt124colon@abc.gob.ar', 'Calle 42 e/13 y 14', '', '02473-421068/02', 33, NULL),
(164, 'Instituto de Formación Docente y Técnica N°125', '125', NULL, 'ISFDYT', 'isfdyt125rojas@abc.gob.ar', 'Lamadrid ', '262', '02475-463049', 117, NULL),
(165, 'Instituto Superior de Formación Técnica Nº143', '143', NULL, 'ISFT', 'ISFT143@abc.gob.ar', 'Guido y Alberdi SN° (Planta Alta)', '', '02326-454486 / ', 124, NULL),
(166, 'Instituto de Formación Docente y Técnica N°139', '139', NULL, 'ISFDYT', 'isfd139carmendeareco@abc.gob.ar', '16 de Julio S/N', '', '02273-442253', 27, NULL),
(167, 'Instituto de Formación Docente y Técnica N°142', '142', NULL, 'ISFDYT', 'isfd142@gmail.com', 'Rivadavia', '1165', '02325-442192', 123, NULL),
(168, 'Instituto de Formación Docente y Técnica N°55', '55', NULL, 'ISFDYT', 'isfd55escobar@abc.gob.ar', 'Estrada y Belgrano', '', '0348-4422354', 48, NULL),
(169, 'Instituto de Formación Docente y Técnica N°128', '128', NULL, 'ISFDYT', 'isfd128sannicolas@abc.gob.ar', 'Plaza 23 de Noviembre s/nº', '', '0336-4422140/44', 129, NULL),
(170, 'Instituto Superior de Formación Técnica Nº178', '178', NULL, 'ISFT', 'ISFT178@abc.gob.ar', 'Francia ', '82', '0336-4423095', 129, NULL),
(171, 'Instituto de Formación Docente y Técnica N°127', '127', NULL, 'ISFDYT', 'secretariainstituto127@gmail.com\r\ndireccioninstituto127@gmail.com', 'Plaza 23 de Noviembre s/nº', '', '0336-4425348 in', 129, NULL),
(172, 'Instituto Superior de Formación Técnica Nº38', '38', NULL, 'ISFT', 'ISFT38@abc.gob.ar', 'Av. Central , B° Somisa', '1825', '0336-446-2857', 129, NULL),
(173, 'Instituto Superior de Formación Técnica Nº178', '178 - UP 3', NULL, 'ISFT', 'ISFT178-upn3@abc.gob.ar', 'Unidad Penal Nº 3', '', '', 129, NULL),
(174, 'Instituto de Formación Docente y Técnica N°158', '158', NULL, 'ISFDYT', 'isfdyt158cpringles@abc.gob.ar', 'avenida 25 de Mayo', '1150', '02922-462178', 35, NULL),
(175, 'Instituto de Formación Docente y Técnica N°39', '39', NULL, 'ISFDYT', '39@formadores.org', 'Agustin Alvarez ', '1431', '011 - 47978889', 255, NULL),
(176, 'Instituto de Formación Docente y Técnica N°39', '39', NULL, 'ISFDYT', '39@formadores.org', 'Agustin Alvarez 1459\r\nAv. Maipu al 400', '', '011-47952291', 255, NULL),
(177, 'Instituto de Formación Docente y Técnica N°39', '39 sede', NULL, 'ISFDYT', '39@formadores.org', 'Maipu al 400', '', '011-47977261', 255, NULL),
(178, 'Instituto de Formación Docente y Técnica N°77', '77 sede', NULL, 'ISFDYT', 'isfdyt77vl@gmail.com', 'Villate ', '4480', '011-5197 1515', 255, NULL),
(179, 'Instituto de Formación Docente y Técnica N°77', '77', NULL, 'ISFDYT', 'isfdyt77vl@gmail.com', 'Armenia ', '2449', '011-51971931/ 1', 255, NULL),
(180, 'Instituto Superior de Formación Docente Nº229', '229', 'https://isfd229-bue.infd.edu.ar/sitio/', 'ISFDYT', 'institutosuperior229@gmail.com', 'Virrey Loreto', '2564', '47566300', 255, NULL),
(181, 'Instituto Superior de Formación Técnica Nº199', 'Anexo 199', NULL, 'ISFT', 'ISFT199-anexovlopez@abc.gob.ar', 'Cerrito e/ Santa Fe y Santiago del Estero', '3966', '011-4736-0013', 255, NULL),
(182, 'Instituto Superior de Formación Técnica Nº220', '220', NULL, 'ISFT', 'ISFT220@abc.gob.ar', 'Virrey Loreto', '2564', '011-4756-6300', 255, NULL),
(183, 'Instituto de Formación Docente y Técnica N°113', '113 anexo', NULL, 'ISFDYT', 'isfd113@yahoo.com.ar', 'Salguero ', '2454', '1.147.131.459', 394, NULL),
(184, 'Instituto Superior de Formación Técnica Nº183', '183', NULL, 'ISFT', 'ISFT183@abc.gob.ar', 'San Martín  3er Piso, San Andrés.', '1714 ', '011-4713-2816 /', 394, NULL),
(185, 'Instituto de Formación Docente y Técnica N°113', '113', NULL, 'ISFDYT', 'isfd113@yahoo.com.ar', 'Cochabamba 2300 y 2280', '', '\"011- 47523952/', 394, NULL),
(186, 'Instituto de Formación Docente y Técnica N°114', '114', NULL, 'ISFDYT', 'secretaria_tupac@yahoo.com.ar', 'Mitre Villa Ballester', '5035 ', '011- 47682545/2', 394, NULL),
(187, 'Instituto de Formación Docente y Técnica N°174', '174', NULL, 'ISFDYT', 'unidadacade174@yahoo.com.ar', 'Balcarce  ', '3469', '011- 51978548/4', 394, NULL),
(188, 'Instituto Superior de Formación Técnica Nº225', '225', NULL, 'ISFT', 'ISFT225@abc.gob.ar', 'Rivadavia  ', '3915', '55354-6600 int.', 394, NULL),
(189, 'Instituto Superior de Formación Técnica Nº230', '230', NULL, 'ISFT', 'ISFT230@abc.gob.ar', 'Nra. Señora de la Merced ', '4624', '21968908', 2, NULL),
(190, 'Instituto de Formación Docente y Técnica N°34', '34', NULL, 'ISFDYT', 'isfd34@gmail.com', 'Aviador Matienzo ', '2430', '011-47586028', 2, NULL),
(191, 'Instituto Superior de Formación Técnica Nº185', '185', NULL, 'ISFT', 'ISFT185@abc.gob.ar', 'Escultor Santiago Parodi ', '4056', '011-4759-4417/4', 2, NULL),
(192, 'Instituto de Formación Docente y Técnica N°23', '23', NULL, 'ISFDYT', 'institutosfd23lujan@gmail.com', 'Lavalle ', '241', '02323-420191', 84, NULL),
(193, 'Instituto Superior de Formación Técnica Nº189', '189', NULL, 'ISFT', 'ISFT189@abc.gob.ar', 'Hipólito Yrigoyen  ', '1469', '02323-436549', 84, NULL),
(194, 'Instituto de Formación Docente y Técnica N°141', '141', NULL, 'ISFDYT', 'ensfalujan@gmail.com', 'Avda. España  ', '801', '02323-437618', 84, NULL),
(195, 'Instituto Superior de Formación Técnica Nº184', 'Extensión 184', NULL, 'ISFT', '', '', '', '', 44, NULL),
(196, 'Instituto de Formación Docente y Técnica N°129', '129', NULL, 'ISFDYT', 'profesores129@gmail.com', 'Almafuerte ', '308', '0236-4421818', 72, NULL),
(197, 'Instituto de Formación Docente y Técnica N°20', '20', NULL, 'ISFDYT', 'isfdyt20junin@abc.gob.ar', 'Almafuerte ', '300', '0236-4443371', 72, NULL),
(198, 'Instituto de Formación Docente y Técnica N°20', '20 - UP Junin N°13', NULL, 'ISFDYT', 'isfdyt20junin@abc.gob.ar', 'Pastor Bauman y Ruta 188', '', '0236-4443371', 72, NULL),
(199, 'Instituto de Formación Docente y Técnica N°211', '211', NULL, 'ISFDYT', 'isfdyt211alem@abc.gob.ar', 'Avda. Dunckler ', '555', '02354-421116', 77, NULL),
(200, 'Instituto de Formación Docente y Técnica N°109', '109', NULL, 'ISFDYT', 'isfd109@gmail.com', '11 de Noviembre 570 San A. de\r\nPadua', '', '0220-4825450', 214, NULL),
(201, 'Instituto de Formación Docente y Técnica N°29', '29 - (Subsede)', NULL, 'ISFDYT', 'merlo.isfd29@gmail.com', 'Libertad', '790', '0220-4858700', 214, NULL),
(202, 'Instituto de Formación Docente y Técnica N°29', '29', NULL, 'ISFDYT', 'merlo.isfd29@gmail.com', 'Rioja esq Balbin', '996 ', '0220-4867759/48', 214, NULL),
(203, 'Instituto de Formación Docente y Técnica N°147', '147', NULL, 'ISFDYT', 'isfd147pehuajo@abc.gob.ar', 'Hernandez 250', '', '02396-473030', 102, NULL),
(204, 'Instituto de Formación Docente y Técnica N°13', '13', NULL, 'ISFDYT', 'isfdyt13pehuajo@abc.gob.ar', 'Alem y Godoy', '', '02396-472698', 102, NULL),
(205, 'Instituto Superior de Formación Técnica Nº150', '150', NULL, 'ISFT', 'ISFT150@abc.gob.ar', 'Alem (Esq. 9 de Julio)', '381 ', '02357-420140', 26, NULL),
(206, 'Instituto de Formación Docente y Técnica N°74', '74', NULL, 'ISFDYT', 'isfdyt74gralbelgrano@abc.gob.ar', 'Julio Llanos ', '849', '02243-452192', 55, NULL),
(207, 'Instituto Superior de Formación Técnica Nº 182', '182', NULL, 'ISFT', 'ISFT182@abc.gob.ar', 'Sgto.Salazar y Cabo. Santillan SN°,\r\nBarrio Sargento Cabral, Campo de Mayo\r\n', '', '011-4667-2596/4', 243, NULL),
(208, 'Instituto de Formación Docente y Técnica N°112', '112', NULL, 'ISFDYT', 'isfd112@yahoo.com.ar', 'Argüero ', '1138', '011-46646895', 243, NULL),
(209, 'Instituto de Formación Docente y Técnica N°108', '108', NULL, 'ISFDYT', 'moronisfd108@gmail.com', 'Casullo ', '125', '011-4629-8769', 219, NULL),
(210, 'Instituto de Formación Docente y Técnica N°21', '21', NULL, 'ISFDYT', '', 'Merlo esq Uruguay', '499 ', '0237-4620436/46', 218, NULL),
(211, 'Instituto de Formación Docente y Técnica N°110', '110', NULL, 'ISFDYT', 'riglos110@gmail.com', 'Vicente López y Planes Esq. Merlo', '251', '0237-4622083', 218, NULL),
(212, 'Instituto de Formación Docente y Técnica N°42', '42', NULL, 'ISFDYT', 'inssfd42@gmail.com', 'Serrano ', '1326', '011-46646023', 243, NULL),
(213, 'Instituto de Formación Docente y Técnica N°42', '42 Leopoldo Marechal', NULL, 'ISFDYT', 'inssfd42@gmail.com', 'Munzón ', '612', '011-4666-9443', 243, NULL),
(214, 'Instituto Superior de Formación Técnica Nº 188', '188', NULL, 'ISFT', 'ISFT188@abc.gob.ar', 'Pueyrredon ', '781', '0237-484-2820', 65, NULL),
(215, 'Instituto Superior de Formación Técnica Nº 201', '201', NULL, 'ISFT', 'ISFT201@abc.gob.ar', 'Barletta ', '2180', '03489-324128', 18, NULL),
(216, 'Instituto de Formación Docente y Técnica N°15', '15', NULL, 'ISFDYT', 'isfdyt15@yahoo.com.ar', 'Dellepiane Bvard esq. Intendente Varela', '352 ', '03489-422931', 18, NULL),
(217, 'Instituto de Formación Docente y Técnica N°199', '119', NULL, 'ISFDYT', 'isfd119sanpedro@gmail.com', 'Arzobispo Bottaro ', '995', '03329-426023/42', 130, NULL),
(218, 'Instituto Superior de Formación Técnica Nº 118', '118', NULL, 'ISFT', 'ISFT118@abc.gob.ar', 'Arzobispo Bottaro ', '995', '03329-428950', 130, NULL),
(219, 'Instituto de Formación Docente y Técnica N°5', '5', NULL, 'ISFDYT', 'isfdyt5pergamino@abc.gob.ar', 'Scalabrini Ortiz  ', '472', '02477-422568', 104, NULL),
(220, 'Instituto de Formación Docente y Técnica N°122', '122', NULL, 'ISFDYT', 'isfdyt122pergamino@abc.gob.ar', 'Avda. Colon -1° piso', '725 ', '02477-429906', 104, NULL),
(221, 'Instituto de Formación Docente y Técnica N°121', '121', NULL, 'ISFDYT', 'enspergamino@yahoo.com.ar', 'Avda. Colon ', '725', '02477-440587/42', 104, NULL),
(222, 'Instituto de Formación Docente y Técnica N°80', '80', NULL, 'ISFDYT', 'isfdyt80carloscasares@abc.gob.ar', 'Soler ', '110', '02395-451763/45', 25, NULL),
(223, 'Instituto de Formación Docente y Técnica N°149', '149', NULL, 'ISFDYT', 'isfdyt149carloscasares@abc.gob.ar', 'Avda. Antonio Maya y C Borja', '', '02395-452383/45', 25, NULL),
(224, 'Instituto de Formación Docente y Técnica N°148', '148 (Anexo)', NULL, 'ISFDYT', 'isfdyt148pehuajo@abc.gob.ar', 'Hernandez ', '252', '2.396.404.909', 102, NULL),
(225, 'Instituto de Formación Docente y Técnica N°148', '148', NULL, 'ISFDYT', 'isfdyt148pehuajo@abc.gob.ar', 'Alsina ', '152', '02396-474909/47', 102, NULL),
(226, 'Instituto de Formación Docente y Técnica N°61', '61', NULL, 'ISFDYT', 'isfd61carlostejedor@abc.gob.ar', 'San Martin esquina Rivadavia', '300 ', '02357-420915/42', 26, NULL),
(227, '', 'ISFTPT', NULL, 'ISFT', 'institutoFACETP@abc.gob.ar', 'Colonia El Salado, Colonia el Salado, General Belgrano, Buenos Aires', '', '2323616268', 55, NULL),
(228, 'Instituto de Formación Docente y Técnica N°19', '19 / anexo', NULL, 'ISFDYT', 'instituto@isfdn19.edu.ar', 'Escuela N° 1 - calle 25 de Mayo\r\nentre San Luis y Mitre', '', '0223-4514371', 64, NULL),
(229, 'Instituto Superior de Formación Técnica Nº 151', '151', NULL, 'ISFT', 'ISFT151@abc.gob.ar', 'Castelli ', '4197', '0223-4727800/49', 64, NULL),
(230, 'Instituto de Formación Docente y Técnica N°84', '84', NULL, 'ISFDYT', 'isfd84.edu@gmail.com', 'Boulevard Maritimo ', '2280', '0223-4916767', 64, NULL),
(231, 'Instituto Superior de Formación Técnica Nº 204', '204', NULL, 'ISFT', 'ISFT204@abc.gob.ar', 'Salta 5 Piso', '1852 ', '0223-4993700 in', 64, NULL),
(232, 'Instituto Superior de Formación Técnica Nº 222', '222', NULL, 'ISFT', 'ISFT222@abc.gob.ar', 'Libres del Sur y Acevedo (ex Colonia Alfonsina Storni)', '4300 ', '2.235.798.163', 64, NULL),
(233, 'Instituto de Formación Docente y Técnica N°62', '62', NULL, 'ISFDYT', 'isfd62dorrego@abc.gob.ar', 'Martin Fierro ', '972', '02921-450288', 34, NULL),
(234, 'Instituto de Formación Docente y Técnica N°62', '62 - Ext. Oriente', NULL, 'ISFDYT', 'isfd62dorrego@abc.gob.ar', 'San Martin ', '248', '2983-495208', 34, NULL),
(235, 'Instituto de Formación Docente y Técnica N°25', '25', NULL, 'ISFDYT', 'isfd25patagones@abc.gob.ar', 'Alsina', '25', '02983-423186', 28, NULL),
(236, 'Instituto de Formación Docente y Técnica N°159', '159', NULL, 'ISFDYT', 'is112159@yahoo.com.ar', 'Villanueva ', '277', '02920-462335', 36, NULL),
(237, 'Instituto de Formación Docente y Técnica N°79', '79', NULL, 'ISFDYT', 'isfd79rosales@gmail.com', 'Rivadavia', '140', '02932-421368 In', 36, NULL),
(238, 'Instituto Superior de Formación Técnica Nº 190', '190', NULL, 'ISFT', 'ISFT190@abc.gob.ar', 'Villanueva ', '175', '02932-422657', 36, NULL),
(239, 'Instituto de Formación Docente y Técnica N°7', '7 - Ext Aulica', NULL, 'ISFDYT', 'isfdyt7mercedes@abc.gob.ar', '27 e/ 42 y 44', '', '', 93, NULL),
(240, 'Instituto de Formación Docente y Técnica N°7', '7 - UP N°5', NULL, 'ISFDYT', 'isfdyt7mercedes@abc.gob.ar', '33 e/ruta4 y 2', '', '02324-432390', 93, NULL),
(241, 'Instituto de Formación Docente y Técnica N°137', '137', NULL, 'ISFDYT', 'normalmercedes17@gmail.com', 'Calle 29 ', '874', '02324-420245', 93, NULL),
(242, 'Instituto de Formación Docente y Técnica N°7', '7', NULL, 'ISFDYT', 'isfdyt7mercedes@abc.gob.ar', 'Calle 24', ' 338', '02324-232390/43', 93, NULL),
(243, 'Instituto de Formación Docente y Técnica N°155', '155', NULL, 'ISFDYT', 'isfd155@gmail.com', 'Sarmiento ', '950', '0237-4850393', 65, NULL),
(244, 'Instituto Superior de Formación Técnica Nº 179', '179', NULL, 'ISFT', 'ISFT179@abc.gob.ar', 'Tucumán y Martín Fierro  ', '250', '0237-466-7020', 218, NULL),
(245, 'Instituto de Formación Docente y Técnica N°111', '111', NULL, 'ISFDYT', 'isfd111073@gmail.com', 'Zeballos', '822/44', '0237-4666129/46', 218, NULL),
(246, 'Instituto Superior de Formación Técnica Nº 178', '176', NULL, 'ISFT', 'ISFT176@abc.gob.ar', 'Belgrano ', '357', '011-4629-1357/4', 219, NULL),
(247, 'Instituto de Formación Docente y Técnica N°45', '45', NULL, 'ISFDYT', 'direccionisfd45@yahoo.com.ar', 'Laiacona ', '1040', '011 2003-9731', 219, NULL),
(248, 'Instituto Superior de Formación Técnica Nº 177', '177', NULL, 'ISFT', 'ISFT177@abc.gob.ar', 'Zapiola', '1420', '0220-494-2076/4', 214, NULL),
(249, 'Instituto de Formación Docente y Técnica N°116', '116', NULL, 'ISFDYT', '', 'Intendente Varela ', '751', '03489-422218', 18, NULL),
(250, 'Instituto de Formación Docente y Técnica N°146', '146 - Anexo Tres Lomas', NULL, 'ISFDYT', 'isfdyt146salliquelo@abc.gob.ar				', 'EET Nº 1- M Moreno ', '117', '\"02394-480004 0', 139, NULL),
(251, 'Instituto de Formación Docente y Técnica N°50', '50', NULL, 'ISFDYT', 'isfd50berazategui@gmail.com', 'Calle 3 y 103\r\n', '', '011-42758339/42', 156, NULL),
(253, 'Instituto Superior de Formación Técnica Nº 198', '198', NULL, 'ISFT', 'ISFT198@abc.gob.ar', 'Calle 137 A', '5288', '02229-440947', 156, NULL),
(254, 'Instituto de Formación Docente y Técnica N°68', '68', NULL, 'ISFDYT', 'isfdyt68agchaves@abc.gob.ar', 'Maipu e/Saenz Peña y Torchiari', '684 ', '02983-482081', 4, NULL),
(255, 'Instituto de Formación Docente y Técnica N°1', '1', NULL, 'ISFDYT', 'isfd001@yahoo.com.ar		', 'ruguay e/Av Pavon y Santa F\r\n', '18 ', '011- 42088838/4', 150, NULL),
(256, 'Instituto de Formación Docente y Técnica N°101', '101', NULL, 'ISFDYT', 'isfd101@yahoo.com.ar		', 'Av Mitre ', '4900', '011-42174860', 150, NULL),
(257, 'Instituto Superior de Formación Técnica Nº 197', '197', NULL, 'ISFT', 'ISFT197@abc.gob.ar		', 'Avenida Belgrano \r\n', '1191', '\"011-4265-0247/', 150, NULL),
(258, 'Instituto de Formación Docente y Técnica N°100', '100', NULL, 'ISFDYT', 'unidadacademicaenspa@yahoo.com.ar		', 'Avda. Belgrano ', '355', '011-42016859', 150, NULL),
(259, 'Instituto de Formación Docente y Técnica N°231', '231', NULL, 'ISFDYT', '', 'Av. Vélez Sarsfield ', '625', '', 150, NULL);

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
(1, '25 de Mayo', NULL, 1, 0),
(2, '3 de febrero', NULL, 1, 0),
(3, 'A. Alsina', NULL, 1, 0),
(4, 'A. Gonzáles Cháves', NULL, 1, 0),
(5, 'Aguas Verdes', NULL, 1, 0),
(6, 'Alberti', NULL, 1, 0),
(7, 'Arrecifes', NULL, 1, 0),
(8, 'Ayacucho', NULL, 1, 0),
(9, 'Azul', NULL, 1, 0),
(10, 'Bahía Blanca', NULL, 1, 0),
(11, 'Balcarce', NULL, 1, 0),
(12, 'Baradero', NULL, 1, 0),
(13, 'Benito Juárez', NULL, 1, 0),
(14, 'Berisso', NULL, 1, 0),
(15, 'Bolívar', NULL, 1, 0),
(16, 'Bragado', NULL, 1, 0),
(17, 'Brandsen', NULL, 1, 0),
(18, 'Campana', NULL, 1, 0),
(19, 'Cañuelas', NULL, 1, 0),
(20, 'Capilla del Señor', NULL, 1, 0),
(21, 'Capitán Sarmiento', NULL, 1, 0),
(22, 'Carapachay', NULL, 1, 0),
(23, 'Carhue', NULL, 1, 0),
(24, 'Cariló', NULL, 1, 0),
(25, 'Carlos Casares', NULL, 1, 0),
(26, 'Carlos Tejedor', NULL, 1, 0),
(27, 'Carmen de Areco', NULL, 1, 0),
(28, 'Carmen de Patagones', NULL, 1, 0),
(29, 'Castelli', NULL, 1, 0),
(30, 'Chacabuco', NULL, 1, 0),
(31, 'Chascomús', NULL, 1, 0),
(32, 'Chivilcoy', NULL, 1, 0),
(33, 'Colón', NULL, 1, 0),
(34, 'Coronel Dorrego', NULL, 1, 0),
(35, 'Coronel Pringles', NULL, 1, 0),
(36, 'Coronel Rosales', NULL, 1, 0),
(37, 'Coronel Suarez', NULL, 1, 0),
(38, 'Costa Azul', NULL, 1, 0),
(39, 'Costa Chica', NULL, 1, 0),
(40, 'Costa del Este', NULL, 1, 0),
(41, 'Costa Esmeralda', NULL, 1, 0),
(42, 'Daireaux', NULL, 1, 0),
(43, 'Darregueira', NULL, 1, 0),
(44, 'Del Viso', NULL, 1, 0),
(45, 'Dolores', NULL, 1, 0),
(46, 'Don Torcuato', NULL, 1, 0),
(47, 'Ensenada', NULL, 1, 0),
(48, 'Escobar', NULL, 1, 0),
(49, 'Exaltación de la Cruz', NULL, 1, 0),
(50, 'Florentino Ameghino', NULL, 1, 0),
(51, 'Garín', NULL, 1, 0),
(52, 'Gral. Alvarado', NULL, 1, 0),
(53, 'Gral. Alvear', NULL, 1, 0),
(54, 'Gral. Arenales', NULL, 1, 0),
(55, 'Gral. Belgrano', NULL, 1, 0),
(56, 'Gral. Guido', NULL, 1, 0),
(57, 'Gral. Lamadrid', NULL, 1, 0),
(58, 'Gral. Las Heras', NULL, 1, 0),
(59, 'Gral. Lavalle', NULL, 1, 0),
(60, 'Gral. Madariaga', NULL, 1, 0),
(61, 'Gral. Pacheco', NULL, 1, 0),
(62, 'Gral. Paz', NULL, 1, 0),
(63, 'Gral. Pinto', NULL, 1, 0),
(64, 'Gral. Pueyrredón', NULL, 1, 0),
(65, 'Gral. Rodríguez', NULL, 1, 0),
(66, 'Gral. Viamonte', NULL, 1, 0),
(67, 'Gral. Villegas', NULL, 1, 0),
(68, 'Guaminí', NULL, 1, 0),
(69, 'Guernica', NULL, 1, 0),
(70, 'Hipólito Yrigoyen', NULL, 1, 0),
(71, 'Ing. Maschwitz', NULL, 1, 0),
(72, 'Junín', NULL, 1, 0),
(73, 'La Plata', NULL, 1, 0),
(74, 'Laprida', NULL, 1, 0),
(75, 'Las Flores', NULL, 1, 0),
(76, 'Las Toninas', NULL, 1, 0),
(77, 'Leandro N. Alem', NULL, 1, 0),
(78, 'Lincoln', NULL, 1, 0),
(79, 'Loberia', NULL, 1, 0),
(80, 'Lobos', NULL, 1, 0),
(81, 'Los Cardales', NULL, 1, 0),
(82, 'Los Toldos', NULL, 1, 0),
(83, 'Lucila del Mar', NULL, 1, 0),
(84, 'Luján', NULL, 1, 0),
(85, 'Magdalena', NULL, 1, 0),
(86, 'Maipú', NULL, 1, 0),
(87, 'Mar Chiquita', NULL, 1, 0),
(88, 'Mar de Ajó', NULL, 1, 0),
(89, 'Mar de las Pampas', NULL, 1, 0),
(90, 'Mar del Plata', NULL, 1, 0),
(91, 'Mar del Tuyú', NULL, 1, 0),
(92, 'Marcos Paz', NULL, 1, 0),
(93, 'Mercedes', NULL, 1, 0),
(94, 'Miramar', NULL, 1, 0),
(95, 'Monte', NULL, 1, 0),
(96, 'Monte Hermoso', NULL, 1, 0),
(97, 'Munro', NULL, 1, 0),
(98, 'Navarro', NULL, 1, 0),
(99, 'Necochea', NULL, 1, 0),
(100, 'Olavarría', NULL, 1, 0),
(101, 'Partido de la Costa', NULL, 1, 0),
(102, 'Pehuajó', NULL, 1, 0),
(103, 'Pellegrini', NULL, 1, 0),
(104, 'Pergamino', NULL, 1, 0),
(105, 'Pigüé', NULL, 1, 0),
(106, 'Pila', NULL, 1, 0),
(107, 'Pilar', NULL, 1, 0),
(108, 'Pinamar', NULL, 1, 0),
(109, 'Pinar del Sol', NULL, 1, 0),
(110, 'Polvorines', NULL, 1, 0),
(111, 'Pte. Perón', NULL, 1, 0),
(112, 'Puán', NULL, 1, 0),
(113, 'Punta Indio', NULL, 1, 0),
(114, 'Ramallo', NULL, 1, 0),
(115, 'Rauch', NULL, 1, 0),
(116, 'Rivadavia', NULL, 1, 0),
(117, 'Rojas', NULL, 1, 0),
(118, 'Roque Pérez', NULL, 1, 0),
(119, 'Saavedra', NULL, 1, 0),
(120, 'Saladillo', NULL, 1, 0),
(121, 'Salliqueló', NULL, 1, 0),
(122, 'Salto', NULL, 1, 0),
(123, 'San Andrés de Giles', NULL, 1, 0),
(124, 'San Antonio de Areco', NULL, 1, 0),
(125, 'San Antonio de Padua', NULL, 1, 0),
(126, 'San Bernardo', NULL, 1, 0),
(127, 'San Cayetano', NULL, 1, 0),
(128, 'San Clemente del Tuyú', NULL, 1, 0),
(129, 'San Nicolás', NULL, 1, 0),
(130, 'San Pedro', NULL, 1, 0),
(131, 'San Vicente', NULL, 1, 0),
(132, 'Santa Teresita', NULL, 1, 0),
(133, 'Suipacha', NULL, 1, 0),
(134, 'Tandil', NULL, 1, 0),
(135, 'Tapalqué', NULL, 1, 0),
(136, 'Tordillo', NULL, 1, 0),
(137, 'Tornquist', NULL, 1, 0),
(138, 'Trenque Lauquen', NULL, 1, 0),
(139, 'Tres Lomas', NULL, 1, 0),
(140, 'Villa Gesell', NULL, 1, 0),
(141, 'Villarino', NULL, 1, 0),
(142, 'Zárate', NULL, 1, 0),
(143, '11 de Septiembre', NULL, 2, 0),
(144, '20 de Junio', NULL, 2, 0),
(145, '25 de Mayo', NULL, 2, 0),
(146, 'Acassuso', NULL, 2, 0),
(147, 'Adrogué', NULL, 2, 0),
(148, 'Aldo Bonzi', NULL, 2, 0),
(149, 'Área Reserva Cinturón Ecológico', NULL, 2, 0),
(150, 'Avellaneda', NULL, 2, 0),
(151, 'Banfield', NULL, 2, 0),
(152, 'Barrio Parque', NULL, 2, 0),
(153, 'Barrio Santa Teresita', NULL, 2, 0),
(154, 'Beccar', NULL, 2, 0),
(155, 'Bella Vista', NULL, 2, 0),
(156, 'Berazategui', NULL, 2, 0),
(157, 'Bernal Este', NULL, 2, 0),
(158, 'Bernal Oeste', NULL, 2, 0),
(159, 'Billinghurst', NULL, 2, 0),
(160, 'Boulogne', NULL, 2, 0),
(161, 'Burzaco', NULL, 2, 0),
(162, 'Carapachay', NULL, 2, 0),
(163, 'Caseros', NULL, 2, 0),
(164, 'Castelar', NULL, 2, 0),
(165, 'Churruca', NULL, 2, 0),
(166, 'Ciudad Evita', NULL, 2, 0),
(167, 'Ciudad Madero', NULL, 2, 0),
(168, 'Ciudadela', NULL, 2, 0),
(169, 'Claypole', NULL, 2, 0),
(170, 'Crucecita', NULL, 2, 0),
(171, 'Dock Sud', NULL, 2, 0),
(172, 'Don Bosco', NULL, 2, 0),
(173, 'Don Orione', NULL, 2, 0),
(174, 'El Jagüel', NULL, 2, 0),
(175, 'El Libertador', NULL, 2, 0),
(176, 'El Palomar', NULL, 2, 0),
(177, 'El Tala', NULL, 2, 0),
(178, 'El Trébol', NULL, 2, 0),
(179, 'Ezeiza', NULL, 2, 0),
(180, 'Ezpeleta', NULL, 2, 0),
(181, 'Florencio Varela', NULL, 2, 0),
(182, 'Florida', NULL, 2, 0),
(183, 'Francisco Álvarez', NULL, 2, 0),
(184, 'Gerli', NULL, 2, 0),
(185, 'Glew', NULL, 2, 0),
(186, 'González Catán', NULL, 2, 0),
(187, 'Gral. Lamadrid', NULL, 2, 0),
(188, 'Grand Bourg', NULL, 2, 0),
(189, 'Gregorio de Laferrere', NULL, 2, 0),
(190, 'Guillermo Enrique Hudson', NULL, 2, 0),
(191, 'Haedo', NULL, 2, 0),
(192, 'Hurlingham', NULL, 2, 0),
(193, 'Ing. Sourdeaux', NULL, 2, 0),
(194, 'Isidro Casanova', NULL, 2, 0),
(195, 'Ituzaingó', NULL, 2, 0),
(196, 'José C. Paz', NULL, 2, 0),
(197, 'José Ingenieros', NULL, 2, 0),
(198, 'José Marmol', NULL, 2, 0),
(199, 'La Lucila', NULL, 2, 0),
(200, 'La Reja', NULL, 2, 0),
(201, 'La Tablada', NULL, 2, 0),
(202, 'Lanús', NULL, 2, 0),
(203, 'Llavallol', NULL, 2, 0),
(204, 'Loma Hermosa', NULL, 2, 0),
(205, 'Lomas de Zamora', NULL, 2, 0),
(206, 'Lomas del Millón', NULL, 2, 0),
(207, 'Lomas del Mirador', NULL, 2, 0),
(208, 'Longchamps', NULL, 2, 0),
(209, 'Los Polvorines', NULL, 2, 0),
(210, 'Luis Guillón', NULL, 2, 0),
(211, 'Malvinas Argentinas', NULL, 2, 0),
(212, 'Martín Coronado', NULL, 2, 0),
(213, 'Martínez', NULL, 2, 0),
(214, 'Merlo', NULL, 2, 0),
(215, 'Ministro Rivadavia', NULL, 2, 0),
(216, 'Monte Chingolo', NULL, 2, 0),
(217, 'Monte Grande', NULL, 2, 0),
(218, 'Moreno', NULL, 2, 0),
(219, 'Morón', NULL, 2, 0),
(220, 'Muñiz', NULL, 2, 0),
(221, 'Olivos', NULL, 2, 0),
(222, 'Pablo Nogués', NULL, 2, 0),
(223, 'Pablo Podestá', NULL, 2, 0),
(224, 'Paso del Rey', NULL, 2, 0),
(225, 'Pereyra', NULL, 2, 0),
(226, 'Piñeiro', NULL, 2, 0),
(227, 'Plátanos', NULL, 2, 0),
(228, 'Pontevedra', NULL, 2, 0),
(229, 'Quilmes', NULL, 2, 0),
(230, 'Rafael Calzada', NULL, 2, 0),
(231, 'Rafael Castillo', NULL, 2, 0),
(232, 'Ramos Mejía', NULL, 2, 0),
(233, 'Ranelagh', NULL, 2, 0),
(234, 'Remedios de Escalada', NULL, 2, 0),
(235, 'Sáenz Peña', NULL, 2, 0),
(236, 'San Antonio de Padua', NULL, 2, 0),
(237, 'San Fernando', NULL, 2, 0),
(238, 'San Francisco Solano', NULL, 2, 0),
(239, 'San Isidro', NULL, 2, 0),
(240, 'San José', NULL, 2, 0),
(241, 'San Justo', NULL, 2, 0),
(242, 'San Martín', NULL, 2, 0),
(243, 'San Miguel', NULL, 2, 0),
(244, 'Santos Lugares', NULL, 2, 0),
(245, 'Sarandí', NULL, 2, 0),
(246, 'Sourigues', NULL, 2, 0),
(247, 'Tapiales', NULL, 2, 0),
(248, 'Temperley', NULL, 2, 0),
(249, 'Tigre', NULL, 2, 0),
(250, 'Tortuguitas', NULL, 2, 0),
(251, 'Tristán Suárez', NULL, 2, 0),
(252, 'Trujui', NULL, 2, 0),
(253, 'Turdera', NULL, 2, 0),
(254, 'Valentín Alsina', NULL, 2, 0),
(255, 'Vicente López', NULL, 2, 0),
(256, 'Villa Adelina', NULL, 2, 0),
(257, 'Villa Ballester', NULL, 2, 0),
(258, 'Villa Bosch', NULL, 2, 0),
(259, 'Villa Caraza', NULL, 2, 0),
(260, 'Villa Celina', NULL, 2, 0),
(261, 'Villa Centenario', NULL, 2, 0),
(262, 'Villa de Mayo', NULL, 2, 0),
(263, 'Villa Diamante', NULL, 2, 0),
(264, 'Villa Domínico', NULL, 2, 0),
(265, 'Villa España', NULL, 2, 0),
(266, 'Villa Fiorito', NULL, 2, 0),
(267, 'Villa Guillermina', NULL, 2, 0),
(268, 'Villa Insuperable', NULL, 2, 0),
(269, 'Villa José León Suárez', NULL, 2, 0),
(270, 'Villa La Florida', NULL, 2, 0),
(271, 'Villa Luzuriaga', NULL, 2, 0),
(272, 'Villa Martelli', NULL, 2, 0),
(273, 'Villa Obrera', NULL, 2, 0),
(274, 'Villa Progreso', NULL, 2, 0),
(275, 'Villa Raffo', NULL, 2, 0),
(276, 'Villa Sarmiento', NULL, 2, 0),
(277, 'Villa Tesei', NULL, 2, 0),
(278, 'Villa Udaondo', NULL, 2, 0),
(279, 'Virrey del Pino', NULL, 2, 0),
(280, 'Wilde', NULL, 2, 0),
(281, 'William Morris', NULL, 2, 0),
(282, 'Agronomía', NULL, 3, 0),
(283, 'Almagro', NULL, 3, 0),
(284, 'Balvanera', NULL, 3, 0),
(285, 'Barracas', NULL, 3, 0),
(286, 'Belgrano', NULL, 3, 0),
(287, 'Boca', NULL, 3, 0),
(288, 'Boedo', NULL, 3, 0),
(289, 'Caballito', NULL, 3, 0),
(290, 'Chacarita', NULL, 3, 0),
(291, 'Coghlan', NULL, 3, 0),
(292, 'Colegiales', NULL, 3, 0),
(293, 'Constitución', NULL, 3, 0),
(294, 'Flores', NULL, 3, 0),
(295, 'Floresta', NULL, 3, 0),
(296, 'La Paternal', NULL, 3, 0),
(297, 'Liniers', NULL, 3, 0),
(298, 'Mataderos', NULL, 3, 0),
(299, 'Monserrat', NULL, 3, 0),
(300, 'Monte Castro', NULL, 3, 0),
(301, 'Nueva Pompeya', NULL, 3, 0),
(302, 'Núñez', NULL, 3, 0),
(303, 'Palermo', NULL, 3, 0),
(304, 'Parque Avellaneda', NULL, 3, 0),
(305, 'Parque Chacabuco', NULL, 3, 0),
(306, 'Parque Chas', NULL, 3, 0),
(307, 'Parque Patricios', NULL, 3, 0),
(308, 'Puerto Madero', NULL, 3, 0),
(309, 'Recoleta', NULL, 3, 0),
(310, 'Retiro', NULL, 3, 0),
(311, 'Saavedra', NULL, 3, 0),
(312, 'San Cristóbal', NULL, 3, 0),
(313, 'San Nicolás', NULL, 3, 0),
(314, 'San Telmo', NULL, 3, 0),
(315, 'Vélez Sársfield', NULL, 3, 0),
(316, 'Versalles', NULL, 3, 0),
(317, 'Villa Crespo', NULL, 3, 0),
(318, 'Villa del Parque', NULL, 3, 0),
(319, 'Villa Devoto', NULL, 3, 0),
(320, 'Villa Gral. Mitre', NULL, 3, 0),
(321, 'Villa Lugano', NULL, 3, 0),
(322, 'Villa Luro', NULL, 3, 0),
(323, 'Villa Ortúzar', NULL, 3, 0),
(324, 'Villa Pueyrredón', NULL, 3, 0),
(325, 'Villa Real', NULL, 3, 0),
(326, 'Villa Riachuelo', NULL, 3, 0),
(327, 'Villa Santa Rita', NULL, 3, 0),
(328, 'Villa Soldati', NULL, 3, 0),
(329, 'Villa Urquiza', NULL, 3, 0),
(330, 'Aconquija', NULL, 4, 0),
(331, 'Ancasti', NULL, 4, 0),
(332, 'Andalgalá', NULL, 4, 0),
(333, 'Antofagasta', NULL, 4, 0),
(334, 'Belén', NULL, 4, 0),
(335, 'Capayán', NULL, 4, 0),
(336, 'Capital', NULL, 4, 0),
(337, '4', NULL, 4, 0),
(338, 'Corral Quemado', NULL, 4, 0),
(339, 'El Alto', NULL, 4, 0),
(340, 'El Rodeo', NULL, 4, 0),
(341, 'F.Mamerto Esquiú', NULL, 4, 0),
(342, 'Fiambalá', NULL, 4, 0),
(343, 'Hualfín', NULL, 4, 0),
(344, 'Huillapima', NULL, 4, 0),
(345, 'Icaño', NULL, 4, 0),
(346, 'La Puerta', NULL, 4, 0),
(347, 'Las Juntas', NULL, 4, 0),
(348, 'Londres', NULL, 4, 0),
(349, 'Los Altos', NULL, 4, 0),
(350, 'Los Varela', NULL, 4, 0),
(351, 'Mutquín', NULL, 4, 0),
(352, 'Paclín', NULL, 4, 0),
(353, 'Poman', NULL, 4, 0),
(354, 'Pozo de La Piedra', NULL, 4, 0),
(355, 'Puerta de Corral', NULL, 4, 0),
(356, 'Puerta San José', NULL, 4, 0),
(357, 'Recreo', NULL, 4, 0),
(358, 'S.F.V de 4', NULL, 4, 0),
(359, 'San Fernando', NULL, 4, 0),
(360, 'San Fernando del Valle', NULL, 4, 0),
(361, 'San José', NULL, 4, 0),
(362, 'Santa María', NULL, 4, 0),
(363, 'Santa Rosa', NULL, 4, 0),
(364, 'Saujil', NULL, 4, 0),
(365, 'Tapso', NULL, 4, 0),
(366, 'Tinogasta', NULL, 4, 0),
(367, 'Valle Viejo', NULL, 4, 0),
(368, 'Villa Vil', NULL, 4, 0),
(369, 'Aviá Teraí', NULL, 5, 0),
(370, 'Barranqueras', NULL, 5, 0),
(371, 'Basail', NULL, 5, 0),
(372, 'Campo Largo', NULL, 5, 0),
(373, 'Capital', NULL, 5, 0),
(374, 'Capitán Solari', NULL, 5, 0),
(375, 'Charadai', NULL, 5, 0),
(376, 'Charata', NULL, 5, 0),
(377, 'Chorotis', NULL, 5, 0),
(378, 'Ciervo Petiso', NULL, 5, 0),
(379, 'Cnel. Du Graty', NULL, 5, 0),
(380, 'Col. Benítez', NULL, 5, 0),
(381, 'Col. Elisa', NULL, 5, 0),
(382, 'Col. Popular', NULL, 5, 0),
(383, 'Colonias Unidas', NULL, 5, 0),
(384, 'Concepción', NULL, 5, 0),
(385, 'Corzuela', NULL, 5, 0),
(386, 'Cote Lai', NULL, 5, 0),
(387, 'El Sauzalito', NULL, 5, 0),
(388, 'Enrique Urien', NULL, 5, 0),
(389, 'Fontana', NULL, 5, 0),
(390, 'Fte. Esperanza', NULL, 5, 0),
(391, 'Gancedo', NULL, 5, 0),
(392, 'Gral. Capdevila', NULL, 5, 0),
(393, 'Gral. Pinero', NULL, 5, 0),
(394, 'Gral. San Martín', NULL, 5, 0),
(395, 'Gral. Vedia', NULL, 5, 0),
(396, 'Hermoso Campo', NULL, 5, 0),
(397, 'I. del Cerrito', NULL, 5, 0),
(398, 'J.J. Castelli', NULL, 5, 0),
(399, 'La Clotilde', NULL, 5, 0),
(400, 'La Eduvigis', NULL, 5, 0),
(401, 'La Escondida', NULL, 5, 0),
(402, 'La Leonesa', NULL, 5, 0),
(403, 'La Tigra', NULL, 5, 0),
(404, 'La Verde', NULL, 5, 0),
(405, 'Laguna Blanca', NULL, 5, 0),
(406, 'Laguna Limpia', NULL, 5, 0),
(407, 'Lapachito', NULL, 5, 0),
(408, 'Las Breñas', NULL, 5, 0),
(409, 'Las Garcitas', NULL, 5, 0),
(410, 'Las Palmas', NULL, 5, 0),
(411, 'Los Frentones', NULL, 5, 0),
(412, 'Machagai', NULL, 5, 0),
(413, 'Makallé', NULL, 5, 0),
(414, 'Margarita Belén', NULL, 5, 0),
(415, 'Miraflores', NULL, 5, 0),
(416, 'Misión N. Pompeya', NULL, 5, 0),
(417, 'Napenay', NULL, 5, 0),
(418, 'Pampa Almirón', NULL, 5, 0),
(419, 'Pampa del Indio', NULL, 5, 0),
(420, 'Pampa del Infierno', NULL, 5, 0),
(421, 'Pdcia. de La Plaza', NULL, 5, 0),
(422, 'Pdcia. Roca', NULL, 5, 0),
(423, 'Pdcia. Roque Sáenz Peña', NULL, 5, 0),
(424, 'Pto. Bermejo', NULL, 5, 0),
(425, 'Pto. Eva Perón', NULL, 5, 0),
(426, 'Puero Tirol', NULL, 5, 0),
(427, 'Puerto Vilelas', NULL, 5, 0),
(428, 'Quitilipi', NULL, 5, 0),
(429, 'Resistencia', NULL, 5, 0),
(430, 'Sáenz Peña', NULL, 5, 0),
(431, 'Samuhú', NULL, 5, 0),
(432, 'San Bernardo', NULL, 5, 0),
(433, 'Santa Sylvina', NULL, 5, 0),
(434, 'Taco Pozo', NULL, 5, 0),
(435, 'Tres Isletas', NULL, 5, 0),
(436, 'Villa Ángela', NULL, 5, 0),
(437, 'Villa Berthet', NULL, 5, 0),
(438, 'Villa R. Bermejito', NULL, 5, 0),
(439, 'Aldea Apeleg', NULL, 6, 0),
(440, 'Aldea Beleiro', NULL, 6, 0),
(441, 'Aldea Epulef', NULL, 6, 0),
(442, 'Alto Río Sengerr', NULL, 6, 0),
(443, 'Buen Pasto', NULL, 6, 0),
(444, 'Camarones', NULL, 6, 0),
(445, 'Carrenleufú', NULL, 6, 0),
(446, 'Cholila', NULL, 6, 0),
(447, 'Co. Centinela', NULL, 6, 0),
(448, 'Colan Conhué', NULL, 6, 0),
(449, 'Comodoro Rivadavia', NULL, 6, 0),
(450, 'Corcovado', NULL, 6, 0),
(451, 'Cushamen', NULL, 6, 0),
(452, 'Dique F. Ameghino', NULL, 6, 0),
(453, 'Dolavón', NULL, 6, 0),
(454, 'Dr. R. Rojas', NULL, 6, 0),
(455, 'El Hoyo', NULL, 6, 0),
(456, 'El Maitén', NULL, 6, 0),
(457, 'Epuyén', NULL, 6, 0),
(458, 'Esquel', NULL, 6, 0),
(459, 'Facundo', NULL, 6, 0),
(460, 'Gaimán', NULL, 6, 0),
(461, 'Gan Gan', NULL, 6, 0),
(462, 'Gastre', NULL, 6, 0),
(463, 'Gdor. Costa', NULL, 6, 0),
(464, 'Gualjaina', NULL, 6, 0),
(465, 'J. de San Martín', NULL, 6, 0),
(466, 'Lago Blanco', NULL, 6, 0),
(467, 'Lago Puelo', NULL, 6, 0),
(468, 'Lagunita Salada', NULL, 6, 0),
(469, 'Las Plumas', NULL, 6, 0),
(470, 'Los Altares', NULL, 6, 0),
(471, 'Paso de los Indios', NULL, 6, 0),
(472, 'Paso del Sapo', NULL, 6, 0),
(473, 'Pto. Madryn', NULL, 6, 0),
(474, 'Pto. Pirámides', NULL, 6, 0),
(475, 'Rada Tilly', NULL, 6, 0),
(476, 'Rawson', NULL, 6, 0),
(477, 'Río Mayo', NULL, 6, 0),
(478, 'Río Pico', NULL, 6, 0),
(479, 'Sarmiento', NULL, 6, 0),
(480, 'Tecka', NULL, 6, 0),
(481, 'Telsen', NULL, 6, 0),
(482, 'Trelew', NULL, 6, 0),
(483, 'Trevelin', NULL, 6, 0),
(484, 'Veintiocho de Julio', NULL, 6, 0),
(485, 'Achiras', NULL, 7, 0),
(486, 'Adelia Maria', NULL, 7, 0),
(487, 'Agua de Oro', NULL, 7, 0),
(488, 'Alcira Gigena', NULL, 7, 0),
(489, 'Aldea Santa Maria', NULL, 7, 0),
(490, 'Alejandro Roca', NULL, 7, 0),
(491, 'Alejo Ledesma', NULL, 7, 0),
(492, 'Alicia', NULL, 7, 0),
(493, 'Almafuerte', NULL, 7, 0),
(494, 'Alpa Corral', NULL, 7, 0),
(495, 'Alta Gracia', NULL, 7, 0),
(496, 'Alto Alegre', NULL, 7, 0),
(497, 'Alto de Los Quebrachos', NULL, 7, 0),
(498, 'Altos de Chipion', NULL, 7, 0),
(499, 'Amboy', NULL, 7, 0),
(500, 'Ambul', NULL, 7, 0),
(501, 'Ana Zumaran', NULL, 7, 0),
(502, 'Anisacate', NULL, 7, 0),
(503, 'Arguello', NULL, 7, 0),
(504, 'Arias', NULL, 7, 0),
(505, 'Arroyito', NULL, 7, 0),
(506, 'Arroyo Algodon', NULL, 7, 0),
(507, 'Arroyo Cabral', NULL, 7, 0),
(508, 'Arroyo Los Patos', NULL, 7, 0),
(509, 'Assunta', NULL, 7, 0),
(510, 'Atahona', NULL, 7, 0),
(511, 'Ausonia', NULL, 7, 0),
(512, 'Avellaneda', NULL, 7, 0),
(513, 'Ballesteros', NULL, 7, 0),
(514, 'Ballesteros Sud', NULL, 7, 0),
(515, 'Balnearia', NULL, 7, 0),
(516, 'Bañado de Soto', NULL, 7, 0),
(517, 'Bell Ville', NULL, 7, 0),
(518, 'Bengolea', NULL, 7, 0),
(519, 'Benjamin Gould', NULL, 7, 0),
(520, 'Berrotaran', NULL, 7, 0),
(521, 'Bialet Masse', NULL, 7, 0),
(522, 'Bouwer', NULL, 7, 0),
(523, 'Brinkmann', NULL, 7, 0),
(524, 'Buchardo', NULL, 7, 0),
(525, 'Bulnes', NULL, 7, 0),
(526, 'Cabalango', NULL, 7, 0),
(527, 'Calamuchita', NULL, 7, 0),
(528, 'Calchin', NULL, 7, 0),
(529, 'Calchin Oeste', NULL, 7, 0),
(530, 'Calmayo', NULL, 7, 0),
(531, 'Camilo Aldao', NULL, 7, 0),
(532, 'Caminiaga', NULL, 7, 0),
(533, 'Cañada de Luque', NULL, 7, 0),
(534, 'Cañada de Machado', NULL, 7, 0),
(535, 'Cañada de Rio Pinto', NULL, 7, 0),
(536, 'Cañada del Sauce', NULL, 7, 0),
(537, 'Canals', NULL, 7, 0),
(538, 'Candelaria Sud', NULL, 7, 0),
(539, 'Capilla de Remedios', NULL, 7, 0),
(540, 'Capilla de Siton', NULL, 7, 0),
(541, 'Capilla del Carmen', NULL, 7, 0),
(542, 'Capilla del Monte', NULL, 7, 0),
(543, 'Capital', NULL, 7, 0),
(544, 'Capitan Gral B. O´Higgins', NULL, 7, 0),
(545, 'Carnerillo', NULL, 7, 0),
(546, 'Carrilobo', NULL, 7, 0),
(547, 'Casa Grande', NULL, 7, 0),
(548, 'Cavanagh', NULL, 7, 0),
(549, 'Cerro Colorado', NULL, 7, 0),
(550, 'Chaján', NULL, 7, 0),
(551, 'Chalacea', NULL, 7, 0),
(552, 'Chañar Viejo', NULL, 7, 0),
(553, 'Chancaní', NULL, 7, 0),
(554, 'Charbonier', NULL, 7, 0),
(555, 'Charras', NULL, 7, 0),
(556, 'Chazón', NULL, 7, 0),
(557, 'Chilibroste', NULL, 7, 0),
(558, 'Chucul', NULL, 7, 0),
(559, 'Chuña', NULL, 7, 0),
(560, 'Chuña Huasi', NULL, 7, 0),
(561, 'Churqui Cañada', NULL, 7, 0),
(562, 'Cienaga Del Coro', NULL, 7, 0),
(563, 'Cintra', NULL, 7, 0),
(564, 'Col. Almada', NULL, 7, 0),
(565, 'Col. Anita', NULL, 7, 0),
(566, 'Col. Barge', NULL, 7, 0),
(567, 'Col. Bismark', NULL, 7, 0),
(568, 'Col. Bremen', NULL, 7, 0),
(569, 'Col. Caroya', NULL, 7, 0),
(570, 'Col. Italiana', NULL, 7, 0),
(571, 'Col. Iturraspe', NULL, 7, 0),
(572, 'Col. Las Cuatro Esquinas', NULL, 7, 0),
(573, 'Col. Las Pichanas', NULL, 7, 0),
(574, 'Col. Marina', NULL, 7, 0),
(575, 'Col. Prosperidad', NULL, 7, 0),
(576, 'Col. San Bartolome', NULL, 7, 0),
(577, 'Col. San Pedro', NULL, 7, 0),
(578, 'Col. Tirolesa', NULL, 7, 0),
(579, 'Col. Vicente Aguero', NULL, 7, 0),
(580, 'Col. Videla', NULL, 7, 0),
(581, 'Col. Vignaud', NULL, 7, 0),
(582, 'Col. Waltelina', NULL, 7, 0),
(583, 'Colazo', NULL, 7, 0),
(584, 'Comechingones', NULL, 7, 0),
(585, 'Conlara', NULL, 7, 0),
(586, 'Copacabana', NULL, 7, 0),
(587, '7', NULL, 7, 0),
(588, 'Coronel Baigorria', NULL, 7, 0),
(589, 'Coronel Moldes', NULL, 7, 0),
(590, 'Corral de Bustos', NULL, 7, 0),
(591, 'Corralito', NULL, 7, 0),
(592, 'Cosquín', NULL, 7, 0),
(593, 'Costa Sacate', NULL, 7, 0),
(594, 'Cruz Alta', NULL, 7, 0),
(595, 'Cruz de Caña', NULL, 7, 0),
(596, 'Cruz del Eje', NULL, 7, 0),
(597, 'Cuesta Blanca', NULL, 7, 0),
(598, 'Dean Funes', NULL, 7, 0),
(599, 'Del Campillo', NULL, 7, 0),
(600, 'Despeñaderos', NULL, 7, 0),
(601, 'Devoto', NULL, 7, 0),
(602, 'Diego de Rojas', NULL, 7, 0),
(603, 'Dique Chico', NULL, 7, 0),
(604, 'El Arañado', NULL, 7, 0),
(605, 'El Brete', NULL, 7, 0),
(606, 'El Chacho', NULL, 7, 0),
(607, 'El Crispín', NULL, 7, 0),
(608, 'El Fortín', NULL, 7, 0),
(609, 'El Manzano', NULL, 7, 0),
(610, 'El Rastreador', NULL, 7, 0),
(611, 'El Rodeo', NULL, 7, 0),
(612, 'El Tío', NULL, 7, 0),
(613, 'Elena', NULL, 7, 0),
(614, 'Embalse', NULL, 7, 0),
(615, 'Esquina', NULL, 7, 0),
(616, 'Estación Gral. Paz', NULL, 7, 0),
(617, 'Estación Juárez Celman', NULL, 7, 0),
(618, 'Estancia de Guadalupe', NULL, 7, 0),
(619, 'Estancia Vieja', NULL, 7, 0),
(620, 'Etruria', NULL, 7, 0),
(621, 'Eufrasio Loza', NULL, 7, 0),
(622, 'Falda del Carmen', NULL, 7, 0),
(623, 'Freyre', NULL, 7, 0),
(624, 'Gral. Baldissera', NULL, 7, 0),
(625, 'Gral. Cabrera', NULL, 7, 0),
(626, 'Gral. Deheza', NULL, 7, 0),
(627, 'Gral. Fotheringham', NULL, 7, 0),
(628, 'Gral. Levalle', NULL, 7, 0),
(629, 'Gral. Roca', NULL, 7, 0),
(630, 'Guanaco Muerto', NULL, 7, 0),
(631, 'Guasapampa', NULL, 7, 0),
(632, 'Guatimozin', NULL, 7, 0),
(633, 'Gutenberg', NULL, 7, 0),
(634, 'Hernando', NULL, 7, 0),
(635, 'Huanchillas', NULL, 7, 0),
(636, 'Huerta Grande', NULL, 7, 0),
(637, 'Huinca Renanco', NULL, 7, 0),
(638, 'Idiazabal', NULL, 7, 0),
(639, 'Impira', NULL, 7, 0),
(640, 'Inriville', NULL, 7, 0),
(641, 'Isla Verde', NULL, 7, 0),
(642, 'Italó', NULL, 7, 0),
(643, 'James Craik', NULL, 7, 0),
(644, 'Jesús María', NULL, 7, 0),
(645, 'Jovita', NULL, 7, 0),
(646, 'Justiniano Posse', NULL, 7, 0),
(647, 'Km 658', NULL, 7, 0),
(648, 'L. V. Mansilla', NULL, 7, 0),
(649, 'La Batea', NULL, 7, 0),
(650, 'La Calera', NULL, 7, 0),
(651, 'La Carlota', NULL, 7, 0),
(652, 'La Carolina', NULL, 7, 0),
(653, 'La Cautiva', NULL, 7, 0),
(654, 'La Cesira', NULL, 7, 0),
(655, 'La Cruz', NULL, 7, 0),
(656, 'La Cumbre', NULL, 7, 0),
(657, 'La Cumbrecita', NULL, 7, 0),
(658, 'La Falda', NULL, 7, 0),
(659, 'La Francia', NULL, 7, 0),
(660, 'La Granja', NULL, 7, 0),
(661, 'La Higuera', NULL, 7, 0),
(662, 'La Laguna', NULL, 7, 0),
(663, 'La Paisanita', NULL, 7, 0),
(664, 'La Palestina', NULL, 7, 0),
(665, '12', NULL, 7, 0),
(666, 'La Paquita', NULL, 7, 0),
(667, 'La Para', NULL, 7, 0),
(668, 'La Paz', NULL, 7, 0),
(669, 'La Playa', NULL, 7, 0),
(670, 'La Playosa', NULL, 7, 0),
(671, 'La Población', NULL, 7, 0),
(672, 'La Posta', NULL, 7, 0),
(673, 'La Puerta', NULL, 7, 0),
(674, 'La Quinta', NULL, 7, 0),
(675, 'La Rancherita', NULL, 7, 0),
(676, 'La Rinconada', NULL, 7, 0),
(677, 'La Serranita', NULL, 7, 0),
(678, 'La Tordilla', NULL, 7, 0),
(679, 'Laborde', NULL, 7, 0),
(680, 'Laboulaye', NULL, 7, 0),
(681, 'Laguna Larga', NULL, 7, 0),
(682, 'Las Acequias', NULL, 7, 0),
(683, 'Las Albahacas', NULL, 7, 0),
(684, 'Las Arrias', NULL, 7, 0),
(685, 'Las Bajadas', NULL, 7, 0),
(686, 'Las Caleras', NULL, 7, 0),
(687, 'Las Calles', NULL, 7, 0),
(688, 'Las Cañadas', NULL, 7, 0),
(689, 'Las Gramillas', NULL, 7, 0),
(690, 'Las Higueras', NULL, 7, 0),
(691, 'Las Isletillas', NULL, 7, 0),
(692, 'Las Junturas', NULL, 7, 0),
(693, 'Las Palmas', NULL, 7, 0),
(694, 'Las Peñas', NULL, 7, 0),
(695, 'Las Peñas Sud', NULL, 7, 0),
(696, 'Las Perdices', NULL, 7, 0),
(697, 'Las Playas', NULL, 7, 0),
(698, 'Las Rabonas', NULL, 7, 0),
(699, 'Las Saladas', NULL, 7, 0),
(700, 'Las Tapias', NULL, 7, 0),
(701, 'Las Varas', NULL, 7, 0),
(702, 'Las Varillas', NULL, 7, 0),
(703, 'Las Vertientes', NULL, 7, 0),
(704, 'Leguizamón', NULL, 7, 0),
(705, 'Leones', NULL, 7, 0),
(706, 'Los Cedros', NULL, 7, 0),
(707, 'Los Cerrillos', NULL, 7, 0),
(708, 'Los Chañaritos (C.E)', NULL, 7, 0),
(709, 'Los Chanaritos (R.S)', NULL, 7, 0),
(710, 'Los Cisnes', NULL, 7, 0),
(711, 'Los Cocos', NULL, 7, 0),
(712, 'Los Cóndores', NULL, 7, 0),
(713, 'Los Hornillos', NULL, 7, 0),
(714, 'Los Hoyos', NULL, 7, 0),
(715, 'Los Mistoles', NULL, 7, 0),
(716, 'Los Molinos', NULL, 7, 0),
(717, 'Los Pozos', NULL, 7, 0),
(718, 'Los Reartes', NULL, 7, 0),
(719, 'Los Surgentes', NULL, 7, 0),
(720, 'Los Talares', NULL, 7, 0),
(721, 'Los Zorros', NULL, 7, 0),
(722, 'Lozada', NULL, 7, 0),
(723, 'Luca', NULL, 7, 0),
(724, 'Luque', NULL, 7, 0),
(725, 'Luyaba', NULL, 7, 0),
(726, 'Malagueño', NULL, 7, 0),
(727, 'Malena', NULL, 7, 0),
(728, 'Malvinas Argentinas', NULL, 7, 0),
(729, 'Manfredi', NULL, 7, 0),
(730, 'Maquinista Gallini', NULL, 7, 0),
(731, 'Marcos Juárez', NULL, 7, 0),
(732, 'Marull', NULL, 7, 0),
(733, 'Matorrales', NULL, 7, 0),
(734, 'Mattaldi', NULL, 7, 0),
(735, 'Mayu Sumaj', NULL, 7, 0),
(736, 'Media Naranja', NULL, 7, 0),
(737, 'Melo', NULL, 7, 0),
(738, 'Mendiolaza', NULL, 7, 0),
(739, 'Mi Granja', NULL, 7, 0),
(740, 'Mina Clavero', NULL, 7, 0),
(741, 'Miramar', NULL, 7, 0),
(742, 'Morrison', NULL, 7, 0),
(743, 'Morteros', NULL, 7, 0),
(744, 'Mte. Buey', NULL, 7, 0),
(745, 'Mte. Cristo', NULL, 7, 0),
(746, 'Mte. De Los Gauchos', NULL, 7, 0),
(747, 'Mte. Leña', NULL, 7, 0),
(748, 'Mte. Maíz', NULL, 7, 0),
(749, 'Mte. Ralo', NULL, 7, 0),
(750, 'Nicolás Bruzone', NULL, 7, 0),
(751, 'Noetinger', NULL, 7, 0),
(752, 'Nono', NULL, 7, 0),
(753, 'Nueva 7', NULL, 7, 0),
(754, 'Obispo Trejo', NULL, 7, 0),
(755, 'Olaeta', NULL, 7, 0),
(756, 'Oliva', NULL, 7, 0),
(757, 'Olivares San Nicolás', NULL, 7, 0),
(758, 'Onagolty', NULL, 7, 0),
(759, 'Oncativo', NULL, 7, 0),
(760, 'Ordoñez', NULL, 7, 0),
(761, 'Pacheco De Melo', NULL, 7, 0),
(762, 'Pampayasta N.', NULL, 7, 0),
(763, 'Pampayasta S.', NULL, 7, 0),
(764, 'Panaholma', NULL, 7, 0),
(765, 'Pascanas', NULL, 7, 0),
(766, 'Pasco', NULL, 7, 0),
(767, 'Paso del Durazno', NULL, 7, 0),
(768, 'Paso Viejo', NULL, 7, 0),
(769, 'Pilar', NULL, 7, 0),
(770, 'Pincén', NULL, 7, 0),
(771, 'Piquillín', NULL, 7, 0),
(772, 'Plaza de Mercedes', NULL, 7, 0),
(773, 'Plaza Luxardo', NULL, 7, 0),
(774, 'Porteña', NULL, 7, 0),
(775, 'Potrero de Garay', NULL, 7, 0),
(776, 'Pozo del Molle', NULL, 7, 0),
(777, 'Pozo Nuevo', NULL, 7, 0),
(778, 'Pueblo Italiano', NULL, 7, 0),
(779, 'Puesto de Castro', NULL, 7, 0),
(780, 'Punta del Agua', NULL, 7, 0),
(781, 'Quebracho Herrado', NULL, 7, 0),
(782, 'Quilino', NULL, 7, 0),
(783, 'Rafael García', NULL, 7, 0),
(784, 'Ranqueles', NULL, 7, 0),
(785, 'Rayo Cortado', NULL, 7, 0),
(786, 'Reducción', NULL, 7, 0),
(787, 'Rincón', NULL, 7, 0),
(788, 'Río Bamba', NULL, 7, 0),
(789, 'Río Ceballos', NULL, 7, 0),
(790, 'Río Cuarto', NULL, 7, 0),
(791, 'Río de Los Sauces', NULL, 7, 0),
(792, 'Río Primero', NULL, 7, 0),
(793, 'Río Segundo', NULL, 7, 0),
(794, 'Río Tercero', NULL, 7, 0),
(795, 'Rosales', NULL, 7, 0),
(796, 'Rosario del Saladillo', NULL, 7, 0),
(797, 'Sacanta', NULL, 7, 0),
(798, 'Sagrada Familia', NULL, 7, 0),
(799, 'Saira', NULL, 7, 0),
(800, 'Saladillo', NULL, 7, 0),
(801, 'Saldán', NULL, 7, 0),
(802, 'Salsacate', NULL, 7, 0),
(803, 'Salsipuedes', NULL, 7, 0),
(804, 'Sampacho', NULL, 7, 0),
(805, 'San Agustín', NULL, 7, 0),
(806, 'San Antonio de Arredondo', NULL, 7, 0),
(807, 'San Antonio de Litín', NULL, 7, 0),
(808, 'San Basilio', NULL, 7, 0),
(809, 'San Carlos Minas', NULL, 7, 0),
(810, 'San Clemente', NULL, 7, 0),
(811, 'San Esteban', NULL, 7, 0),
(812, 'San Francisco', NULL, 7, 0),
(813, 'San Ignacio', NULL, 7, 0),
(814, 'San Javier', NULL, 7, 0),
(815, 'San Jerónimo', NULL, 7, 0),
(816, 'San Joaquín', NULL, 7, 0),
(817, 'San José de La Dormida', NULL, 7, 0),
(818, 'San José de Las Salinas', NULL, 7, 0),
(819, 'San Lorenzo', NULL, 7, 0),
(820, 'San Marcos Sierras', NULL, 7, 0),
(821, 'San Marcos Sud', NULL, 7, 0),
(822, 'San Pedro', NULL, 7, 0),
(823, 'San Pedro N.', NULL, 7, 0),
(824, 'San Roque', NULL, 7, 0),
(825, 'San Vicente', NULL, 7, 0),
(826, 'Santa Catalina', NULL, 7, 0),
(827, 'Santa Elena', NULL, 7, 0),
(828, 'Santa Eufemia', NULL, 7, 0),
(829, 'Santa Maria', NULL, 7, 0),
(830, 'Sarmiento', NULL, 7, 0),
(831, 'Saturnino M.Laspiur', NULL, 7, 0),
(832, 'Sauce Arriba', NULL, 7, 0),
(833, 'Sebastián Elcano', NULL, 7, 0),
(834, 'Seeber', NULL, 7, 0),
(835, 'Segunda Usina', NULL, 7, 0),
(836, 'Serrano', NULL, 7, 0),
(837, 'Serrezuela', NULL, 7, 0),
(838, 'Sgo. Temple', NULL, 7, 0),
(839, 'Silvio Pellico', NULL, 7, 0),
(840, 'Simbolar', NULL, 7, 0),
(841, 'Sinsacate', NULL, 7, 0),
(842, 'Sta. Rosa de Calamuchita', NULL, 7, 0),
(843, 'Sta. Rosa de Río Primero', NULL, 7, 0),
(844, 'Suco', NULL, 7, 0),
(845, 'Tala Cañada', NULL, 7, 0),
(846, 'Tala Huasi', NULL, 7, 0),
(847, 'Talaini', NULL, 7, 0),
(848, 'Tancacha', NULL, 7, 0),
(849, 'Tanti', NULL, 7, 0),
(850, 'Ticino', NULL, 7, 0),
(851, 'Tinoco', NULL, 7, 0),
(852, 'Tío Pujio', NULL, 7, 0),
(853, 'Toledo', NULL, 7, 0),
(854, 'Toro Pujio', NULL, 7, 0),
(855, 'Tosno', NULL, 7, 0),
(856, 'Tosquita', NULL, 7, 0),
(857, 'Tránsito', NULL, 7, 0),
(858, 'Tuclame', NULL, 7, 0),
(859, 'Tutti', NULL, 7, 0),
(860, 'Ucacha', NULL, 7, 0),
(861, 'Unquillo', NULL, 7, 0),
(862, 'Valle de Anisacate', NULL, 7, 0),
(863, 'Valle Hermoso', NULL, 7, 0),
(864, 'Vélez Sarfield', NULL, 7, 0),
(865, 'Viamonte', NULL, 7, 0),
(866, 'Vicuña Mackenna', NULL, 7, 0),
(867, 'Villa Allende', NULL, 7, 0),
(868, 'Villa Amancay', NULL, 7, 0),
(869, 'Villa Ascasubi', NULL, 7, 0),
(870, 'Villa Candelaria N.', NULL, 7, 0),
(871, 'Villa Carlos Paz', NULL, 7, 0),
(872, 'Villa Cerro Azul', NULL, 7, 0),
(873, 'Villa Ciudad de América', NULL, 7, 0),
(874, 'Villa Ciudad Pque Los Reartes', NULL, 7, 0),
(875, 'Villa Concepción del Tío', NULL, 7, 0),
(876, 'Villa Cura Brochero', NULL, 7, 0),
(877, 'Villa de Las Rosas', NULL, 7, 0),
(878, 'Villa de María', NULL, 7, 0),
(879, 'Villa de Pocho', NULL, 7, 0),
(880, 'Villa de Soto', NULL, 7, 0),
(881, 'Villa del Dique', NULL, 7, 0),
(882, 'Villa del Prado', NULL, 7, 0),
(883, 'Villa del Rosario', NULL, 7, 0),
(884, 'Villa del Totoral', NULL, 7, 0),
(885, 'Villa Dolores', NULL, 7, 0),
(886, 'Villa El Chancay', NULL, 7, 0),
(887, 'Villa Elisa', NULL, 7, 0),
(888, 'Villa Flor Serrana', NULL, 7, 0),
(889, 'Villa Fontana', NULL, 7, 0),
(890, 'Villa Giardino', NULL, 7, 0),
(891, 'Villa Gral. Belgrano', NULL, 7, 0),
(892, 'Villa Gutierrez', NULL, 7, 0),
(893, 'Villa Huidobro', NULL, 7, 0),
(894, 'Villa La Bolsa', NULL, 7, 0),
(895, 'Villa Los Aromos', NULL, 7, 0),
(896, 'Villa Los Patos', NULL, 7, 0),
(897, 'Villa María', NULL, 7, 0),
(898, 'Villa Nueva', NULL, 7, 0),
(899, 'Villa Pque. Santa Ana', NULL, 7, 0),
(900, 'Villa Pque. Siquiman', NULL, 7, 0),
(901, 'Villa Quillinzo', NULL, 7, 0),
(902, 'Villa Rossi', NULL, 7, 0),
(903, 'Villa Rumipal', NULL, 7, 0),
(904, 'Villa San Esteban', NULL, 7, 0),
(905, 'Villa San Isidro', NULL, 7, 0),
(906, 'Villa 21', NULL, 7, 0),
(907, 'Villa Sarmiento (G.R)', NULL, 7, 0),
(908, 'Villa Sarmiento (S.A)', NULL, 7, 0),
(909, 'Villa Tulumba', NULL, 7, 0),
(910, 'Villa Valeria', NULL, 7, 0),
(911, 'Villa Yacanto', NULL, 7, 0),
(912, 'Washington', NULL, 7, 0),
(913, 'Wenceslao Escalante', NULL, 7, 0),
(914, 'Ycho Cruz Sierras', NULL, 7, 0),
(915, 'Alvear', NULL, 8, 0),
(916, 'Bella Vista', NULL, 8, 0),
(917, 'Berón de Astrada', NULL, 8, 0),
(918, 'Bonpland', NULL, 8, 0),
(919, 'Caá Cati', NULL, 8, 0),
(920, 'Capital', NULL, 8, 0),
(921, 'Chavarría', NULL, 8, 0),
(922, 'Col. C. Pellegrini', NULL, 8, 0),
(923, 'Col. Libertad', NULL, 8, 0),
(924, 'Col. Liebig', NULL, 8, 0),
(925, 'Col. Sta Rosa', NULL, 8, 0),
(926, 'Concepción', NULL, 8, 0),
(927, 'Cruz de Los Milagros', NULL, 8, 0),
(928, 'Curuzú-Cuatiá', NULL, 8, 0),
(929, 'Empedrado', NULL, 8, 0),
(930, 'Esquina', NULL, 8, 0),
(931, 'Estación Torrent', NULL, 8, 0),
(932, 'Felipe Yofré', NULL, 8, 0),
(933, 'Garruchos', NULL, 8, 0),
(934, 'Gdor. Agrónomo', NULL, 8, 0),
(935, 'Gdor. Martínez', NULL, 8, 0),
(936, 'Goya', NULL, 8, 0),
(937, 'Guaviravi', NULL, 8, 0),
(938, 'Herlitzka', NULL, 8, 0),
(939, 'Ita-Ibate', NULL, 8, 0),
(940, 'Itatí', NULL, 8, 0),
(941, 'Ituzaingó', NULL, 8, 0),
(942, 'José Rafael Gómez', NULL, 8, 0),
(943, 'Juan Pujol', NULL, 8, 0),
(944, 'La Cruz', NULL, 8, 0),
(945, 'Lavalle', NULL, 8, 0),
(946, 'Lomas de Vallejos', NULL, 8, 0),
(947, 'Loreto', NULL, 8, 0),
(948, 'Mariano I. Loza', NULL, 8, 0),
(949, 'Mburucuyá', NULL, 8, 0),
(950, 'Mercedes', NULL, 8, 0),
(951, 'Mocoretá', NULL, 8, 0),
(952, 'Mte. Caseros', NULL, 8, 0),
(953, 'Nueve de Julio', NULL, 8, 0),
(954, 'Palmar Grande', NULL, 8, 0),
(955, 'Parada Pucheta', NULL, 8, 0),
(956, 'Paso de La Patria', NULL, 8, 0),
(957, 'Paso de Los Libres', NULL, 8, 0),
(958, 'Pedro R. Fernandez', NULL, 8, 0),
(959, 'Perugorría', NULL, 8, 0),
(960, 'Pueblo Libertador', NULL, 8, 0),
(961, 'Ramada Paso', NULL, 8, 0),
(962, 'Riachuelo', NULL, 8, 0),
(963, 'Saladas', NULL, 8, 0),
(964, 'San Antonio', NULL, 8, 0),
(965, 'San Carlos', NULL, 8, 0),
(966, 'San Cosme', NULL, 8, 0),
(967, 'San Lorenzo', NULL, 8, 0),
(968, '20 del Palmar', NULL, 8, 0),
(969, 'San Miguel', NULL, 8, 0),
(970, 'San Roque', NULL, 8, 0),
(971, 'Santa Ana', NULL, 8, 0),
(972, 'Santa Lucía', NULL, 8, 0),
(973, 'Santo Tomé', NULL, 8, 0),
(974, 'Sauce', NULL, 8, 0),
(975, 'Tabay', NULL, 8, 0),
(976, 'Tapebicuá', NULL, 8, 0),
(977, 'Tatacua', NULL, 8, 0),
(978, 'Virasoro', NULL, 8, 0),
(979, 'Yapeyú', NULL, 8, 0),
(980, 'Yataití Calle', NULL, 8, 0),
(981, 'Alarcón', NULL, 9, 0),
(982, 'Alcaraz', NULL, 9, 0),
(983, 'Alcaraz N.', NULL, 9, 0),
(984, 'Alcaraz S.', NULL, 9, 0),
(985, 'Aldea Asunción', NULL, 9, 0),
(986, 'Aldea Brasilera', NULL, 9, 0),
(987, 'Aldea Elgenfeld', NULL, 9, 0),
(988, 'Aldea Grapschental', NULL, 9, 0),
(989, 'Aldea Ma. Luisa', NULL, 9, 0),
(990, 'Aldea Protestante', NULL, 9, 0),
(991, 'Aldea Salto', NULL, 9, 0),
(992, 'Aldea San Antonio (G)', NULL, 9, 0),
(993, 'Aldea San Antonio (P)', NULL, 9, 0),
(994, 'Aldea 19', NULL, 9, 0),
(995, 'Aldea San Miguel', NULL, 9, 0),
(996, 'Aldea San Rafael', NULL, 9, 0),
(997, 'Aldea Spatzenkutter', NULL, 9, 0),
(998, 'Aldea Sta. María', NULL, 9, 0),
(999, 'Aldea Sta. Rosa', NULL, 9, 0),
(1000, 'Aldea Valle María', NULL, 9, 0),
(1001, 'Altamirano Sur', NULL, 9, 0),
(1002, 'Antelo', NULL, 9, 0),
(1003, 'Antonio Tomás', NULL, 9, 0),
(1004, 'Aranguren', NULL, 9, 0),
(1005, 'Arroyo Barú', NULL, 9, 0),
(1006, 'Arroyo Burgos', NULL, 9, 0),
(1007, 'Arroyo Clé', NULL, 9, 0),
(1008, 'Arroyo Corralito', NULL, 9, 0),
(1009, 'Arroyo del Medio', NULL, 9, 0),
(1010, 'Arroyo Maturrango', NULL, 9, 0),
(1011, 'Arroyo Palo Seco', NULL, 9, 0),
(1012, 'Banderas', NULL, 9, 0),
(1013, 'Basavilbaso', NULL, 9, 0),
(1014, 'Betbeder', NULL, 9, 0),
(1015, 'Bovril', NULL, 9, 0),
(1016, 'Caseros', NULL, 9, 0),
(1017, 'Ceibas', NULL, 9, 0),
(1018, 'Cerrito', NULL, 9, 0),
(1019, 'Chajarí', NULL, 9, 0),
(1020, 'Chilcas', NULL, 9, 0),
(1021, 'Clodomiro Ledesma', NULL, 9, 0),
(1022, 'Col. Alemana', NULL, 9, 0),
(1023, 'Col. Avellaneda', NULL, 9, 0),
(1024, 'Col. Avigdor', NULL, 9, 0),
(1025, 'Col. Ayuí', NULL, 9, 0),
(1026, 'Col. Baylina', NULL, 9, 0),
(1027, 'Col. Carrasco', NULL, 9, 0),
(1028, 'Col. Celina', NULL, 9, 0),
(1029, 'Col. Cerrito', NULL, 9, 0),
(1030, 'Col. Crespo', NULL, 9, 0),
(1031, 'Col. Elia', NULL, 9, 0),
(1032, 'Col. Ensayo', NULL, 9, 0),
(1033, 'Col. Gral. Roca', NULL, 9, 0),
(1034, 'Col. La Argentina', NULL, 9, 0),
(1035, 'Col. Merou', NULL, 9, 0),
(1036, 'Col. Oficial Nª3', NULL, 9, 0),
(1037, 'Col. Oficial Nº13', NULL, 9, 0),
(1038, 'Col. Oficial Nº14', NULL, 9, 0),
(1039, 'Col. Oficial Nº5', NULL, 9, 0),
(1040, 'Col. Reffino', NULL, 9, 0),
(1041, 'Col. Tunas', NULL, 9, 0),
(1042, 'Col. Viraró', NULL, 9, 0),
(1043, 'Colón', NULL, 9, 0),
(1044, 'Concepción del Uruguay', NULL, 9, 0),
(1045, 'Concordia', NULL, 9, 0),
(1046, 'Conscripto Bernardi', NULL, 9, 0),
(1047, 'Costa Grande', NULL, 9, 0),
(1048, 'Costa San Antonio', NULL, 9, 0),
(1049, 'Costa Uruguay N.', NULL, 9, 0),
(1050, 'Costa Uruguay S.', NULL, 9, 0),
(1051, 'Crespo', NULL, 9, 0),
(1052, 'Crucecitas 3ª', NULL, 9, 0),
(1053, 'Crucecitas 7ª', NULL, 9, 0),
(1054, 'Crucecitas 8ª', NULL, 9, 0),
(1055, 'Cuchilla Redonda', NULL, 9, 0),
(1056, 'Curtiembre', NULL, 9, 0),
(1057, 'Diamante', NULL, 9, 0),
(1058, 'Distrito 6º', NULL, 9, 0),
(1059, 'Distrito Chañar', NULL, 9, 0),
(1060, 'Distrito Chiqueros', NULL, 9, 0),
(1061, 'Distrito Cuarto', NULL, 9, 0),
(1062, 'Distrito Diego López', NULL, 9, 0),
(1063, 'Distrito Pajonal', NULL, 9, 0),
(1064, 'Distrito Sauce', NULL, 9, 0),
(1065, 'Distrito Tala', NULL, 9, 0),
(1066, 'Distrito Talitas', NULL, 9, 0),
(1067, 'Don Cristóbal 1ª Sección', NULL, 9, 0),
(1068, 'Don Cristóbal 2ª Sección', NULL, 9, 0),
(1069, 'Durazno', NULL, 9, 0),
(1070, 'El Cimarrón', NULL, 9, 0),
(1071, 'El Gramillal', NULL, 9, 0),
(1072, 'El Palenque', NULL, 9, 0),
(1073, 'El Pingo', NULL, 9, 0),
(1074, 'El Quebracho', NULL, 9, 0),
(1075, 'El Redomón', NULL, 9, 0),
(1076, 'El Solar', NULL, 9, 0),
(1077, 'Enrique Carbo', NULL, 9, 0),
(1078, '9', NULL, 9, 0),
(1079, 'Espinillo N.', NULL, 9, 0),
(1080, 'Estación Campos', NULL, 9, 0),
(1081, 'Estación Escriña', NULL, 9, 0),
(1082, 'Estación Lazo', NULL, 9, 0),
(1083, 'Estación Raíces', NULL, 9, 0),
(1084, 'Estación Yerúa', NULL, 9, 0),
(1085, 'Estancia Grande', NULL, 9, 0),
(1086, 'Estancia Líbaros', NULL, 9, 0),
(1087, 'Estancia Racedo', NULL, 9, 0),
(1088, 'Estancia Solá', NULL, 9, 0),
(1089, 'Estancia Yuquerí', NULL, 9, 0),
(1090, 'Estaquitas', NULL, 9, 0),
(1091, 'Faustino M. Parera', NULL, 9, 0),
(1092, 'Febre', NULL, 9, 0),
(1093, 'Federación', NULL, 9, 0),
(1094, 'Federal', NULL, 9, 0),
(1095, 'Gdor. Echagüe', NULL, 9, 0),
(1096, 'Gdor. Mansilla', NULL, 9, 0),
(1097, 'Gilbert', NULL, 9, 0),
(1098, 'González Calderón', NULL, 9, 0),
(1099, 'Gral. Almada', NULL, 9, 0),
(1100, 'Gral. Alvear', NULL, 9, 0),
(1101, 'Gral. Campos', NULL, 9, 0),
(1102, 'Gral. Galarza', NULL, 9, 0),
(1103, 'Gral. Ramírez', NULL, 9, 0),
(1104, 'Gualeguay', NULL, 9, 0),
(1105, 'Gualeguaychú', NULL, 9, 0),
(1106, 'Gualeguaycito', NULL, 9, 0),
(1107, 'Guardamonte', NULL, 9, 0),
(1108, 'Hambis', NULL, 9, 0),
(1109, 'Hasenkamp', NULL, 9, 0),
(1110, 'Hernandarias', NULL, 9, 0),
(1111, 'Hernández', NULL, 9, 0),
(1112, 'Herrera', NULL, 9, 0),
(1113, 'Hinojal', NULL, 9, 0),
(1114, 'Hocker', NULL, 9, 0),
(1115, 'Ing. Sajaroff', NULL, 9, 0),
(1116, 'Irazusta', NULL, 9, 0),
(1117, 'Isletas', NULL, 9, 0),
(1118, 'J.J De Urquiza', NULL, 9, 0),
(1119, 'Jubileo', NULL, 9, 0),
(1120, 'La Clarita', NULL, 9, 0),
(1121, 'La Criolla', NULL, 9, 0),
(1122, 'La Esmeralda', NULL, 9, 0),
(1123, 'La Florida', NULL, 9, 0),
(1124, 'La Fraternidad', NULL, 9, 0),
(1125, 'La Hierra', NULL, 9, 0),
(1126, 'La Ollita', NULL, 9, 0),
(1127, 'La Paz', NULL, 9, 0),
(1128, 'La Picada', NULL, 9, 0),
(1129, 'La Providencia', NULL, 9, 0),
(1130, 'La Verbena', NULL, 9, 0),
(1131, 'Laguna Benítez', NULL, 9, 0),
(1132, 'Larroque', NULL, 9, 0),
(1133, 'Las Cuevas', NULL, 9, 0),
(1134, 'Las Garzas', NULL, 9, 0),
(1135, 'Las Guachas', NULL, 9, 0),
(1136, 'Las Mercedes', NULL, 9, 0),
(1137, 'Las Moscas', NULL, 9, 0),
(1138, 'Las Mulitas', NULL, 9, 0),
(1139, 'Las Toscas', NULL, 9, 0),
(1140, 'Laurencena', NULL, 9, 0),
(1141, 'Libertador San Martín', NULL, 9, 0),
(1142, 'Loma Limpia', NULL, 9, 0),
(1143, 'Los Ceibos', NULL, 9, 0),
(1144, 'Los Charruas', NULL, 9, 0),
(1145, 'Los Conquistadores', NULL, 9, 0),
(1146, 'Lucas González', NULL, 9, 0),
(1147, 'Lucas N.', NULL, 9, 0),
(1148, 'Lucas S. 1ª', NULL, 9, 0),
(1149, 'Lucas S. 2ª', NULL, 9, 0),
(1150, 'Maciá', NULL, 9, 0),
(1151, 'María Grande', NULL, 9, 0),
(1152, 'María Grande 2ª', NULL, 9, 0),
(1153, 'Médanos', NULL, 9, 0),
(1154, 'Mojones N.', NULL, 9, 0),
(1155, 'Mojones S.', NULL, 9, 0),
(1156, 'Molino Doll', NULL, 9, 0),
(1157, 'Monte Redondo', NULL, 9, 0),
(1158, 'Montoya', NULL, 9, 0),
(1159, 'Mulas Grandes', NULL, 9, 0),
(1160, 'Ñancay', NULL, 9, 0),
(1161, 'Nogoyá', NULL, 9, 0),
(1162, 'Nueva Escocia', NULL, 9, 0),
(1163, 'Nueva Vizcaya', NULL, 9, 0),
(1164, 'Ombú', NULL, 9, 0),
(1165, 'Oro Verde', NULL, 9, 0),
(1166, 'Paraná', NULL, 9, 0),
(1167, 'Pasaje Guayaquil', NULL, 9, 0),
(1168, 'Pasaje Las Tunas', NULL, 9, 0),
(1169, 'Paso de La Arena', NULL, 9, 0),
(1170, 'Paso de La Laguna', NULL, 9, 0),
(1171, 'Paso de Las Piedras', NULL, 9, 0),
(1172, 'Paso Duarte', NULL, 9, 0),
(1173, 'Pastor Britos', NULL, 9, 0),
(1174, 'Pedernal', NULL, 9, 0),
(1175, 'Perdices', NULL, 9, 0),
(1176, 'Picada Berón', NULL, 9, 0),
(1177, 'Piedras Blancas', NULL, 9, 0),
(1178, 'Primer Distrito Cuchilla', NULL, 9, 0),
(1179, 'Primero de Mayo', NULL, 9, 0),
(1180, 'Pronunciamiento', NULL, 9, 0),
(1181, 'Pto. Algarrobo', NULL, 9, 0),
(1182, 'Pto. Ibicuy', NULL, 9, 0),
(1183, 'Pueblo Brugo', NULL, 9, 0),
(1184, 'Pueblo Cazes', NULL, 9, 0),
(1185, 'Pueblo Gral. Belgrano', NULL, 9, 0),
(1186, 'Pueblo Liebig', NULL, 9, 0),
(1187, 'Puerto Yeruá', NULL, 9, 0),
(1188, 'Punta del Monte', NULL, 9, 0),
(1189, 'Quebracho', NULL, 9, 0),
(1190, 'Quinto Distrito', NULL, 9, 0),
(1191, 'Raices Oeste', NULL, 9, 0),
(1192, 'Rincón de Nogoyá', NULL, 9, 0),
(1193, 'Rincón del Cinto', NULL, 9, 0),
(1194, 'Rincón del Doll', NULL, 9, 0),
(1195, 'Rincón del Gato', NULL, 9, 0),
(1196, 'Rocamora', NULL, 9, 0),
(1197, 'Rosario del Tala', NULL, 9, 0),
(1198, 'San Benito', NULL, 9, 0),
(1199, 'San Cipriano', NULL, 9, 0),
(1200, 'San Ernesto', NULL, 9, 0),
(1201, 'San Gustavo', NULL, 9, 0),
(1202, 'San Jaime', NULL, 9, 0),
(1203, 'San José', NULL, 9, 0),
(1204, 'San José de Feliciano', NULL, 9, 0),
(1205, 'San Justo', NULL, 9, 0),
(1206, 'San Marcial', NULL, 9, 0),
(1207, 'San Pedro', NULL, 9, 0),
(1208, 'San Ramírez', NULL, 9, 0),
(1209, 'San Ramón', NULL, 9, 0),
(1210, 'San Roque', NULL, 9, 0),
(1211, 'San Salvador', NULL, 9, 0),
(1212, 'San Víctor', NULL, 9, 0),
(1213, 'Santa Ana', NULL, 9, 0),
(1214, 'Santa Anita', NULL, 9, 0),
(1215, 'Santa Elena', NULL, 9, 0),
(1216, 'Santa Lucía', NULL, 9, 0),
(1217, 'Santa Luisa', NULL, 9, 0),
(1218, 'Sauce de Luna', NULL, 9, 0),
(1219, 'Sauce Montrull', NULL, 9, 0),
(1220, 'Sauce Pinto', NULL, 9, 0),
(1221, 'Sauce Sur', NULL, 9, 0),
(1222, 'Seguí', NULL, 9, 0),
(1223, 'Sir Leonard', NULL, 9, 0),
(1224, 'Sosa', NULL, 9, 0),
(1225, 'Tabossi', NULL, 9, 0),
(1226, 'Tezanos Pinto', NULL, 9, 0),
(1227, 'Ubajay', NULL, 9, 0),
(1228, 'Urdinarrain', NULL, 9, 0),
(1229, 'Veinte de Septiembre', NULL, 9, 0),
(1230, 'Viale', NULL, 9, 0),
(1231, 'Victoria', NULL, 9, 0),
(1232, 'Villa Clara', NULL, 9, 0),
(1233, 'Villa del Rosario', NULL, 9, 0),
(1234, 'Villa Domínguez', NULL, 9, 0),
(1235, 'Villa Elisa', NULL, 9, 0),
(1236, 'Villa Fontana', NULL, 9, 0),
(1237, 'Villa Gdor. Etchevehere', NULL, 9, 0),
(1238, 'Villa Mantero', NULL, 9, 0),
(1239, 'Villa Paranacito', NULL, 9, 0),
(1240, 'Villa Urquiza', NULL, 9, 0),
(1241, 'Villaguay', NULL, 9, 0),
(1242, 'Walter Moss', NULL, 9, 0),
(1243, 'Yacaré', NULL, 9, 0),
(1244, 'Yeso Oeste', NULL, 9, 0),
(1245, 'Buena Vista', NULL, 10, 0),
(1246, 'Clorinda', NULL, 10, 0),
(1247, 'Col. Pastoril', NULL, 10, 0),
(1248, 'Cte. Fontana', NULL, 10, 0),
(1249, 'El Colorado', NULL, 10, 0),
(1250, 'El Espinillo', NULL, 10, 0),
(1251, 'Estanislao Del Campo', NULL, 10, 0),
(1252, '10', NULL, 10, 0),
(1253, 'Fortín Lugones', NULL, 10, 0),
(1254, 'Gral. Lucio V. Mansilla', NULL, 10, 0),
(1255, 'Gral. Manuel Belgrano', NULL, 10, 0),
(1256, 'Gral. Mosconi', NULL, 10, 0),
(1257, 'Gran Guardia', NULL, 10, 0),
(1258, 'Herradura', NULL, 10, 0),
(1259, 'Ibarreta', NULL, 10, 0),
(1260, 'Ing. Juárez', NULL, 10, 0),
(1261, 'Laguna Blanca', NULL, 10, 0),
(1262, 'Laguna Naick Neck', NULL, 10, 0),
(1263, 'Laguna Yema', NULL, 10, 0),
(1264, 'Las Lomitas', NULL, 10, 0),
(1265, 'Los Chiriguanos', NULL, 10, 0),
(1266, 'Mayor V. Villafañe', NULL, 10, 0),
(1267, 'Misión San Fco.', NULL, 10, 0),
(1268, 'Palo Santo', NULL, 10, 0),
(1269, 'Pirané', NULL, 10, 0),
(1270, 'Pozo del Maza', NULL, 10, 0),
(1271, 'Riacho He-He', NULL, 10, 0),
(1272, 'San Hilario', NULL, 10, 0),
(1273, 'San Martín II', NULL, 10, 0),
(1274, 'Siete Palmas', NULL, 10, 0),
(1275, 'Subteniente Perín', NULL, 10, 0),
(1276, 'Tres Lagunas', NULL, 10, 0),
(1277, 'Villa Dos Trece', NULL, 10, 0),
(1278, 'Villa Escolar', NULL, 10, 0),
(1279, 'Villa Gral. Güemes', NULL, 10, 0),
(1280, 'Abdon Castro Tolay', NULL, 11, 0),
(1281, 'Abra Pampa', NULL, 11, 0),
(1282, 'Abralaite', NULL, 11, 0),
(1283, 'Aguas Calientes', NULL, 11, 0),
(1284, 'Arrayanal', NULL, 11, 0),
(1285, 'Barrios', NULL, 11, 0),
(1286, 'Caimancito', NULL, 11, 0),
(1287, 'Calilegua', NULL, 11, 0),
(1288, 'Cangrejillos', NULL, 11, 0),
(1289, 'Caspala', NULL, 11, 0),
(1290, 'Catuá', NULL, 11, 0),
(1291, 'Cieneguillas', NULL, 11, 0),
(1292, 'Coranzulli', NULL, 11, 0),
(1293, 'Cusi-Cusi', NULL, 11, 0),
(1294, 'El Aguilar', NULL, 11, 0),
(1295, 'El Carmen', NULL, 11, 0),
(1296, 'El Cóndor', NULL, 11, 0),
(1297, 'El Fuerte', NULL, 11, 0),
(1298, 'El Piquete', NULL, 11, 0),
(1299, 'El Talar', NULL, 11, 0),
(1300, 'Fraile Pintado', NULL, 11, 0),
(1301, 'Hipólito Yrigoyen', NULL, 11, 0),
(1302, 'Huacalera', NULL, 11, 0),
(1303, 'Humahuaca', NULL, 11, 0),
(1304, 'La Esperanza', NULL, 11, 0),
(1305, 'La Mendieta', NULL, 11, 0),
(1306, 'La Quiaca', NULL, 11, 0),
(1307, 'Ledesma', NULL, 11, 0),
(1308, 'Libertador Gral. San Martin', NULL, 11, 0),
(1309, 'Maimara', NULL, 11, 0),
(1310, 'Mina Pirquitas', NULL, 11, 0),
(1311, 'Monterrico', NULL, 11, 0),
(1312, 'Palma Sola', NULL, 11, 0),
(1313, 'Palpalá', NULL, 11, 0),
(1314, 'Pampa Blanca', NULL, 11, 0),
(1315, 'Pampichuela', NULL, 11, 0),
(1316, 'Perico', NULL, 11, 0),
(1317, 'Puesto del Marqués', NULL, 11, 0),
(1318, 'Puesto Viejo', NULL, 11, 0),
(1319, 'Pumahuasi', NULL, 11, 0),
(1320, 'Purmamarca', NULL, 11, 0),
(1321, 'Rinconada', NULL, 11, 0),
(1322, 'Rodeitos', NULL, 11, 0),
(1323, 'Rosario de Río Grande', NULL, 11, 0),
(1324, 'San Antonio', NULL, 11, 0),
(1325, 'San Francisco', NULL, 11, 0),
(1326, 'San Pedro', NULL, 11, 0),
(1327, 'San Rafael', NULL, 11, 0),
(1328, 'San Salvador', NULL, 11, 0),
(1329, 'Santa Ana', NULL, 11, 0),
(1330, 'Santa Catalina', NULL, 11, 0),
(1331, 'Santa Clara', NULL, 11, 0),
(1332, 'Susques', NULL, 11, 0),
(1333, 'Tilcara', NULL, 11, 0),
(1334, 'Tres Cruces', NULL, 11, 0),
(1335, 'Tumbaya', NULL, 11, 0),
(1336, 'Valle Grande', NULL, 11, 0),
(1337, 'Vinalito', NULL, 11, 0),
(1338, 'Volcán', NULL, 11, 0),
(1339, 'Yala', NULL, 11, 0),
(1340, 'Yaví', NULL, 11, 0),
(1341, 'Yuto', NULL, 11, 0),
(1342, 'Abramo', NULL, 12, 0),
(1343, 'Adolfo Van Praet', NULL, 12, 0),
(1344, 'Agustoni', NULL, 12, 0),
(1345, 'Algarrobo del Aguila', NULL, 12, 0),
(1346, 'Alpachiri', NULL, 12, 0),
(1347, 'Alta Italia', NULL, 12, 0),
(1348, 'Anguil', NULL, 12, 0),
(1349, 'Arata', NULL, 12, 0),
(1350, 'Ataliva Roca', NULL, 12, 0),
(1351, 'Bernardo Larroude', NULL, 12, 0),
(1352, 'Bernasconi', NULL, 12, 0),
(1353, 'Caleufú', NULL, 12, 0),
(1354, 'Carro Quemado', NULL, 12, 0),
(1355, 'Catriló', NULL, 12, 0),
(1356, 'Ceballos', NULL, 12, 0),
(1357, 'Chacharramendi', NULL, 12, 0),
(1358, 'Col. Barón', NULL, 12, 0),
(1359, 'Col. Santa María', NULL, 12, 0),
(1360, 'Conhelo', NULL, 12, 0),
(1361, 'Coronel Hilario Lagos', NULL, 12, 0),
(1362, 'Cuchillo-Có', NULL, 12, 0),
(1363, 'Doblas', NULL, 12, 0),
(1364, 'Dorila', NULL, 12, 0),
(1365, 'Eduardo Castex', NULL, 12, 0),
(1366, 'Embajador Martini', NULL, 12, 0),
(1367, 'Falucho', NULL, 12, 0),
(1368, 'Gral. Acha', NULL, 12, 0),
(1369, 'Gral. Manuel Campos', NULL, 12, 0),
(1370, 'Gral. Pico', NULL, 12, 0),
(1371, 'Guatraché', NULL, 12, 0),
(1372, 'Ing. Luiggi', NULL, 12, 0),
(1373, 'Intendente Alvear', NULL, 12, 0),
(1374, 'Jacinto Arauz', NULL, 12, 0),
(1375, 'La Adela', NULL, 12, 0),
(1376, 'La Humada', NULL, 12, 0),
(1377, 'La Maruja', NULL, 12, 0),
(1378, '12', NULL, 12, 0),
(1379, 'La Reforma', NULL, 12, 0),
(1380, 'Limay Mahuida', NULL, 12, 0),
(1381, 'Lonquimay', NULL, 12, 0),
(1382, 'Loventuel', NULL, 12, 0),
(1383, 'Luan Toro', NULL, 12, 0),
(1384, 'Macachín', NULL, 12, 0),
(1385, 'Maisonnave', NULL, 12, 0),
(1386, 'Mauricio Mayer', NULL, 12, 0),
(1387, 'Metileo', NULL, 12, 0),
(1388, 'Miguel Cané', NULL, 12, 0),
(1389, 'Miguel Riglos', NULL, 12, 0),
(1390, 'Monte Nievas', NULL, 12, 0),
(1391, 'Parera', NULL, 12, 0),
(1392, 'Perú', NULL, 12, 0),
(1393, 'Pichi-Huinca', NULL, 12, 0),
(1394, 'Puelches', NULL, 12, 0),
(1395, 'Puelén', NULL, 12, 0),
(1396, 'Quehue', NULL, 12, 0),
(1397, 'Quemú Quemú', NULL, 12, 0),
(1398, 'Quetrequén', NULL, 12, 0),
(1399, 'Rancul', NULL, 12, 0),
(1400, 'Realicó', NULL, 12, 0),
(1401, 'Relmo', NULL, 12, 0),
(1402, 'Rolón', NULL, 12, 0),
(1403, 'Rucanelo', NULL, 12, 0),
(1404, 'Sarah', NULL, 12, 0),
(1405, 'Speluzzi', NULL, 12, 0),
(1406, 'Sta. Isabel', NULL, 12, 0),
(1407, 'Sta. Rosa', NULL, 12, 0),
(1408, 'Sta. Teresa', NULL, 12, 0),
(1409, 'Telén', NULL, 12, 0),
(1410, 'Toay', NULL, 12, 0),
(1411, 'Tomas M. de Anchorena', NULL, 12, 0),
(1412, 'Trenel', NULL, 12, 0),
(1413, 'Unanue', NULL, 12, 0),
(1414, 'Uriburu', NULL, 12, 0),
(1415, 'Veinticinco de Mayo', NULL, 12, 0),
(1416, 'Vertiz', NULL, 12, 0),
(1417, 'Victorica', NULL, 12, 0),
(1418, 'Villa Mirasol', NULL, 12, 0),
(1419, 'Winifreda', NULL, 12, 0),
(1420, 'Arauco', NULL, 13, 0),
(1421, 'Capital', NULL, 13, 0),
(1422, 'Castro Barros', NULL, 13, 0),
(1423, 'Chamical', NULL, 13, 0),
(1424, 'Chilecito', NULL, 13, 0),
(1425, 'Coronel F. Varela', NULL, 13, 0),
(1426, 'Famatina', NULL, 13, 0),
(1427, 'Gral. A.V.Peñaloza', NULL, 13, 0),
(1428, 'Gral. Belgrano', NULL, 13, 0),
(1429, 'Gral. J.F. Quiroga', NULL, 13, 0),
(1430, 'Gral. Lamadrid', NULL, 13, 0),
(1431, 'Gral. Ocampo', NULL, 13, 0),
(1432, 'Gral. San Martín', NULL, 13, 0),
(1433, 'Independencia', NULL, 13, 0),
(1434, 'Rosario Penaloza', NULL, 13, 0),
(1435, 'San Blas de Los Sauces', NULL, 13, 0),
(1436, 'Sanagasta', NULL, 13, 0),
(1437, 'Vinchina', NULL, 13, 0),
(1438, 'Capital', NULL, 14, 0),
(1439, 'Chacras de Coria', NULL, 14, 0),
(1440, 'Dorrego', NULL, 14, 0),
(1441, 'Gllen', NULL, 14, 0),
(1442, 'Godoy Cruz', NULL, 14, 0),
(1443, 'Gral. Alvear', NULL, 14, 0),
(1444, 'Guaymallén', NULL, 14, 0),
(1445, 'Junín', NULL, 14, 0),
(1446, 'La Paz', NULL, 14, 0),
(1447, 'Las Heras', NULL, 14, 0),
(1448, 'Lavalle', NULL, 14, 0),
(1449, 'Luján', NULL, 14, 0),
(1450, 'Luján De Cuyo', NULL, 14, 0),
(1451, 'Maipú', NULL, 14, 0),
(1452, 'Malargüe', NULL, 14, 0),
(1453, 'Rivadavia', NULL, 14, 0),
(1454, 'San Carlos', NULL, 14, 0),
(1455, 'San Martín', NULL, 14, 0),
(1456, 'San Rafael', NULL, 14, 0),
(1457, 'Sta. Rosa', NULL, 14, 0),
(1458, 'Tunuyán', NULL, 14, 0),
(1459, 'Tupungato', NULL, 14, 0),
(1460, 'Villa Nueva', NULL, 14, 0),
(1461, 'Alba Posse', NULL, 15, 0),
(1462, 'Almafuerte', NULL, 15, 0),
(1463, 'Apóstoles', NULL, 15, 0),
(1464, 'Aristóbulo Del Valle', NULL, 15, 0),
(1465, 'Arroyo Del Medio', NULL, 15, 0),
(1466, 'Azara', NULL, 15, 0),
(1467, 'Bdo. De Irigoyen', NULL, 15, 0),
(1468, 'Bonpland', NULL, 15, 0),
(1469, 'Caá Yari', NULL, 15, 0),
(1470, 'Campo Grande', NULL, 15, 0),
(1471, 'Campo Ramón', NULL, 15, 0),
(1472, 'Campo Viera', NULL, 15, 0),
(1473, 'Candelaria', NULL, 15, 0),
(1474, 'Capioví', NULL, 15, 0),
(1475, 'Caraguatay', NULL, 15, 0),
(1476, 'Cdte. Guacurarí', NULL, 15, 0),
(1477, 'Cerro Azul', NULL, 15, 0),
(1478, 'Cerro Corá', NULL, 15, 0),
(1479, 'Col. Alberdi', NULL, 15, 0),
(1480, 'Col. Aurora', NULL, 15, 0),
(1481, 'Col. Delicia', NULL, 15, 0),
(1482, 'Col. Polana', NULL, 15, 0),
(1483, 'Col. Victoria', NULL, 15, 0),
(1484, 'Col. Wanda', NULL, 15, 0),
(1485, 'Concepción De La Sierra', NULL, 15, 0),
(1486, 'Corpus', NULL, 15, 0),
(1487, 'Dos Arroyos', NULL, 15, 0),
(1488, 'Dos de Mayo', NULL, 15, 0),
(1489, 'El Alcázar', NULL, 15, 0),
(1490, 'El Dorado', NULL, 15, 0),
(1491, 'El Soberbio', NULL, 15, 0),
(1492, 'Esperanza', NULL, 15, 0),
(1493, 'F. Ameghino', NULL, 15, 0),
(1494, 'Fachinal', NULL, 15, 0),
(1495, 'Garuhapé', NULL, 15, 0),
(1496, 'Garupá', NULL, 15, 0),
(1497, 'Gdor. López', NULL, 15, 0),
(1498, 'Gdor. Roca', NULL, 15, 0),
(1499, 'Gral. Alvear', NULL, 15, 0),
(1500, 'Gral. Urquiza', NULL, 15, 0),
(1501, 'Guaraní', NULL, 15, 0),
(1502, 'H. Yrigoyen', NULL, 15, 0),
(1503, 'Iguazú', NULL, 15, 0),
(1504, 'Itacaruaré', NULL, 15, 0),
(1505, 'Jardín América', NULL, 15, 0),
(1506, 'Leandro N. Alem', NULL, 15, 0),
(1507, 'Libertad', NULL, 15, 0),
(1508, 'Loreto', NULL, 15, 0),
(1509, 'Los Helechos', NULL, 15, 0),
(1510, 'Mártires', NULL, 15, 0),
(1511, '15', NULL, 15, 0),
(1512, 'Mojón Grande', NULL, 15, 0),
(1513, 'Montecarlo', NULL, 15, 0),
(1514, 'Nueve de Julio', NULL, 15, 0),
(1515, 'Oberá', NULL, 15, 0),
(1516, 'Olegario V. Andrade', NULL, 15, 0),
(1517, 'Panambí', NULL, 15, 0),
(1518, 'Posadas', NULL, 15, 0),
(1519, 'Profundidad', NULL, 15, 0),
(1520, 'Pto. Iguazú', NULL, 15, 0),
(1521, 'Pto. Leoni', NULL, 15, 0),
(1522, 'Pto. Piray', NULL, 15, 0),
(1523, 'Pto. Rico', NULL, 15, 0),
(1524, 'Ruiz de Montoya', NULL, 15, 0),
(1525, 'San Antonio', NULL, 15, 0),
(1526, 'San Ignacio', NULL, 15, 0),
(1527, 'San Javier', NULL, 15, 0),
(1528, 'San José', NULL, 15, 0),
(1529, 'San Martín', NULL, 15, 0);
INSERT INTO `localidad` (`id`, `nombre`, `codigo_postal`, `provincia_id`, `region_id`) VALUES
(1530, 'San Pedro', NULL, 15, 0),
(1531, 'San Vicente', NULL, 15, 0),
(1532, 'Santiago De Liniers', NULL, 15, 0),
(1533, 'Santo Pipo', NULL, 15, 0),
(1534, 'Sta. Ana', NULL, 15, 0),
(1535, 'Sta. María', NULL, 15, 0),
(1536, 'Tres Capones', NULL, 15, 0),
(1537, 'Veinticinco de Mayo', NULL, 15, 0),
(1538, 'Wanda', NULL, 15, 0),
(1539, 'Aguada San Roque', NULL, 16, 0),
(1540, 'Aluminé', NULL, 16, 0),
(1541, 'Andacollo', NULL, 16, 0),
(1542, 'Añelo', NULL, 16, 0),
(1543, 'Bajada del Agrio', NULL, 16, 0),
(1544, 'Barrancas', NULL, 16, 0),
(1545, 'Buta Ranquil', NULL, 16, 0),
(1546, 'Capital', NULL, 16, 0),
(1547, 'Caviahué', NULL, 16, 0),
(1548, 'Centenario', NULL, 16, 0),
(1549, 'Chorriaca', NULL, 16, 0),
(1550, 'Chos Malal', NULL, 16, 0),
(1551, 'Cipolletti', NULL, 16, 0),
(1552, 'Covunco Abajo', NULL, 16, 0),
(1553, 'Coyuco Cochico', NULL, 16, 0),
(1554, 'Cutral Có', NULL, 16, 0),
(1555, 'El Cholar', NULL, 16, 0),
(1556, 'El Huecú', NULL, 16, 0),
(1557, 'El Sauce', NULL, 16, 0),
(1558, 'Guañacos', NULL, 16, 0),
(1559, 'Huinganco', NULL, 16, 0),
(1560, 'Las Coloradas', NULL, 16, 0),
(1561, 'Las Lajas', NULL, 16, 0),
(1562, 'Las Ovejas', NULL, 16, 0),
(1563, 'Loncopué', NULL, 16, 0),
(1564, 'Los Catutos', NULL, 16, 0),
(1565, 'Los Chihuidos', NULL, 16, 0),
(1566, 'Los Miches', NULL, 16, 0),
(1567, 'Manzano Amargo', NULL, 16, 0),
(1568, '16', NULL, 16, 0),
(1569, 'Octavio Pico', NULL, 16, 0),
(1570, 'Paso Aguerre', NULL, 16, 0),
(1571, 'Picún Leufú', NULL, 16, 0),
(1572, 'Piedra del Aguila', NULL, 16, 0),
(1573, 'Pilo Lil', NULL, 16, 0),
(1574, 'Plaza Huincul', NULL, 16, 0),
(1575, 'Plottier', NULL, 16, 0),
(1576, 'Quili Malal', NULL, 16, 0),
(1577, 'Ramón Castro', NULL, 16, 0),
(1578, 'Rincón de Los Sauces', NULL, 16, 0),
(1579, 'San Martín de Los Andes', NULL, 16, 0),
(1580, 'San Patricio del Chañar', NULL, 16, 0),
(1581, 'Santo Tomás', NULL, 16, 0),
(1582, 'Sauzal Bonito', NULL, 16, 0),
(1583, 'Senillosa', NULL, 16, 0),
(1584, 'Taquimilán', NULL, 16, 0),
(1585, 'Tricao Malal', NULL, 16, 0),
(1586, 'Varvarco', NULL, 16, 0),
(1587, 'Villa Curí Leuvu', NULL, 16, 0),
(1588, 'Villa del Nahueve', NULL, 16, 0),
(1589, 'Villa del Puente Picún Leuvú', NULL, 16, 0),
(1590, 'Villa El Chocón', NULL, 16, 0),
(1591, 'Villa La Angostura', NULL, 16, 0),
(1592, 'Villa Pehuenia', NULL, 16, 0),
(1593, 'Villa Traful', NULL, 16, 0),
(1594, 'Vista Alegre', NULL, 16, 0),
(1595, 'Zapala', NULL, 16, 0),
(1596, 'Aguada Cecilio', NULL, 17, 0),
(1597, 'Aguada de Guerra', NULL, 17, 0),
(1598, 'Allén', NULL, 17, 0),
(1599, 'Arroyo de La Ventana', NULL, 17, 0),
(1600, 'Arroyo Los Berros', NULL, 17, 0),
(1601, 'Bariloche', NULL, 17, 0),
(1602, 'Calte. Cordero', NULL, 17, 0),
(1603, 'Campo Grande', NULL, 17, 0),
(1604, 'Catriel', NULL, 17, 0),
(1605, 'Cerro Policía', NULL, 17, 0),
(1606, 'Cervantes', NULL, 17, 0),
(1607, 'Chelforo', NULL, 17, 0),
(1608, 'Chimpay', NULL, 17, 0),
(1609, 'Chinchinales', NULL, 17, 0),
(1610, 'Chipauquil', NULL, 17, 0),
(1611, 'Choele Choel', NULL, 17, 0),
(1612, 'Cinco Saltos', NULL, 17, 0),
(1613, 'Cipolletti', NULL, 17, 0),
(1614, 'Clemente Onelli', NULL, 17, 0),
(1615, 'Colán Conhue', NULL, 17, 0),
(1616, 'Comallo', NULL, 17, 0),
(1617, 'Comicó', NULL, 17, 0),
(1618, 'Cona Niyeu', NULL, 17, 0),
(1619, 'Coronel Belisle', NULL, 17, 0),
(1620, 'Cubanea', NULL, 17, 0),
(1621, 'Darwin', NULL, 17, 0),
(1622, 'Dina Huapi', NULL, 17, 0),
(1623, 'El Bolsón', NULL, 17, 0),
(1624, 'El Caín', NULL, 17, 0),
(1625, 'El Manso', NULL, 17, 0),
(1626, 'Gral. Conesa', NULL, 17, 0),
(1627, 'Gral. Enrique Godoy', NULL, 17, 0),
(1628, 'Gral. Fernandez Oro', NULL, 17, 0),
(1629, 'Gral. Roca', NULL, 17, 0),
(1630, 'Guardia Mitre', NULL, 17, 0),
(1631, 'Ing. Huergo', NULL, 17, 0),
(1632, 'Ing. Jacobacci', NULL, 17, 0),
(1633, 'Laguna Blanca', NULL, 17, 0),
(1634, 'Lamarque', NULL, 17, 0),
(1635, 'Las Grutas', NULL, 17, 0),
(1636, 'Los Menucos', NULL, 17, 0),
(1637, 'Luis Beltrán', NULL, 17, 0),
(1638, 'Mainqué', NULL, 17, 0),
(1639, 'Mamuel Choique', NULL, 17, 0),
(1640, 'Maquinchao', NULL, 17, 0),
(1641, 'Mencué', NULL, 17, 0),
(1642, 'Mtro. Ramos Mexia', NULL, 17, 0),
(1643, 'Nahuel Niyeu', NULL, 17, 0),
(1644, 'Naupa Huen', NULL, 17, 0),
(1645, 'Ñorquinco', NULL, 17, 0),
(1646, 'Ojos de Agua', NULL, 17, 0),
(1647, 'Paso de Agua', NULL, 17, 0),
(1648, 'Paso Flores', NULL, 17, 0),
(1649, 'Peñas Blancas', NULL, 17, 0),
(1650, 'Pichi Mahuida', NULL, 17, 0),
(1651, 'Pilcaniyeu', NULL, 17, 0),
(1652, 'Pomona', NULL, 17, 0),
(1653, 'Prahuaniyeu', NULL, 17, 0),
(1654, 'Rincón Treneta', NULL, 17, 0),
(1655, 'Río Chico', NULL, 17, 0),
(1656, 'Río Colorado', NULL, 17, 0),
(1657, 'Roca', NULL, 17, 0),
(1658, 'San Antonio Oeste', NULL, 17, 0),
(1659, 'San Javier', NULL, 17, 0),
(1660, 'Sierra Colorada', NULL, 17, 0),
(1661, 'Sierra Grande', NULL, 17, 0),
(1662, 'Sierra Pailemán', NULL, 17, 0),
(1663, 'Valcheta', NULL, 17, 0),
(1664, 'Valle Azul', NULL, 17, 0),
(1665, 'Viedma', NULL, 17, 0),
(1666, 'Villa Llanquín', NULL, 17, 0),
(1667, 'Villa Mascardi', NULL, 17, 0),
(1668, 'Villa Regina', NULL, 17, 0),
(1669, 'Yaminué', NULL, 17, 0),
(1670, 'A. Saravia', NULL, 18, 0),
(1671, 'Aguaray', NULL, 18, 0),
(1672, 'Angastaco', NULL, 18, 0),
(1673, 'Animaná', NULL, 18, 0),
(1674, 'Cachi', NULL, 18, 0),
(1675, 'Cafayate', NULL, 18, 0),
(1676, 'Campo Quijano', NULL, 18, 0),
(1677, 'Campo Santo', NULL, 18, 0),
(1678, 'Capital', NULL, 18, 0),
(1679, 'Cerrillos', NULL, 18, 0),
(1680, 'Chicoana', NULL, 18, 0),
(1681, 'Col. Sta. Rosa', NULL, 18, 0),
(1682, 'Coronel Moldes', NULL, 18, 0),
(1683, 'El Bordo', NULL, 18, 0),
(1684, 'El Carril', NULL, 18, 0),
(1685, 'El Galpón', NULL, 18, 0),
(1686, 'El Jardín', NULL, 18, 0),
(1687, 'El Potrero', NULL, 18, 0),
(1688, 'El Quebrachal', NULL, 18, 0),
(1689, 'El Tala', NULL, 18, 0),
(1690, 'Embarcación', NULL, 18, 0),
(1691, 'Gral. Ballivian', NULL, 18, 0),
(1692, 'Gral. Güemes', NULL, 18, 0),
(1693, 'Gral. Mosconi', NULL, 18, 0),
(1694, 'Gral. Pizarro', NULL, 18, 0),
(1695, 'Guachipas', NULL, 18, 0),
(1696, 'Hipólito Yrigoyen', NULL, 18, 0),
(1697, 'Iruyá', NULL, 18, 0),
(1698, 'Isla De Cañas', NULL, 18, 0),
(1699, 'J. V. Gonzalez', NULL, 18, 0),
(1700, 'La Caldera', NULL, 18, 0),
(1701, 'La Candelaria', NULL, 18, 0),
(1702, 'La Merced', NULL, 18, 0),
(1703, 'La Poma', NULL, 18, 0),
(1704, 'La Viña', NULL, 18, 0),
(1705, 'Las Lajitas', NULL, 18, 0),
(1706, 'Los Toldos', NULL, 18, 0),
(1707, 'Metán', NULL, 18, 0),
(1708, 'Molinos', NULL, 18, 0),
(1709, 'Nazareno', NULL, 18, 0),
(1710, 'Orán', NULL, 18, 0),
(1711, 'Payogasta', NULL, 18, 0),
(1712, 'Pichanal', NULL, 18, 0),
(1713, 'Prof. S. Mazza', NULL, 18, 0),
(1714, 'Río Piedras', NULL, 18, 0),
(1715, 'Rivadavia Banda Norte', NULL, 18, 0),
(1716, 'Rivadavia Banda Sur', NULL, 18, 0),
(1717, 'Rosario de La Frontera', NULL, 18, 0),
(1718, 'Rosario de Lerma', NULL, 18, 0),
(1719, 'Saclantás', NULL, 18, 0),
(1720, '18', NULL, 18, 0),
(1721, 'San Antonio', NULL, 18, 0),
(1722, 'San Carlos', NULL, 18, 0),
(1723, 'San José De Metán', NULL, 18, 0),
(1724, 'San Ramón', NULL, 18, 0),
(1725, 'Santa Victoria E.', NULL, 18, 0),
(1726, 'Santa Victoria O.', NULL, 18, 0),
(1727, 'Tartagal', NULL, 18, 0),
(1728, 'Tolar Grande', NULL, 18, 0),
(1729, 'Urundel', NULL, 18, 0),
(1730, 'Vaqueros', NULL, 18, 0),
(1731, 'Villa San Lorenzo', NULL, 18, 0),
(1732, 'Albardón', NULL, 19, 0),
(1733, 'Angaco', NULL, 19, 0),
(1734, 'Calingasta', NULL, 19, 0),
(1735, 'Capital', NULL, 19, 0),
(1736, 'Caucete', NULL, 19, 0),
(1737, 'Chimbas', NULL, 19, 0),
(1738, 'Iglesia', NULL, 19, 0),
(1739, 'Jachal', NULL, 19, 0),
(1740, 'Nueve de Julio', NULL, 19, 0),
(1741, 'Pocito', NULL, 19, 0),
(1742, 'Rawson', NULL, 19, 0),
(1743, 'Rivadavia', NULL, 19, 0),
(1744, '19', NULL, 19, 0),
(1745, 'San Martín', NULL, 19, 0),
(1746, 'Santa Lucía', NULL, 19, 0),
(1747, 'Sarmiento', NULL, 19, 0),
(1748, 'Ullum', NULL, 19, 0),
(1749, 'Valle Fértil', NULL, 19, 0),
(1750, 'Veinticinco de Mayo', NULL, 19, 0),
(1751, 'Zonda', NULL, 19, 0),
(1752, 'Alto Pelado', NULL, 20, 0),
(1753, 'Alto Pencoso', NULL, 20, 0),
(1754, 'Anchorena', NULL, 20, 0),
(1755, 'Arizona', NULL, 20, 0),
(1756, 'Bagual', NULL, 20, 0),
(1757, 'Balde', NULL, 20, 0),
(1758, 'Batavia', NULL, 20, 0),
(1759, 'Beazley', NULL, 20, 0),
(1760, 'Buena Esperanza', NULL, 20, 0),
(1761, 'Candelaria', NULL, 20, 0),
(1762, 'Capital', NULL, 20, 0),
(1763, 'Carolina', NULL, 20, 0),
(1764, 'Carpintería', NULL, 20, 0),
(1765, 'Concarán', NULL, 20, 0),
(1766, 'Cortaderas', NULL, 20, 0),
(1767, 'El Morro', NULL, 20, 0),
(1768, 'El Trapiche', NULL, 20, 0),
(1769, 'El Volcán', NULL, 20, 0),
(1770, 'Fortín El Patria', NULL, 20, 0),
(1771, 'Fortuna', NULL, 20, 0),
(1772, 'Fraga', NULL, 20, 0),
(1773, 'Juan Jorba', NULL, 20, 0),
(1774, 'Juan Llerena', NULL, 20, 0),
(1775, 'Juana Koslay', NULL, 20, 0),
(1776, 'Justo Daract', NULL, 20, 0),
(1777, 'La Calera', NULL, 20, 0),
(1778, 'La Florida', NULL, 20, 0),
(1779, 'La Punilla', NULL, 20, 0),
(1780, 'La Toma', NULL, 20, 0),
(1781, 'Lafinur', NULL, 20, 0),
(1782, 'Las Aguadas', NULL, 20, 0),
(1783, 'Las Chacras', NULL, 20, 0),
(1784, 'Las Lagunas', NULL, 20, 0),
(1785, 'Las Vertientes', NULL, 20, 0),
(1786, 'Lavaisse', NULL, 20, 0),
(1787, 'Leandro N. Alem', NULL, 20, 0),
(1788, 'Los Molles', NULL, 20, 0),
(1789, 'Luján', NULL, 20, 0),
(1790, 'Mercedes', NULL, 20, 0),
(1791, 'Merlo', NULL, 20, 0),
(1792, 'Naschel', NULL, 20, 0),
(1793, 'Navia', NULL, 20, 0),
(1794, 'Nogolí', NULL, 20, 0),
(1795, 'Nueva Galia', NULL, 20, 0),
(1796, 'Papagayos', NULL, 20, 0),
(1797, 'Paso Grande', NULL, 20, 0),
(1798, 'Potrero de Los Funes', NULL, 20, 0),
(1799, 'Quines', NULL, 20, 0),
(1800, 'Renca', NULL, 20, 0),
(1801, 'Saladillo', NULL, 20, 0),
(1802, 'San Francisco', NULL, 20, 0),
(1803, 'San Gerónimo', NULL, 20, 0),
(1804, 'San Martín', NULL, 20, 0),
(1805, 'San Pablo', NULL, 20, 0),
(1806, 'Santa Rosa de Conlara', NULL, 20, 0),
(1807, 'Talita', NULL, 20, 0),
(1808, 'Tilisarao', NULL, 20, 0),
(1809, 'Unión', NULL, 20, 0),
(1810, 'Villa de La Quebrada', NULL, 20, 0),
(1811, 'Villa de Praga', NULL, 20, 0),
(1812, 'Villa del Carmen', NULL, 20, 0),
(1813, 'Villa Gral. Roca', NULL, 20, 0),
(1814, 'Villa Larca', NULL, 20, 0),
(1815, 'Villa Mercedes', NULL, 20, 0),
(1816, 'Zanjitas', NULL, 20, 0),
(1817, 'Calafate', NULL, 21, 0),
(1818, 'Caleta Olivia', NULL, 21, 0),
(1819, 'Cañadón Seco', NULL, 21, 0),
(1820, 'Comandante Piedrabuena', NULL, 21, 0),
(1821, 'El Calafate', NULL, 21, 0),
(1822, 'El Chaltén', NULL, 21, 0),
(1823, 'Gdor. Gregores', NULL, 21, 0),
(1824, 'Hipólito Yrigoyen', NULL, 21, 0),
(1825, 'Jaramillo', NULL, 21, 0),
(1826, 'Koluel Kaike', NULL, 21, 0),
(1827, 'Las Heras', NULL, 21, 0),
(1828, 'Los Antiguos', NULL, 21, 0),
(1829, 'Perito Moreno', NULL, 21, 0),
(1830, 'Pico Truncado', NULL, 21, 0),
(1831, 'Pto. Deseado', NULL, 21, 0),
(1832, 'Pto. San Julián', NULL, 21, 0),
(1833, 'Pto. 21', NULL, 21, 0),
(1834, 'Río Cuarto', NULL, 21, 0),
(1835, 'Río Gallegos', NULL, 21, 0),
(1836, 'Río Turbio', NULL, 21, 0),
(1837, 'Tres Lagos', NULL, 21, 0),
(1838, 'Veintiocho De Noviembre', NULL, 21, 0),
(1839, 'Aarón Castellanos', NULL, 22, 0),
(1840, 'Acebal', NULL, 22, 0),
(1841, 'Aguará Grande', NULL, 22, 0),
(1842, 'Albarellos', NULL, 22, 0),
(1843, 'Alcorta', NULL, 22, 0),
(1844, 'Aldao', NULL, 22, 0),
(1845, 'Alejandra', NULL, 22, 0),
(1846, 'Álvarez', NULL, 22, 0),
(1847, 'Ambrosetti', NULL, 22, 0),
(1848, 'Amenábar', NULL, 22, 0),
(1849, 'Angélica', NULL, 22, 0),
(1850, 'Angeloni', NULL, 22, 0),
(1851, 'Arequito', NULL, 22, 0),
(1852, 'Arminda', NULL, 22, 0),
(1853, 'Armstrong', NULL, 22, 0),
(1854, 'Arocena', NULL, 22, 0),
(1855, 'Arroyo Aguiar', NULL, 22, 0),
(1856, 'Arroyo Ceibal', NULL, 22, 0),
(1857, 'Arroyo Leyes', NULL, 22, 0),
(1858, 'Arroyo Seco', NULL, 22, 0),
(1859, 'Arrufó', NULL, 22, 0),
(1860, 'Arteaga', NULL, 22, 0),
(1861, 'Ataliva', NULL, 22, 0),
(1862, 'Aurelia', NULL, 22, 0),
(1863, 'Avellaneda', NULL, 22, 0),
(1864, 'Barrancas', NULL, 22, 0),
(1865, 'Bauer Y Sigel', NULL, 22, 0),
(1866, 'Bella Italia', NULL, 22, 0),
(1867, 'Berabevú', NULL, 22, 0),
(1868, 'Berna', NULL, 22, 0),
(1869, 'Bernardo de Irigoyen', NULL, 22, 0),
(1870, 'Bigand', NULL, 22, 0),
(1871, 'Bombal', NULL, 22, 0),
(1872, 'Bouquet', NULL, 22, 0),
(1873, 'Bustinza', NULL, 22, 0),
(1874, 'Cabal', NULL, 22, 0),
(1875, 'Cacique Ariacaiquin', NULL, 22, 0),
(1876, 'Cafferata', NULL, 22, 0),
(1877, 'Calchaquí', NULL, 22, 0),
(1878, 'Campo Andino', NULL, 22, 0),
(1879, 'Campo Piaggio', NULL, 22, 0),
(1880, 'Cañada de Gómez', NULL, 22, 0),
(1881, 'Cañada del Ucle', NULL, 22, 0),
(1882, 'Cañada Rica', NULL, 22, 0),
(1883, 'Cañada Rosquín', NULL, 22, 0),
(1884, 'Candioti', NULL, 22, 0),
(1885, 'Capital', NULL, 22, 0),
(1886, 'Capitán Bermúdez', NULL, 22, 0),
(1887, 'Capivara', NULL, 22, 0),
(1888, 'Carcarañá', NULL, 22, 0),
(1889, 'Carlos Pellegrini', NULL, 22, 0),
(1890, 'Carmen', NULL, 22, 0),
(1891, 'Carmen Del Sauce', NULL, 22, 0),
(1892, 'Carreras', NULL, 22, 0),
(1893, 'Carrizales', NULL, 22, 0),
(1894, 'Casalegno', NULL, 22, 0),
(1895, 'Casas', NULL, 22, 0),
(1896, 'Casilda', NULL, 22, 0),
(1897, 'Castelar', NULL, 22, 0),
(1898, 'Castellanos', NULL, 22, 0),
(1899, 'Cayastá', NULL, 22, 0),
(1900, 'Cayastacito', NULL, 22, 0),
(1901, 'Centeno', NULL, 22, 0),
(1902, 'Cepeda', NULL, 22, 0),
(1903, 'Ceres', NULL, 22, 0),
(1904, 'Chabás', NULL, 22, 0),
(1905, 'Chañar Ladeado', NULL, 22, 0),
(1906, 'Chapuy', NULL, 22, 0),
(1907, 'Chovet', NULL, 22, 0),
(1908, 'Christophersen', NULL, 22, 0),
(1909, 'Classon', NULL, 22, 0),
(1910, 'Cnel. Arnold', NULL, 22, 0),
(1911, 'Cnel. Bogado', NULL, 22, 0),
(1912, 'Cnel. Dominguez', NULL, 22, 0),
(1913, 'Cnel. Fraga', NULL, 22, 0),
(1914, 'Col. Aldao', NULL, 22, 0),
(1915, 'Col. Ana', NULL, 22, 0),
(1916, 'Col. Belgrano', NULL, 22, 0),
(1917, 'Col. Bicha', NULL, 22, 0),
(1918, 'Col. Bigand', NULL, 22, 0),
(1919, 'Col. Bossi', NULL, 22, 0),
(1920, 'Col. Cavour', NULL, 22, 0),
(1921, 'Col. Cello', NULL, 22, 0),
(1922, 'Col. Dolores', NULL, 22, 0),
(1923, 'Col. Dos Rosas', NULL, 22, 0),
(1924, 'Col. Durán', NULL, 22, 0),
(1925, 'Col. Iturraspe', NULL, 22, 0),
(1926, 'Col. Margarita', NULL, 22, 0),
(1927, 'Col. Mascias', NULL, 22, 0),
(1928, 'Col. Raquel', NULL, 22, 0),
(1929, 'Col. Rosa', NULL, 22, 0),
(1930, 'Col. San José', NULL, 22, 0),
(1931, 'Constanza', NULL, 22, 0),
(1932, 'Coronda', NULL, 22, 0),
(1933, 'Correa', NULL, 22, 0),
(1934, 'Crispi', NULL, 22, 0),
(1935, 'Cululú', NULL, 22, 0),
(1936, 'Curupayti', NULL, 22, 0),
(1937, 'Desvio Arijón', NULL, 22, 0),
(1938, 'Diaz', NULL, 22, 0),
(1939, 'Diego de Alvear', NULL, 22, 0),
(1940, 'Egusquiza', NULL, 22, 0),
(1941, 'El Arazá', NULL, 22, 0),
(1942, 'El Rabón', NULL, 22, 0),
(1943, 'El Sombrerito', NULL, 22, 0),
(1944, 'El Trébol', NULL, 22, 0),
(1945, 'Elisa', NULL, 22, 0),
(1946, 'Elortondo', NULL, 22, 0),
(1947, 'Emilia', NULL, 22, 0),
(1948, 'Empalme San Carlos', NULL, 22, 0),
(1949, 'Empalme Villa Constitucion', NULL, 22, 0),
(1950, 'Esmeralda', NULL, 22, 0),
(1951, 'Esperanza', NULL, 22, 0),
(1952, 'Estación Alvear', NULL, 22, 0),
(1953, 'Estacion Clucellas', NULL, 22, 0),
(1954, 'Esteban Rams', NULL, 22, 0),
(1955, 'Esther', NULL, 22, 0),
(1956, 'Esustolia', NULL, 22, 0),
(1957, 'Eusebia', NULL, 22, 0),
(1958, 'Felicia', NULL, 22, 0),
(1959, 'Fidela', NULL, 22, 0),
(1960, 'Fighiera', NULL, 22, 0),
(1961, 'Firmat', NULL, 22, 0),
(1962, 'Florencia', NULL, 22, 0),
(1963, 'Fortín Olmos', NULL, 22, 0),
(1964, 'Franck', NULL, 22, 0),
(1965, 'Fray Luis Beltrán', NULL, 22, 0),
(1966, 'Frontera', NULL, 22, 0),
(1967, 'Fuentes', NULL, 22, 0),
(1968, 'Funes', NULL, 22, 0),
(1969, 'Gaboto', NULL, 22, 0),
(1970, 'Galisteo', NULL, 22, 0),
(1971, 'Gálvez', NULL, 22, 0),
(1972, 'Garabalto', NULL, 22, 0),
(1973, 'Garibaldi', NULL, 22, 0),
(1974, 'Gato Colorado', NULL, 22, 0),
(1975, 'Gdor. Crespo', NULL, 22, 0),
(1976, 'Gessler', NULL, 22, 0),
(1977, 'Godoy', NULL, 22, 0),
(1978, 'Golondrina', NULL, 22, 0),
(1979, 'Gral. Gelly', NULL, 22, 0),
(1980, 'Gral. Lagos', NULL, 22, 0),
(1981, 'Granadero Baigorria', NULL, 22, 0),
(1982, 'Gregoria Perez De Denis', NULL, 22, 0),
(1983, 'Grutly', NULL, 22, 0),
(1984, 'Guadalupe N.', NULL, 22, 0),
(1985, 'Gödeken', NULL, 22, 0),
(1986, 'Helvecia', NULL, 22, 0),
(1987, 'Hersilia', NULL, 22, 0),
(1988, 'Hipatía', NULL, 22, 0),
(1989, 'Huanqueros', NULL, 22, 0),
(1990, 'Hugentobler', NULL, 22, 0),
(1991, 'Hughes', NULL, 22, 0),
(1992, 'Humberto 1º', NULL, 22, 0),
(1993, 'Humboldt', NULL, 22, 0),
(1994, 'Ibarlucea', NULL, 22, 0),
(1995, 'Ing. Chanourdie', NULL, 22, 0),
(1996, 'Intiyaco', NULL, 22, 0),
(1997, 'Ituzaingó', NULL, 22, 0),
(1998, 'Jacinto L. Aráuz', NULL, 22, 0),
(1999, 'Josefina', NULL, 22, 0),
(2000, 'Juan B. Molina', NULL, 22, 0),
(2001, 'Juan de Garay', NULL, 22, 0),
(2002, 'Juncal', NULL, 22, 0),
(2003, 'La Brava', NULL, 22, 0),
(2004, 'La Cabral', NULL, 22, 0),
(2005, 'La Camila', NULL, 22, 0),
(2006, 'La Chispa', NULL, 22, 0),
(2007, 'La Clara', NULL, 22, 0),
(2008, 'La Criolla', NULL, 22, 0),
(2009, 'La Gallareta', NULL, 22, 0),
(2010, 'La Lucila', NULL, 22, 0),
(2011, 'La Pelada', NULL, 22, 0),
(2012, 'La Penca', NULL, 22, 0),
(2013, 'La Rubia', NULL, 22, 0),
(2014, 'La Sarita', NULL, 22, 0),
(2015, 'La Vanguardia', NULL, 22, 0),
(2016, 'Labordeboy', NULL, 22, 0),
(2017, 'Laguna Paiva', NULL, 22, 0),
(2018, 'Landeta', NULL, 22, 0),
(2019, 'Lanteri', NULL, 22, 0),
(2020, 'Larrechea', NULL, 22, 0),
(2021, 'Las Avispas', NULL, 22, 0),
(2022, 'Las Bandurrias', NULL, 22, 0),
(2023, 'Las Garzas', NULL, 22, 0),
(2024, 'Las Palmeras', NULL, 22, 0),
(2025, 'Las Parejas', NULL, 22, 0),
(2026, 'Las Petacas', NULL, 22, 0),
(2027, 'Las Rosas', NULL, 22, 0),
(2028, 'Las Toscas', NULL, 22, 0),
(2029, 'Las Tunas', NULL, 22, 0),
(2030, 'Lazzarino', NULL, 22, 0),
(2031, 'Lehmann', NULL, 22, 0),
(2032, 'Llambi Campbell', NULL, 22, 0),
(2033, 'Logroño', NULL, 22, 0),
(2034, 'Loma Alta', NULL, 22, 0),
(2035, 'López', NULL, 22, 0),
(2036, 'Los Amores', NULL, 22, 0),
(2037, 'Los Cardos', NULL, 22, 0),
(2038, 'Los Laureles', NULL, 22, 0),
(2039, 'Los Molinos', NULL, 22, 0),
(2040, 'Los Quirquinchos', NULL, 22, 0),
(2041, 'Lucio V. Lopez', NULL, 22, 0),
(2042, 'Luis Palacios', NULL, 22, 0),
(2043, 'Ma. Juana', NULL, 22, 0),
(2044, 'Ma. Luisa', NULL, 22, 0),
(2045, 'Ma. Susana', NULL, 22, 0),
(2046, 'Ma. Teresa', NULL, 22, 0),
(2047, 'Maciel', NULL, 22, 0),
(2048, 'Maggiolo', NULL, 22, 0),
(2049, 'Malabrigo', NULL, 22, 0),
(2050, 'Marcelino Escalada', NULL, 22, 0),
(2051, 'Margarita', NULL, 22, 0),
(2052, 'Matilde', NULL, 22, 0),
(2053, 'Mauá', NULL, 22, 0),
(2054, 'Máximo Paz', NULL, 22, 0),
(2055, 'Melincué', NULL, 22, 0),
(2056, 'Miguel Torres', NULL, 22, 0),
(2057, 'Moisés Ville', NULL, 22, 0),
(2058, 'Monigotes', NULL, 22, 0),
(2059, 'Monje', NULL, 22, 0),
(2060, 'Monte Obscuridad', NULL, 22, 0),
(2061, 'Monte Vera', NULL, 22, 0),
(2062, 'Montefiore', NULL, 22, 0),
(2063, 'Montes de Oca', NULL, 22, 0),
(2064, 'Murphy', NULL, 22, 0),
(2065, 'Ñanducita', NULL, 22, 0),
(2066, 'Naré', NULL, 22, 0),
(2067, 'Nelson', NULL, 22, 0),
(2068, 'Nicanor E. Molinas', NULL, 22, 0),
(2069, 'Nuevo Torino', NULL, 22, 0),
(2070, 'Oliveros', NULL, 22, 0),
(2071, 'Palacios', NULL, 22, 0),
(2072, 'Pavón', NULL, 22, 0),
(2073, 'Pavón Arriba', NULL, 22, 0),
(2074, 'Pedro Gómez Cello', NULL, 22, 0),
(2075, 'Pérez', NULL, 22, 0),
(2076, 'Peyrano', NULL, 22, 0),
(2077, 'Piamonte', NULL, 22, 0),
(2078, 'Pilar', NULL, 22, 0),
(2079, 'Piñero', NULL, 22, 0),
(2080, 'Plaza Clucellas', NULL, 22, 0),
(2081, 'Portugalete', NULL, 22, 0),
(2082, 'Pozo Borrado', NULL, 22, 0),
(2083, 'Progreso', NULL, 22, 0),
(2084, 'Providencia', NULL, 22, 0),
(2085, 'Pte. Roca', NULL, 22, 0),
(2086, 'Pueblo Andino', NULL, 22, 0),
(2087, 'Pueblo Esther', NULL, 22, 0),
(2088, 'Pueblo Gral. San Martín', NULL, 22, 0),
(2089, 'Pueblo Irigoyen', NULL, 22, 0),
(2090, 'Pueblo Marini', NULL, 22, 0),
(2091, 'Pueblo Muñoz', NULL, 22, 0),
(2092, 'Pueblo Uranga', NULL, 22, 0),
(2093, 'Pujato', NULL, 22, 0),
(2094, 'Pujato N.', NULL, 22, 0),
(2095, 'Rafaela', NULL, 22, 0),
(2096, 'Ramayón', NULL, 22, 0),
(2097, 'Ramona', NULL, 22, 0),
(2098, 'Reconquista', NULL, 22, 0),
(2099, 'Recreo', NULL, 22, 0),
(2100, 'Ricardone', NULL, 22, 0),
(2101, 'Rivadavia', NULL, 22, 0),
(2102, 'Roldán', NULL, 22, 0),
(2103, 'Romang', NULL, 22, 0),
(2104, 'Rosario', NULL, 22, 0),
(2105, 'Rueda', NULL, 22, 0),
(2106, 'Rufino', NULL, 22, 0),
(2107, 'Sa Pereira', NULL, 22, 0),
(2108, 'Saguier', NULL, 22, 0),
(2109, 'Saladero M. Cabal', NULL, 22, 0),
(2110, 'Salto Grande', NULL, 22, 0),
(2111, 'San Agustín', NULL, 22, 0),
(2112, 'San Antonio de Obligado', NULL, 22, 0),
(2113, 'San Bernardo (N.J.)', NULL, 22, 0),
(2114, 'San Bernardo (S.J.)', NULL, 22, 0),
(2115, 'San Carlos Centro', NULL, 22, 0),
(2116, 'San Carlos N.', NULL, 22, 0),
(2117, 'San Carlos S.', NULL, 22, 0),
(2118, 'San Cristóbal', NULL, 22, 0),
(2119, 'San Eduardo', NULL, 22, 0),
(2120, 'San Eugenio', NULL, 22, 0),
(2121, 'San Fabián', NULL, 22, 0),
(2122, 'San Fco. de Santa Fé', NULL, 22, 0),
(2123, 'San Genaro', NULL, 22, 0),
(2124, 'San Genaro N.', NULL, 22, 0),
(2125, 'San Gregorio', NULL, 22, 0),
(2126, 'San Guillermo', NULL, 22, 0),
(2127, 'San Javier', NULL, 22, 0),
(2128, 'San Jerónimo del Sauce', NULL, 22, 0),
(2129, 'San Jerónimo N.', NULL, 22, 0),
(2130, 'San Jerónimo S.', NULL, 22, 0),
(2131, 'San Jorge', NULL, 22, 0),
(2132, 'San José de La Esquina', NULL, 22, 0),
(2133, 'San José del Rincón', NULL, 22, 0),
(2134, 'San Justo', NULL, 22, 0),
(2135, 'San Lorenzo', NULL, 22, 0),
(2136, 'San Mariano', NULL, 22, 0),
(2137, 'San Martín de Las Escobas', NULL, 22, 0),
(2138, 'San Martín N.', NULL, 22, 0),
(2139, 'San Vicente', NULL, 22, 0),
(2140, 'Sancti Spititu', NULL, 22, 0),
(2141, 'Sanford', NULL, 22, 0),
(2142, 'Santo Domingo', NULL, 22, 0),
(2143, 'Santo Tomé', NULL, 22, 0),
(2144, 'Santurce', NULL, 22, 0),
(2145, 'Sargento Cabral', NULL, 22, 0),
(2146, 'Sarmiento', NULL, 22, 0),
(2147, 'Sastre', NULL, 22, 0),
(2148, 'Sauce Viejo', NULL, 22, 0),
(2149, 'Serodino', NULL, 22, 0),
(2150, 'Silva', NULL, 22, 0),
(2151, 'Soldini', NULL, 22, 0),
(2152, 'Soledad', NULL, 22, 0),
(2153, 'Soutomayor', NULL, 22, 0),
(2154, 'Sta. Clara de Buena Vista', NULL, 22, 0),
(2155, 'Sta. Clara de Saguier', NULL, 22, 0),
(2156, 'Sta. Isabel', NULL, 22, 0),
(2157, 'Sta. Margarita', NULL, 22, 0),
(2158, 'Sta. Maria Centro', NULL, 22, 0),
(2159, 'Sta. María N.', NULL, 22, 0),
(2160, 'Sta. Rosa', NULL, 22, 0),
(2161, 'Sta. Teresa', NULL, 22, 0),
(2162, 'Suardi', NULL, 22, 0),
(2163, 'Sunchales', NULL, 22, 0),
(2164, 'Susana', NULL, 22, 0),
(2165, 'Tacuarendí', NULL, 22, 0),
(2166, 'Tacural', NULL, 22, 0),
(2167, 'Tartagal', NULL, 22, 0),
(2168, 'Teodelina', NULL, 22, 0),
(2169, 'Theobald', NULL, 22, 0),
(2170, 'Timbúes', NULL, 22, 0),
(2171, 'Toba', NULL, 22, 0),
(2172, 'Tortugas', NULL, 22, 0),
(2173, 'Tostado', NULL, 22, 0),
(2174, 'Totoras', NULL, 22, 0),
(2175, 'Traill', NULL, 22, 0),
(2176, 'Venado Tuerto', NULL, 22, 0),
(2177, 'Vera', NULL, 22, 0),
(2178, 'Vera y Pintado', NULL, 22, 0),
(2179, 'Videla', NULL, 22, 0),
(2180, 'Vila', NULL, 22, 0),
(2181, 'Villa Amelia', NULL, 22, 0),
(2182, 'Villa Ana', NULL, 22, 0),
(2183, 'Villa Cañas', NULL, 22, 0),
(2184, 'Villa Constitución', NULL, 22, 0),
(2185, 'Villa Eloísa', NULL, 22, 0),
(2186, 'Villa Gdor. Gálvez', NULL, 22, 0),
(2187, 'Villa Guillermina', NULL, 22, 0),
(2188, 'Villa Minetti', NULL, 22, 0),
(2189, 'Villa Mugueta', NULL, 22, 0),
(2190, 'Villa Ocampo', NULL, 22, 0),
(2191, 'Villa San José', NULL, 22, 0),
(2192, 'Villa Saralegui', NULL, 22, 0),
(2193, 'Villa Trinidad', NULL, 22, 0),
(2194, 'Villada', NULL, 22, 0),
(2195, 'Virginia', NULL, 22, 0),
(2196, 'Wheelwright', NULL, 22, 0),
(2197, 'Zavalla', NULL, 22, 0),
(2198, 'Zenón Pereira', NULL, 22, 0),
(2199, 'Añatuya', NULL, 23, 0),
(2200, 'Árraga', NULL, 23, 0),
(2201, 'Bandera', NULL, 23, 0),
(2202, 'Bandera Bajada', NULL, 23, 0),
(2203, 'Beltrán', NULL, 23, 0),
(2204, 'Brea Pozo', NULL, 23, 0),
(2205, 'Campo Gallo', NULL, 23, 0),
(2206, 'Capital', NULL, 23, 0),
(2207, 'Chilca Juliana', NULL, 23, 0),
(2208, 'Choya', NULL, 23, 0),
(2209, 'Clodomira', NULL, 23, 0),
(2210, 'Col. Alpina', NULL, 23, 0),
(2211, 'Col. Dora', NULL, 23, 0),
(2212, 'Col. El Simbolar Robles', NULL, 23, 0),
(2213, 'El Bobadal', NULL, 23, 0),
(2214, 'El Charco', NULL, 23, 0),
(2215, 'El Mojón', NULL, 23, 0),
(2216, 'Estación Atamisqui', NULL, 23, 0),
(2217, 'Estación Simbolar', NULL, 23, 0),
(2218, 'Fernández', NULL, 23, 0),
(2219, 'Fortín Inca', NULL, 23, 0),
(2220, 'Frías', NULL, 23, 0),
(2221, 'Garza', NULL, 23, 0),
(2222, 'Gramilla', NULL, 23, 0),
(2223, 'Guardia Escolta', NULL, 23, 0),
(2224, 'Herrera', NULL, 23, 0),
(2225, 'Icaño', NULL, 23, 0),
(2226, 'Ing. Forres', NULL, 23, 0),
(2227, 'La Banda', NULL, 23, 0),
(2228, 'La Cañada', NULL, 23, 0),
(2229, 'Laprida', NULL, 23, 0),
(2230, 'Lavalle', NULL, 23, 0),
(2231, 'Loreto', NULL, 23, 0),
(2232, 'Los Juríes', NULL, 23, 0),
(2233, 'Los Núñez', NULL, 23, 0),
(2234, 'Los Pirpintos', NULL, 23, 0),
(2235, 'Los Quiroga', NULL, 23, 0),
(2236, 'Los Telares', NULL, 23, 0),
(2237, 'Lugones', NULL, 23, 0),
(2238, 'Malbrán', NULL, 23, 0),
(2239, 'Matara', NULL, 23, 0),
(2240, 'Medellín', NULL, 23, 0),
(2241, 'Monte Quemado', NULL, 23, 0),
(2242, 'Nueva Esperanza', NULL, 23, 0),
(2243, 'Nueva Francia', NULL, 23, 0),
(2244, 'Palo Negro', NULL, 23, 0),
(2245, 'Pampa de Los Guanacos', NULL, 23, 0),
(2246, 'Pinto', NULL, 23, 0),
(2247, 'Pozo Hondo', NULL, 23, 0),
(2248, 'Quimilí', NULL, 23, 0),
(2249, 'Real Sayana', NULL, 23, 0),
(2250, 'Sachayoj', NULL, 23, 0),
(2251, 'San Pedro de Guasayán', NULL, 23, 0),
(2252, 'Selva', NULL, 23, 0),
(2253, 'Sol de Julio', NULL, 23, 0),
(2254, 'Sumampa', NULL, 23, 0),
(2255, 'Suncho Corral', NULL, 23, 0),
(2256, 'Taboada', NULL, 23, 0),
(2257, 'Tapso', NULL, 23, 0),
(2258, 'Termas de Rio Hondo', NULL, 23, 0),
(2259, 'Tintina', NULL, 23, 0),
(2260, 'Tomas Young', NULL, 23, 0),
(2261, 'Vilelas', NULL, 23, 0),
(2262, 'Villa Atamisqui', NULL, 23, 0),
(2263, 'Villa La Punta', NULL, 23, 0),
(2264, 'Villa Ojo de Agua', NULL, 23, 0),
(2265, 'Villa Río Hondo', NULL, 23, 0),
(2266, 'Villa Salavina', NULL, 23, 0),
(2267, 'Villa Unión', NULL, 23, 0),
(2268, 'Vilmer', NULL, 23, 0),
(2269, 'Weisburd', NULL, 23, 0),
(2270, 'Río Grande', NULL, 24, 0),
(2271, 'Tolhuin', NULL, 24, 0),
(2272, 'Ushuaia', NULL, 24, 0),
(2273, 'Acheral', NULL, 25, 0),
(2274, 'Agua Dulce', NULL, 25, 0),
(2275, 'Aguilares', NULL, 25, 0),
(2276, 'Alderetes', NULL, 25, 0),
(2277, 'Alpachiri', NULL, 25, 0),
(2278, 'Alto Verde', NULL, 25, 0),
(2279, 'Amaicha del Valle', NULL, 25, 0),
(2280, 'Amberes', NULL, 25, 0),
(2281, 'Ancajuli', NULL, 25, 0),
(2282, 'Arcadia', NULL, 25, 0),
(2283, 'Atahona', NULL, 25, 0),
(2284, 'Banda del Río Sali', NULL, 25, 0),
(2285, 'Bella Vista', NULL, 25, 0),
(2286, 'Buena Vista', NULL, 25, 0),
(2287, 'Burruyacú', NULL, 25, 0),
(2288, 'Capitán Cáceres', NULL, 25, 0),
(2289, 'Cevil Redondo', NULL, 25, 0),
(2290, 'Choromoro', NULL, 25, 0),
(2291, 'Ciudacita', NULL, 25, 0),
(2292, 'Colalao del Valle', NULL, 25, 0),
(2293, 'Colombres', NULL, 25, 0),
(2294, 'Concepción', NULL, 25, 0),
(2295, 'Delfín Gallo', NULL, 25, 0),
(2296, 'El Bracho', NULL, 25, 0),
(2297, 'El Cadillal', NULL, 25, 0),
(2298, 'El Cercado', NULL, 25, 0),
(2299, 'El Chañar', NULL, 25, 0),
(2300, 'El Manantial', NULL, 25, 0),
(2301, 'El Mojón', NULL, 25, 0),
(2302, 'El Mollar', NULL, 25, 0),
(2303, 'El Naranjito', NULL, 25, 0),
(2304, 'El Naranjo', NULL, 25, 0),
(2305, 'El Polear', NULL, 25, 0),
(2306, 'El Puestito', NULL, 25, 0),
(2307, 'El Sacrificio', NULL, 25, 0),
(2308, 'El Timbó', NULL, 25, 0),
(2309, 'Escaba', NULL, 25, 0),
(2310, 'Esquina', NULL, 25, 0),
(2311, 'Estación Aráoz', NULL, 25, 0),
(2312, 'Famaillá', NULL, 25, 0),
(2313, 'Gastone', NULL, 25, 0),
(2314, 'Gdor. Garmendia', NULL, 25, 0),
(2315, 'Gdor. Piedrabuena', NULL, 25, 0),
(2316, 'Graneros', NULL, 25, 0),
(2317, 'Huasa Pampa', NULL, 25, 0),
(2318, 'J. B. Alberdi', NULL, 25, 0),
(2319, 'La Cocha', NULL, 25, 0),
(2320, 'La Esperanza', NULL, 25, 0),
(2321, 'La Florida', NULL, 25, 0),
(2322, 'La Ramada', NULL, 25, 0),
(2323, 'La Trinidad', NULL, 25, 0),
(2324, 'Lamadrid', NULL, 25, 0),
(2325, 'Las Cejas', NULL, 25, 0),
(2326, 'Las Talas', NULL, 25, 0),
(2327, 'Las Talitas', NULL, 25, 0),
(2328, 'Los Bulacio', NULL, 25, 0),
(2329, 'Los Gómez', NULL, 25, 0),
(2330, 'Los Nogales', NULL, 25, 0),
(2331, 'Los Pereyra', NULL, 25, 0),
(2332, 'Los Pérez', NULL, 25, 0),
(2333, 'Los Puestos', NULL, 25, 0),
(2334, 'Los Ralos', NULL, 25, 0),
(2335, 'Los Sarmientos', NULL, 25, 0),
(2336, 'Los Sosa', NULL, 25, 0),
(2337, 'Lules', NULL, 25, 0),
(2338, 'M. García Fernández', NULL, 25, 0),
(2339, 'Manuela Pedraza', NULL, 25, 0),
(2340, 'Medinas', NULL, 25, 0),
(2341, 'Monte Bello', NULL, 25, 0),
(2342, 'Monteagudo', NULL, 25, 0),
(2343, 'Monteros', NULL, 25, 0),
(2344, 'Padre Monti', NULL, 25, 0),
(2345, 'Pampa Mayo', NULL, 25, 0),
(2346, 'Quilmes', NULL, 25, 0),
(2347, 'Raco', NULL, 25, 0),
(2348, 'Ranchillos', NULL, 25, 0),
(2349, 'Río Chico', NULL, 25, 0),
(2350, 'Río Colorado', NULL, 25, 0),
(2351, 'Río Seco', NULL, 25, 0),
(2352, 'Rumi Punco', NULL, 25, 0),
(2353, 'San Andrés', NULL, 25, 0),
(2354, 'San Felipe', NULL, 25, 0),
(2355, 'San Ignacio', NULL, 25, 0),
(2356, 'San Javier', NULL, 25, 0),
(2357, 'San José', NULL, 25, 0),
(2358, 'San Miguel de 25', NULL, 25, 0),
(2359, 'San Pedro', NULL, 25, 0),
(2360, 'San Pedro de Colalao', NULL, 25, 0),
(2361, 'Santa Rosa de Leales', NULL, 25, 0),
(2362, 'Sgto. Moya', NULL, 25, 0),
(2363, 'Siete de Abril', NULL, 25, 0),
(2364, 'Simoca', NULL, 25, 0),
(2365, 'Soldado Maldonado', NULL, 25, 0),
(2366, 'Sta. Ana', NULL, 25, 0),
(2367, 'Sta. Cruz', NULL, 25, 0),
(2368, 'Sta. Lucía', NULL, 25, 0),
(2369, 'Taco Ralo', NULL, 25, 0),
(2370, 'Tafí del Valle', NULL, 25, 0),
(2371, 'Tafí Viejo', NULL, 25, 0),
(2372, 'Tapia', NULL, 25, 0),
(2373, 'Teniente Berdina', NULL, 25, 0),
(2374, 'Trancas', NULL, 25, 0),
(2375, 'Villa Belgrano', NULL, 25, 0),
(2376, 'Villa Benjamín Araoz', NULL, 25, 0),
(2377, 'Villa Chiligasta', NULL, 25, 0),
(2378, 'Villa de Leales', NULL, 25, 0),
(2379, 'Villa Quinteros', NULL, 25, 0),
(2380, 'Yánima', NULL, 25, 0),
(2381, 'Yerba Buena', NULL, 25, 0),
(2382, 'Yerba Buena (S)', NULL, 25, 0);

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
(1, 'Australia'),
(2, 'Austria'),
(3, 'Azerbaiyán'),
(4, 'Anguilla'),
(5, 'Argentina'),
(6, 'Armenia'),
(7, 'Bielorrusia'),
(8, 'Belice'),
(9, 'Bélgica'),
(10, 'Bermudas'),
(11, 'Bulgaria'),
(12, 'Brasil'),
(13, 'Reino Unido'),
(14, 'Hungría'),
(15, 'Vietnam'),
(16, 'Haiti'),
(17, 'Guadalupe'),
(18, 'Alemania'),
(19, 'Países Bajos, Holanda'),
(20, 'Grecia'),
(21, 'Georgia'),
(22, 'Dinamarca'),
(23, 'Egipto'),
(24, 'Israel'),
(25, 'India'),
(26, 'Irán'),
(27, 'Irlanda'),
(28, 'España'),
(29, 'Italia'),
(30, 'Kazajstán'),
(31, 'Camerún'),
(32, 'Canadá'),
(33, 'Chipre'),
(34, 'Kirguistán'),
(35, 'China'),
(36, 'Costa Rica'),
(37, 'Kuwait'),
(38, 'Letonia'),
(39, 'Libia'),
(40, 'Lituania'),
(41, 'Luxemburgo'),
(42, 'México'),
(43, 'Moldavia'),
(44, 'Mónaco'),
(45, 'Nueva Zelanda'),
(46, 'Noruega'),
(47, 'Polonia'),
(48, 'Portugal'),
(49, 'Reunión'),
(50, 'Rusia'),
(51, 'El Salvador'),
(52, 'Eslovaquia'),
(53, 'Eslovenia'),
(54, 'Surinam'),
(55, 'Estados Unidos'),
(56, 'Tadjikistan'),
(57, 'Turkmenistan'),
(58, 'Islas Turcas y Caicos'),
(59, 'Turquía'),
(60, 'Uganda'),
(61, 'Uzbekistán'),
(62, 'Ucrania'),
(63, 'Finlandia'),
(64, 'Francia'),
(65, 'República Checa'),
(66, 'Suiza'),
(67, 'Suecia'),
(68, 'Estonia'),
(69, 'Corea del Sur'),
(70, 'Japón'),
(71, 'Croacia'),
(72, 'Rumanía'),
(73, 'Hong Kong'),
(74, 'Indonesia'),
(75, 'Jordania'),
(76, 'Malasia'),
(77, 'Singapur'),
(78, 'Taiwan'),
(79, 'Bosnia y Herzegovina'),
(80, 'Bahamas'),
(81, 'Chile'),
(82, 'Colombia'),
(83, 'Islandia'),
(84, 'Corea del Norte'),
(85, 'Macedonia'),
(86, 'Malta'),
(87, 'Pakistán'),
(88, 'Papúa-Nueva Guinea'),
(89, 'Perú'),
(90, 'Filipinas'),
(91, 'Arabia Saudita'),
(92, 'Tailandia'),
(93, 'Emiratos árabes Unidos'),
(94, 'Groenlandia'),
(95, 'Venezuela'),
(96, 'Zimbabwe'),
(97, 'Kenia'),
(98, 'Algeria'),
(99, 'Líbano'),
(100, 'Botsuana'),
(101, 'Tanzania'),
(102, 'Namibia'),
(103, 'Ecuador'),
(104, 'Marruecos'),
(105, 'Ghana'),
(106, 'Siria'),
(107, 'Nepal'),
(108, 'Mauritania'),
(109, 'Seychelles'),
(110, 'Paraguay'),
(111, 'Uruguay'),
(112, 'Congo (Brazzaville)'),
(113, 'Cuba'),
(114, 'Albania'),
(115, 'Nigeria'),
(116, 'Zambia'),
(117, 'Mozambique'),
(119, 'Angola'),
(120, 'Sri Lanka'),
(121, 'Etiopía'),
(122, 'Túnez'),
(123, 'Bolivia'),
(124, 'Panamá'),
(125, 'Malawi'),
(126, 'Liechtenstein'),
(127, 'Bahrein'),
(128, 'Barbados'),
(130, 'Chad'),
(131, 'Man, Isla de'),
(132, 'Jamaica'),
(133, 'Malí'),
(134, 'Madagascar'),
(135, 'Senegal'),
(136, 'Togo'),
(137, 'Honduras'),
(138, 'República Dominicana'),
(139, 'Mongolia'),
(140, 'Irak'),
(141, 'Sudáfrica'),
(142, 'Aruba'),
(143, 'Gibraltar'),
(144, 'Afganistán'),
(145, 'Andorra'),
(147, 'Antigua y Barbuda'),
(149, 'Bangladesh'),
(151, 'Benín'),
(152, 'Bután'),
(154, 'Islas Virgenes Británicas'),
(155, 'Brunéi'),
(156, 'Burkina Faso'),
(157, 'Burundi'),
(158, 'Camboya'),
(159, 'Cabo Verde'),
(164, 'Comores'),
(165, 'Congo (Kinshasa)'),
(166, 'Cook, Islas'),
(168, 'Costa de Marfil'),
(169, 'Djibouti, Yibuti'),
(171, 'Timor Oriental'),
(172, 'Guinea Ecuatorial'),
(173, 'Eritrea'),
(175, 'Feroe, Islas'),
(176, 'Fiyi'),
(178, 'Polinesia Francesa'),
(180, 'Gabón'),
(181, 'Gambia'),
(184, 'Granada'),
(185, 'Guatemala'),
(186, 'Guernsey'),
(187, 'Guinea'),
(188, 'Guinea-Bissau'),
(189, 'Guyana'),
(193, 'Jersey'),
(195, 'Kiribati'),
(196, 'Laos'),
(197, 'Lesotho'),
(198, 'Liberia'),
(200, 'Maldivas'),
(201, 'Martinica'),
(202, 'Mauricio'),
(205, 'Myanmar'),
(206, 'Nauru'),
(207, 'Antillas Holandesas'),
(208, 'Nueva Caledonia'),
(209, 'Nicaragua'),
(210, 'Níger'),
(212, 'Norfolk Island'),
(213, 'Omán'),
(215, 'Isla Pitcairn'),
(216, 'Qatar'),
(217, 'Ruanda'),
(218, 'Santa Elena'),
(219, 'San Cristobal y Nevis'),
(220, 'Santa Lucía'),
(221, 'San Pedro y Miquelón'),
(222, 'San Vincente y Granadinas'),
(223, 'Samoa'),
(224, 'San Marino'),
(225, 'San Tomé y Príncipe'),
(226, 'Serbia y Montenegro'),
(227, 'Sierra Leona'),
(228, 'Islas Salomón'),
(229, 'Somalia'),
(232, 'Sudán'),
(234, 'Swazilandia'),
(235, 'Tokelau'),
(236, 'Tonga'),
(237, 'Trinidad y Tobago'),
(239, 'Tuvalu'),
(240, 'Vanuatu'),
(241, 'Wallis y Futuna'),
(242, 'Sáhara Occidental'),
(243, 'Yemen'),
(246, 'Puerto Rico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nommbre` varchar(50) NOT NULL,
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

INSERT INTO `persona` (`id`, `nommbre`, `apellido`, `fecha_nacimiento`, `dni_pasaporte`, `genero`, `email`, `telefono`, `partido`, `calle`, `numero`, `piso`, `departamento`, `pasillo`, `pais_id`, `localidad_id`) VALUES
(1, 'Julian', 'apelido', '2019-02-26', '438372', 'No binario', 'yahoo@google.com', '2219847368', 'que es un partido', '23', '23', 23, '23', 'no teno', 1, 1),
(2, 'Pepe', 'Osvaldo', '2028-04-01', '42555999', 'Mujer', 'hola@hotmail.org', '911', '1900', '23 y 34', '225', 5, '22', 'blanco', 1, 3),
(3, 'Señor', 'Señora', '2020-07-06', 'indocumentado', 'Si binario', 'gov.ar.org.pais.edu@org.com', '2323232323', '232', 'los alamos', '21', 99, '35', '1', 1, 2),
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
(1, 'Buenos Aires', 1),
(2, 'Ciudad Autónoma de Buenos Aires', 1),
(3, 'Catamarca', 1),
(4, 'Chaco', 1),
(6, 'Chubut', 1),
(7, 'Córdoba', 1),
(8, 'Corrientes', 1),
(9, 'Entre Ríos', 1),
(10, 'Formosa', 1),
(11, 'Jujuy', 1),
(12, 'La Pampa', 1),
(13, 'La Rioja', 1),
(14, 'Mendoza', 1),
(15, 'Misiones', 1),
(16, 'Neuquén', 1),
(17, 'Río Negro', 1),
(18, 'Salta', 1),
(19, 'San Juan', 1),
(20, 'San Luis', 1),
(21, 'Santa Cruz', 1),
(22, 'Santa Fe', 1),
(23, 'Santiago del Estero', 1),
(24, 'Tucumán', 1),
(25, 'Tierra del Fuego, Antártida e Islas del Atlántico ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id`, `numero`, `descripcion`) VALUES
(1, '1', 'Berisso - La Plata - Ensenada - Brandsen - Punta Indio - Magdalena'),
(2, '2', 'Lanús - Lomas de Zamora - Avellaneda'),
(3, '3', 'La Matanza'),
(4, '4', 'Berazategui - Quilmes'),
(5, '5', 'Alte. Brown - Esteban Echeverría - Pte. Perón - San Vicente'),
(6, '6', 'San Fernando - Tigre - Vicente López'),
(7, '7', 'Gral. San Martín'),
(8, '8', 'Ituzaingó - Merlo - Morón'),
(9, '9', 'Malvinas Argentinas - Moreno - San Miguel'),
(10, '10', 'Gral. Las Heras - Gral. Rodriguez - Luján - Navarro - Mercedes - Marcos Paz'),
(11, '11', 'Campana - Escobar - Pilar - Zárate'),
(12, '12', 'Arrecifes - Baradero - Ramallo - C.Sarmiento - San Nicolás - San Pedro'),
(13, '13', 'Carmen de Areco - Colón - Pergamino - Rojas - Salto - San Antonio de Areco'),
(14, '14', 'Chacabuco - F.Ameghino - Gral. Viamonte - Gral. Pinto - Gral. Arenales - Junín - Lincoln'),
(15, '15', '9 de Julio - Baradero - C. Casares - Chivilcoy - Pehuajó'),
(16, '16', 'C.Tejedor - Gral. Villegas - C.Pellegrini - Rivadavia - Salliqueló - Trenque Lauquen - Tres Lomas'),
(17, '17', 'Chascomús - Lezama - Gral. Belgrano - Gral. Paz - Monte - Pila - Rauch'),
(18, '18', 'Ayacucho - Castelli - Dolores - Gral. Madariaga - La Costa - Pinamar - Villa Gesell'),
(19, '19', 'Gral. Alvarado - Gral. Pueyrredón - Mar Chiquita'),
(20, '20', 'alcarce - Lobería - Necochea - San Cayetano - Tandil'),
(21, '21', 'Cnel. Dorrego - C.Chaves - Laprida - Tres Arroyos'),
(22, '22', 'Bahía Blanca - Carmen de Patagones - Cnel. Rosales'),
(23, '23', 'Cnel. Suárez - Gral. Lamadrid - Guaminí - Puan - Tornquist'),
(24, '24', 'Gral. Alvear - Lobos - Las Flores - Roque Pérez - Saladillo - 25 de Mayo'),
(25, '25', 'Azul - Bolívar - Olavarría - Tapalqué');

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
  ADD UNIQUE KEY `UNIQ_501CD9D2C5C70C5B` (`asignatura_id`),
  ADD KEY `IDX_501CD9D2ACB70627` (`correlativa_id`);

--
-- Indices de la tabla `cursada`
--
ALTER TABLE `cursada`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_F474F7D3C5C70C5B` (`asignatura_id`),
  ADD KEY `IDX_F474F7D3FC28E5EE` (`alumno_id`),
  ADD KEY `IDX_F474F7D34B352BE1` (`comision_id`);

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
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `comision`
--
ALTER TABLE `comision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `correlativa`
--
ALTER TABLE `correlativa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cursada`
--
ALTER TABLE `cursada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cursada_docente`
--
ALTER TABLE `cursada_docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2383;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
  ADD CONSTRAINT `FK_501CD9D2ACB70627` FOREIGN KEY (`correlativa_id`) REFERENCES `asignatura` (`id`),
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
