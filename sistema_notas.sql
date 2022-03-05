-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 05, 2022 at 02:52 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema_notas`
--

-- --------------------------------------------------------

--
-- Table structure for table `acumulan`
--

DROP TABLE IF EXISTS `acumulan`;
CREATE TABLE IF NOT EXISTS `acumulan` (
  `cod_ano_escolar` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `num_lapso` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `cod_asignatura` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `nota_parcial` int(11) NOT NULL,
  PRIMARY KEY (`cod_ano_escolar`,`num_lapso`,`cod_asignatura`,`cedula`),
  KEY `lapso_fk` (`cod_ano_escolar`,`num_lapso`),
  KEY `estudiante_acumula` (`cedula`),
  KEY `facumulan asignatura` (`cod_asignatura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acumulan`
--

INSERT INTO `acumulan` (`cod_ano_escolar`, `num_lapso`, `cod_asignatura`, `cedula`, `nota_parcial`) VALUES
('2021-2022', '1', '1', '28316308', 19),
('2021-2022', '1', '1', '29668074', 17),
('2021-2022', '2', '1', '28316308', 20),
('2021-2022', '2', '1', '29668074', 16),
('2021-2022', '3', '1', '28316308', 18),
('2021-2022', '3', '1', '29668074', 19);

-- --------------------------------------------------------

--
-- Table structure for table `ano_escolar`
--

DROP TABLE IF EXISTS `ano_escolar`;
CREATE TABLE IF NOT EXISTS `ano_escolar` (
  `cod_ano_escolar` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ano_inicio` int(4) NOT NULL,
  `ano_fin` int(4) NOT NULL,
  PRIMARY KEY (`cod_ano_escolar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ano_escolar`
--

INSERT INTO `ano_escolar` (`cod_ano_escolar`, `ano_inicio`, `ano_fin`) VALUES
('2020-2021', 2020, 2021),
('2021-2022', 2021, 2022);

-- --------------------------------------------------------

--
-- Table structure for table `asignatura`
--

DROP TABLE IF EXISTS `asignatura`;
CREATE TABLE IF NOT EXISTS `asignatura` (
  `cod_ano_escolar` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cod_grado` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `cod_asignatura` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_asignatura`),
  KEY `cod_ano_escolar` (`cod_ano_escolar`,`cod_grado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `asignatura`
--

INSERT INTO `asignatura` (`cod_ano_escolar`, `cod_grado`, `cod_asignatura`, `nombre`) VALUES
('2021-2022', '1', '1', 'Álgebra Lineal'),
('2021-2022', '1', '2', 'Matemáticas III'),
('2021-2022', '1', '3', 'Matemáticas II');

-- --------------------------------------------------------

--
-- Table structure for table `contratan`
--

DROP TABLE IF EXISTS `contratan`;
CREATE TABLE IF NOT EXISTS `contratan` (
  `cod_plantel` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_contrato` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_plantel`,`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contratan`
--

INSERT INTO `contratan` (`cod_plantel`, `cedula`, `tipo_contrato`) VALUES
('1', '12222773', 'Contratado'),
('1', '29582382', 'Fijo');

-- --------------------------------------------------------

--
-- Table structure for table `dictan`
--

DROP TABLE IF EXISTS `dictan`;
CREATE TABLE IF NOT EXISTS `dictan` (
  `cod_ano_escolar` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cod_grado` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `cod_asignatura` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_grado`,`cedula`),
  KEY `dictan_grado_fk` (`cod_ano_escolar`,`cod_grado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dictan`
--

INSERT INTO `dictan` (`cod_ano_escolar`, `cod_grado`, `cod_asignatura`, `cedula`) VALUES
('2021-2022', '1', '2', '12222773'),
('2021-2022', '1', '1', '29582382');

-- --------------------------------------------------------

--
-- Table structure for table `docente`
--

DROP TABLE IF EXISTS `docente`;
CREATE TABLE IF NOT EXISTS `docente` (
  `cedula` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cedula`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `docente`
--

INSERT INTO `docente` (`cedula`, `telefono`, `email`) VALUES
('12222773', '04120960038', 'luisgeronimo@gmail.com'),
('29582382', '04127955420', 'kevintrevor0905@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE IF NOT EXISTS `estudiante` (
  `cedula` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  PRIMARY KEY (`cedula`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `estudiante`
--

INSERT INTO `estudiante` (`cedula`, `fecha_ingreso`) VALUES
('28316308', '2018-10-25'),
('29668074', '2019-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `grado`
--

DROP TABLE IF EXISTS `grado`;
CREATE TABLE IF NOT EXISTS `grado` (
  `cod_ano_escolar` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cod_grado` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `cod_plantel` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `num_grado` int(2) NOT NULL,
  `cupo` int(4) NOT NULL,
  PRIMARY KEY (`cod_ano_escolar`,`cod_grado`),
  KEY `compone` (`cod_plantel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `grado`
--

INSERT INTO `grado` (`cod_ano_escolar`, `cod_grado`, `cod_plantel`, `num_grado`, `cupo`) VALUES
('2020-2021', '1', '1', 1, 40),
('2020-2021', '2', '1', 2, 40),
('2021-2022', '1', '1', 1, 40),
('2021-2022', '2', '1', 2, 40);

-- --------------------------------------------------------

--
-- Table structure for table `lapso`
--

DROP TABLE IF EXISTS `lapso`;
CREATE TABLE IF NOT EXISTS `lapso` (
  `cod_ano_escolar` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `num_lapso` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `mes_inicio` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mes_fin` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_ano_escolar`,`num_lapso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lapso`
--

INSERT INTO `lapso` (`cod_ano_escolar`, `num_lapso`, `mes_inicio`, `mes_fin`) VALUES
('2020-2021', '1', 'Mayo', 'Agosto'),
('2020-2021', '2', 'Agosto', 'Noviembre'),
('2020-2021', '3', 'Enero', 'Marzo'),
('2021-2022', '1', 'Mayo', 'Agosto'),
('2021-2022', '2', 'Agosto', 'Noviembre'),
('2021-2022', '3', 'Enero', 'Marzo');

-- --------------------------------------------------------

--
-- Table structure for table `matriculan`
--

DROP TABLE IF EXISTS `matriculan`;
CREATE TABLE IF NOT EXISTS `matriculan` (
  `cod_ano_escolar` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cod_plantel` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `cod_grado` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `seccion` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_ano_escolar`,`cod_plantel`,`cod_grado`,`cedula`),
  KEY `grado_fk` (`cod_ano_escolar`,`cod_grado`),
  KEY `plantel_fk` (`cod_plantel`),
  KEY `estudiante_fk` (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `matriculan`
--

INSERT INTO `matriculan` (`cod_ano_escolar`, `cod_plantel`, `cod_grado`, `cedula`, `seccion`) VALUES
('2021-2022', '1', '1', '28316308', 'A'),
('2021-2022', '1', '1', '29668074', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `obtienen`
--

DROP TABLE IF EXISTS `obtienen`;
CREATE TABLE IF NOT EXISTS `obtienen` (
  `cod_ano_escolar` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cod_asignatura` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `nota_final` int(11) NOT NULL,
  PRIMARY KEY (`cod_ano_escolar`,`cod_asignatura`,`cedula`),
  KEY `cod_asignatura` (`cod_asignatura`),
  KEY `cod_ano_escolar` (`cod_ano_escolar`),
  KEY `obtienen_ibfk_3` (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `obtienen`
--

INSERT INTO `obtienen` (`cod_ano_escolar`, `cod_asignatura`, `cedula`, `nota_final`) VALUES
('2021-2022', '1', '28316308', 19),
('2021-2022', '1', '29668074', 18);

-- --------------------------------------------------------

--
-- Table structure for table `persona_usuario`
--

DROP TABLE IF EXISTS `persona_usuario`;
CREATE TABLE IF NOT EXISTS `persona_usuario` (
  `cedula` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `permisos` int(1) NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `persona_usuario`
--

INSERT INTO `persona_usuario` (`cedula`, `nombres`, `apellidos`, `login`, `clave`, `permisos`) VALUES
('12222773', 'Luis Geronimo', 'Rojas Rojas', 'luisrojas', '462021', 2),
('14221391', 'Yarylui Elena', 'Noriega Rodríguez', 'yarylui', '1109', 3),
('28316308', 'Nestor Gabriel', 'Aguilar Rojas', 'nestoraguilar', '211001na', 4),
('29582382', 'Kevin David', 'Rojas Noriega', 'kevinrojas', '090501kd', 2),
('29668074', 'Maria Celeste del Jesús', 'Aguilera Garate', 'cotamella', '100202mc', 4),
('3889777', 'Yaritza Ramona', 'Rodríguez Jimenez', 'viejitayara', '2313', 3);

-- --------------------------------------------------------

--
-- Table structure for table `plantel`
--

DROP TABLE IF EXISTS `plantel`;
CREATE TABLE IF NOT EXISTS `plantel` (
  `cod_plantel` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `cod_zona` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nivel_educativo` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_plantel`),
  KEY `manejan` (`cod_zona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `plantel`
--

INSERT INTO `plantel` (`cod_plantel`, `cod_zona`, `nombre`, `direccion`, `nivel_educativo`) VALUES
('1', '1', 'Pbro. Manuel Montaner Salazar', 'Villa Rosa, Calle Principal', 'Secundaria'),
('2', '1', 'Argelia Laya', 'Villa Rosa, Sector H', 'Secundaria'),
('3', '2', 'Liceo Anzoategui', 'Puerto La Cruz', 'Secundaria');

-- --------------------------------------------------------

--
-- Table structure for table `prelan`
--

DROP TABLE IF EXISTS `prelan`;
CREATE TABLE IF NOT EXISTS `prelan` (
  `cod_asignatura1` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `cod_asignatura2` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_asignatura1`,`cod_asignatura2`),
  KEY `cod_asignatura1` (`cod_asignatura1`),
  KEY `cod_asignatura2` (`cod_asignatura2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prelan`
--

INSERT INTO `prelan` (`cod_asignatura1`, `cod_asignatura2`) VALUES
('2', '1'),
('3', '2');

-- --------------------------------------------------------

--
-- Table structure for table `representan`
--

DROP TABLE IF EXISTS `representan`;
CREATE TABLE IF NOT EXISTS `representan` (
  `cedula1` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `cedula2` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `parentesco` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cedula1`,`cedula2`),
  KEY `cedula1` (`cedula1`),
  KEY `cedula2` (`cedula2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `representan`
--

INSERT INTO `representan` (`cedula1`, `cedula2`, `parentesco`) VALUES
('14221391', '28316308', 'Madre'),
('3889777', '29668074', 'Abuela');

-- --------------------------------------------------------

--
-- Table structure for table `representante`
--

DROP TABLE IF EXISTS `representante`;
CREATE TABLE IF NOT EXISTS `representante` (
  `cedula` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `representante`
--

INSERT INTO `representante` (`cedula`, `telefono`, `email`) VALUES
('14221391', '04120950775', 'yarylui@gmail.com'),
('3889777', '04123526289', 'viejitayara@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `zona_educativa`
--

DROP TABLE IF EXISTS `zona_educativa`;
CREATE TABLE IF NOT EXISTS `zona_educativa` (
  `cod_zona` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cod_zona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `zona_educativa`
--

INSERT INTO `zona_educativa` (`cod_zona`, `estado`) VALUES
('1', 'Nueva Esparta'),
('2', 'Anzoategui');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acumulan`
--
ALTER TABLE `acumulan`
  ADD CONSTRAINT `estudiante_acumula` FOREIGN KEY (`cedula`) REFERENCES `estudiante` (`cedula`),
  ADD CONSTRAINT `facumulan asignatura` FOREIGN KEY (`cod_asignatura`) REFERENCES `asignatura` (`cod_asignatura`),
  ADD CONSTRAINT `lapso_fk` FOREIGN KEY (`cod_ano_escolar`,`num_lapso`) REFERENCES `lapso` (`cod_ano_escolar`, `num_lapso`);

--
-- Constraints for table `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`cod_ano_escolar`,`cod_grado`) REFERENCES `grado` (`cod_ano_escolar`, `cod_grado`);

--
-- Constraints for table `dictan`
--
ALTER TABLE `dictan`
  ADD CONSTRAINT `dictan_grado_fk` FOREIGN KEY (`cod_ano_escolar`,`cod_grado`) REFERENCES `grado` (`cod_ano_escolar`, `cod_grado`);

--
-- Constraints for table `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `docente_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `persona_usuario` (`cedula`);

--
-- Constraints for table `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `persona_usuario` (`cedula`);

--
-- Constraints for table `grado`
--
ALTER TABLE `grado`
  ADD CONSTRAINT `compone` FOREIGN KEY (`cod_plantel`) REFERENCES `plantel` (`cod_plantel`),
  ADD CONSTRAINT `pertece` FOREIGN KEY (`cod_ano_escolar`) REFERENCES `ano_escolar` (`cod_ano_escolar`);

--
-- Constraints for table `lapso`
--
ALTER TABLE `lapso`
  ADD CONSTRAINT `dividen` FOREIGN KEY (`cod_ano_escolar`) REFERENCES `ano_escolar` (`cod_ano_escolar`);

--
-- Constraints for table `matriculan`
--
ALTER TABLE `matriculan`
  ADD CONSTRAINT `estudiante_fk` FOREIGN KEY (`cedula`) REFERENCES `estudiante` (`cedula`),
  ADD CONSTRAINT `grado_fk` FOREIGN KEY (`cod_ano_escolar`,`cod_grado`) REFERENCES `grado` (`cod_ano_escolar`, `cod_grado`),
  ADD CONSTRAINT `plantel_fk` FOREIGN KEY (`cod_plantel`) REFERENCES `plantel` (`cod_plantel`);

--
-- Constraints for table `obtienen`
--
ALTER TABLE `obtienen`
  ADD CONSTRAINT `obtienen_ibfk_1` FOREIGN KEY (`cod_asignatura`) REFERENCES `asignatura` (`cod_asignatura`),
  ADD CONSTRAINT `obtienen_ibfk_2` FOREIGN KEY (`cod_ano_escolar`) REFERENCES `ano_escolar` (`cod_ano_escolar`),
  ADD CONSTRAINT `obtienen_ibfk_3` FOREIGN KEY (`cedula`) REFERENCES `estudiante` (`cedula`);

--
-- Constraints for table `plantel`
--
ALTER TABLE `plantel`
  ADD CONSTRAINT `manejan` FOREIGN KEY (`cod_zona`) REFERENCES `zona_educativa` (`cod_zona`);

--
-- Constraints for table `prelan`
--
ALTER TABLE `prelan`
  ADD CONSTRAINT `prelan_ibfk_1` FOREIGN KEY (`cod_asignatura1`) REFERENCES `asignatura` (`cod_asignatura`),
  ADD CONSTRAINT `prelan_ibfk_2` FOREIGN KEY (`cod_asignatura1`) REFERENCES `asignatura` (`cod_asignatura`),
  ADD CONSTRAINT `prelan_ibfk_3` FOREIGN KEY (`cod_asignatura2`) REFERENCES `asignatura` (`cod_asignatura`);

--
-- Constraints for table `representan`
--
ALTER TABLE `representan`
  ADD CONSTRAINT `representan_ibfk_1` FOREIGN KEY (`cedula1`) REFERENCES `representante` (`cedula`),
  ADD CONSTRAINT `representan_ibfk_2` FOREIGN KEY (`cedula2`) REFERENCES `estudiante` (`cedula`);

--
-- Constraints for table `representante`
--
ALTER TABLE `representante`
  ADD CONSTRAINT `representante_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `persona_usuario` (`cedula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
