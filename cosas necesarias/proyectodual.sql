-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 15-12-2021 a las 09:01:40
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectodual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `ID_Actividad` int(2) NOT NULL,
  `Fecha` date NOT NULL,
  `Tipo_práctica` varchar(4) NOT NULL,
  `Total_Horas` int(64) NOT NULL,
  `Actividad_realizada` text NOT NULL,
  `Observaciones` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `ID_Alumno` int(3) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido1` varchar(20) NOT NULL,
  `Apellido2` varchar(20) NOT NULL,
  `Contraseña` varchar(64) NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Empresa` varchar(64) NOT NULL,
  `Tutor` varchar(64) NOT NULL,
  `NºHoras_Dual` int(3) NOT NULL,
  `NºHoras_FCT` int(3) NOT NULL,
  `Observaciones` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`ID_Alumno`, `Nombre`, `Apellido1`, `Apellido2`, `Contraseña`, `DNI`, `Fecha_Nacimiento`, `Email`, `Telefono`, `Empresa`, `Tutor`, `NºHoras_Dual`, `NºHoras_FCT`, `Observaciones`) VALUES
(1, 'Pepe', 'Fernandez', 'Rodriguez', 'Alumno', '43563478F', '1995-11-16', 'pepefernandez@cesurformacion.com', 622546485, 'montajes Paco', 'Franciso', 12, 14, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `ID_Empresa` int(64) NOT NULL,
  `Nombre_Empresa` varchar(64) DEFAULT NULL,
  `Telefono` int(9) DEFAULT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `Responsable` varchar(64) DEFAULT NULL,
  `Observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`ID_Empresa`, `Nombre_Empresa`, `Telefono`, `Email`, `Responsable`, `Observaciones`) VALUES
(1, 'Montajes Paco', 655456743, 'montajespaco@gmail.com', 'Paco', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `ID_Profesor` int(3) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido1` varchar(20) NOT NULL,
  `Apellido2` varchar(20) NOT NULL,
  `Contraseña` varchar(64) NOT NULL,
  `Email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`ID_Profesor`, `Nombre`, `Apellido1`, `Apellido2`, `Contraseña`, `Email`) VALUES
(1, 'Francisco', 'Mejia', 'Robles', 'Profesor', 'FranciscoMejia@cesurformacion.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`ID_Actividad`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`ID_Alumno`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`ID_Empresa`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`ID_Profesor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `ID_Actividad` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `ID_Empresa` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `ID_Profesor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
