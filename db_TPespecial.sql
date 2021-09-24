-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 24, 2021 at 07:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_TPespecial`
--

-- --------------------------------------------------------

--
-- Table structure for table `Autores`
--

CREATE TABLE `Autores` (
  `Id_autor` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Autores`
--

INSERT INTO `Autores` (`Id_autor`, `Nombre`, `Apellido`) VALUES
(1, 'Stephen', 'King'),
(2, 'Julio', 'Verne');

-- --------------------------------------------------------

--
-- Table structure for table `Libros`
--

CREATE TABLE `Libros` (
  `id_libros` int(11) NOT NULL,
  `Titulo` varchar(45) NOT NULL,
  `Genero` varchar(45) NOT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Id_autor` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Autores`
--
ALTER TABLE `Autores`
  ADD PRIMARY KEY (`Id_autor`);

--
-- Indexes for table `Libros`
--
ALTER TABLE `Libros`
  ADD PRIMARY KEY (`Id_autor`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Libros`
--
ALTER TABLE `Libros`
  ADD CONSTRAINT `fk_Autores_Libros` FOREIGN KEY (`Id_autor`) REFERENCES `Autores` (`Id_autor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
