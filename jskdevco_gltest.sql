-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2015 at 02:40 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jskdevco_gltest`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_conocimientos`
--

CREATE TABLE IF NOT EXISTS `tbl_conocimientos` (
`id` int(11) NOT NULL,
  `porcentaje` int(3) NOT NULL,
  `curso` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_conocimientos`
--

INSERT INTO `tbl_conocimientos` (`id`, `porcentaje`, `curso`) VALUES
(6, 80, 1),
(7, 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_empleado`
--

CREATE TABLE IF NOT EXISTS `tbl_empleado` (
`id` int(16) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `edad` int(3) NOT NULL,
  `direccion` text NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` varchar(12) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_empleado`
--

INSERT INTO `tbl_empleado` (`id`, `nombre`, `edad`, `direccion`, `estado`, `fecha_nacimiento`, `telefono`) VALUES
(6, 'Rene Enrique', 25, 'Mi direccion completa', 1, '1989-03-13', '1861323965.'),
(7, 'Rene Enrique', 25, 'Mi direccion completa', 1, '1989-03-13', '1861323965');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lenguajes`
--

CREATE TABLE IF NOT EXISTS `tbl_lenguajes` (
`id` int(11) NOT NULL,
  `lenguaje` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_lenguajes`
--

INSERT INTO `tbl_lenguajes` (`id`, `lenguaje`) VALUES
(6, 'Perl'),
(7, 'CSS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_conocimientos`
--
ALTER TABLE `tbl_conocimientos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_empleado`
--
ALTER TABLE `tbl_empleado`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lenguajes`
--
ALTER TABLE `tbl_lenguajes`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_conocimientos`
--
ALTER TABLE `tbl_conocimientos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_empleado`
--
ALTER TABLE `tbl_empleado`
MODIFY `id` int(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_lenguajes`
--
ALTER TABLE `tbl_lenguajes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
