-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2021 at 09:07 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazap`
--

-- --------------------------------------------------------

--
-- Table structure for table `dvorana`
--

DROP TABLE IF EXISTS `dvorana`;
CREATE TABLE IF NOT EXISTS `dvorana` (
  `id` int(20) NOT NULL,
  `naziv` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `sifodjel` int(20) NOT NULL,
  `kapacitet` int(10) NOT NULL,
  `tip` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `dvorana`
--

INSERT INTO `dvorana` (`id`, `naziv`, `sifodjel`, `kapacitet`, `tip`) VALUES
(4, 'Bo1', 100, 199, 'Bez dodatne opreme'),
(13, 'b11', 100, 50, 'Bez dodatne opreme'),
(20, 'a101', 100, 199, 'Dvorana s laboratorijem i projektorom');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

DROP TABLE IF EXISTS `korisnik`;
CREATE TABLE IF NOT EXISTS `korisnik` (
  `id` int(3) NOT NULL,
  `ime` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `prezime` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `sifodjel` int(3) DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `uloga` varchar(20) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `sifodjel`, `email`, `uloga`) VALUES
(1, 'paulina', 'juric', 100, 'pero.peric@gmail.com', 'Nastavnik');

-- --------------------------------------------------------

--
-- Table structure for table `prijava`
--

DROP TABLE IF EXISTS `prijava`;
CREATE TABLE IF NOT EXISTS `prijava` (
  `id` int(11) NOT NULL,
  `korisnickoIme` varchar(30) COLLATE utf8_croatian_ci NOT NULL,
  `lozinka` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `prijava`
--

INSERT INTO `prijava` (`id`, `korisnickoIme`, `lozinka`) VALUES
(1, 'paulina', 'paulina');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
