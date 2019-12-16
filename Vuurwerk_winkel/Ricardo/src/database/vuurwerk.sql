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
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (1, 'Dumbum Single Shot', 100, 12.99,'Knal',"https://i.ytimg.com/vi/r3PyVHvOT7k/maxresdefault.jpg");
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (2, '', 250, 159.99, 'Knal', "");
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (3, '', 250, 7.99, 'Knal', "");
-- Sier Vuurwerk
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (4, '', 50, 15.99, 'Sier', "");
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (5, '', 75, 15.99, 'Sier', "");
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (6, '', 200, 15.99, 'Sier', "");
-- Korting Vuurwerk
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (7, '', 55, 15.99, 'Korting', "");
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (8, '', 50, 15.99, 'Korting', "");
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (9, '', 175, 15.99, 'Korting', "");
-- Kinder Vuurwerk
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (10, '', 100, 3.99, 'Kinder', "");
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (11, '', 285, 1.50, 'Kinder', "");
INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (12, '', 305, 10.00, 'Kinder', ""); 
