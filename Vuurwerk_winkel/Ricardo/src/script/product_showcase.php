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
$result = $conn->query($sqlknal);

function ShowProducten($sqlknal, $result){
  while($row = $result->fetch()){
    echo "<div class='vuurwerk_product Knal'>";
    echo "<img src=" .$row['pr_url_afbeelding'] ." alt='Knal Product' style='width:100%;'>";
    echo "<div class='beschrijving'";
    echo "<h4><b>" .$row['pr_naam'] ."</b></h4>";
    echo "<p>Dit is een knal product</p>";
    echo "</div>";
    echo "</div>";
  }
}

CreateDatabase($servernaam, $gebruikersnaam, $password, $dbnaam);
ShowProducten($sqlknal, $result)
?>
