<?php

$servernaam = "localhost";
$gebruikersnaam = "root";
$password = "";
$dbnaam = "vuurwerk_webshop";

function ConnectDatabase($servernaam, $gebruikersnaam, $password, $dbnaam){
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

ConnectDatabase($servernaam, $gebruikersnaam, $password, $dbnaam);
ShowProductenKnal($sqlknal, $resultknal);
ShowProductenSier($sqlsier, $resultsier);
?>
