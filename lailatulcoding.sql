-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2015 at 07:23 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lailatulcoding`
--
CREATE DATABASE IF NOT EXISTS `lailatulcoding` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lailatulcoding`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `level` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `level`) VALUES
(1, 'admin', '870813b981206e6ba973fce3b09d3582ce8fde2c', 'fazhaldarul@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `nama_config` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `nama_config`, `status`) VALUES
(1, 'show_event', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(5) NOT NULL AUTO_INCREMENT,
  `nama_penyelenggara` varchar(150) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telpon` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jml_perserta` int(5) DEFAULT NULL,
  `tahun` int(5) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
  `id_peserta` int(10) NOT NULL AUTO_INCREMENT,
  `nama_peserta` varchar(150) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telpon` varchar(15) DEFAULT NULL,
  `jobs` varchar(50) NOT NULL,
  `skill` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_peserta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nama_peserta`, `email`, `telpon`, `jobs`, `skill`) VALUES
(13, 'fazhal', 'fazhaldarul@gmail.com', '08996017754', 'developer', 'html,css'),
(14, 'fazhal', 'fazhaldarul@gmail.com', '0891023', 'Designer', 'asdasd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
