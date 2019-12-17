<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="styles/theme.css">
</head>

<body>
  <div class="menu-wrap">
      <input type="checkbox" class="toggler">
      <div class="hamburger"><div></div></div>
      <div class="menu">
        <div>
          <div>
            <ul>
              <li><a href="index.html">Homepagina</a></li>
              <li><a href="pages/informatie.html">Informatie</a></li>
              <li><a href="">Producten</a></li>
              <li><a href="#Producten">Producten</a></li>
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
        
<h2>Filter</h2>
<img src="https://cdn4.iconfinder.com/data/icons/shopping-21/64/shopping-01-512.png" style="width: 6%; position: absolute; margin-left: 90%; margin-top: 0%;">

<div id="myBtnContainer">
  <ul>
<li><button class="btn1 active" onclick="filterSelection('all')"> Alle producten</button></li>
<li><button class="btn1" onclick="filterSelection('Knal')"> Knal vuurwerk</button></li>
<li><button class="btn1" onclick="filterSelection('Sier')"> Sier vuurwerk</button></li>
<li><button class="btn1" onclick="filterSelection('Kinder')"> Kinder vuurwerk</button></li>
  </ul> 
</div>

<div class="container">
 <?php include 'script/cct.php';?>
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("vuurwerk_product");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    classRemove(x[i], "showing");
    if (x[i].className.indexOf(c) > -1) classAdd(x[i], "showing");
  }
}
function classAdd(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}
function classRemove(element, name) {
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
    

   
</body>
</html>