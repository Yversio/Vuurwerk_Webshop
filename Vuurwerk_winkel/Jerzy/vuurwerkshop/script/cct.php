<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "vuurwerk";
 
$secondconn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
 
$knalproducten = "SELECT * FROM `product` WHERE pr_categorie = 'Knal'";
$uitkomstknal = $secondconn->query($knalproducten);
 
$sierproducten = "SELECT * FROM `product` WHERE pr_categorie = 'Sier'";
$uitkomstsier = $secondconn->query($sierproducten);
 
$kinderproducten = "SELECT * FROM `product` WHERE pr_categorie = 'Kinder'";
$uitkomstkinder = $secondconn->query($kinderproducten);
 
function ConnectDatabase($servernaam, $gebruikersnaam, $password){
  try {
    $connection = new PDO("mysql:host=$servernaam", $gebruikersnaam, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  return $connection;
}
 
function KnalProductTonen($uitkomstknal){
  while($uitkomst = $uitkomstknal->fetch()){
    echo "<div class='vuurwerk_product Knal'>";
        echo "<img src=" .$uitkomst['pr_url_afbeelding'] ." alt='Knal Product' style='width:100%;'>";
        echo "<div class='beschrijving'";
            echo "<h4><b>" .$uitkomst['pr_naam'] ."</b></h4>";
            echo "<p>Dit is een knal product!</p><b>" .$uitkomst['pr_prijs'] . "</b><br>";
            echo "<button>Toevoegen aan winkelwagen!</button>";
        echo "</div>";
    echo "</div>";
  }
}
function SierProductTonen($uitkomstsier){
  while($uitkomst = $uitkomstsier->fetch()){
    echo "<div class='vuurwerk_product Sier'>";
        echo "<img src=" .$uitkomst['pr_url_afbeelding'] ." alt='Sier Product' style='width:100%;'>";
        echo "<div class='beschrijving'";
            echo "<h4><b>" .$uitkomst['pr_naam'] ."</b></h4>";
            echo "<p>Dit is een sier product</p><b>" .$uitkomst['pr_prijs'] . "</b><br>";
            echo "<button>Toevoegen aan winkelwagen!</button>";
        echo "</div>";
    echo "</div>";
  }
}
function KinderProductTonen($uitkomstkinder){
  while($uitkomst = $uitkomstkinder->fetch()){
    echo "<div class='vuurwerk_product Kinder'>";
        echo "<img src=" .$uitkomst['pr_url_afbeelding'] ." alt='Sier Product' style='width:100%;'>";
        echo "<div class='beschrijving'";
            echo "<h4><b>" .$uitkomst['pr_naam'] ."</b></h4>";
            echo "<p>Dit is een Kinder product</p><b>" .$uitkomst['pr_prijs'] . "</b><br>";
            echo "<button>Toevoegen aan winkelwagen!</button>";
        echo "</div>";
    echo "</div>";
  }
}
 
ConnectDatabase($servername, $username, $password);
KnalProductTonen($uitkomstknal);
SierProductTonen($uitkomstsier);
KinderProductTonen($uitkomstkinder);
?>