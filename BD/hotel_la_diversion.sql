-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 11:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_la_diversion`
--

-- --------------------------------------------------------

--
-- Table structure for table `habitaciones`
--

CREATE TABLE `habitaciones` (
  `nro_habitacion` int(11) NOT NULL,
  `tipo_habitacion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `habitaciones`
--

INSERT INTO `habitaciones` (`nro_habitacion`, `tipo_habitacion`) VALUES
(1, 'single'),
(2, 'single'),
(3, 'single'),
(4, 'single'),
(5, 'single'),
(6, 'double'),
(7, 'double'),
(8, 'double'),
(9, 'king'),
(10, 'king');

-- --------------------------------------------------------

--
-- Table structure for table `reporte`
--

CREATE TABLE `reporte` (
  `id_report` int(11) NOT NULL,
  `calificacion` float NOT NULL,
  `fecha_check_out` date NOT NULL,
  `nro_habitacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reserva`
--

CREATE TABLE `reserva` (
  `rut` int(8) NOT NULL,
  `habitacion_reservada` int(11) NOT NULL,
  `cant_tours` int(11) NOT NULL,
  `fecha_check_out` date NOT NULL,
  `fecha_check_in` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id_tour` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `medio_transporte` varchar(30) NOT NULL,
  `imagen` blob NOT NULL,
  `nro_habitacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`nro_habitacion`);

--
-- Indexes for table `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id_report`),
  ADD KEY `fecha_checkout` (`fecha_check_out`),
  ADD KEY `nro_habitacion` (`nro_habitacion`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`rut`),
  ADD KEY `fecha_check_out` (`fecha_check_out`),
  ADD KEY `fecha_check_in` (`fecha_check_in`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id_tour`),
  ADD KEY `tours_ibfk_1` (`nro_habitacion`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `reporte_ibfk_1` FOREIGN KEY (`fecha_check_out`) REFERENCES `reserva` (`fecha_check_out`),
  ADD CONSTRAINT `reporte_ibfk_2` FOREIGN KEY (`nro_habitacion`) REFERENCES `habitaciones` (`nro_habitacion`);

--
-- Constraints for table `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `tours_ibfk_1` FOREIGN KEY (`nro_habitacion`) REFERENCES `habitaciones` (`nro_habitacion`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
