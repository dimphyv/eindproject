-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 15, 2019 at 06:57 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `club`
--

-- --------------------------------------------------------

--
-- Table structure for table `evenement/user`
--

DROP TABLE IF EXISTS `evenement/user`;
CREATE TABLE IF NOT EXISTS `evenement/user` (
  `evenement_id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `evenementen`
--

DROP TABLE IF EXISTS `evenementen`;
CREATE TABLE IF NOT EXISTS `evenementen` (
  `evenement_id` int(6) NOT NULL AUTO_INCREMENT,
  `datum` date NOT NULL,
  `omschrijving` varchar(60) NOT NULL,
  `geannuleerd` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`evenement_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(6) NOT NULL AUTO_INCREMENT,
  `naam` varchar(60) NOT NULL,
  `wachtwoord` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `toegelaten` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
