<?php

$servernaam = "localhost";
$gebruikersnaam = "root";
$password = "";
$dbnaam = "vuurwerk_webshop";

function CreateDatabase($servernaam, $gebruikersnaam, $password, $dbnaam){
  try {
  $conn = new PDO("mysql:host=$servernaam;dbname=$dbnaam", $gebruikersnaam, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch (PDOException $e){
    echo "Connection Failed: " .$e->getMessage();
  }
}

$conn = new PDO("mysql:host=$servernaam;dbname=$dbnaam", $gebruikersnaam, $password);
$sqlknal = "SELECT * FROM `producten` WHERE pr_categorie = 'Knal'";
$resultknal = $conn->query($sqlknal);

function ShowProductenKnal($sqlknal, $resultknal){
  while($row = $resultknal->fetch()){
    echo "<div class='vuurwerk_product Knal'>";
    echo "<img src=" .$row['pr_url_afbeelding'] ." alt='Knal Product' style='width:100%;'>";
    echo "<div class='beschrijving'";
    echo "<h4><b>" .$row['pr_naam'] ."</b></h4>";
    echo "<p>Dit is een knal product</p>";
    echo "<button>Add to cart</button>";
    echo "</div>";
    echo "</div>";
  }
}

$sqlsier = "SELECT * FROM `producten` WHERE pr_categorie = 'Sier'";
$resultsier = $conn->query($sqlsier);

function ShowProductenSier($sqlsier, $resultsier){
  while($row = $resultsier->fetch()){
    echo "<div class='vuurwerk_product Sier'>";
    echo "<img src=" .$row['pr_url_afbeelding'] ." alt='Sier Product' style='width:100%;'>";
    echo "<div class='beschrijving'";
    echo "<h4><b>" .$row['pr_naam'] ."</b></h4>";
    echo "<p>Dit is een sier product</p>";
    echo "<button>Add to cart</button>";
    echo "</div>";
    echo "</div>";
  }
}

$sqlkinder = "SELECT * FROM `producten` WHERE pr_categorie = 'Kinder'";
$resultkinder = $conn->query($sqlkinder);

function ShowProductenKinder($sqlkinder, $resultkinder){
  while($row = $resultkinder->fetch()){
    echo "<div class='vuurwerk_product Kinder'>";
    echo "<img src=" .$row['pr_url_afbeelding'] ." alt='Sier Product' style='width:100%;'>";
    echo "<div class='beschrijving'";
    echo "<h4><b>" .$row['pr_naam'] ."</b></h4>";
    echo "<p>Dit is een Kinder product</p>";
    echo "<button>Add to cart</button>";
    echo "</div>";
    echo "</div>";
  }
}

$sqlkorting = "SELECT * FROM `producten` WHERE pr_categorie = 'Korting'";
$resultkorting = $conn->query($sqlkorting);

function ShowProductenKorting($sqlkorting, $resultkorting){
  while($row = $resultkorting->fetch()){
    echo "<div class='vuurwerk_product Korting'>";
    echo "<img src=" .$row['pr_url_afbeelding'] ." alt='Sier Product' style='width:100%;'>";
    echo "<div class='beschrijving'";
    echo "<h4><b>" .$row['pr_naam'] ."</b></h4>";
    echo "<p>Op dit product zit korting</p>";
    echo "<button>Add to cart</button>";
    echo "</div>";
    echo "</div>";
  }
}

CreateDatabase($servernaam, $gebruikersnaam, $password, $dbnaam);
ShowProductenKnal($sqlknal, $resultknal);
ShowProductenSier($sqlsier, $resultsier);
ShowProductenKinder($sqlkinder, $resultkinder);
ShowProductenKorting($sqlkorting, $resultkorting);
?>
