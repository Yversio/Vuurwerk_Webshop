<html lang="NL">
<!--
Klas: 1G
Naam: Ricardo Mastenbroek
-->
<head>

    <!--Hier komen al de meta tags-->
    <meta name="Author" content="Team SkengGang" />
    <meta name="Klas" content="1G" />
    <meta name="Description" content="Dit is een vuurwerk webshop." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--Hier komt de title en icon voor de title-->
    <title>Vuurwerk Webshop | Homepagina</title>
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/manifest.json">

    <!--Hier komen al de scripts voor de pagina-->
    <link rel="stylesheet" href="styles/menu.css" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

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
        <a href="#product_grid" class="btn">Producten</a>
    </div>
</header>

<div id="product_grid">
    <div class="product_header">
        <h1 id="product_title_header">Producten</h1>
        <img src="https://cdn4.iconfinder.com/data/icons/shopping-21/64/shopping-01-512.png" style="width: 6%; position: absolute; margin-left: 50%; margin-top: -5%;">
    </div>

    <div class="main_content">
        <?php include 'script/product_showcase.php';?>
    </div>

    <div class="product_sidebar">
        <div class="dropdown">
            <button onclick="myFunction()" id="product_title_filter" class="dropbtn">Filter
                <i class="fa fa-caret-down"></i>
            </button>
            <div id="myDropdown" class="dropdown-content">
                <ul id="side_nav_producten">
                    <li><button class="btnfilter active" onclick="filterSelection('all')">Alle Producten</button></li>
                    <li><button class="btnfilter" onclick="filterSelection('Korting')">Korting Producten</button></li>
                    <li><button class="btnfilter" onclick="filterSelection('Knal')">Knal Vuurwerk</button></li>
                    <li><button class="btnfilter" onclick="filterSelection('Sier')">Sier Vuurwerk</button></li>
                    <li><button class="btnfilter" onclick="filterSelection('Kinder')">Kinder Vuurwerk</button></li>
                </ul>
            </div>
        </div>
    </div>

    <footer>Footer</footer>
</div>

<script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle('showing');
    }

    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("myDropdown");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('showing')) {
                    openDropdown.classList.remove('showing');
                }
            }
        }
    }
</script>

<script>
    filterSelection("all")
    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("vuurwerk_product");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            classRemove(x[i], "show");
            if (x[i].className.indexOf(c) > -1) classAdd(x[i], "show");
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
    var btnContainer = document.getElementById("side_nav_producten");
    var btns = btnContainer.getElementsByClassName("btnfilter");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>
</body>
</html>
