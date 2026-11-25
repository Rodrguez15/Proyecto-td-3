-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2026 a las 02:32:42
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
-- Base de datos: `mma_systems`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_sistema`
--

CREATE TABLE `actividad_sistema` (
  `ID_Actividad` int(11) NOT NULL,
  `ID_Usuario` int(11) DEFAULT NULL,
  `Accion` varchar(150) NOT NULL,
  `Detalle` varchar(255) DEFAULT NULL,
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `actividad_sistema`
--

INSERT INTO `actividad_sistema` (`ID_Actividad`, `ID_Usuario`, `Accion`, `Detalle`, `Fecha`) VALUES
(1, 1, 'Pago registrado', 'Pago #1 / VIL-2026-10-04-000001 — clases de Mauy Thai — $1.500,00 — Pagado', '2026-10-20 23:16:10'),
(2, 1, 'Pago registrado', 'Pago #2 / VIL-2026-09-18-000002 — clases de BJJ — $1.500,00 — Pagado', '2026-10-21 00:25:49'),
(3, 1, 'Pago actualizado', 'Pago #2 — clases de BJJ — $1.500,00', '2026-10-21 00:26:14'),
(4, 1, 'Pago actualizado', 'Pago #8 — Inscripción Workshop de Kickboxing: defensa y contraataque — $500,00', '2026-11-05 19:11:33'),
(5, 1, 'Pago actualizado', 'Pago #7 — Inscripción Kickboxing — $1.500,00', '2026-11-05 19:25:58'),
(6, 1, 'Pago actualizado', 'Pago #7 — Inscripción Kickboxing — $1.500,00', '2026-11-05 19:27:08'),
(7, 1, 'Cuotas generadas', 'Generación masiva: 14 cuotas de Noviembre 2026 por $21.000,00 (0 ya emitidas).', '2026-11-05 21:01:20'),
(8, 1, 'Pago confirmado', 'Pago #22 confirmado como Pagado (Efectivo) por $1.500,00', '2026-11-05 21:49:00'),
(9, 1, 'Pago confirmado', 'Pago #22 confirmado como Pagado (Efectivo) por $1.500,00', '2026-11-05 21:49:06'),
(10, 1, 'Pago confirmado', 'Pago #21 confirmado como Pagado (Efectivo) por $1.500,00', '2026-11-05 21:49:29'),
(11, 1, 'Pago confirmado', 'Pago #19 confirmado como Pagado (Transferencia bancaria) por $1.500,00', '2026-11-05 21:49:59'),
(12, 1, 'Pago confirmado', 'Pago #17 confirmado como Pagado (Mercado Pago) por $1.500,00', '2026-11-05 21:50:03'),
(13, 1, 'Pago confirmado', 'Pago #15 confirmado como Pagado (Efectivo) por $1.500,00', '2026-11-05 21:50:08'),
(14, 1, 'Pago confirmado', 'Pago #2 confirmado como Pagado (Efectivo) por $1.500,00', '2026-11-05 21:51:30'),
(15, 1, 'Pago confirmado', 'Pago #11 confirmado como Pagado (Efectivo) por $1.500,00', '2026-11-05 21:53:25'),
(24, 1, 'Pago confirmado', 'Pago #20 confirmado como Pagado (Efectivo) por $1.500,00', '2026-11-06 04:57:42'),
(25, 1, 'Avisos automáticos', 'Generación de 26 notificaciones automáticas (0 vencidas, 0 próximas a vencer).', '2026-11-09 22:13:38'),
(26, 1, 'Avisos automáticos', 'Generación de 0 notificaciones automáticas (0 vencidas, 0 próximas a vencer).', '2026-11-09 22:15:05'),
(27, 1, 'Check-in QR', 'Ingreso de Marcos Cuadros (QR: VIL-AC0204E5F9270E82CC050B58). Deuda: $0.00', '2026-11-15 22:46:13'),
(28, 1, 'Check-in QR', 'Ingreso de Julieta Fernández (QR: VIL-0B915AE5FFCD5FEC3C449368). Deuda: $1,500.00', '2026-11-15 22:46:42'),
(29, 1, 'Check-in QR', 'Ingreso de Marcelo Perez (QR: 123-F45-CD2-145). Deuda: $0.00', '2026-11-17 00:21:29'),
(30, 1, 'ALUMNO_BAJA_TEMPORAL', 'ALUMNO_ID=18;USUARIO_ID=18;NOMBRE=Mateo Medina', '2026-11-17 00:55:55'),
(31, 1, 'ALUMNO_BAJA_DEFINITIVA', 'ALUMNO_ID=18;USUARIO_ID=18;NOMBRE=Mateo Medina', '2026-11-17 00:56:59'),
(32, 1, 'Avisos automáticos', 'Generación de 52 notificaciones automáticas (0 vencidas, 0 próximas a vencer).', '2026-11-17 01:54:31'),
(33, 1, 'Avisos automáticos', 'Generación de 0 notificaciones automáticas (0 vencidas, 0 próximas a vencer).', '2026-11-17 01:55:14'),
(34, 1, 'ALUMNO_BAJA_TEMPORAL', 'ALUMNO_ID=17;USUARIO_ID=17;NOMBRE=Marcos Cuadros', '2026-11-17 01:56:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `ID_Alumno` int(11) NOT NULL,
  `ID_Usuario` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Cedula` varchar(30) DEFAULT NULL,
  `Fecha_nacimiento` date DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Telefono` varchar(40) DEFAULT NULL,
  `Cobertura_medica` varchar(150) DEFAULT NULL,
  `Peso` decimal(6,2) DEFAULT NULL,
  `Categoria` varchar(80) DEFAULT NULL,
  `Codigo_qr` varchar(100) DEFAULT NULL,
  `Creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`ID_Alumno`, `ID_Usuario`, `Nombre`, `Apellido`, `Cedula`, `Fecha_nacimiento`, `Direccion`, `Telefono`, `Cobertura_medica`, `Peso`, `Categoria`, `Codigo_qr`, `Creado_en`) VALUES
