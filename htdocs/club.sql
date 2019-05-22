-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 22 mei 2019 om 19:24
-- Serverversie: 5.7.21
-- PHP-versie: 5.6.35

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
-- Tabelstructuur voor tabel `evenement/user`
--

DROP TABLE IF EXISTS `evenement/user`;
CREATE TABLE IF NOT EXISTS `evenement/user` (
  `evenement_id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `evenementen`
--

DROP TABLE IF EXISTS `evenementen`;
CREATE TABLE IF NOT EXISTS `evenementen` (
  `evenement_id` int(6) NOT NULL AUTO_INCREMENT,
  `datum` date NOT NULL,
  `omschrijving` varchar(60) NOT NULL,
  `geannuleerd` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`evenement_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `evenementen`
--

INSERT INTO `evenementen` (`evenement_id`, `datum`, `omschrijving`, `geannuleerd`) VALUES
(1, '2019-06-21', 'Motorrit Ardennnen', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(6) NOT NULL AUTO_INCREMENT,
  `naam` varchar(60) NOT NULL,
  `wachtwoord` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `toegelaten` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `naam`, `wachtwoord`, `email`, `toegelaten`) VALUES
(1, 'Vincent', 'v1nc3nt', 'vincent@mail.nl', 0),
(2, 'Dimphy', '123', 'dimphy_@hotmail.com', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
