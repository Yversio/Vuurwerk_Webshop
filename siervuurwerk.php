<!DOCTYPE html>
// virgil murray//
<html lang="NL">
<head>

    <!--Hier komen al de meta tags-->
    <meta name="Author" content="Team SkengGang" />
    <meta name="Klas" content="1G" />
    <meta name="Description" content="Dit is een vuurwerk webshop." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--Hier komt de title en icon voor de title-->
    <title>Vuurwerk Webshop | Homepagina</title>
    <link rel="icon" href="images/photo.jpeg" />
    <link rel="apple-touch-icon" href="images/photo.jpeg" />

    <!--Hier komen al de scripts voor de pagina-->
    <link rel="stylesheet" href="styles/menu.css" />
    <link rel="stylesheet" href="styles/style.css" />
	<link rel="stylesheet" href="styles/vuurwerk.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />

</head>

<body>
  <div class="menu-wrap">
      <input type="checkbox" class="toggler">
      <div class="hamburger"><div></div></div>
      <div class="menu">
        <div>
          <div>
            <ul>
              <li><a href="vuurwerk.php">all</a></li>
              <li><a href="pages/informatie.html">Informatie</a></li>
              <li><a href="knalvuurwerk.php">knalvuurwerk</a></li>
              <li><a href="siervuurwerk.php">siervuurwerk</a></li>
              <li><a href="pages/service.html">Services</a></li>
              <li><a href="pages/contact.html">Contact</a></li>
              <li class="website-shopping-car">
                <a href="#" id="winkelwagen">Cart (<span id="aantal-items">0</span>)</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="showcase">
      <div class="container showcase-inner">
        <h1>Team SkengGang</h1>
        <p>Welkom op onze vuurwerk pagina. Het is mogelijk om te scrollen naar beneden of de button hieronder drukken!</p>
        <a href="#producten" class="btn">Producten</a>
      </div>
    </header>

    <div id="Producten">
      <div>
       



<div class="containerproduct">
<?php 

try { 

$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "vuurwerksite"; 

    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
    $result = $conn -> query("SELECT * from product"); 
    $result->setFetchMode(PDO::FETCH_ASSOC); 

//echo "Connected successfully<br>"; 
    }
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}



$result1 = $conn -> query("SELECT * from product WHERE catogorie= 'siervuurwerk' ");
while ($row = $result1->fetch()) {
		echo '<div class="filterDiv siervuurwerk">';
       
        //echo $row['url_afbeelding'] . "<br>"; 
        echo "<img src=".$row['url_afbeelding'] . ' width="180" height="120">'; 
		echo "<p>" . $row['naam'] . "</p>";
		echo "<p>" . $row['prijs'] . "</p>";
        echo "add to cart";
		echo "</div>";
}
?>

</div>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn1");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
      </div>
    </div>

    <footer>
      <div><p id="copyright">© 2019 Copyright:
        <a href="https://github.com/Yversio/Vuurwerk_Webshop">Team SkengGang</a></p>
      </div>
    </footer>

</body>
</html>