-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2019 at 04:46 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sei`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrera`
--

CREATE TABLE `carrera` (
  `carrera_id` int(11) NOT NULL,
  `carrera_name` varchar(80) DEFAULT NULL,
  `carrera_estado` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carrera`
--

INSERT INTO `carrera` (`carrera_id`, `carrera_name`, `carrera_estado`) VALUES
(44, 'Informatica', 'activo'),
(46, 'Contabilidad', 'activo');

-- --------------------------------------------------------

--
-- Table structure for table `datos_generales`
--

CREATE TABLE `datos_generales` (
  `id` int(11) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `nombres` varchar(80) NOT NULL,
  `apellidos` varchar(80) NOT NULL,
  `fecha_nacimiento` varchar(80) NOT NULL,
  `nacionalidad` varchar(80) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `genero` varchar(80) NOT NULL,
  `acta_grado` varchar(80) NOT NULL,
  `carrera` varchar(80) NOT NULL,
  `mencion` varchar(80) NOT NULL,
  `modalidad` varchar(80) NOT NULL,
  `nivel_formacion` varchar(80) NOT NULL,
  `fecha_ingreso` varchar(80) NOT NULL,
  `fecha_egreso` varchar(80) NOT NULL,
  `fecha_graduacion` varchar(80) NOT NULL,
  `ocupacion_actual` varchar(100) NOT NULL,
  `nombre_empresa` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datos_generales`
--

INSERT INTO `datos_generales` (`id`, `dni`, `nombres`, `apellidos`, `fecha_nacimiento`, `nacionalidad`, `telefono`, `email`, `genero`, `acta_grado`, `carrera`, `mencion`, `modalidad`, `nivel_formacion`, `fecha_ingreso`, `fecha_egreso`, `fecha_graduacion`, `ocupacion_actual`, `nombre_empresa`) VALUES
(15, '2200386874', 'Alexis Paul', 'Ramirez Quezada', '11/10/1999', 'Ecuatoriano', '0991229095', 'alexis.ramirez@itsae.edu.ec', 'Masculino', '0001', 'Informatica', 'Analisis de sistemas', 'Nocturna', 'tecnologo', '25/08/2016', '12/01/2019', '30/04/2020', 'Estudiante', 'ITSAE');

-- --------------------------------------------------------

--
-- Table structure for table `horario_clases`
--

CREATE TABLE `horario_clases` (
  `horario_id` int(11) NOT NULL,
  `horario` varchar(80) NOT NULL,
  `estado` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `horario_clases`
--

INSERT INTO `horario_clases` (`horario_id`, `horario`, `estado`) VALUES
(45, 'nocturno', 'activo');

-- --------------------------------------------------------

--
-- Table structure for table `mencion`
--

CREATE TABLE `mencion` (
  `mencion_id` int(11) NOT NULL,
  `mencion_mencion` varchar(80) DEFAULT NULL,
  `estado` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mencion`
--

INSERT INTO `mencion` (`mencion_id`, `mencion_mencion`, `estado`) VALUES
(32, 'analisis de sistemas ', 'activo'),
(34, 'administrasion de empresas', 'activo'),
(36, 'enfermeria', 'desactivo');

-- --------------------------------------------------------

--
-- Table structure for table `modalidad`
--

CREATE TABLE `modalidad` (
  `modalidad_id` int(11) NOT NULL,
  `modalidad_name` varchar(80) DEFAULT NULL,
  `modalidad_estado` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modalidad`
--

INSERT INTO `modalidad` (`modalidad_id`, `modalidad_name`, `modalidad_estado`) VALUES
(32, 'presenciales ', 'activo');

-- --------------------------------------------------------

--
-- Table structure for table `pais`
--

CREATE TABLE `pais` (
  `pais_id` int(11) NOT NULL,
  `pais_nombre` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pais`
--

INSERT INTO `pais` (`pais_id`, `pais_nombre`) VALUES
(49, 'Ecuatoriano(a)'),
(51, 'Peru(a)');

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `persona_id` int(11) NOT NULL,
  `dni_persona` varchar(50) NOT NULL,
  `nombres_persona` varchar(80) DEFAULT NULL,
  `email_persona` varchar(80) NOT NULL,
  `apellidos_persona` varchar(80) DEFAULT NULL,
  `carrera` int(11) NOT NULL,
  `mencion` int(11) NOT NULL,
  `modalidad` int(11) NOT NULL,
  `jornada` int(11) NOT NULL,
  `pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`persona_id`, `dni_persona`, `nombres_persona`, `email_persona`, `apellidos_persona`, `carrera`, `mencion`, `modalidad`, `jornada`, `pais`) VALUES
(11, '2200386874', 'Alexis Danis', 'alexis.ramirez@itsae.edu.ec', 'Ramirez Quezada', 44, 32, 32, 45, 49);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `clave` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `clave`) VALUES
(6, '@ignacio1998', 'ignacio1998'),
(7, 'admin', 'admin'),
(9, 'alexis1999', 'alexisramirez123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`carrera_id`),
  ADD UNIQUE KEY `carrera_name` (`carrera_name`);

--
-- Indexes for table `datos_generales`
--
ALTER TABLE `datos_generales`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni_2` (`dni`),
  ADD KEY `dni` (`dni`);

--
-- Indexes for table `horario_clases`
--
ALTER TABLE `horario_clases`
  ADD PRIMARY KEY (`horario_id`),
  ADD UNIQUE KEY `horario` (`horario`);

--
-- Indexes for table `mencion`
--
ALTER TABLE `mencion`
  ADD PRIMARY KEY (`mencion_id`),
  ADD UNIQUE KEY `mencion_mencion` (`mencion_mencion`);

--
-- Indexes for table `modalidad`
--
ALTER TABLE `modalidad`
  ADD PRIMARY KEY (`modalidad_id`),
  ADD UNIQUE KEY `modalidad_name` (`modalidad_name`);

--
-- Indexes for table `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`pais_id`),
  ADD UNIQUE KEY `pais_nombre` (`pais_nombre`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`persona_id`),
  ADD UNIQUE KEY `dni_persona` (`dni_persona`),
  ADD KEY `carrera` (`carrera`),
  ADD KEY `pais` (`pais`),
  ADD KEY `mencion` (`mencion`),
  ADD KEY `jornada` (`jornada`),
  ADD KEY `modalidad` (`modalidad`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrera`
--
ALTER TABLE `carrera`
  MODIFY `carrera_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `datos_generales`
--
ALTER TABLE `datos_generales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `horario_clases`
--
ALTER TABLE `horario_clases`
  MODIFY `horario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `mencion`
--
ALTER TABLE `mencion`
  MODIFY `mencion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `modalidad`
--
ALTER TABLE `modalidad`
  MODIFY `modalidad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pais`
--
ALTER TABLE `pais`
  MODIFY `pais_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `persona_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`pais`) REFERENCES `pais` (`pais_id`),
  ADD CONSTRAINT `persona_ibfk_2` FOREIGN KEY (`carrera`) REFERENCES `carrera` (`carrera_id`),
  ADD CONSTRAINT `persona_ibfk_3` FOREIGN KEY (`mencion`) REFERENCES `mencion` (`mencion_id`),
  ADD CONSTRAINT `persona_ibfk_4` FOREIGN KEY (`modalidad`) REFERENCES `modalidad` (`modalidad_id`),
  ADD CONSTRAINT `persona_ibfk_5` FOREIGN KEY (`jornada`) REFERENCES `horario_clases` (`horario_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
