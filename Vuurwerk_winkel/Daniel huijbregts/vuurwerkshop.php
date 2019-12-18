<html>

<link href="style.css" type="text/css" rel="stylesheet"/>

<body>
<div class="header">
<div class="topnav">
  <div align="right" style="border:20px">
  <a href="vuurwerkshop.php">all vuurwerk</a>
  <a href="vuurwerkshop2.php">Knal</a>
  <a href="vuurwerkshop3.php">Sier</a>
<button style="font-size:24px"><img src="https://f0.pngfuel.com/png/872/1004/black-shopping-cart-illustration-png-clip-art.png" width="50" height="50"/><i class="fa fa-shopping-cart"></i></button>

</div>
</div>
</div>
<
<?php




// Auteur: Daniel Huijbregts Klas 1g
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


$sql="SELECT * from product";
$result = $conn1->query($sql);


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
