-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2019 at 11:26 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_jgallito`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `comments` text NOT NULL,
  `date_publish` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comments`, `date_publish`) VALUES
(1, 'jimboy', 'jimgalz was here...', '2019-10-12 01:17:49'),
(2, 'kagwaporanako', 'ayaw pagbuot!', '2019-10-23 08:34:37'),
(3, 'aidssraios', 'asfasdf', '2019-10-23 09:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE IF NOT EXISTS `tbl_about` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `d_birth` varchar(100) NOT NULL,
  `p_birth` varchar(100) NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `language` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `f_occupation` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `m_occupation` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`ID`, `img`, `fullname`, `address`, `d_birth`, `p_birth`, `age`, `gender`, `language`, `father_name`, `f_occupation`, `mother_name`, `m_occupation`) VALUES
(1, './assets/img/galz.jpg', 'Jimboy P. Gallito', 'Gumabon, Magsaysay, Misamis Oriental', 'April 24, 1996', 'Palao, Tubod, Lanao Del Norte', 23, 'Male', 'Bisaya, Tagalog, English', 'Cloudio Gallito', 'Farmer', 'Julieta R. Paquit', 'Housewife');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop`
--

CREATE TABLE IF NOT EXISTS `tbl_shop` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(100) NOT NULL,
  `img_url` text NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_shop`
--

INSERT INTO `tbl_shop` (`prod_id`, `prod_name`, `img_url`, `price`) VALUES
(1, 'RAIDER 150 FI', './assets/img/Suzuki_Raider_R150_Fi_L_1.jpg', 110000),
(2, 'SNIPER 150 FI', './assets/img/Yamaha_Sniper150mxi_L_1.jpg', 98000),
(3, 'TFX 150', './assets/img/tfx-matte-red.jpg', 148000),
(4, 'YAMAHA MIO AEROX 155', './assets/img/Yamaha_Mio_Aerox155_L_1.jpg', 102000),
(5, 'RS 150', './assets/img/rs-150-red-white.jpg', 99800),
(6, 'CRF 150L', './assets/img/CRF-150L.jpg', 110000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `passwd` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `passwd`) VALUES
(4, 'jim', 'galz'),
(6, 'admin', 'admin123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
