-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 jan 2021 om 14:43
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactform`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contactdata`
--

CREATE TABLE `contactdata` (
  `id` int(11) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(55) NOT NULL,
  `message` text NOT NULL,
  `attachement` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `contactdata`
--

INSERT INTO `contactdata` (`id`, `firstname`, `lastname`, `phone`, `email`, `message`, `attachement`) VALUES
(4, 'Marco', 'Snoek', '611831322', 'snoekmarco@gmail.com', 'Hallo test test', NULL),
(5, 'CJ', 'Snoek', '628954017', 'snoekmarco@gmail.com', 'dsfasdf', NULL),
(6, 'asdQSD', 'QWSDqw', '213123412', 'asfdw@asfdwsf.jdf3e', '12341234', NULL),
(7, 'sdd', 'asd', '2131241', 'sfqwdf@jawsdfk.kvke', 'wejkfiueqf', NULL),
(8, 'hjwero', 'wekjrjiw', '81283838', 'sjkbjiw@jkewgif.dijue', 'jkwbfuiqwegfjhegfe', NULL),
(9, 'CJ', 'Snoek', '628954017', 'snoekmarco@gmail.com', 'jksdj', NULL),
(10, 'CJ', 'Snoek', '628954017', 'snoekmarco@gmail.com', 'jksdj', NULL),
(11, 'CJ', 'Snoek', '628954017', 'snoekmarco@gmail.com', 'sacAs', NULL),
(12, 'CJ', 'Snoek', '628954017', 'snoekmarco@gmail.com', 'wdwq', NULL),
(13, 'CJ', 'Snoek', '628954017', 'snoekmarco@gmail.com', 'wdwq', NULL);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contactdata`
--
ALTER TABLE `contactdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contactdata`
--
ALTER TABLE `contactdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
