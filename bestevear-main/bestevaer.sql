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
-- Database: `bestevaer`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `schepen`
--

CREATE TABLE `schepen` (
  `IMOno` int(10) UNSIGNED NOT NULL,
  `Naam` varchar(30) NOT NULL,
  `DWT` int(7) NOT NULL,
  `GT` int(7) NOT NULL,
  `Volume` float NOT NULL,
  `Afbeelding` varchar(2048) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `schepen`
--

INSERT INTO `schepen` (`IMOno`, `Naam`, `DWT`, `GT`, `Volume`, `Afbeelding`) VALUES
(9071052, 'HERMES', 5809, 3806, 6.843, NULL),
(9071076, 'NS ANGELA', 5714, 3806, 6.843, NULL),
(9123506, 'LUCKY STAR', 6800, 4178, 7.731, NULL),
(9311555, 'Triumph IV', 7150, 4039, 8189.1, NULL),
(9414735, 'SABRINA', 10030, 6278, 12.416, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(0, 6972530633, 'Marco', 'Snoek', '2021-01-21 09:28:43');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `schepen`
--
ALTER TABLE `schepen`
  ADD PRIMARY KEY (`IMOno`),
  ADD UNIQUE KEY `Naam` (`Naam`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
