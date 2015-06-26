-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 26 Jun 2015 pada 19.23
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `lailatulcoding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `infos`
--

CREATE TABLE IF NOT EXISTS `infos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kota` varchar(255) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `dev_total` int(11) NOT NULL DEFAULT '0',
  `des_total` int(11) NOT NULL DEFAULT '0',
  `pro_total` int(11) NOT NULL DEFAULT '0',
  `don_total` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `infos`
--

INSERT INTO `infos` (`id`, `kota`, `tahun`, `dev_total`, `des_total`, `pro_total`, `don_total`, `created_at`, `updated_at`) VALUES
(5, 'B', '2015', 2, 2, 22, 2, '0000-00-00 00:00:00', '2015-06-26 17:20:10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
