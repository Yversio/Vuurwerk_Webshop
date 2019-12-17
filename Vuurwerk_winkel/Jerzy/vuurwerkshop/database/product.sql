DROP DATABASE IF EXISTS `vuurwerk`;
CREATE DATABASE `vuurwerk`;

DROP TABLE IF EXISTS `product`;
  CREATE TABLE `product` (
    `pr_naam` VARCHAR(50) PRIMARY KEY NOT NULL,
    `pr_aantal` INT NOT NULL,
    `pr_prijs` DOUBLE(5,2) NOT NULL,
    `pr_categorie` VARCHAR(20) NOT NULL,
    `pr_url_afbeelding` VARCHAR(150) NOT NULL
);

INSERT INTO `product`(`pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES ("Bazooka", 100, 5.99,"Knal","https://www.devuurwerkwinkel.nl/mme/upload/1001_Wgr.jpg");
INSERT INTO `product`(`pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES ("Flashing Cobra", 250, 9.99, "Knal", "http://www.knalgoed.be/thumbnail/full/8362c349d37a7d3167b22e22308d3364.jpg");
INSERT INTO `product`(`pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES ("Flying Dragon", 250, 4.99, "Knal", "https://anypos.o.auroraobjects.eu/1300/article/1255.1545481667.jpeg");
INSERT INTO `product`(`pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES ("Adonis", 50, 25.00, "Sier", "https://www.vuurwerktoppers.nl/uploads/product-assets/1177/5b2d0d0b3a21d_336x500.jpg");
INSERT INTO `product`(`pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES ("Big Kratos", 75, 36.00, "Sier", "https://www.orkavuurwerk.nl/webshop/public/img/product/3612_498646.jpg");
INSERT INTO `product`(`pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES ("Angry Grizzly", 200, 49.99, "Sier", "https://www.vuurwerktoppers.nl/uploads/product-assets/487/5b2d10e805f8c_336x500.jpg");
INSERT INTO `product`(`pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES ("Sterretjes 16 CM", 100, 2.50, "Kinder", "https://cdn.webshopapp.com/shops/210887/files/224518715/image.jpg");
INSERT INTO `product`(`pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES ("Trektouwtjes", 285, 1.50, "Kinder", "https://www.vuurwerktoppers.nl/uploads/product-assets/174/564af3b363b01_700x700.jpg");
INSERT INTO `product`(`pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES ("Knalerwten", 305, 2.00, "Kinder", "http://duitsvuurwerkkopen.nl/wp-content/uploads/2017/10/1659Knalerwten_2016.jpg");