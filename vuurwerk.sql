-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 dec 2019 om 14:45
-- Serverversie: 10.4.6-MariaDB
-- PHP-versie: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vuurwerksite`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `naam` varchar(50) NOT NULL,
  `prijs` double(5,2) NOT NULL,
  `catogorie` varchar(30) NOT NULL,
  `voorraad` int(11) NOT NULL,
  `url_afbeelding` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geÃ«xporteerd voor tabel `product`
--

INSERT INTO `product` (`naam`, `prijs`, `catogorie`, `voorraad`, `url_afbeelding`) VALUES
('cobra 8', 15.00, 'knalvuurwerk', 10, 'cobra.jpg'),
('fontein ', 2.00, 'siervuurwerk', 10, 'fontein.jpg'),
('grondbloemen', 2.00, 'siervuurwerk', 10, 'grondbloem.jpg'),
('polse nitraat', 10.00, 'knalvuurwerk', 10, 'nitraat.jpg'),
('sterretjes', 1.00, 'siervuurwerk', 10, 'sterretjes.jpg'),
('vlinders', 12.00, 'knalvuurwerk', 10, 'vlinder.jpg');

--
-- Indexen voor geÃ«xporteerde tabellen
--

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`naam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
