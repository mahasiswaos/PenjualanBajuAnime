-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 19, 2014 at 08:59 PM
-- Server version: 5.5.37
-- PHP Version: 5.5.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `anime`
--

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE IF NOT EXISTS `kurir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namakurir` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `kota` varchar(45) DEFAULT NULL,
  `kodepos` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id`, `namakurir`, `alamat`, `kota`, `kodepos`, `foto`) VALUES
(1, 'JNE', 'Jl. Amir Hamzah No. ZZ', 'Mataram', 83125, NULL),
(2, 'TIKI', 'Jl. Pejanggik No. YY', 'Mataram', 83125, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namaproduk` varchar(45) DEFAULT NULL,
  `jeniskain` varchar(30) DEFAULT NULL,
  `warna` varchar(20) DEFAULT NULL,
  `ukuran` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `namaproduk`, `jeniskain`, `warna`, `ukuran`) VALUES
(1, 'Zoro One Piece', 'Jaket', 'Biru', 'M'),
(2, 'Ichigo Bleach', 'Kaos', 'Hitam', 'L'),
(4, 'Luffy One Piece', 'Kaos', 'Putih', 'XL');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `kota` varchar(45) DEFAULT NULL,
  `kodepos` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `kota`, `kodepos`) VALUES
(2, 'Saktiawan', 'Jl. Aneka 3 No. 28', 'Mataram', 83125),
(3, 'Edy Satriwawan', 'Dasan Sari', 'Mataram', 83125),
(4, 'I Made Wira Gargita lenge', 'Jl. Ismail No. AA', 'Mataram', 83125),
(8, 'aytitik', 'kasfhalskhf', 'lkahsdlkhaslh', 98789);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
