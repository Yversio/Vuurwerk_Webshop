-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 dec 2019 om 11:19
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
-- Database: `vuurwerkshop`
--
CREATE DATABASE IF NOT EXISTS `vuurwerkshop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vuurwerkshop`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `Naam` varchar(50) NOT NULL,
  `Prijs` double(5,2) NOT NULL,
  `Catagorie` varchar(30) NOT NULL,
  `Voorraad` int(11) NOT NULL,
  `Url_Afbeelding` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`Naam`, `Prijs`, `Catagorie`, `Voorraad`, `Url_Afbeelding`) VALUES
('Big Momma Siervuurwerk', 25.50, 'Sier', 35, 'https://www.groenrijkdenbosch.nl/files/images/product-range/siervuurwerk-verkoop-den-bosch_n.jpg'),
('Mad dog ultra bomb xl', 19.99, 'Knal', 10, 'https://www.grootvuurwerk.nl/product_afbeeldingen/new-big/2022-ultra-bomb-cracker-395-gram.jpg'),
('Stilettos Knalvuurwerk', 20.00, 'Knal', 20, 'https://upload.vuurwerkcloud.nl/images/lesli/02030%20Stiletto\'s.png'),
('Super Screamer Siervuurwerk', 16.70, 'Sier', 25, 'https://vpos-dev.o.auroraobjects.eu/image/cache/col_3/5da8401ad75d0372187264.png'),
('Suspicious Siervuurwerk', 12.99, 'Sier', 16, 'https://vuurwerk-winkel.eu/wp-content/uploads/2018/09/Cafferata-Suspicious-247x296.png'),
('Thunder Xl Knalvuurwerk', 35.50, 'Knal', 50, 'https://anypos-sbo.o.auroraobjects.eu/2/article/1.1502959169.png');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Naam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
