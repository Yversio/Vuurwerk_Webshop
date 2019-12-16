<?php

# Alle variables
$servernaam = "localhost";
$gebruikersnaam = "root";
$password = "";
$dbnaam = "vuurwerk_webshop";

$conn = new PDO("mysql:host=$servernaam", $gebruikersnaam, $password);
// Connectie na dat de database is gemaakt
$conn1 = new PDO("mysql:host=$servernaam;dbname=$dbnaam", $gebruikersnaam, $password);

$sqlknal = "SELECT * FROM `producten` WHERE pr_categorie = 'Knal'";
$resultknal = $conn1->query($sqlknal);
$sqlsier = "SELECT * FROM `producten` WHERE pr_categorie = 'Sier'";
$resultsier = $conn1->query($sqlsier);
$sqlkinder = "SELECT * FROM `producten` WHERE pr_categorie = 'Kinder'";
$resultkinder = $conn1->query($sqlkinder);
$sqlkorting = "SELECT * FROM `producten` WHERE pr_categorie = 'Korting'";
$resultkorting = $conn1->query($sqlkorting);

$dropsql = "DROP DATABASE IF EXISTS `vuurwerk_webshop`;";
$createsql = "CREATE DATABASE `vuurwerk_webshop`;";

$createtable = (
  "DROP TABLE IF EXISTS `producten`;
  CREATE TABLE `producten` (
    `pr_pk_id` INT PRIMARY KEY,
    `pr_naam` VARCHAR(50) NOT NULL,
    `pr_aantal` INT NOT NULL,
    `pr_prijs` DOUBLE(5,2) NOT NULL,
    `pr_categorie` VARCHAR(20) NOT NULL,
    `pr_url_afbeelding` VARCHAR(100) NOT NULL
);");

$insert_table = (
  'INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (1, "Dumbum Single Shot", 100, 12.99,"Knal","https://i.ytimg.com/vi/r3PyVHvOT7k/maxresdefault.jpg");' .
  'INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (2, "Thunder Cracker", 250, 9.99, "Knal", "http://files.tinabag.webnode.nl/system_preview_detail_200000004-25e1126d8f/thunder%20cracker.jpg");' .
  'INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (3, "Kanon Slag", 250, 7.99, "Knal", "https://anypos-sbo.o.auroraobjects.eu/2/article/2.1406552408.png");' .
  'INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (4, "IncreDible", 50, 15.99, "Sier", "https://anypos.o.auroraobjects.eu/7/article/682.1539598217.png");' .
  'INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (5, "Crackling Chry 2.0", 75, 15.99, "Sier", "https://vpos-dev.o.auroraobjects.eu/image/cache/col_12/5da8304f1c609048439310.png");' .
  'INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (6, "Grand Prix Packet", 200, 104.99, "Sier", "https://fietsworld.nl/vendit/images/35E63EBC-95DE-4604-8995-ED4E3264109E.png");' .
  'INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (7, "Thunder Kings", 55, 15.99, "Korting", "https://www.zenavuurwerkdenbosch.nl/files/images/thunderking.png");' .
  'INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (8, "Red Blik", 50, 15.99, "Korting", "https://vpos-dev.o.auroraobjects.eu/image/cache/col_3/5d9dc975a8f1c841116217.png");' .
  'INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (9, "Big Momma", 175, 15.99, "Korting", "https://www.groenrijkoosterhout.nl/files/images/product-range/siervuurwerk-kopen-oosterhout_n.jpg");' .
  'INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (10, "Sterretjes 16 CM", 100, 3.99, "Kinder", "https://cdn.webshopapp.com/shops/210887/files/224518715/image.jpg");' .
  'INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (11, "Trektouwtjes", 285, 1.50, "Kinder", "https://www.originalfireworks.com/_clientfiles/arts/Sier%20vuurwerk/l_B508.png");' .
  'INSERT INTO `producten`(`pr_pk_id`, `pr_naam`, `pr_aantal`, `pr_prijs`, `pr_categorie`, `pr_url_afbeelding`) VALUES (12, "Jeugdpakket Deluxe", 305, 10.00, "Kinder", "https://www.vuurwerkdiscount.nl/media//catalog/category/kindervuurwerk.png");'
);
# Alle functies
# Connectie:
function ConnectDatabase($servernaam, $gebruikersnaam, $password){
    try {
        $conn = new PDO("mysql:host=$servernaam", $gebruikersnaam, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}

function CreateDatabase($dropsql, $createsql, $conn){
  try {
    $conn->exec($dropsql);
    $conn->exec($createsql);
  }
  catch(PDOException $e){
  }
}

function CreateTableSQL($conn1, $createtable, $insert_table){
  $conn1->exec($createtable);
  $conn1->exec($insert_table);
}

# Producten:
function ShowProductenKnal($sqlknal, $resultknal){
  while($row = $resultknal->fetch()){
    echo "<div class='vuurwerk_product Knal'>";
    echo "<img src=" .$row['pr_url_afbeelding'] ." alt='Knal Product' style='width:100%;'>";
    echo "<div class='beschrijving'";
    echo "<h4><b>" .$row['pr_naam'] ."</b></h4>";
    echo "<p>Dit is een knal product!</p><b>" .$row['pr_prijs'] . "</b><br>";
    echo "<button>Add to cart</button>";
    echo "</div>";
    echo "</div>";
  }
}

function ShowProductenSier($sqlsier, $resultsier){
  while($row = $resultsier->fetch()){
    echo "<div class='vuurwerk_product Sier'>";
    echo "<img src=" .$row['pr_url_afbeelding'] ." alt='Sier Product' style='width:100%;'>";
    echo "<div class='beschrijving'";
    echo "<h4><b>" .$row['pr_naam'] ."</b></h4>";
    echo "<p>Dit is een sier product</p><b>" .$row['pr_prijs'] . "</b><br>";
    echo "<button>Add to cart</button>";
    echo "</div>";
    echo "</div>";
  }
}

function ShowProductenKinder($sqlkinder, $resultkinder){
  while($row = $resultkinder->fetch()){
    echo "<div class='vuurwerk_product Kinder'>";
    echo "<img src=" .$row['pr_url_afbeelding'] ." alt='Sier Product' style='width:100%;'>";
    echo "<div class='beschrijving'";
    echo "<h4><b>" .$row['pr_naam'] ."</b></h4>";
    echo "<p>Dit is een Kinder product</p><b>" .$row['pr_prijs'] . "</b><br>";
    echo "<button>Add to cart</button>";
    echo "</div>";
    echo "</div>";
  }
}

function ShowProductenKorting($sqlkorting, $resultkorting){
  while($row = $resultkorting->fetch()){
    echo "<div class='vuurwerk_product Korting'>";
    echo "<img src=" .$row['pr_url_afbeelding'] ." alt='Sier Product' style='width:100%;'>";
    echo "<div class='beschrijving'";
    echo "<h4><b>" .$row['pr_naam'] ."</b></h4>";
    echo "<p>Op dit product zit korting</p><b>" .$row['pr_prijs'] . "</b><br>";
    echo "<button>Add to cart</button>";
    echo "</div>";
    echo "</div>";
  }
}

# Waar de functie uitgevoerd word
# Database aanmaken en connection
CreateDatabase($createsql, $dropsql, ConnectDatabase($servernaam, $gebruikersnaam, $password));
CreateTableSQL($conn1, $createtable, $insert_table);

# Voor de producten:
ShowProductenKnal($sqlknal, $resultknal);
ShowProductenSier($sqlsier, $resultsier);
ShowProductenKinder($sqlkinder, $resultkinder);
ShowProductenKorting($sqlkorting, $resultkorting);
?>
