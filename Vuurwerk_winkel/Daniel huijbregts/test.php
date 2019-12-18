<html>

<link href="style.css" type="text/css" rel="stylesheet"/>

<body>
<div class="header">
<div class="topnav">
  <div align="right" style="border:20px">
  <a href="#">Link</a>
  <a href="#">Link</a>
  <a href="#">Link</a>
<button style="font-size:24px">Shopping cart<i class="fa fa-shopping-cart"></i></button>
</div>
</div>
</div>
<?php




// Auteur: Voornaam Achternaam klas
try {
	
// initialisatie
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuurwerkshop";
//$con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
$conn1 = new PDO("mysql:host=$servername; dbname=$dbname",$username, $password);
$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//$result->setFetchMode (PDO::FETCH_ASSOC);

//echo "Connected successfully <br>";
}
catch (PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();

}
$result = $conn1->query("SELECT * from product");


echo '<div class="grid-container">';






while ($row = $result->fetch()) {

?>

<div class="product">
<img src="<?=$row['Url_Afbeelding']?> ">
<?php


	echo "<p>".$row['Naam'] . "</p>";
	//echo $row['Url_Afbeelding'] . "<br>";
echo "<p>".$row['Prijs'] . "</p>";

echo '<button class="button">bestel knop</button>';

	
?>

</div>
<?php }
echo '</div>'

 ?> 
</body>
</html>