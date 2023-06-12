-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2023 at 09:16 AM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbdb`
--
CREATE DATABASE IF NOT EXISTS `himbisdi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `himbisdi`;

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

DROP TABLE IF EXISTS `pengurus`;
CREATE TABLE IF NOT EXISTS `pengurus` (
  `idpengurus` int(2) NOT NULL AUTO_INCREMENT,
  `namapengurus` varchar(200) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `jabatan2` varchar(150) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `periode` varchar(25) NOT NULL,
  PRIMARY KEY (`idpengurus`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`idpengurus`, `namapengurus`, `foto`, `jabatan`, `jabatan2`, `linkedin`, `instagram`,'periode') VALUES
('Hendrik Krisma', 'a926c7d2a69d3e179425bbb4267df51c.jpg', 'Wakil Ketua', '234232', 'asdasasd435', 'adsasdsadas345', '2022/2023');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
