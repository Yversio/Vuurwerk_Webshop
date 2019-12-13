DROP DATABASE IF EXISTS `vuurwerk_webshop`;
CREATE DATABASE `vuurwerk_webshop`;
USE `vuurwerk_Webshop`;

DROP TABLE IF EXISTS `producten`;
CREATE TABLE `producten` (
    `pr_pk_id` INT PRIMARY KEY,
    `pr_naam` VARCHAR(50) NOT NULL,
    `pr_prijs` DOUBLE(5,2) NOT NULL,
    `pr_categorie` VARCHAR(20) NOT NULL,
    `pr_url_afbeelding` VARCHAR(100) NOT NULL
);

INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (1, 'Dumbum Single Shot',12.99,'Knal',"https://i.ytimg.com/vi/r3PyVHvOT7k/maxresdefault.jpg");
