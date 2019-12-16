DROP DATABASE IF EXISTS `vuurwerk_webshop`;
CREATE DATABASE `vuurwerk_webshop`;
USE `vuurwerk_Webshop`;

DROP TABLE IF EXISTS `producten`;
CREATE TABLE `producten` (
    `pr_pk_id` INT PRIMARY KEY,
    `pr_naam` VARCHAR(50) NOT NULL,
    `pr_aantal` INT NOT NULL,
    `pr_prijs` DOUBLE(5,2) NOT NULL,
    `pr_categorie` VARCHAR(20) NOT NULL,
    `pr_url_afbeelding` VARCHAR(100) NOT NULL
);

-- Knal Vuurwerk
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (1, 'Dumbum Single Shot', 100, 12.99,'Knal',"https://i.ytimg.com/vi/r3PyVHvOT7k/maxresdefault.jpg");
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (2, 'Thunder Cracker', 250, 9.99, 'Knal', "http://files.tinabag.webnode.nl/system_preview_detail_200000004-25e1126d8f/thunder%20cracker.jpg");
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (3, 'Kanon Slag', 250, 7.99, 'Knal', "https://anypos-sbo.o.auroraobjects.eu/2/article/2.1406552408.png");
-- Sier Vuurwerk
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (4, 'IncreDible', 50, 15.99, 'Sier', "https://anypos.o.auroraobjects.eu/7/article/682.1539598217.png");
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (5, 'Crackling Chry 2.0', 75, 15.99, 'Sier', "https://vpos-dev.o.auroraobjects.eu/image/cache/col_12/5da8304f1c609048439310.png");
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (6, 'Grand Prix Packet', 200, 104.99, 'Sier', "https://fietsworld.nl/vendit/images/35E63EBC-95DE-4604-8995-ED4E3264109E.png");
-- Korting Vuurwerk
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (7, 'Thunder Kings', 55, 15.99, 'Korting', "https://www.zenavuurwerkdenbosch.nl/files/images/thunderking.png");
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (8, 'Red Blik', 50, 15.99, 'Korting', "https://vpos-dev.o.auroraobjects.eu/image/cache/col_3/5d9dc975a8f1c841116217.png");
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (9, 'Big Momma', 175, 15.99, 'Korting', "https://www.groenrijkoosterhout.nl/files/images/product-range/siervuurwerk-kopen-oosterhout_n.jpg");
-- Kinder Vuurwerk
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (10, 'Sterretjes 16 CM', 100, 3.99, 'Kinder', "https://cdn.webshopapp.com/shops/210887/files/224518715/image.jpg");
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (11, 'Trektouwtjes', 285, 1.50, 'Kinder', "https://www.originalfireworks.com/_clientfiles/arts/Sier%20vuurwerk/l_B508.png");
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (12, 'Jeugdpakket Deluxe', 305, 10.00, 'Kinder', "https://www.vuurwerkdiscount.nl/media//catalog/category/kindervuurwerk.png");