(1, 2, 'Ana', 'Silva', 'DEMO-ALU-001', '2002-04-12', 'vilbao 124', '099 100 001', 'Emergencia Médica', 58.00, 'Pluma', 'VIL-B5D116E2A7FC167513808D05', '2026-10-20 22:56:32'),
(2, 3, 'Bruno', 'Pereira', 'DEMO-ALU-002', '1998-09-21', 'La Paz, Canelones', '099 100 002', 'ASSE', 74.00, 'Mediano', 'VIL-0B023649AFAD89CAE60B125E', '2026-10-20 22:56:32'),
(3, 4, 'Camila', 'Rodríguez', 'DEMO-ALU-003', '2004-01-30', 'Progreso, Canelones', '099 100 003', 'Sin dato', 61.00, 'Ligero', 'VIL-CA36F14C9E8EBF0C2D8C6E8C', '2026-10-20 22:56:32'),
(4, 5, 'Diego', 'Méndez', 'DEMO-ALU-004', '1995-07-08', 'Montevideo', '099 100 004', 'Emergencia Médica', 82.00, 'Semipesado', 'VIL-908DE618FBB71C4B08E2DA5D', '2026-10-20 22:56:32'),
(5, 6, 'Emilia', 'Torres', 'DEMO-ALU-005', '2001-11-16', 'Las Piedras, Canelones', '099 100 005', 'ASSE', 55.00, 'Mosca', 'VIL-EFCB896A2900335009FAE739', '2026-10-20 22:56:32'),
(6, 7, 'Facundo', 'Costa', 'DEMO-ALU-006', '1999-03-03', 'Canelones', '099 100 006', 'Sin dato', 77.00, 'Mediano', 'VIL-2E6ABC9E1ECAF9EF551B5E9B', '2026-10-20 22:56:32'),
(7, 8, 'Guadalupe', 'Sosa', 'DEMO-ALU-007', '2005-06-25', 'La Paz, Canelones', '099 100 007', 'Emergencia Médica', 52.00, 'Pluma', 'VIL-FE38594590FE6495108DD34D', '2026-10-20 22:56:32'),
(8, 9, 'Ignacio', 'Martínez', 'DEMO-ALU-008', '1997-12-10', 'Montevideo', '099 100 008', 'ASSE', 88.00, 'Pesado', 'VIL-560F5B9F6F98EDCE060F1A3E', '2026-10-20 22:56:32'),
(9, 10, 'Julieta', 'Fernández', 'DEMO-ALU-009', '2003-02-14', 'brasil 456', '099 100 009', 'Sin dato', 60.00, 'Ligero', 'VIL-0B915AE5FFCD5FEC3C449368', '2026-10-20 22:56:32'),
(10, 11, 'Lautaro', 'Gómez', 'DEMO-ALU-010', '2000-08-19', 'Progreso, Canelones', '099 100 010', 'Emergencia Médica ', 71.00, 'Welter', 'VIL-EA58CC69A4D7C90E914A3753', '2026-10-20 22:56:32'),
(16, 14, 'Marcelo', 'Perez', '	DEMO-ALU-016', '2010-10-23', 'Agraciada 1203', '099 100 016', 'Emergencia Médica', 45.00, 'pluma', '123-F45-CD2-145', '2026-10-21 22:29:51'),
(17, 17, 'Marcos', 'Cuadros', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'VIL-AC0204E5F9270E82CC050B58', '2026-11-09 21:10:01'),
(18, 18, 'Mateo', 'Medina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'VIL-F32860FC0C40236EBE2E68B0', '2026-11-09 21:24:56'),
(19, 19, 'Sebastian', 'Bautista', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'VIL-9963194A07146BC3A2356712', '2026-11-17 01:16:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `ID_Asistencia` int(11) NOT NULL,
  `ID_Alumno` int(11) NOT NULL,
  `ID_Grupo` int(11) NOT NULL,
  `ID_Horario` int(11) DEFAULT NULL,
  `ID_Profesor` int(11) DEFAULT NULL,
  `Fecha` date NOT NULL,
  `Estado` enum('Presente','Ausente','Justificado') NOT NULL DEFAULT 'Presente',
  `Observacion` varchar(255) DEFAULT NULL,
  `Creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`ID_Asistencia`, `ID_Alumno`, `ID_Grupo`, `ID_Horario`, `ID_Profesor`, `Fecha`, `Estado`, `Observacion`, `Creado_en`) VALUES
(1, 9, 4, 2, 1, '2026-10-20', 'Presente', NULL, '2026-10-20 23:52:03'),
(2, 8, 4, 2, 1, '2026-10-20', 'Presente', NULL, '2026-10-20 23:52:03'),
(3, 10, 2, 4, 1, '2026-10-20', 'Presente', NULL, '2026-10-20 23:52:09'),
(4, 3, 2, 4, 1, '2026-10-20', 'Presente', NULL, '2026-10-20 23:52:09'),
(5, 5, 2, 4, 1, '2026-10-20', 'Presente', NULL, '2026-10-20 23:52:09'),
(6, 19, 3, 8, 1, '2026-11-16', 'Presente', NULL, '2026-11-17 01:20:15'),
(7, 6, 3, 8, 1, '2026-11-16', 'Presente', NULL, '2026-11-17 01:20:15'),
(8, 7, 3, 8, 1, '2026-11-16', 'Presente', NULL, '2026-11-17 01:20:15'),
(9, 9, 4, 2, 2, '2026-11-17', 'Presente', NULL, '2026-11-17 03:18:17'),
(10, 8, 4, 2, 2, '2026-11-17', 'Presente', NULL, '2026-11-17 03:18:17'),
(11, 10, 2, 4, 1, '2026-11-17', 'Presente', NULL, '2026-11-17 03:35:10'),
(12, 16, 2, 4, 1, '2026-11-17', 'Presente', NULL, '2026-11-17 03:35:10'),
(13, 3, 2, 4, 1, '2026-11-17', 'Presente', NULL, '2026-11-17 03:35:10'),
(14, 1, 2, 4, 1, '2026-11-17', 'Presente', NULL, '2026-11-17 03:35:10'),
(15, 5, 2, 4, 1, '2026-11-17', 'Presente', NULL, '2026-11-17 03:35:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificado`
--

CREATE TABLE `certificado` (
  `ID_Certificado` int(11) NOT NULL,
  `ID_Alumno` int(11) NOT NULL,
  `ID_Seminario` int(11) DEFAULT NULL,
  `Titulo` varchar(200) NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `Codigo` varchar(100) NOT NULL,
  `Fecha_emision` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disciplina`
--

CREATE TABLE `disciplina` (
  `ID_Disciplina` int(11) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Descripcion` text DEFAULT NULL,
  `Costo` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `disciplina`
--

INSERT INTO `disciplina` (`ID_Disciplina`, `Nombre`, `Descripcion`, `Costo`) VALUES
(1, 'MMA', 'Artes marciales mixtas: combinación de golpeo, lucha y trabajo en el suelo.', 1500.00),
(2, 'Kickboxing', 'Disciplina de combate de pie que combina puños y patadas.', 1500.00),
(3, 'Muay Thai', 'Arte marcial tailandés con puños, patadas, rodillas y codos.', 1500.00),
(4, 'Jiu-jitsu brasileño (BJJ)', 'Lucha de agarres, controles, posiciones y técnicas de sumisión.', 1500.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria_evento`
--

CREATE TABLE `galeria_evento` (
  `ID_Galeria` int(11) NOT NULL,
  `ID_Seminario` int(11) DEFAULT NULL,
  `Titulo` varchar(150) NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `galeria_evento`
--

INSERT INTO `galeria_evento` (`ID_Galeria`, `ID_Seminario`, `Titulo`, `Imagen`, `Descripcion`, `Fecha`) VALUES
(7, 1, 'MMA', '7a3a8a4d23f3ebd0c8e53ef7.jpg', 'clases de MMA para aprender sobre esta arte marcial', '2026-10-29 20:31:30'),
(8, 4, 'BJJ', 'a085f645d86205fbdf3149fa.jpg', 'clases de BJJ para aprender sobre esta arte marcial', '2026-10-29 20:31:56'),
(9, 2, 'KIckBoxing', 'bf1c454a8f56563c7b3bb50e.jpg', 'clases de Kickboxing para aprender sobre esta arte marcial', '2026-10-29 20:33:09'),
(10, 3, 'Mauy Thai', '499e182176c814193cedc819.jpg', 'clases de Mauy Thai para aprender sobre esta arte marcial', '2026-10-29 20:34:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `ID_Grupo` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `ID_Disciplina` int(11) DEFAULT NULL,
  `Cupo_maximo` int(11) NOT NULL DEFAULT 20,
  `Nivel` varchar(30) NOT NULL DEFAULT 'Principiante',
  `Descripcion` text DEFAULT NULL,
  `Creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`ID_Grupo`, `Nombre`, `ID_Disciplina`, `Cupo_maximo`, `Nivel`, `Descripcion`, `Creado_en`) VALUES
(1, 'MMA - Principiantes', 1, 26, 'Principiante', 'Grupo de iniciación en artes marciales mixtas.', '2026-10-20 22:56:32'),
(2, 'Kickboxing - Mixto', 2, 26, 'Todos', 'Entrenamiento técnico y físico de kickboxing.', '2026-10-20 22:56:32'),
(3, 'Muay Thai - Principiantes', 3, 26, 'Principiante', 'Fundamentos técnicos de Muay Thai.', '2026-10-20 22:56:32'),
(4, 'BJJ - Fundamentos', 4, 26, 'Principiante', 'Posiciones, escapes y fundamentos de BJJ.', '2026-10-20 22:56:32'),
(9, 'MMA junior', 1, 1, 'Principiante', 'dnveruvneruvneruvn', '2026-11-06 04:51:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `ID_Horario` int(11) NOT NULL,
  `ID_Grupo` int(11) DEFAULT NULL,
  `Dia` varchar(20) NOT NULL,
  `Hora_inicio` time NOT NULL,
  `Hora_fin` time NOT NULL,
  `Creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`ID_Horario`, `ID_Grupo`, `Dia`, `Hora_inicio`, `Hora_fin`, `Creado_en`) VALUES
(1, 4, 'Jueves', '18:00:00', '19:30:00', '2026-10-20 22:56:32'),
(2, 4, 'Martes', '18:00:00', '19:30:00', '2026-10-20 22:56:32'),
(3, 2, 'Jueves', '19:00:00', '20:30:00', '2026-10-20 22:56:32'),
(4, 2, 'Martes', '19:00:00', '20:30:00', '2026-10-20 22:56:32'),
(5, 1, 'Miércoles', '18:00:00', '19:30:00', '2026-10-20 22:56:32'),
(6, 1, 'Lunes', '18:00:00', '19:30:00', '2026-10-20 22:56:32'),
(7, 3, 'Viernes', '18:00:00', '19:30:00', '2026-10-20 22:56:32'),
(8, 3, 'Lunes', '19:30:00', '21:00:00', '2026-10-20 22:56:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_disciplina`
--

CREATE TABLE `inscripcion_disciplina` (
  `ID_Ins_disciplina` int(11) NOT NULL,
  `ID_Alumno` int(11) NOT NULL,
  `ID_Disciplina` int(11) NOT NULL,
  `Fecha_ins` date NOT NULL,
  `Estado` varchar(40) NOT NULL DEFAULT 'Activa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inscripcion_disciplina`
--

INSERT INTO `inscripcion_disciplina` (`ID_Ins_disciplina`, `ID_Alumno`, `ID_Disciplina`, `Fecha_ins`, `Estado`) VALUES
(1, 1, 1, '2026-10-21', 'Activa'),
(2, 2, 1, '2026-10-20', 'Activa'),
(3, 3, 2, '2026-10-20', 'Activa'),
(4, 4, 1, '2026-10-20', 'Activa'),
(5, 5, 2, '2026-10-20', 'Activa'),
(6, 6, 3, '2026-10-20', 'Activa'),
(7, 7, 3, '2026-10-20', 'Activa'),
(8, 8, 4, '2026-10-20', 'Activa'),
(9, 9, 4, '2026-11-09', 'Activa'),
(10, 10, 2, '2026-11-05', 'Activa'),
(16, 1, 2, '2026-10-20', 'Activa'),
(17, 5, 1, '2026-10-20', 'Activa'),
(18, 16, 2, '2026-11-06', 'Activa'),
(23, 1, 4, '2026-11-05', 'Activa'),
(24, 6, 1, '2026-11-06', 'Activa'),
(25, 17, 4, '2026-11-09', 'Cancelada'),
(26, 17, 2, '2026-11-09', 'Cancelada'),
(27, 18, 4, '2026-11-09', 'Cancelada'),
(28, 18, 2, '2026-11-09', 'Cancelada'),
(29, 18, 1, '2026-11-09', 'Cancelada'),
(30, 18, 3, '2026-11-09', 'Cancelada'),
(32, 19, 3, '2026-11-16', 'Activa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_grupo_alumno`
--

CREATE TABLE `inscripcion_grupo_alumno` (
  `ID_Inscripcion` int(11) NOT NULL,
  `ID_Alumno` int(11) NOT NULL,
  `ID_Grupo` int(11) NOT NULL,
  `Fecha_inscripcion` timestamp NOT NULL DEFAULT current_timestamp(),
  `Estado` varchar(40) NOT NULL DEFAULT 'Activa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inscripcion_grupo_alumno`
--

INSERT INTO `inscripcion_grupo_alumno` (`ID_Inscripcion`, `ID_Alumno`, `ID_Grupo`, `Fecha_inscripcion`, `Estado`) VALUES
(1, 1, 1, '2026-10-21 00:18:23', 'Activa'),
(2, 2, 1, '2026-10-20 22:56:32', 'Activa'),
(3, 3, 2, '2026-10-20 22:56:32', 'Activa'),
(4, 4, 1, '2026-10-20 22:56:32', 'Activa'),
(5, 5, 2, '2026-10-20 22:56:32', 'Activa'),
(6, 6, 3, '2026-10-20 22:56:32', 'Activa'),
(7, 7, 3, '2026-10-20 22:56:32', 'Activa'),
(8, 8, 4, '2026-10-20 22:56:32', 'Activa'),
(9, 9, 4, '2026-10-20 22:56:32', 'Activa'),
(10, 10, 2, '2026-10-20 22:56:32', 'Activa'),
(16, 1, 2, '2026-10-21 00:18:40', 'Activa'),
(19, 16, 2, '2026-10-21 22:31:18', 'Activa'),
(23, 6, 9, '2026-11-06 04:51:57', 'Cancelada'),
(24, 16, 9, '2026-11-06 04:53:01', 'Activa'),
(25, 17, 2, '2026-11-09 21:13:03', 'Cancelada'),
(26, 17, 4, '2026-11-09 21:13:04', 'Cancelada'),
(27, 18, 4, '2026-11-09 21:33:26', 'Cancelada'),
(28, 18, 2, '2026-11-09 21:33:26', 'Cancelada'),
(29, 18, 1, '2026-11-09 21:33:26', 'Cancelada'),
(30, 18, 3, '2026-11-09 21:33:26', 'Cancelada'),
(31, 19, 3, '2026-11-17 01:16:30', 'Activa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_grupo_profesor`
--

CREATE TABLE `inscripcion_grupo_profesor` (
  `ID_Inscripcion` int(11) NOT NULL,
  `ID_Profesor` int(11) NOT NULL,
  `ID_Grupo` int(11) NOT NULL,
  `Fecha_inscripcion` timestamp NOT NULL DEFAULT current_timestamp(),
  `Estado` varchar(40) NOT NULL DEFAULT 'Activa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inscripcion_grupo_profesor`
--

INSERT INTO `inscripcion_grupo_profesor` (`ID_Inscripcion`, `ID_Profesor`, `ID_Grupo`, `Fecha_inscripcion`, `Estado`) VALUES
(3, 2, 3, '2026-10-20 22:56:32', 'Activa'),
(4, 2, 4, '2026-10-20 22:56:32', 'Activa'),
(13, 1, 4, '2026-10-21 03:40:20', 'Activa'),
(16, 1, 1, '2026-10-21 03:40:22', 'Activa'),
(17, 1, 3, '2026-10-21 03:40:23', 'Activa'),
(18, 1, 2, '2026-11-05 21:17:24', 'Activa'),
(19, 1, 9, '2026-11-06 05:01:54', 'Activa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion_seminario`
--

CREATE TABLE `inscripcion_seminario` (
  `ID_Ins_seminario` int(11) NOT NULL,
  `ID_Alumno` int(11) NOT NULL,
  `ID_Seminario` int(11) NOT NULL,
  `Fecha_ins` date NOT NULL,
  `Estado` varchar(40) NOT NULL DEFAULT 'Activa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inscripcion_seminario`
--

INSERT INTO `inscripcion_seminario` (`ID_Ins_seminario`, `ID_Alumno`, `ID_Seminario`, `Fecha_ins`, `Estado`) VALUES
(3, 3, 3, '2026-10-20', 'Activa'),
(6, 1, 1, '2026-10-23', 'Activa'),
(8, 1, 2, '2026-11-05', 'Activa'),
(10, 10, 2, '2026-11-05', 'Activa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_espera`
--

CREATE TABLE `lista_espera` (
  `ID_Espera` int(11) NOT NULL,
  `ID_Alumno` int(11) NOT NULL,
  `ID_Grupo` int(11) NOT NULL,
  `Fecha_solicitud` timestamp NOT NULL DEFAULT current_timestamp(),
  `Estado` enum('En espera','Admitido','Cancelado') NOT NULL DEFAULT 'En espera'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lista_espera`
--

INSERT INTO `lista_espera` (`ID_Espera`, `ID_Alumno`, `ID_Grupo`, `Fecha_solicitud`, `Estado`) VALUES
(2, 16, 9, '2026-11-06 04:52:31', 'Admitido'),
(3, 18, 9, '2026-11-09 22:12:19', 'Cancelado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_espera_seminario`
--

CREATE TABLE `lista_espera_seminario` (
  `ID_Espera` int(11) NOT NULL,
  `ID_Alumno` int(11) NOT NULL,
  `ID_Seminario` int(11) NOT NULL,
  `Fecha_solicitud` timestamp NOT NULL DEFAULT current_timestamp(),
  `Estado` enum('En espera','Admitido','Cancelado') NOT NULL DEFAULT 'En espera'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `ID_Notificacion` int(11) NOT NULL,
  `ID_Alumno` int(11) NOT NULL,
  `Estado` varchar(40) NOT NULL DEFAULT 'Pendiente',
  `Mensaje` text NOT NULL,
  `Fecha` date NOT NULL,
  `Leida` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `notificacion`
--

INSERT INTO `notificacion` (`ID_Notificacion`, `ID_Alumno`, `Estado`, `Mensaje`, `Fecha`, `Leida`) VALUES
(66, 1, 'Pendiente', '🥋 PRÓXIMO EVENTO: \'Seminario de MMA: transición de golpeo a lucha\' el 14/11/2026 en Academia VILAMIR - Dojo principal. ¡Cupos limitados! Inscribite en la sección de seminarios. [Evento #1]', '2026-11-09', 0),
(67, 2, 'Pendiente', '🥋 PRÓXIMO EVENTO: \'Seminario de MMA: transición de golpeo a lucha\' el 14/11/2026 en Academia VILAMIR - Dojo principal. ¡Cupos limitados! Inscribite en la sección de seminarios. [Evento #1]', '2026-11-09', 0),
(68, 3, 'Pendiente', '🥋 PRÓXIMO EVENTO: \'Seminario de MMA: transición de golpeo a lucha\' el 14/11/2026 en Academia VILAMIR - Dojo principal. ¡Cupos limitados! Inscribite en la sección de seminarios. [Evento #1]', '2026-11-09', 0),
(69, 4, 'Pendiente', '🥋 PRÓXIMO EVENTO: \'Seminario de MMA: transición de golpeo a lucha\' el 14/11/2026 en Academia VILAMIR - Dojo principal. ¡Cupos limitados! Inscribite en la sección de seminarios. [Evento #1]', '2026-11-09', 0),
(70, 5, 'Pendiente', '🥋 PRÓXIMO EVENTO: \'Seminario de MMA: transición de golpeo a lucha\' el 14/11/2026 en Academia VILAMIR - Dojo principal. ¡Cupos limitados! Inscribite en la sección de seminarios. [Evento #1]', '2026-11-09', 0),
(71, 6, 'Pendiente', '🥋 PRÓXIMO EVENTO: \'Seminario de MMA: transición de golpeo a lucha\' el 14/11/2026 en Academia VILAMIR - Dojo principal. ¡Cupos limitados! Inscribite en la sección de seminarios. [Evento #1]', '2026-11-09', 0),
(72, 7, 'Pendiente', '🥋 PRÓXIMO EVENTO: \'Seminario de MMA: transición de golpeo a lucha\' el 14/11/2026 en Academia VILAMIR - Dojo principal. ¡Cupos limitados! Inscribite en la sección de seminarios. [Evento #1]', '2026-11-09', 0),
(73, 8, 'Pendiente', '🥋 PRÓXIMO EVENTO: \'Seminario de MMA: transición de golpeo a lucha\' el 14/11/2026 en Academia VILAMIR - Dojo principal. ¡Cupos limitados! Inscribite en la sección de seminarios. [Evento #1]', '2026-11-09', 0),
(74, 9, 'Pendiente', '🥋 PRÓXIMO EVENTO: \'Seminario de MMA: transición de golpeo a lucha\' el 14/11/2026 en Academia VILAMIR - Dojo principal. ¡Cupos limitados! Inscribite en la sección de seminarios. [Evento #1]', '2026-11-09', 1),
(75, 10, 'Pendiente', '🥋 PRÓXIMO EVENTO: \'Seminario de MMA: transición de golpeo a lucha\' el 14/11/2026 en Academia VILAMIR - Dojo principal. ¡Cupos limitados! Inscribite en la sección de seminarios. [Evento #1]', '2026-11-09', 0),
(76, 16, 'Pendiente', '🥋 PRÓXIMO EVENTO: \'Seminario de MMA: transición de golpeo a lucha\' el 14/11/2026 en Academia VILAMIR - Dojo principal. ¡Cupos limitados! Inscribite en la sección de seminarios. [Evento #1]', '2026-11-09', 0),
(77, 17, 'Pendiente', '🥋 PRÓXIMO EVENTO: \'Seminario de MMA: transición de golpeo a lucha\' el 14/11/2026 en Academia VILAMIR - Dojo principal. ¡Cupos limitados! Inscribite en la sección de seminarios. [Evento #1]', '2026-11-09', 1),
(78, 18, 'Pendiente', '🥋 PRÓXIMO EVENTO: \'Seminario de MMA: transición de golpeo a lucha\' el 14/11/2026 en Academia VILAMIR - Dojo principal. ¡Cupos limitados! Inscribite en la sección de seminarios. [Evento #1]', '2026-11-09', 0),
(92, 1, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Plan 1 Disciplina\' ahora cuesta $1.500,00 UYU.', '2026-11-09', 0),
(93, 2, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Plan 1 Disciplina\' ahora cuesta $1.500,00 UYU.', '2026-11-09', 0),
(94, 3, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Plan 1 Disciplina\' ahora cuesta $1.500,00 UYU.', '2026-11-09', 0),
(95, 4, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Plan 1 Disciplina\' ahora cuesta $1.500,00 UYU.', '2026-11-09', 0),
(96, 5, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Plan 1 Disciplina\' ahora cuesta $1.500,00 UYU.', '2026-11-09', 0),
(97, 6, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Plan 1 Disciplina\' ahora cuesta $1.500,00 UYU.', '2026-11-09', 0),
(98, 7, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Plan 1 Disciplina\' ahora cuesta $1.500,00 UYU.', '2026-11-09', 0),
(99, 8, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Plan 1 Disciplina\' ahora cuesta $1.500,00 UYU.', '2026-11-09', 0),
(100, 9, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Plan 1 Disciplina\' ahora cuesta $1.500,00 UYU.', '2026-11-09', 1),
(101, 10, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Plan 1 Disciplina\' ahora cuesta $1.500,00 UYU.', '2026-11-09', 0),
(102, 16, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Plan 1 Disciplina\' ahora cuesta $1.500,00 UYU.', '2026-11-09', 0),
(103, 17, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Plan 1 Disciplina\' ahora cuesta $1.500,00 UYU.', '2026-11-09', 1),
(104, 18, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Plan 1 Disciplina\' ahora cuesta $1.500,00 UYU.', '2026-11-09', 0),
(105, 9, 'Pendiente', 'Próximo seminario/evento: Seminario de MMA: transición de golpeo a lucha el 2026-11-14. Revisá los detalles e inscripción en la sección de eventos. [Evento #1]', '2026-11-09', 1),
(106, 1, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Pase Libre Total\' ahora cuesta $2.500,00 UYU.', '2026-11-09', 0),
(107, 2, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Pase Libre Total\' ahora cuesta $2.500,00 UYU.', '2026-11-09', 0),
(108, 3, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Pase Libre Total\' ahora cuesta $2.500,00 UYU.', '2026-11-09', 0),
(109, 4, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Pase Libre Total\' ahora cuesta $2.500,00 UYU.', '2026-11-09', 0),
(110, 5, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Pase Libre Total\' ahora cuesta $2.500,00 UYU.', '2026-11-09', 0),
(111, 6, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Pase Libre Total\' ahora cuesta $2.500,00 UYU.', '2026-11-09', 0),
(112, 7, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Pase Libre Total\' ahora cuesta $2.500,00 UYU.', '2026-11-09', 0),
(113, 8, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Pase Libre Total\' ahora cuesta $2.500,00 UYU.', '2026-11-09', 0),
(114, 9, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Pase Libre Total\' ahora cuesta $2.500,00 UYU.', '2026-11-09', 0),
(115, 10, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Pase Libre Total\' ahora cuesta $2.500,00 UYU.', '2026-11-09', 0),
(116, 16, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Pase Libre Total\' ahora cuesta $2.500,00 UYU.', '2026-11-09', 0),
(117, 17, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Pase Libre Total\' ahora cuesta $2.500,00 UYU.', '2026-11-09', 1),
(118, 18, 'Pendiente', '📢 Actualización de Tarifa/Promoción: \'Pase Libre Total\' ahora cuesta $2.500,00 UYU.', '2026-11-09', 0),
(119, 9, 'Pendiente', '¡Tu suscripción a Plan 1 Disciplina fue actualizada! Cuota: $1.500,00 UYU. Comprobante: VIL-2026-11-10-000037', '2026-11-09', 0),
(120, 19, 'Pendiente', '¡Tu suscripción a Plan 1 Disciplina fue actualizada! Cuota: $1.500,00 UYU. Comprobante: VIL-2026-11-17-000038', '2026-11-16', 0),
(121, 19, 'Pendiente', 'Tu pago de Cuota Plan 1 Disciplina (Noviembre 2026) - Muay Thai por $1.500,00 fue confirmado como PAGADO (Efectivo). Comprobante: VIL-2026-11-17-000038', '2026-11-16', 0),
(122, 1, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Plan 1 Disciplina con un 1500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #2]', '2026-11-16', 0),
(123, 2, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Plan 1 Disciplina con un 1500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #2]', '2026-11-16', 0),
(124, 3, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Plan 1 Disciplina con un 1500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #2]', '2026-11-16', 0),
(125, 4, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Plan 1 Disciplina con un 1500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #2]', '2026-11-16', 0),
(126, 5, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Plan 1 Disciplina con un 1500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #2]', '2026-11-16', 0),
(127, 6, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Plan 1 Disciplina con un 1500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #2]', '2026-11-16', 0),
(128, 7, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Plan 1 Disciplina con un 1500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #2]', '2026-11-16', 0),
(129, 8, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Plan 1 Disciplina con un 1500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #2]', '2026-11-16', 0),
(130, 9, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Plan 1 Disciplina con un 1500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #2]', '2026-11-16', 0),
(131, 10, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Plan 1 Disciplina con un 1500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #2]', '2026-11-16', 0),
(132, 16, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Plan 1 Disciplina con un 1500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #2]', '2026-11-16', 0),
(133, 17, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Plan 1 Disciplina con un 1500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #2]', '2026-11-16', 1),
(134, 19, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Plan 1 Disciplina con un 1500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #2]', '2026-11-16', 0),
(135, 1, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 2 Disciplinas con un 1900.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #3]', '2026-11-16', 0),
(136, 2, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 2 Disciplinas con un 1900.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #3]', '2026-11-16', 0),
(137, 3, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 2 Disciplinas con un 1900.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #3]', '2026-11-16', 0),
(138, 4, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 2 Disciplinas con un 1900.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #3]', '2026-11-16', 0),
(139, 5, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 2 Disciplinas con un 1900.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #3]', '2026-11-16', 0),
(140, 6, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 2 Disciplinas con un 1900.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #3]', '2026-11-16', 0),
(141, 7, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 2 Disciplinas con un 1900.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #3]', '2026-11-16', 0),
(142, 8, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 2 Disciplinas con un 1900.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #3]', '2026-11-16', 0),
(143, 9, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 2 Disciplinas con un 1900.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #3]', '2026-11-16', 0),
(144, 10, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 2 Disciplinas con un 1900.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #3]', '2026-11-16', 0),
(145, 16, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 2 Disciplinas con un 1900.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #3]', '2026-11-16', 0),
(146, 17, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 2 Disciplinas con un 1900.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #3]', '2026-11-16', 1),
(147, 19, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 2 Disciplinas con un 1900.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #3]', '2026-11-16', 0),
(148, 1, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 3 Disciplinas con un 2100.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #4]', '2026-11-16', 0),
(149, 2, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 3 Disciplinas con un 2100.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #4]', '2026-11-16', 0),
(150, 3, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 3 Disciplinas con un 2100.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #4]', '2026-11-16', 0),
(151, 4, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 3 Disciplinas con un 2100.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #4]', '2026-11-16', 0),
(152, 5, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 3 Disciplinas con un 2100.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #4]', '2026-11-16', 0),
(153, 6, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 3 Disciplinas con un 2100.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #4]', '2026-11-16', 0),
(154, 7, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 3 Disciplinas con un 2100.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #4]', '2026-11-16', 0),
(155, 8, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 3 Disciplinas con un 2100.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #4]', '2026-11-16', 0),
(156, 9, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 3 Disciplinas con un 2100.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #4]', '2026-11-16', 0),
(157, 10, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 3 Disciplinas con un 2100.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #4]', '2026-11-16', 0),
(158, 16, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 3 Disciplinas con un 2100.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #4]', '2026-11-16', 0),
(159, 17, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 3 Disciplinas con un 2100.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #4]', '2026-11-16', 1),
(160, 19, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Promoción 3 Disciplinas con un 2100.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #4]', '2026-11-16', 0),
(161, 1, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Pase Libre Total con un 2500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #5]', '2026-11-16', 0),
(162, 2, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Pase Libre Total con un 2500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #5]', '2026-11-16', 0),
(163, 3, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Pase Libre Total con un 2500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #5]', '2026-11-16', 0),
(164, 4, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Pase Libre Total con un 2500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #5]', '2026-11-16', 0),
(165, 5, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Pase Libre Total con un 2500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #5]', '2026-11-16', 0),
(166, 6, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Pase Libre Total con un 2500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #5]', '2026-11-16', 0),
(167, 7, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Pase Libre Total con un 2500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #5]', '2026-11-16', 0),
(168, 8, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Pase Libre Total con un 2500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #5]', '2026-11-16', 0),
(169, 9, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Pase Libre Total con un 2500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #5]', '2026-11-16', 0),
(170, 10, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Pase Libre Total con un 2500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #5]', '2026-11-16', 0),
(171, 16, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Pase Libre Total con un 2500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #5]', '2026-11-16', 0),
(172, 17, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Pase Libre Total con un 2500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #5]', '2026-11-16', 1),
(173, 19, 'Pendiente', '🎁 PROMOCIÓN DISPONIBLE: Pase Libre Total con un 2500.00% de beneficio. Consultá en tu panel de Mi Cuenta. [Promo #5]', '2026-11-16', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion_profesor`
--

CREATE TABLE `notificacion_profesor` (
  `ID_Notificacion_Profesor` int(11) NOT NULL,
  `ID_Profesor` int(11) NOT NULL,
  `Categoria` varchar(40) NOT NULL DEFAULT 'General',
  `Mensaje` text NOT NULL,
  `Fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `Leida` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion_usuario`
--

CREATE TABLE `notificacion_usuario` (
  `ID_Notificacion_Usuario` int(11) NOT NULL,
  `ID_Usuario` int(11) NOT NULL,
  `Titulo` varchar(150) NOT NULL DEFAULT 'Aviso de VILAMIR',
  `Mensaje` text NOT NULL,
  `Fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `Leida` tinyint(1) NOT NULL DEFAULT 0,
  `Clave` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `notificacion_usuario`
--

INSERT INTO `notificacion_usuario` (`ID_Notificacion_Usuario`, `ID_Usuario`, `Titulo`, `Mensaje`, `Fecha`, `Leida`, `Clave`) VALUES
(1, 12, 'Cambio de horario', 'Se agregó un horario para tu grupo: Lunes 09:30-10:30. Revisá tu cronograma.', '2026-10-20 21:43:46', 1, 'd354263552ab09a2aee5a5e6dd287dfd4ed407ff'),
(2, 12, 'Cambio de horario', 'Se agregó un horario para tu grupo: Miércoles 08:30-09:30. Revisá tu cronograma.', '2026-10-20 21:43:56', 1, 'e4f6a81b530013fae965a141677ae5af3d9500ca'),
(3, 1, 'Nuevo pago de inscripción', 'El alumno #1 se inscribió en Workshop de Kickboxing: defensa y contraataque y generó un pago pendiente de $500,00. Comprobante: VIL-2026-11-05-000003', '2026-11-05 15:31:44', 1, '93c31cdafad5e6c449629ba7421f68e726aa5cf4'),
(4, 1, 'Nuevo pago de inscripción', 'El alumno #1 se inscribió en Jiu-jitsu brasileño (BJJ) y generó un pago pendiente de $1.500,00. Comprobante: VIL-2026-11-05-000004', '2026-11-05 15:32:48', 1, '7fd09bd4ff16bc0fb68d7a6a4540579a081bfe85'),
(5, 1, 'Nuevo pago de inscripción', 'El alumno #9 se inscribió en Kickboxing y generó un pago pendiente de $1.500,00. Comprobante: VIL-2026-11-05-000005', '2026-11-05 15:42:17', 1, '2c8e0f68fbf9f969c3cc537ba7b399f92e34637b'),
(7, 1, 'Nuevo pago de inscripción', 'El alumno #10 se inscribió en Kickboxing y generó un pago pendiente de $1.500,00. Comprobante: VIL-2026-11-05-000007', '2026-11-05 16:09:43', 1, 'c49d6df467a5d2aa9d7ab8a0a4866558c42e43e0'),
(8, 1, 'Nuevo pago de inscripción', 'El alumno #10 se inscribió en Workshop de Kickboxing: defensa y contraataque y generó un pago pendiente de $500,00. Comprobante: VIL-2026-11-05-000008', '2026-11-05 16:09:51', 1, '67a5082f388d97e5fddec51d48aadc7c5ff0fce4'),
(11, 1, 'Nuevo pago de inscripción', 'El alumno #9 se inscribió en Workshop de Kickboxing: defensa y contraataque y generó un pago pendiente de $500,00. Comprobante: VIL-2026-11-06-000025', '2026-11-06 01:09:07', 1, '8592c8015f6fa8fa7c862ef0ab0f315fae6148f0'),
(12, 1, 'Nuevo pago de inscripción', 'El alumno #9 se inscribió en Workshop de Kickboxing: defensa y contraataque y generó un pago pendiente de $500,00. Comprobante: VIL-2026-11-06-000026', '2026-11-06 01:10:31', 1, 'f0221839869746bc2b4682dfdbaab40bd76d6559'),
(13, 1, 'Nuevo pago de inscripción', 'El alumno #9 se inscribió en Workshop de Kickboxing: defensa y contraataque y generó un pago pendiente de $500,00. Comprobante: VIL-2026-11-06-000027', '2026-11-06 01:14:38', 1, 'bb3c91fc91e15b39524a1bf9b8e92802e42a1e4c'),
(14, 1, 'Nuevo pago de inscripción', 'El alumno #9 se inscribió en Workshop de Kickboxing: defensa y contraataque y generó un pago pendiente de $500,00. Comprobante: VIL-2026-11-06-000028', '2026-11-06 01:14:56', 1, '55eb83f6aea1b7994321bf7d7adeb4125a0835d7'),
(15, 1, 'Nuevo pago de inscripción', 'El alumno #9 se inscribió en Workshop de Kickboxing: defensa y contraataque y generó un pago pendiente de $500,00. Comprobante: VIL-2026-11-06-000029', '2026-11-06 01:17:21', 1, '23d7fd94b53a777cb5b9322c3b3ba887cbcdf14c'),
(16, 1, 'Nuevo pago de inscripción', 'El alumno #16 se inscribió en Kickboxing y generó un pago pendiente de $1.500,00. Comprobante: VIL-2026-11-06-000031', '2026-11-06 01:54:38', 1, 'a24a16458e89374987d6ffec4b4c432e7bc1f4c0'),
(17, 1, 'Nuevo pago de inscripción', 'El alumno #17 se inscribió en Jiu-jitsu brasileño (BJJ) y generó un pago pendiente de $1.500,00. Comprobante: VIL-2026-11-09-000032', '2026-11-09 18:12:42', 1, 'f3afe4cbb000a6b3d4b989b38048e63926fa43ba'),
(18, 1, 'Nuevo pago de inscripción', 'El alumno #17 se inscribió en Kickboxing y generó un pago pendiente de $1.500,00. Comprobante: VIL-2026-11-09-000033', '2026-11-09 18:12:45', 1, '86a862161488917fc2ca18bc12e0bdf7f61d5e26'),
(19, 1, 'Pase Libre Activado', 'El alumno #18 activó Pase Libre Total ($2.500 UYU). Comprobante: VIL-2026-11-09-000034', '2026-11-09 18:33:26', 1, '2ef833abe5a803aeb7a731ffa70da5be28007767');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `ID_Pago` int(11) NOT NULL,
  `ID_Alumno` int(11) NOT NULL,
  `Tipo` varchar(80) NOT NULL,
  `Fecha` date NOT NULL,
  `Fecha_vencimiento` date DEFAULT NULL,
  `Importe` decimal(10,2) NOT NULL DEFAULT 0.00,
  `Estado` varchar(40) NOT NULL DEFAULT 'Pendiente',
  `Metodo_pago` varchar(60) DEFAULT NULL,
  `Numero_comprobante` varchar(40) DEFAULT NULL,
  `Anulado_en` datetime DEFAULT NULL,
  `Anulado_por` int(11) DEFAULT NULL,
  `Motivo_anulacion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`ID_Pago`, `ID_Alumno`, `Tipo`, `Fecha`, `Fecha_vencimiento`, `Importe`, `Estado`, `Metodo_pago`, `Numero_comprobante`, `Anulado_en`, `Anulado_por`, `Motivo_anulacion`) VALUES
(37, 9, 'Cuota Plan 1 Disciplina (Noviembre 2026) - Jiu-jitsu brasileño (BJJ)', '2026-11-09', '2026-12-10', 1500.00, 'Pendiente', 'A confirmar', 'VIL-2026-11-10-000037', NULL, NULL, NULL),
(38, 19, 'Cuota Plan 1 Disciplina (Noviembre 2026) - Muay Thai', '2026-11-17', '2026-12-17', 1500.00, 'Pagado', 'Efectivo', 'VIL-2026-11-17-000038', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `ID_Profesor` int(11) NOT NULL,
  `ID_Usuario` int(11) DEFAULT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Telefono` varchar(40) DEFAULT NULL,
  `Cedula` varchar(30) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Especialidad` varchar(150) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `Creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`ID_Profesor`, `ID_Usuario`, `Nombre`, `Apellido`, `Telefono`, `Cedula`, `Direccion`, `Especialidad`, `Email`, `Creado_en`) VALUES
(1, 12, 'Martín', 'Acosta', '099 200 001', 'DEMO-PROF-001', 'Las Piedras, Canelones', 'MMA y Kickboxing', 'martin.acosta@gmail.com', '2026-10-20 22:56:32'),
(2, 13, 'Valentina', 'Suárez', '099 200 002', 'DEMO-PROF-002', 'Montevideo', 'Muay Thai y Jiu-jitsu brasileño (BJJ)', 'valentina.suarez@gmail.com', '2026-10-20 22:56:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor_disciplina`
--

CREATE TABLE `profesor_disciplina` (
  `ID_Profesor` int(11) NOT NULL,
  `ID_Disciplina` int(11) NOT NULL,
  `Fecha_asignacion` date NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesor_disciplina`
--

INSERT INTO `profesor_disciplina` (`ID_Profesor`, `ID_Disciplina`, `Fecha_asignacion`) VALUES
(1, 1, '2026-10-20'),
(1, 2, '2026-10-20'),
(1, 3, '2026-10-20'),
(1, 4, '2026-10-20'),
(2, 3, '2026-10-20'),
(2, 4, '2026-10-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `ID_Promocion` int(11) NOT NULL,
  `Clave_promocion` varchar(50) DEFAULT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Descripcion` text DEFAULT NULL,
  `Descuento` decimal(10,2) NOT NULL DEFAULT 0.00,
  `Fecha_inicio` date DEFAULT NULL,
  `Fecha_fin` date DEFAULT NULL,
  `Activa` tinyint(1) NOT NULL DEFAULT 1,
  `Imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `promocion`
--

INSERT INTO `promocion` (`ID_Promocion`, `Clave_promocion`, `Nombre`, `Descripcion`, `Descuento`, `Fecha_inicio`, `Fecha_fin`, `Activa`, `Imagen`) VALUES
(2, 'PLAN_1_DISCIPLINA', 'Plan 1 Disciplina', 'Arancel base regular para una única disciplina.', 1500.00, NULL, NULL, 1, NULL),
(3, 'PROMO_2_DISCIPLINAS', 'Promoción 2 Disciplinas', 'Descuento para alumnos que cursen 2 disciplinas simultáneas.', 1900.00, NULL, NULL, 1, NULL),
(4, 'PROMO_3_DISCIPLINAS', 'Promoción 3 Disciplinas', 'Descuento para alumnos que cursen 3 disciplinas simultáneas.', 2100.00, NULL, NULL, 1, NULL),
(5, 'PASE_LIBRE_TOTAL', 'Pase Libre Total', 'Acceso ilimitado a todas las disciplinas y horarios de la academia.', 2500.00, NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recuperacion_contrasena`
--

CREATE TABLE `recuperacion_contrasena` (
  `id_recuperacion` bigint(20) UNSIGNED NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `token_hash` char(64) NOT NULL,
  `creado_en` datetime NOT NULL DEFAULT current_timestamp(),
  `vence_en` datetime NOT NULL,
  `usado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable`
--

CREATE TABLE `responsable` (
  `ID_Responsable` int(11) NOT NULL,
  `ID_Alumno` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Parentesco` varchar(60) NOT NULL,
  `Cedula` varchar(30) DEFAULT NULL,
  `Telefono` varchar(40) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `responsable`
--

INSERT INTO `responsable` (`ID_Responsable`, `ID_Alumno`, `Nombre`, `Apellido`, `Parentesco`, `Cedula`, `Telefono`, `Direccion`) VALUES
(1, 16, 'Marta', 'Silva', 'Madre', '45365234', '099 000 030', 'agraciada 1203');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seminario`
--

CREATE TABLE `seminario` (
  `ID_Seminario` int(11) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Titulo` varchar(150) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `Costo` decimal(10,2) NOT NULL DEFAULT 0.00,
  `Ponente` varchar(150) DEFAULT NULL,
  `Fecha` date NOT NULL,
  `Hora` time DEFAULT NULL,
  `Lugar` varchar(255) DEFAULT NULL,
  `Cupo` int(11) DEFAULT NULL,
  `Creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `seminario`
--

INSERT INTO `seminario` (`ID_Seminario`, `Nombre`, `Titulo`, `Descripcion`, `Costo`, `Ponente`, `Fecha`, `Hora`, `Lugar`, `Cupo`, `Creado_en`) VALUES
(1, 'Seminario de MMA: transición de golpeo a lucha', 'Transiciones de MMA', 'Trabajo técnico de combinaciones, derribos y control en el suelo. Actividad de demostración.', 650.00, 'Martín Acosta (demo)', '2026-11-14', '10:00:00', 'Academia VILAMIR - Dojo principal', 25, '2026-10-20 22:56:32'),
(2, 'Workshop de Kickboxing: defensa y contraataque', 'Defensa y contraataque', 'Taller técnico de guardia, desplazamientos, defensa y respuestas seguras.', 500.00, 'Martín Acosta (demo)', '2026-11-28', '15:00:00', 'Academia VILAMIR - Dojo principal', 24, '2026-10-20 22:56:32'),
(3, 'Seminario de Muay Thai: clinch y rodillas', 'Clinch y rodillas', 'Práctica técnica de postura, control del clinch y rodillazos con trabajo supervisado.', 700.00, 'Valentina Suárez (demo)', '2026-12-12', '10:30:00', 'Academia VILAMIR - Dojo principal', 20, '2026-10-20 22:56:32'),
(4, 'Open Mat de Jiu-jitsu brasileño (BJJ)', 'Open Mat de BJJ', 'Encuentro de práctica guiada, repaso de posiciones y entrenamiento entre compañeros.', 400.00, 'Valentina Suárez (demo)', '2027-01-16', '16:00:00', 'Academia VILAMIR - Dojo principal', 30, '2026-10-20 22:56:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_Usuario` int(11) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Contraseña` varchar(255) NOT NULL,
  `Rol` enum('Administrador','Profesor','Alumno') NOT NULL DEFAULT 'Alumno',
  `Creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_Usuario`, `Email`, `Contraseña`, `Rol`, `Creado_en`) VALUES
(1, 'vilamir@gmail.com', '$2y$10$movgtec4mV5qwZ5XbKQzT.BAjb.paWvf6hK9y28uglagX280VNbNu', 'Administrador', '2026-10-20 22:55:00'),
(2, 'ana.silva@gmail.com', '$2y$10$obelLjN27fhwNc2NOwiW2uLfn5ke3ymnqTrZ1oT0ZKj7.uQY/o49y', 'Alumno', '2026-10-20 22:56:32'),
(3, 'bruno.pereira@gmail.com', '$2y$12$z1DuJhRwn4vDQuR.YgeC.esWizxM2U.qlrm5tEs0NcwyORb50i6VS', 'Alumno', '2026-10-20 22:56:32'),
(4, 'camila.rodriguez@gmail.com', '$2y$12$z1DuJhRwn4vDQuR.YgeC.esWizxM2U.qlrm5tEs0NcwyORb50i6VS', 'Alumno', '2026-10-20 22:56:32'),
(5, 'diego.mendez@gmail.com', '$2y$12$z1DuJhRwn4vDQuR.YgeC.esWizxM2U.qlrm5tEs0NcwyORb50i6VS', 'Alumno', '2026-10-20 22:56:32'),
(6, 'emilia.torres@gmail.com', '$2y$12$z1DuJhRwn4vDQuR.YgeC.esWizxM2U.qlrm5tEs0NcwyORb50i6VS', 'Alumno', '2026-10-20 22:56:32'),
(7, 'facundo.costa@gmail.com', '$2y$12$z1DuJhRwn4vDQuR.YgeC.esWizxM2U.qlrm5tEs0NcwyORb50i6VS', 'Alumno', '2026-10-20 22:56:32'),
(8, 'guadalupe.sosa@gmail.com', '$2y$12$z1DuJhRwn4vDQuR.YgeC.esWizxM2U.qlrm5tEs0NcwyORb50i6VS', 'Alumno', '2026-10-20 22:56:32'),
(9, 'ignacio.martinez@gmail.com', '$2y$12$z1DuJhRwn4vDQuR.YgeC.esWizxM2U.qlrm5tEs0NcwyORb50i6VS', 'Alumno', '2026-10-20 22:56:32'),
(10, 'julieta.fernandez@gmail.com', '$2y$12$z1DuJhRwn4vDQuR.YgeC.esWizxM2U.qlrm5tEs0NcwyORb50i6VS', 'Alumno', '2026-10-20 22:56:32'),
(11, 'lautaro.gomez@gmail.com', '$2y$12$z1DuJhRwn4vDQuR.YgeC.esWizxM2U.qlrm5tEs0NcwyORb50i6VS', 'Alumno', '2026-10-20 22:56:32'),
(12, 'martin.acosta@gmail.com', '$2y$10$gfJvyyZia8bZ0fiPc1/0kOLm18nnHPp5lZsaIESYwEiFDuY.BeEF2', 'Profesor', '2026-10-20 22:56:32'),
(13, 'valentina.suarez@gmail.com', '$2y$12$z1DuJhRwn4vDQuR.YgeC.esWizxM2U.qlrm5tEs0NcwyORb50i6VS', 'Profesor', '2026-10-20 22:56:32'),
(14, 'marcelo.perez@gmail.com', '$2y$10$fIW9lofEn8YMPsmJREMeeO34g8DFR2LYcbnkRW.VvapJOvyTjyv/S', 'Alumno', '2026-10-21 22:29:51'),
(17, 'Marcso1234@gmail.com', '$2y$10$tIYyrOwe.PlUT.hRhBEYFedd.R/LSE1zpCja5qSGMOMJYGgSWHCWG', 'Alumno', '2026-11-09 21:10:01'),
(18, 'medina1234@gmail.com', '$2y$10$qQInu1LRpIDiX1z44svtjeW.mHhlD/FYOvgN4l7/uWdk0bAZmtgoW', 'Alumno', '2026-11-09 21:24:56'),
(19, 'Seba1234@gmail.com', '$2y$10$3aAluqS9ZeSOx.wQP9oeWucIzdrd1eX4dsPJ9DKf9KVv3NJ5wqLzm', 'Alumno', '2026-11-17 01:16:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad_sistema`
--
ALTER TABLE `actividad_sistema`
  ADD PRIMARY KEY (`ID_Actividad`),
  ADD KEY `idx_actividad_fecha` (`Fecha`),
  ADD KEY `idx_actividad_usuario_fecha` (`ID_Usuario`,`Fecha`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`ID_Alumno`),
  ADD UNIQUE KEY `uq_alumno_usuario` (`ID_Usuario`),
  ADD UNIQUE KEY `uq_alumno_qr` (`Codigo_qr`),
  ADD KEY `idx_alumno_apellido` (`Apellido`,`Nombre`),
  ADD KEY `idx_alumno_usuario_v17` (`ID_Usuario`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`ID_Asistencia`),
  ADD UNIQUE KEY `uq_asistencia_horario` (`ID_Alumno`,`ID_Grupo`,`Fecha`,`ID_Horario`),
  ADD KEY `idx_asistencia_fecha` (`Fecha`),
  ADD KEY `idx_asistencia_grupo` (`ID_Grupo`,`Fecha`),
  ADD KEY `idx_asistencia_alumno` (`ID_Alumno`,`Fecha`),
  ADD KEY `idx_asistencia_profesor_fecha` (`ID_Profesor`,`Fecha`),
  ADD KEY `fk_asistencia_horario` (`ID_Horario`),
  ADD KEY `idx_asistencia_grupo_estado_fecha` (`ID_Grupo`,`Estado`,`Fecha`);

--
-- Indices de la tabla `certificado`
--
ALTER TABLE `certificado`
  ADD PRIMARY KEY (`ID_Certificado`),
  ADD UNIQUE KEY `uq_certificado_codigo` (`Codigo`),
  ADD KEY `idx_certificado_alumno` (`ID_Alumno`,`Fecha_emision`),
  ADD KEY `fk_cert_seminario` (`ID_Seminario`);

--
-- Indices de la tabla `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`ID_Disciplina`),
  ADD UNIQUE KEY `uq_disciplina_nombre` (`Nombre`);

--
-- Indices de la tabla `galeria_evento`
--
ALTER TABLE `galeria_evento`
  ADD PRIMARY KEY (`ID_Galeria`),
  ADD KEY `idx_galeria_seminario` (`ID_Seminario`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`ID_Grupo`),
  ADD KEY `idx_grupo_disciplina` (`ID_Disciplina`),
  ADD KEY `idx_grupo_nombre` (`Nombre`),
  ADD KEY `idx_grupo_disciplina_v17` (`ID_Disciplina`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`ID_Horario`),
  ADD KEY `idx_horario_grupo` (`ID_Grupo`),
  ADD KEY `idx_horario_dia_hora` (`Dia`,`Hora_inicio`,`Hora_fin`),
  ADD KEY `idx_horario_grupo_v17` (`ID_Grupo`);

--
-- Indices de la tabla `inscripcion_disciplina`
--
ALTER TABLE `inscripcion_disciplina`
  ADD PRIMARY KEY (`ID_Ins_disciplina`),
  ADD UNIQUE KEY `uq_ins_disciplina` (`ID_Alumno`,`ID_Disciplina`),
  ADD KEY `idx_insdisc_disciplina_estado` (`ID_Disciplina`,`Estado`),
  ADD KEY `idx_insdisc_alumno_estado` (`ID_Alumno`,`Estado`);

--
-- Indices de la tabla `inscripcion_grupo_alumno`
--
ALTER TABLE `inscripcion_grupo_alumno`
  ADD PRIMARY KEY (`ID_Inscripcion`),
  ADD UNIQUE KEY `uq_alumno_grupo` (`ID_Alumno`,`ID_Grupo`),
  ADD KEY `idx_iga_grupo_estado` (`ID_Grupo`,`Estado`),
  ADD KEY `idx_iga_alumno_estado` (`ID_Alumno`,`Estado`),
  ADD KEY `idx_iga_grupo_estado_v20` (`ID_Grupo`,`Estado`,`Fecha_inscripcion`),
  ADD KEY `idx_iga_alumno_estado_v20` (`ID_Alumno`,`Estado`,`Fecha_inscripcion`);

--
-- Indices de la tabla `inscripcion_grupo_profesor`
--
ALTER TABLE `inscripcion_grupo_profesor`
  ADD PRIMARY KEY (`ID_Inscripcion`),
  ADD UNIQUE KEY `uq_profesor_grupo` (`ID_Profesor`,`ID_Grupo`),
  ADD KEY `idx_igp_grupo_estado` (`ID_Grupo`,`Estado`),
  ADD KEY `idx_igp_profesor_estado` (`ID_Profesor`,`Estado`);

--
-- Indices de la tabla `inscripcion_seminario`
--
ALTER TABLE `inscripcion_seminario`
  ADD PRIMARY KEY (`ID_Ins_seminario`),
  ADD UNIQUE KEY `uq_ins_seminario` (`ID_Alumno`,`ID_Seminario`),
  ADD KEY `idx_inssem_seminario_estado` (`ID_Seminario`,`Estado`),
  ADD KEY `idx_inssem_alumno_estado` (`ID_Alumno`,`Estado`),
  ADD KEY `idx_inssem_seminario_estado_v20` (`ID_Seminario`,`Estado`,`Fecha_ins`),
  ADD KEY `idx_inssem_alumno_estado_v20` (`ID_Alumno`,`Estado`,`Fecha_ins`);

--
-- Indices de la tabla `lista_espera`
--
ALTER TABLE `lista_espera`
  ADD PRIMARY KEY (`ID_Espera`),
  ADD UNIQUE KEY `uq_espera` (`ID_Alumno`,`ID_Grupo`),
  ADD KEY `idx_espera_grupo_estado` (`ID_Grupo`,`Estado`,`Fecha_solicitud`),
  ADD KEY `idx_espera_alumno_estado_v20` (`ID_Alumno`,`Estado`);

--
-- Indices de la tabla `lista_espera_seminario`
--
ALTER TABLE `lista_espera_seminario`
  ADD PRIMARY KEY (`ID_Espera`),
  ADD UNIQUE KEY `uq_espera_sem` (`ID_Alumno`,`ID_Seminario`),
  ADD KEY `idx_espera_sem_estado` (`ID_Seminario`,`Estado`,`Fecha_solicitud`),
  ADD KEY `idx_espera_sem_alumno` (`ID_Alumno`,`Estado`);

--
-- Indices de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`ID_Notificacion`),
  ADD KEY `idx_notificacion_alumno_fecha` (`ID_Alumno`,`Fecha`),
  ADD KEY `idx_notificacion_lectura` (`ID_Alumno`,`Leida`,`Fecha`);

--
-- Indices de la tabla `notificacion_profesor`
--
ALTER TABLE `notificacion_profesor`
  ADD PRIMARY KEY (`ID_Notificacion_Profesor`),
  ADD KEY `idx_notif_profesor_lectura` (`ID_Profesor`,`Leida`,`Fecha`);

--
-- Indices de la tabla `notificacion_usuario`
--
ALTER TABLE `notificacion_usuario`
  ADD PRIMARY KEY (`ID_Notificacion_Usuario`),
  ADD UNIQUE KEY `uq_notificacion_usuario_clave` (`ID_Usuario`,`Clave`),
  ADD KEY `idx_notificacion_usuario_lectura` (`ID_Usuario`,`Leida`,`Fecha`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`ID_Pago`),
  ADD UNIQUE KEY `uq_pago_comprobante` (`Numero_comprobante`),
  ADD KEY `idx_pago_alumno_fecha` (`ID_Alumno`,`Fecha`,`ID_Pago`),
  ADD KEY `idx_pago_estado_fecha` (`Estado`,`Fecha`,`Fecha_vencimiento`),
  ADD KEY `idx_pago_vencimiento` (`ID_Alumno`,`Fecha_vencimiento`,`Estado`),
  ADD KEY `idx_pago_anulado` (`Estado`,`Anulado_en`),
  ADD KEY `fk_pago_anulado_por` (`Anulado_por`),
  ADD KEY `idx_pago_alumno_fecha_v17` (`ID_Alumno`,`Fecha`,`ID_Pago`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`ID_Profesor`),
  ADD UNIQUE KEY `uq_profesor_email` (`Email`),
  ADD KEY `idx_profesor_usuario` (`ID_Usuario`),
  ADD KEY `idx_profesor_apellido` (`Apellido`,`Nombre`),
  ADD KEY `idx_profesor_usuario_v17` (`ID_Usuario`);

--
-- Indices de la tabla `profesor_disciplina`
--
ALTER TABLE `profesor_disciplina`
  ADD PRIMARY KEY (`ID_Profesor`,`ID_Disciplina`),
  ADD KEY `idx_profdisc_disciplina` (`ID_Disciplina`);

--
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD PRIMARY KEY (`ID_Promocion`),
  ADD UNIQUE KEY `Clave_promocion` (`Clave_promocion`),
  ADD KEY `idx_promocion_vigencia` (`Activa`,`Fecha_inicio`,`Fecha_fin`);

--
-- Indices de la tabla `recuperacion_contrasena`
--
ALTER TABLE `recuperacion_contrasena`
  ADD PRIMARY KEY (`id_recuperacion`),
  ADD UNIQUE KEY `uq_recuperacion_token_hash` (`token_hash`),
  ADD KEY `idx_recuperacion_usuario` (`id_usuario`),
  ADD KEY `idx_recuperacion_vencimiento` (`vence_en`);

--
-- Indices de la tabla `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`ID_Responsable`),
  ADD KEY `idx_responsable_alumno` (`ID_Alumno`);

--
-- Indices de la tabla `seminario`
--
ALTER TABLE `seminario`
  ADD PRIMARY KEY (`ID_Seminario`),
  ADD KEY `idx_seminario_fecha` (`Fecha`,`Hora`),
  ADD KEY `idx_seminario_vigencia` (`Fecha`,`Cupo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_Usuario`),
  ADD UNIQUE KEY `uq_usuario_email` (`Email`),
  ADD KEY `idx_usuario_rol` (`Rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad_sistema`
--
ALTER TABLE `actividad_sistema`
  MODIFY `ID_Actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `ID_Alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `ID_Asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `certificado`
--
ALTER TABLE `certificado`
  MODIFY `ID_Certificado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `ID_Disciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `galeria_evento`
--
ALTER TABLE `galeria_evento`
  MODIFY `ID_Galeria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `ID_Grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `ID_Horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `inscripcion_disciplina`
--
ALTER TABLE `inscripcion_disciplina`
  MODIFY `ID_Ins_disciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `inscripcion_grupo_alumno`
--
ALTER TABLE `inscripcion_grupo_alumno`
  MODIFY `ID_Inscripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `inscripcion_grupo_profesor`
--
ALTER TABLE `inscripcion_grupo_profesor`
  MODIFY `ID_Inscripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `inscripcion_seminario`
--
ALTER TABLE `inscripcion_seminario`
  MODIFY `ID_Ins_seminario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `lista_espera`
--
ALTER TABLE `lista_espera`
  MODIFY `ID_Espera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `lista_espera_seminario`
--
ALTER TABLE `lista_espera_seminario`
  MODIFY `ID_Espera` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `ID_Notificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT de la tabla `notificacion_profesor`
--
ALTER TABLE `notificacion_profesor`
  MODIFY `ID_Notificacion_Profesor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notificacion_usuario`
--
ALTER TABLE `notificacion_usuario`
  MODIFY `ID_Notificacion_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `ID_Pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `ID_Profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `ID_Promocion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `recuperacion_contrasena`
--
ALTER TABLE `recuperacion_contrasena`
  MODIFY `id_recuperacion` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `responsable`
--
ALTER TABLE `responsable`
  MODIFY `ID_Responsable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `seminario`
--
ALTER TABLE `seminario`
  MODIFY `ID_Seminario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad_sistema`
--
ALTER TABLE `actividad_sistema`
  ADD CONSTRAINT `fk_actividad_usuario` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`) ON DELETE SET NULL;

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `fk_alumno_usuario` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `fk_asistencia_alumno` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumno` (`ID_Alumno`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_asistencia_grupo` FOREIGN KEY (`ID_Grupo`) REFERENCES `grupo` (`ID_Grupo`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_asistencia_horario` FOREIGN KEY (`ID_Horario`) REFERENCES `horario` (`ID_Horario`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_asistencia_profesor` FOREIGN KEY (`ID_Profesor`) REFERENCES `profesor` (`ID_Profesor`) ON DELETE SET NULL;

--
-- Filtros para la tabla `certificado`
--
ALTER TABLE `certificado`
  ADD CONSTRAINT `fk_cert_alumno` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumno` (`ID_Alumno`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cert_seminario` FOREIGN KEY (`ID_Seminario`) REFERENCES `seminario` (`ID_Seminario`) ON DELETE SET NULL;

--
-- Filtros para la tabla `galeria_evento`
--
ALTER TABLE `galeria_evento`
  ADD CONSTRAINT `fk_galeria_seminario` FOREIGN KEY (`ID_Seminario`) REFERENCES `seminario` (`ID_Seminario`) ON DELETE SET NULL;

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `fk_grupo_disciplina` FOREIGN KEY (`ID_Disciplina`) REFERENCES `disciplina` (`ID_Disciplina`) ON DELETE SET NULL;

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `fk_horario_grupo` FOREIGN KEY (`ID_Grupo`) REFERENCES `grupo` (`ID_Grupo`) ON DELETE CASCADE;

--
-- Filtros para la tabla `inscripcion_disciplina`
--
ALTER TABLE `inscripcion_disciplina`
  ADD CONSTRAINT `fk_ins_disc_alumno` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumno` (`ID_Alumno`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_ins_disc_disciplina` FOREIGN KEY (`ID_Disciplina`) REFERENCES `disciplina` (`ID_Disciplina`) ON DELETE CASCADE;

--
-- Filtros para la tabla `inscripcion_grupo_alumno`
--
ALTER TABLE `inscripcion_grupo_alumno`
  ADD CONSTRAINT `fk_iga_alumno` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumno` (`ID_Alumno`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_iga_grupo` FOREIGN KEY (`ID_Grupo`) REFERENCES `grupo` (`ID_Grupo`) ON DELETE CASCADE;

--
-- Filtros para la tabla `inscripcion_grupo_profesor`
--
ALTER TABLE `inscripcion_grupo_profesor`
  ADD CONSTRAINT `fk_igp_grupo` FOREIGN KEY (`ID_Grupo`) REFERENCES `grupo` (`ID_Grupo`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_igp_profesor` FOREIGN KEY (`ID_Profesor`) REFERENCES `profesor` (`ID_Profesor`) ON DELETE CASCADE;

--
-- Filtros para la tabla `inscripcion_seminario`
--
ALTER TABLE `inscripcion_seminario`
  ADD CONSTRAINT `fk_ins_sem_alumno` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumno` (`ID_Alumno`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_ins_sem_seminario` FOREIGN KEY (`ID_Seminario`) REFERENCES `seminario` (`ID_Seminario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `lista_espera`
--
ALTER TABLE `lista_espera`
  ADD CONSTRAINT `fk_espera_alumno` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumno` (`ID_Alumno`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_espera_grupo` FOREIGN KEY (`ID_Grupo`) REFERENCES `grupo` (`ID_Grupo`) ON DELETE CASCADE;

--
-- Filtros para la tabla `lista_espera_seminario`
--
ALTER TABLE `lista_espera_seminario`
  ADD CONSTRAINT `fk_espera_sem_alumno` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumno` (`ID_Alumno`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_espera_sem_evento` FOREIGN KEY (`ID_Seminario`) REFERENCES `seminario` (`ID_Seminario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD CONSTRAINT `fk_notificacion_alumno` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumno` (`ID_Alumno`) ON DELETE CASCADE;

--
-- Filtros para la tabla `notificacion_profesor`
--
ALTER TABLE `notificacion_profesor`
  ADD CONSTRAINT `fk_notif_profesor_profesor` FOREIGN KEY (`ID_Profesor`) REFERENCES `profesor` (`ID_Profesor`) ON DELETE CASCADE;

--
-- Filtros para la tabla `notificacion_usuario`
--
ALTER TABLE `notificacion_usuario`
  ADD CONSTRAINT `fk_notificacion_usuario_usuario` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `fk_pago_alumno` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumno` (`ID_Alumno`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_pago_anulado_por` FOREIGN KEY (`Anulado_por`) REFERENCES `usuario` (`ID_Usuario`) ON DELETE SET NULL;

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `fk_profesor_usuario` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`) ON DELETE SET NULL;

--
-- Filtros para la tabla `profesor_disciplina`
--
ALTER TABLE `profesor_disciplina`
  ADD CONSTRAINT `fk_profdisc_disciplina` FOREIGN KEY (`ID_Disciplina`) REFERENCES `disciplina` (`ID_Disciplina`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_profdisc_profesor` FOREIGN KEY (`ID_Profesor`) REFERENCES `profesor` (`ID_Profesor`) ON DELETE CASCADE;

--
-- Filtros para la tabla `recuperacion_contrasena`
--
ALTER TABLE `recuperacion_contrasena`
  ADD CONSTRAINT `fk_recuperacion_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`ID_Usuario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `responsable`
--
ALTER TABLE `responsable`
  ADD CONSTRAINT `fk_responsable_alumno` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumno` (`ID_Alumno`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
